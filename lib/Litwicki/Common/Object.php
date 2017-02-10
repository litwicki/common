<?php

namespace Litwicki\Common;

/**
 * Class Object
 *
 * @package Litwicki\Common
 *          Helper functions.
 */

class Object
{

    /**
     * Convert an object to a json object.
     *
     * @param $object
     *
     * @throws \Exception
     */
    public static function toJson($object)
    {

        try {

            $data = $this->toArray($object);

            $json = json_encode($data);

            return $json;

        }
        catch(\Exception $e) {
            throw $e;
        }

    }

    /**
     * @param $object
     *
     * @throws \Exception
     */
    public static function toXml($object)
    {
        try {

            $data = $this->toArray($object);

            $root = $object->getXmlRootName();

            $xml = new \SimpleXMLElement($root);

            array_walk_recursive($data, array ($xml, 'addChild'));
            return $xml->asXml();

        }
        catch(\Exception $e) {
            throw $e;
        }
    }

    /**
     * Convert an object to an associative array.
     *
     * @param $object
     *
     * @throws \Exception
     */
    public static function toArray($object)
    {
        try {

            $obj = new \ReflectionClass($object);

            $properties = $obj->getProperties(\ReflectionProperty::IS_PROTECTED);

            $data = array();
            $item = array();

            foreach($properties as $property) {

                $field = $property->name;

                $getter = ucwords($field);
                $getter = str_replace('_','',$getter);
                $getter = sprintf('get%s', $getter);

                if(method_exists($object, $getter)) {

                    $value = $object->$getter();

                    /**
                     * If we've fetched an object, recursively convert it as well
                     * otherwise simply assign the value fetched.
                     */

                    if(is_object($value)) {
                        $data[$field] = $this->toArray($value);
                    }
                    elseif(!is_null($object->$getter())) {
                        $data[$field] = $value;
                    }

                }

            }

            $class = new \ReflectionClass($object);

            $objectName = $this->decamelize($class->getShortName());

            $item = array(
                $objectName => $data
            );

            return $item;

        }
        catch(\Exception $e) {
            throw $e;
        }
    }
}