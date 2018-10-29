<?php
/**
 * Created by PhpStorm.
 * User: 713uk13m <dev@nguyenanhung.com>
 * Date: 10/3/18
 * Time: 13:49
 */
if (!function_exists('ipAddress')) {
    /**
     * Function ipAddress
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/19/18 15:55
     *
     * @param bool $convertToInteger
     *
     * @return bool|int|string
     */
    function ipAddress($convertToInteger = FALSE)
    {
        $ip_keys = [
            0 => 'HTTP_X_FORWARDED_FOR',
            1 => 'HTTP_X_FORWARDED',
            2 => 'HTTP_X_IPADDRESS',
            3 => 'HTTP_X_CLUSTER_CLIENT_IP',
            4 => 'HTTP_FORWARDED_FOR',
            5 => 'HTTP_FORWARDED',
            6 => 'HTTP_CLIENT_IP',
            7 => 'HTTP_IP',
            8 => 'REMOTE_ADDR'
        ];
        foreach ($ip_keys as $key) {
            if (array_key_exists($key, $_SERVER) === TRUE) {
                foreach (explode(',', $_SERVER[$key]) as $ip) {
                    $ip = trim($ip);
                    if (ipValidate($ip)) {
                        if ($convertToInteger === TRUE) {
                            $result = ip2long($ip);

                            return $result;
                        }

                        return $ip;
                    }
                }
            }
        }

        return FALSE;
    }

    /**
     * Function ipValidate
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/19/18 15:55
     *
     * @param $ip
     *
     * @return bool
     */
    function ipValidate($ip)
    {
        if (filter_var($ip, FILTER_VALIDATE_IP) === FALSE) {
            return FALSE;
        }

        return TRUE;
    }
}
if (!function_exists('arrayToObject')) {
    /**
     * Hàm chuyển dữ liệu từ 1 mảng thành 1 object
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/20/18 11:07
     *
     * @param array $array
     * @param bool  $str_to_lower
     *
     * @return array|bool|\stdClass
     */
    function arrayToObject($array = [], $str_to_lower = FALSE)
    {
        if (!is_array($array)) {
            return $array;
        }
        $object = new \stdClass();
        if (is_array($array) && count($array) > 0) {
            foreach ($array as $name => $value) {
                $name = trim($name);
                if ($str_to_lower === TRUE) {
                    $name = strtolower($name);
                }
                if (!empty($name)) {
                    $object->$name = arrayToObject($value);
                }
            }

            return $object;
        }

        return FALSE;
    }
}
