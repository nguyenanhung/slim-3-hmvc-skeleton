<?php
/**
 * Project slim-3-skeleton.
 * Created by PhpStorm.
 * User: 713uk13m <dev@nguyenanhung.com>
 * Date: 10/23/18
 * Time: 23:44
 */

namespace App\Library;

/**
 * Class Db
 *
 * @package   App\Library
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class Db
{
    /**
     * Function load
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/23/18 23:45
     *
     * @param array $db
     *
     * @return \Slim\PDO\Database
     */
    public static function load($db = [])
    {
        $pdo = new \Slim\PDO\Database($db['dsn'], $db['username'], $db['password']);
        $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        // Cấu hình dữ liệu trả về luôn ở dạng Object
        $pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);

        return $pdo;
    }
}
