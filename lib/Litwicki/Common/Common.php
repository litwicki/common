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
     * Create an array of "choices" that are years
     * Typically used for Forms.
     *
     * @param int $count
     * Number of years to go forward.
     *
     * @returns $choices array
     */
    public static function getYearSelectChoices($count = 5)
    {
        $year = date('Y', time());

        $choices = array();
        for ($i = $year; $i < $year + $count; $i++) {
            $choices[$i] = $i;
        }

        return $choices;
    }

    /**
     * Create an array of "choices" that are Countries
     * Typically used for Forms.
     *
     * @param bool $usOnly
     * Whether to simply display United States or ALL countries.
     *
     * @returns $choices array
     */
    public static function getCountrySelectChoices($usOnly = true)
    {
        if ($usOnly) {
            return array('US' => 'United States');
        }

        return array(
            'US' => 'United States',
            'AF' => 'Afghanistan',
            'AL' => 'Albania',
            'DZ' => 'Algeria',
            'AS' => 'American Samoa',
            'AD' => 'Andorra',
            'AO' => 'Angola',
            'AI' => 'Anguilla',
            'AQ' => 'Antarctica',
            'AG' => 'Antigua And Barbuda',
            'AR' => 'Argentina',
            'AM' => 'Armenia',
            'AW' => 'Aruba',
            'AU' => 'Australia',
            'AT' => 'Austria',
            'AZ' => 'Azerbaijan',
            'BS' => 'Bahamas',
            'BH' => 'Bahrain',
            'BD' => 'Bangladesh',
            'BB' => 'Barbados',
            'BY' => 'Belarus',
            'BE' => 'Belgium',
            'BZ' => 'Belize',
            'BJ' => 'Benin',
            'BM' => 'Bermuda',
            'BT' => 'Bhutan',
            'BO' => 'Bolivia',
            'BA' => 'Bosnia And Herzegowina',
            'BW' => 'Botswana',
            'BV' => 'Bouvet Island',
            'BR' => 'Brazil',
            'IO' => 'British Indian Ocean Territory',
            'BN' => 'Brunei Darussalam',
            'BG' => 'Bulgaria',
            'BF' => 'Burkina Faso',
            'BI' => 'Burundi',
            'KH' => 'Cambodia',
            'CM' => 'Cameroon',
            'CA' => 'Canada',
            'CV' => 'Cape Verde',
            'KY' => 'Cayman Islands',
            'CF' => 'Central African Republic',
            'TD' => 'Chad',
            'CL' => 'Chile',
            'CN' => 'China',
            'CX' => 'Christmas Island',
            'CC' => 'Cocos (Keeling) Islands',
            'CO' => 'Colombia',
            'KM' => 'Comoros',
            'CG' => 'Congo',
            'CD' => 'Congo, The Democratic Republic static Of The',
            'CK' => 'Cook Islands',
            'CR' => 'Costa Rica',
            'CI' => 'Cote D\'Ivoire',
            'HR' => 'Croatia (Local Name: Hrvatska)',
            'CU' => 'Cuba',
            'CY' => 'Cyprus',
            'CZ' => 'Czech Republic',
            'DK' => 'Denmark',
            'DJ' => 'Djibouti',
            'DM' => 'Dominica',
            'DO' => 'Dominican Republic',
            'TP' => 'East Timor',
            'EC' => 'Ecuador',
            'EG' => 'Egypt',
            'SV' => 'El Salvador',
            'GQ' => 'Equatorial Guinea',
            'ER' => 'Eritrea',
            'EE' => 'Estonia',
            'ET' => 'Ethiopia',
            'FK' => 'Falkland Islands (Malvinas)',
            'FO' => 'Faroe Islands',
            'FJ' => 'Fiji',
            'FI' => 'Finland',
            'FR' => 'France',
            'FX' => 'France, Metropolitan',
            'GF' => 'French Guiana',
            'PF' => 'French Polynesia',
            'TF' => 'French Southern Territories',
            'GA' => 'Gabon',
            'GM' => 'Gambia',
            'GE' => 'Georgia',
            'DE' => 'Germany',
            'GH' => 'Ghana',
            'GI' => 'Gibraltar',
            'GR' => 'Greece',
            'GL' => 'Greenland',
            'GD' => 'Grenada',
            'GP' => 'Guadeloupe',
            'GU' => 'Guam',
            'GT' => 'Guatemala',
            'GN' => 'Guinea',
            'GW' => 'Guinea-Bissau',
            'GY' => 'Guyana',
            'HT' => 'Haiti',
            'HM' => 'Heard And Mc Donald Islands',
            'HN' => 'Honduras',
            'HK' => 'Hong Kong',
            'HU' => 'Hungary',
            'IS' => 'Iceland',
            'IN' => 'India',
            'ID' => 'Indonesia',
            'IR' => 'Iran (Islamic Republic static Of)',
            'IQ' => 'Iraq',
            'IE' => 'Ireland',
            'IL' => 'Israel',
            'IT' => 'Italy',
            'JM' => 'Jamaica',
            'JP' => 'Japan',
            'JO' => 'Jordan',
            'KZ' => 'Kazakhstan',
            'KE' => 'Kenya',
            'KI' => 'Kiribati',
            'KP' => 'Korea, Democratic People\'S Republic static Of',
            'KR' => 'Korea, Republic static Of',
            'KW' => 'Kuwait',
            'KG' => 'Kyrgyzstan',
            'LA' => 'Lao People\'S Democratic Republic',
            'LV' => 'Latvia',
            'LB' => 'Lebanon',
            'LS' => 'Lesotho',
            'LR' => 'Liberia',
            'LY' => 'Libyan Arab Jamahiriya',
            'LI' => 'Liechtenstein',
            'LT' => 'Lithuania',
            'LU' => 'Luxembourg',
            'MO' => 'Macau',
            'MK' => 'Macedonia, Former Yugoslav Republic static Of',
            'MG' => 'Madagascar',
            'MW' => 'Malawi',
            'MY' => 'Malaysia',
            'MV' => 'Maldives',
            'ML' => 'Mali',
            'MT' => 'Malta',
            'MH' => 'Marshall Islands, Republic static of the',
            'MQ' => 'Martinique',
            'MR' => 'Mauritania',
            'MU' => 'Mauritius',
            'YT' => 'Mayotte',
            'MX' => 'Mexico',
            'FM' => 'Micronesia, Federated States Of',
            'MD' => 'Moldova, Republic static Of',
            'MC' => 'Monaco',
            'MN' => 'Mongolia',
            'MS' => 'Montserrat',
            'MA' => 'Morocco',
            'MZ' => 'Mozambique',
            'MM' => 'Myanmar',
            'NA' => 'Namibia',
            'NR' => 'Nauru',
            'NP' => 'Nepal',
            'NL' => 'Netherlands',
            'AN' => 'Netherlands Antilles',
            'NC' => 'New Caledonia',
            'NZ' => 'New Zealand',
            'NI' => 'Nicaragua',
            'NE' => 'Niger',
            'NG' => 'Nigeria',
            'NU' => 'Niue',
            'NF' => 'Norfolk Island',
            'MP' => 'Northern Mariana Islands, Commonwealth of the',
            'NO' => 'Norway',
            'OM' => 'Oman',
            'PK' => 'Pakistan',
            'PW' => 'Palau, Republic static of',
            'PA' => 'Panama',
            'PG' => 'Papua New Guinea',
            'PY' => 'Paraguay',
            'PE' => 'Peru',
            'PH' => 'Philippines',
            'PN' => 'Pitcairn',
            'PL' => 'Poland',
            'PT' => 'Portugal',
            'PR' => 'Puerto Rico',
            'QA' => 'Qatar',
            'RE' => 'Reunion',
            'RO' => 'Romania',
            'RU' => 'Russian Federation',
            'RW' => 'Rwanda',
            'KN' => 'Saint Kitts And Nevis',
            'LC' => 'Saint Lucia',
            'VC' => 'Saint Vincent And The Grenadines',
            'WS' => 'Samoa',
            'SM' => 'San Marino',
            'ST' => 'Sao Tome And Principe',
            'SA' => 'Saudi Arabia',
            'SN' => 'Senegal',
            'SC' => 'Seychelles',
            'SL' => 'Sierra Leone',
            'SG' => 'Singapore',
            'SK' => 'Slovakia (Slovak Republic)',
            'SI' => 'Slovenia',
            'SB' => 'Solomon Islands',
            'SO' => 'Somalia',
            'ZA' => 'South Africa',
            'GS' => 'South Georgia, South Sandwich Islands',
            'ES' => 'Spain',
            'LK' => 'Sri Lanka',
            'SH' => 'St. Helena',
            'PM' => 'St. Pierre And Miquelon',
            'SD' => 'Sudan',
            'SR' => 'Suriname',
            'SJ' => 'Svalbard And Jan Mayen Islands',
            'SZ' => 'Swaziland',
            'SE' => 'Sweden',
            'CH' => 'Switzerland',
            'SY' => 'Syrian Arab Republic',
            'TW' => 'Taiwan',
            'TJ' => 'Tajikistan',
            'TZ' => 'Tanzania, United Republic static Of',
            'TH' => 'Thailand',
            'TG' => 'Togo',
            'TK' => 'Tokelau',
            'TO' => 'Tonga',
            'TT' => 'Trinidad And Tobago',
            'TN' => 'Tunisia',
            'TR' => 'Turkey',
            'TM' => 'Turkmenistan',
            'TC' => 'Turks And Caicos Islands',
            'TV' => 'Tuvalu',
            'UG' => 'Uganda',
            'UA' => 'Ukraine',
            'AE' => 'United Arab Emirates',
            'GB' => 'United Kingdom',
            'UM' => 'United States Minor Outlying Islands',
            'UY' => 'Uruguay',
            'UZ' => 'Uzbekistan',
            'VU' => 'Vanuatu',
            'VA' => 'Vatican City, State of the',
            'VE' => 'Venezuela',
            'VN' => 'Viet Nam',
            'VG' => 'Virgin Islands (British)',
            'VI' => 'Virgin Islands (U.S.)',
            'WF' => 'Wallis And Futuna Islands',
            'EH' => 'Western Sahara',
            'YE' => 'Yemen',
            'YU' => 'Yugoslavia',
            'ZM' => 'Zambia',
            'ZW' => 'Zimbabwe'
        );
    }

    /**
     * Create an array of "choices" that are states
     * Typically used for Forms.
     *
     * @returns $choices array
     */
    public static function getStateSelectChoices()
    {
        return array(
            'AL' => 'Alabama',
            'AK' => 'Alaska',
            'AS' => 'American Samoa',
            'AZ' => 'Arizona',
            'AR' => 'Arkansas',
            'AE' => 'Armed Forces - Europe',
            'AP' => 'Armed Forces - Pacific',
            'AA' => 'Armed Forces - USA/Canada',
            'CA' => 'California',
            'CO' => 'Colorado',
            'CT' => 'Connecticut',
            'DE' => 'Delaware',
            'DC' => 'District of Columbia',
            'FL' => 'Florida',
            'GA' => 'Georgia',
            'GU' => 'Guam',
            'HI' => 'Hawaii',
            'ID' => 'Idaho',
            'IL' => 'Illinois',
            'IN' => 'Indiana',
            'IA' => 'Iowa',
            'KS' => 'Kansas',
            'KY' => 'Kentucky',
            'LA' => 'Louisiana',
            'ME' => 'Maine',
            'MD' => 'Maryland',
            'MA' => 'Massachusetts',
            'MI' => 'Michigan',
            'MN' => 'Minnesota',
            'MS' => 'Mississippi',
            'MO' => 'Missouri',
            'MT' => 'Montana',
            'NE' => 'Nebraska',
            'NV' => 'Nevada',
            'NH' => 'New Hampshire',
            'NJ' => 'New Jersey',
            'NM' => 'New Mexico',
            'NY' => 'New York',
            'NC' => 'North Carolina',
            'ND' => 'North Dakota',
            'OH' => 'Ohio',
            'OK' => 'Oklahoma',
            'OR' => 'Oregon',
            'PA' => 'Pennsylvania',
            'PR' => 'Puerto Rico',
            'RI' => 'Rhode Island',
            'SC' => 'South Carolina',
            'SD' => 'South Dakota',
            'TN' => 'Tennessee',
            'TX' => 'Texas',
            'UT' => 'Utah',
            'VT' => 'Vermont',
            'VI' => 'Virgin Islands',
            'VA' => 'Virginia',
            'WA' => 'Washington',
            'WV' => 'West Virginia',
            'WI' => 'Wisconsin',
            'WY' => 'Wyoming'
        );
    }

    /**
     * Create an array of "choices" that are Canadian Provinces
     * Typically used for Forms.
     *
     * @returns $choices array
     */
    public static function getCanadianProvinceSelectChoices()
    {
        return array(
            'AB' => 'Alberta',
            'BC' => 'British Columbia',
            'MB' => 'Manitoba',
            'NB' => 'New Brunswick',
            'NF' => 'Newfoundland and Labrador',
            'NT' => 'Northwest Territories',
            'NS' => 'Nova Scotia',
            'NU' => 'Nunavut',
            'ON' => 'Ontario',
            'PE' => 'Prince Edward Island',
            'QC' => 'Quebec',
            'SK' => 'Saskatchewan',
            'YT' => 'Yukon Territory'
        );
    }

    /**
     * Create an array of "choices" that are Australian States
     * Typically used for Forms.
     *
     * @returns $choices array
     */
    public static function getAustralianStateSelectChoices()
    {
        return array(
            'ACT' => 'Australian Capital Territory',
            'JBT' => 'Jervis Bay Territory',
            'NSW' => 'New South Wales',
            'NT'  => 'Northern Territory',
            'QLD' => 'Queensland',
            'SA'  => 'South Australia',
            'TAS' => 'Tasmania',
            'VIC' => 'Victoria',
            'WA'  => 'Western Australia'
        );
    }

    /**
     * Create an array of "choices" that are Months
     * Typically used for Forms.
     *
     * @returns $choices array
     */
    public static function getMonthSelectChoices()
    {
        return array(
            '01' => 'January',
            '02' => 'February',
            '03' => 'March',
            '04' => 'April',
            '05' => 'May',
            '06' => 'June',
            '07' => 'July ',
            '08' => 'August',
            '09' => 'September',
            '10' => 'October',
            '11' => 'November',
            '12' => 'December',
        );
    }

    /**
     * Create an array of "choices" that are Timezones
     * Typically used for Forms.
     *
     * @returns $choices array
     */
    public static function getTimezoneOptions()
    {

        return array(
            'America/New_York' => 'Eastern (EST)',
            'America/Chicago' => 'Central (CST)',
            'America/Denver' => 'Mountain (MDT)',
            'America/Phoenix' => 'Mountain (MST)',
            'America/Los_Angeles' => 'Pacific (PST)',
            'America/Anchorage' => 'Alaska',
            'America/Honolulu' => 'Hawaii',
        );
    }

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
     * Parses a user agent string into its important parts
     *
     * @author Jesse G. Donat <donatj@gmail.com>
     * @link   https://github.com/donatj/PhpUserAgent
     * @link   http://donatstudios.com/PHP-Parser-HTTP_USER_AGENT
     *
     * @param string|null $u_agent User agent string to parse or null. Uses $_SERVER['HTTP_USER_AGENT'] on NULL
     *
     * @return array an array with browser, version and platform keys
     */
    public static function parseUserAgent($u_agent = NULL)
    {
        if (is_null($u_agent)) {
            if (isset($_SERVER['HTTP_USER_AGENT'])) {
                $u_agent = $_SERVER['HTTP_USER_AGENT'];
            }
            else {
                throw new \Exception(sprintf('%s requires a user agent', __METHOD__));
            }
        }

        $platform = NULL;
        $browser = NULL;
        $version = NULL;

        $empty = array(
            'platform' => $platform,
            'browser'  => $browser,
            'version'  => $version
        );

        if (!$u_agent) {
            return $empty;
        }

        if (preg_match('/\((.*?)\)/im', $u_agent, $parent_matches)) {

            preg_match_all('/(?P<platform>BB\d+;|Android|CrOS|iPhone|iPad|Linux|Macintosh|Windows(\ Phone)?|Silk|linux-gnu|BlackBerry|PlayBook|Nintendo\ (WiiU?|3DS)|Xbox(\ One)?)
                    (?:\ [^;]*)?
                    (?:;|$)/imx', $parent_matches[1], $result, PREG_PATTERN_ORDER);

            $priority = array(
                'Android',
                'Xbox One',
                'Xbox'
            );
            $result['platform'] = array_unique($result['platform']);
            if (count($result['platform']) > 1) {
                if ($keys = array_intersect($priority, $result['platform'])) {
                    $platform = reset($keys);
                }
                else {
                    $platform = $result['platform'][0];
                }
            }
            elseif (isset($result['platform'][0])) {
                $platform = $result['platform'][0];
            }
        }

        if ($platform == 'linux-gnu') {
            $platform = 'Linux';
        }
        elseif ($platform == 'CrOS') {
            $platform = 'Chrome OS';
        }

        preg_match_all('%(?P<browser>Camino|Kindle(\ Fire\ Build)?|Firefox|Iceweasel|Safari|MSIE|Trident/.*rv|AppleWebKit|Chrome|IEMobile|Opera|OPR|Silk|Lynx|Midori|Version|Wget|curl|NintendoBrowser|PLAYSTATION\ (\d|Vita)+)
                (?:\)?;?)
                (?:(?:[:/ ])(?P<version>[0-9A-Z.]+)|/(?:[A-Z]*))%ix', $u_agent, $result, PREG_PATTERN_ORDER);

        // If nothing matched, return null (to avoid undefined index errors)
        if (!isset($result['browser'][0]) || !isset($result['version'][0])) {
            return $empty;
        }

        $browser = $result['browser'][0];
        $version = $result['version'][0];

        $find = function ($search, &$key) use ($result) {
            $xkey = array_search(strtolower($search), array_map('strtolower', $result['browser']));
            if ($xkey !== false) {
                $key = $xkey;

                return true;
            }

            return false;
        };

        $key = 0;
        if ($browser == 'Iceweasel') {
            $browser = 'Firefox';
        }
        elseif ($find('Playstation Vita', $key)) {
            $platform = 'PlayStation Vita';
            $browser = 'Browser';
        }
        elseif ($find('Kindle Fire Build', $key) || $find('Silk', $key)) {
            $browser = $result['browser'][$key] == 'Silk' ? 'Silk' : 'Kindle';
            $platform = 'Kindle Fire';
            if (!($version = $result['version'][$key]) || !is_numeric($version[0])) {
                $version = $result['version'][array_search('Version', $result['browser'])];
            }
        }
        elseif ($find('NintendoBrowser', $key) || $platform == 'Nintendo 3DS') {
            $browser = 'NintendoBrowser';
            $version = $result['version'][$key];
        }
        elseif ($find('Kindle', $key)) {
            $browser = $result['browser'][$key];
            $platform = 'Kindle';
            $version = $result['version'][$key];
        }
        elseif ($find('OPR', $key)) {
            $browser = 'Opera Next';
            $version = $result['version'][$key];
        }
        elseif ($find('Opera', $key)) {
            $browser = 'Opera';
            $find('Version', $key);
            $version = $result['version'][$key];
        }
        elseif ($find('Midori', $key)) {
            $browser = 'Midori';
            $version = $result['version'][$key];
        }
        elseif ($find('Chrome', $key)) {
            $browser = 'Chrome';
            $version = $result['version'][$key];
        }
        elseif ($browser == 'AppleWebKit') {
            if (($platform == 'Android' && !($key = 0))) {
                $browser = 'Android Browser';
            }
            elseif (strpos($platform, 'BB') === 0) {
                $browser = 'BlackBerry Browser';
                $platform = 'BlackBerry';
            }
            elseif ($platform == 'BlackBerry' || $platform == 'PlayBook') {
                $browser = 'BlackBerry Browser';
            }
            elseif ($find('Safari', $key)) {
                $browser = 'Safari';
            }

            $find('Version', $key);

            $version = $result['version'][$key];
        }
        elseif ($browser == 'MSIE' || strpos($browser, 'Trident') !== false) {
            if ($find('IEMobile', $key)) {
                $browser = 'IEMobile';
            }
            else {
                $browser = 'MSIE';
                $key = 0;
            }
            $version = $result['version'][$key];
        }
        elseif ($key = preg_grep('/playstation \d/i', array_map('strtolower', $result['browser']))) {
            $key = reset($key);

            $platform = 'PlayStation ' . preg_replace('/[^\d]/i', '', $key);
            $browser = 'NetFront';
        }

        return array(
            'platform' => $platform,
            'browser'  => $browser,
            'version'  => $version
        );
    }

    /**
     * Give the time difference between two dates, or "now" if only one date provided.
     *
     *  @param $oldDate DateTime
     *  @param $depth int
     *  @param $now DateTime
     *
     *  @return string
     */
    public static function timeAgo(\DateTime $oldDate, $depth = 2, \DateTime $now = NULL)
    {
        try {
            if ($now == NULL) {
                $now = new \DateTime("now");
            }

            if (!is_int($depth) || $depth < 1 || $depth > 6) {
                throw new \InvalidArgumentException("Time Ago depth cannot be an integer between 1 and 6");
            }

            if ($oldDate > $now) {
                throw new \InvalidArgumentException('The comparative date cannot be greater than now.');
            }

            $difference = $now->diff($oldDate);

            $intervals = array(
                'y' => 'year',
                'm' => 'month',
                'd' => 'day',
                'h' => 'hour',
                'i' => 'min',
                's' => 'sec'
            );

            $i = 0;
            $timeAgo = '';

            foreach ($intervals as $interval => $name) {

                if ($difference->$interval > 1) {
                    $timeAgo .= sprintf('%s %ss ', $difference->$interval, $intervals[$interval]);
                    $i++;
                }
                elseif ($difference->$interval == 1) {
                    $timeAgo .= sprintf('%s %s ', $difference->$interval, $intervals[$interval]);
                    $i++;
                }

                if ($i == $depth) {
                    break;
                }
            }

            return sprintf('%s ago', $timeAgo);
        }
        catch (\Exception $e) {
            throw new \Exception($e);
        }
    }

    /**
     * Convert an object to a json object.
     *
     * @param $object
     *
     * @throws \Exception
     */
    public function objectToJson($object)
    {

        try {

            $data = $this->objectToArray($object);

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
    public function objectToXml($object)
    {
        try {

            $data = $this->objectToArray($object);

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
    public function objectToArray($object)
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
                        $data[$field] = $this->objectToArray($value);
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

    /**
     * @param $string
     *
     * @throws \Exception
     */
    public function stringToArray($string)
    {
        try {

            if($this->format == 'json') {
                $array = json_decode($string, true);
            }
            else {
                $json = json_encode($string);
                $array = json_decode($json, true);
            }

            return $array;

        }
        catch(\Exception $e) {
            throw $e;
        }
    }

    /**
     * Parse a FormIterator Symfony form for error messages as strings
     * into an array we can properly format or do whatever we want with.
     *
     * @credit: http://stackoverflow.com/a/15693527/4620798
     *
     * @param $form \Symfony\Component\Form
     *
     * @returns $array array of strings
     */
    public static function getFormErrorMessages(\Symfony\Component\Form $form)
    {
        $errors = array();

        if ($form->count() > 0) {
            foreach ($form->all() as $child) {
                /**
                 * @var \Symfony\Component\Form\Form $child
                 */
                if (!$child->isValid()) {
                    $errors[$child->getName()] = $this->getErrorMessages($child);
                }
            }
        }
        else {
            /**
             * @var \Symfony\Component\Form\FormError $error
             */
            foreach ($form->getErrors() as $key => $error) {
                $errors[] = $error->getMessage();
            }
        }

        return $errors;
    }

}