<?php
/**
 * Project slim-3-skeleton.
 * Created by PhpStorm.
 * User: 713uk13m <dev@nguyenanhung.com>
 * Date: 10/29/18
 * Time: 16:44
 */

// DIC configuration

$container = $app->getContainer();

/**
 * view renderer
 *
 * @author: 713uk13m <dev@nguyenanhung.com>
 * @time  : 10/20/18 16:00
 *
 * @param object $c Container
 *
 * @return \Slim\Views\PhpRenderer
 */
$container['renderer'] = function ($c) {
    $settings = $c->get('settings')['renderer'];

    return new Slim\Views\PhpRenderer($settings['template_path']);
};

/**
 * monolog
 *
 * @author: 713uk13m <dev@nguyenanhung.com>
 * @time  : 10/20/18 16:00
 *
 * @param object $c Container
 *
 * @return \Monolog\Logger
 */
$container['logger'] = function ($c) {
    $settings = $c->get('settings')['logger'];
    $logger   = new Monolog\Logger($settings['name']);
    $logger->pushProcessor(new Monolog\Processor\UidProcessor());
    $logger->pushHandler(new Monolog\Handler\StreamHandler($settings['path'], $settings['level']));

    return $logger;
};

/**
 * Hàm register DB
 *
 * @author: 713uk13m <dev@nguyenanhung.com>
 * @time  : 10/20/18 15:45
 *
 * @param object $app
 *
 * @return null
 */
$container['db'] = function ($app) {
    $settings = $app->get('settings')['db'];
    $pdo      = new \Slim\PDO\Database($settings['dsn'], $settings['username'], $settings['password']);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Cấu hình dữ liệu trả về luôn ở dạng Object
    $pdo->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_OBJ);

    return $pdo;
};

