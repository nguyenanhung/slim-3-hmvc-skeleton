<?php
/**
 * Project slim-3-skeleton.
 * Created by PhpStorm.
 * User: 713uk13m <dev@nguyenanhung.com>
 * Date: 10/23/18
 * Time: 23:14
 */

namespace App\Library;

/**
 * Class Config
 *
 * @package   App\Library
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class Config
{
    /**
     * Function getData
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/23/18 23:22
     *
     * @param string $path
     *
     * @return array|mixed
     */
    public static function getData($path = '')
    {
        if (is_file($path) && file_exists($path)) {
            return require($path);
        }

        return [];
    }

    /**
     * Function getSettings
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/23/18 23:58
     *
     * @return array
     */
    public static function getSettings()
    {
        $file = CONFIG_PATH . 'settings.php';
        if (is_file($file) && file_exists($file)) {
            $result = require(CONFIG_PATH . 'settings.php');

            return $result['settings'];
        }

        return [];
    }
}
