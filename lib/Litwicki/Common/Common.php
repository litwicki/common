<?php

namespace Litwicki\Common;

/**
 * Class Common
 *
 * @package Litwicki\Common
 *          Helper functions.
 */

class Common
{

    /**
     * Convert BR tags to nl
     *
     * @param string The string to convert
     *
     * @return string The converted string
     */
    public static function br2nl($string)
    {
        return preg_replace('#<br\s*?/?>\\n#i', "\n", $string);
    }

    /**
     * Takes a word separated by underscores and capitalizes into camelcase.
     *
     * @param $string
     * @param bool $first_char_caps
     * @return mixed
     */
    public static function underscoreToCamelCase($string, $first_char_caps = false)
    {
        if( $first_char_caps == true )
        {
            $string[0] = strtoupper($string[0]);
        }
        $func = create_function('$c', 'return strtoupper($c[1]);');
        return preg_replace_callback('/_([a-z])/', $func, $string);
    }

    /**
     * @param $string
     * @return mixed
     */
    function validJson($string, array $options = array(), $depth = 2)
    {
        $json = \json_encode($string, $options, $depth);
        return JSON_ERROR_NONE !== json_last_error();
    }

    /**
     * @param $string
     * @return bool
     */
    public static function validXml($string)
    {
        libxml_use_internal_errors(true);

        $doc = simplexml_load_string($string);
        $xml = explode("\n", $string);

        if (!$doc) {
            $errors = libxml_get_errors();

            if(!empty($errors)) {
                return false;
            }

            libxml_clear_errors();
        }

        return true;
    }

    /**
     * @param $string
     *
     * @throws \Exception
     */
    public static function stringToArray($string)
    {
        try {

            if(self::validJson($string)) {
                $array = json_decode($string, true);
            }
            elseif(self::validXml($string)) {
                $json = json_encode($string);
                $array = json_decode($json, true);
            }
            else {
                throw new \Exception('Unknown or malformed data type; expecting XML or JSON.');
            }

            return $array;

        }
        catch(\Exception $e) {
            throw $e;
        }
    }

    /**
     * @param $string
     * @param null $id
     *
     * @throws \Exception
     */
    public static function createUrlSlug($string, $id = null)
    {
        try {
            $slug = utf8_encode($string);
            $slug = str_replace(' ', '-', $slug);
            $slug = strtolower($slug);
            $slug = preg_replace('/[^\da-z]/i', '', $slug);
            $slug = sprintf('%s-%s', $id, $slug);
            return urlencode($slug);
        }
        catch(\Exception $e) {
            throw $e;
        }
    }

}