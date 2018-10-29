<?php
/**
 * Project slim-3-skeleton.
 * Created by PhpStorm.
 * User: 713uk13m <dev@nguyenanhung.com>
 * Date: 10/23/18
 * Time: 22:51
 */
/**
 * Function registerCommand
 *
 * @author: 713uk13m <dev@nguyenanhung.com>
 * @time  : 10/23/18 22:57
 *
 * @param string $className
 */
function registerCommand($className = '')
{
    $root   = 'src/Commands/';
    $prefix = 'App\\Command\\';

    // bỏ prefix
    $classWithoutPrefix = preg_replace('/^' . preg_quote($prefix) . '/', '', $className);

    // Thay thế \ thành /
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $classWithoutPrefix) . '.php';

    $path = $root . $file;
    if (is_file($path) && file_exists($path)) {
        require_once $path;
    }
}

/**
 * Function registerLibrary
 *
 * @author: 713uk13m <dev@nguyenanhung.com>
 * @time  : 10/23/18 23:21
 *
 * @param string $className
 */
function registerLibrary($className = '')
{
    $root   = 'src/Library/';
    $prefix = 'App\\Library\\';

    // bỏ prefix
    $classWithoutPrefix = preg_replace('/^' . preg_quote($prefix) . '/', '', $className);

    // Thay thế \ thành /
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $classWithoutPrefix) . '.php';

    $path = $root . $file;
    if (is_file($path) && file_exists($path)) {
        require_once $path;
    }
}

/**
 * Function registerHelper
 *
 * @author: 713uk13m <dev@nguyenanhung.com>
 * @time  : 10/29/18 16:15
 *
 * @param string $className
 */
function registerHelper($className = '')
{
    $root   = 'src/Helper/';
    $prefix = 'App\\Helper\\';

    // bỏ prefix
    $classWithoutPrefix = preg_replace('/^' . preg_quote($prefix) . '/', '', $className);

    // Thay thế \ thành /
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $classWithoutPrefix) . '.php';

    $path = $root . $file;
    if (is_file($path) && file_exists($path)) {
        require_once $path;
    }
}

spl_autoload_register('registerCommand');
spl_autoload_register('registerLibrary');
spl_autoload_register('registerHelper');
