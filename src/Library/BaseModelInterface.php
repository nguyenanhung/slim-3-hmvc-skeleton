<?php
/**
 * Project slim-3-skeleton.
 * Created by PhpStorm.
 * User: 713uk13m <dev@nguyenanhung.com>
 * Date: 10/29/18
 * Time: 15:20
 */

namespace App\Library;

/**
 * Interface BaseModelInterface
 *
 * @package   App\Library
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
interface BaseModelInterface
{
    /**
     * Function setTable
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/29/18 11:53
     *
     * @param string $table
     */
    public function setTable($table = '');

    /**
     * Function checkExists
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/29/18 15:08
     *
     * @param string $value
     * @param string $column
     * @param string $as
     * @param bool   $distinct
     *
     * @see   https://github.com/FaaPz/Slim-PDO/blob/master/docs/AGGREGATES.md#countcolumn---as--null-distinct--false
     *
     * @return mixed
     */
    public function checkExists($value = '', $column = 'id', $as = 'count', $distinct = FALSE);

    /**
     * Function getLatest
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/29/18 15:07
     *
     * @param string $column
     * @param null   $as
     *
     * @see   https://github.com/FaaPz/Slim-PDO/blob/master/docs/AGGREGATES.md#maxcolumn-as--null
     *
     * @return mixed
     */
    public function getLatest($column = 'created_at', $as = NULL);

    /**
     * Function getOldest
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/29/18 15:06
     *
     * @param string $column
     * @param null   $as
     *
     * @see   https://github.com/FaaPz/Slim-PDO/blob/master/docs/AGGREGATES.md#mincolumn-as--null
     *
     * @return mixed
     */
    public function getOldest($column = 'created_at', $as = NULL);

    /**
     * Function getAvg
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/29/18 15:21
     *
     * @param string $column
     * @param null   $as
     *
     * @return mixed
     */
    public function getAvg($column = 'created_at', $as = NULL);

    /**
     * Function getInfo
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/29/18 15:10
     *
     * @param string            $value
     * @param string            $column
     * @param null|string|array $selectColumn
     *
     * @see   https://github.com/FaaPz/Slim-PDO/blob/master/docs/Statement/SELECT.md
     *
     * @return mixed
     */
    public function getInfo($value = '', $column = 'id', $selectColumn = ['*']);

    /**
     * Function getValue
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/29/18 15:11
     *
     * @param string $value
     * @param string $column
     * @param string $columnOutput
     *
     * @see   https://github.com/FaaPz/Slim-PDO/blob/master/docs/Statement/SELECT.md
     *
     * @return null|string
     */
    public function getValue($value = '', $column = '', $columnOutput = '');

    /**
     * Function getDistinctResult
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/29/18 14:41
     *
     * @param string|array $selectColumn
     *
     * @see   https://github.com/FaaPz/Slim-PDO/blob/master/docs/Statement/SELECT.md#distinct
     *
     * @return array
     */
    public function getDistinctResult($selectColumn = '');

    /**
     * Function getResult
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/29/18 14:45
     *
     * @param array|string $wheres              Mảng dữ liệu hoặc giá trị primaryKey cần so sánh điều kiện để update
     * @param array|string $selectColumn        Mảng dữ liệu danh sách các field cần so sánh
     * @param null|string  $options             Mảng dữ liệu các cấu hình tùy chọn
     *                                          example $options = [
     *                                          'format' => null,
     *                                          'orderBy => [
     *                                          'id' => 'desc'
     *                                          ]
     *                                          ];
     *
     * @see   https://github.com/FaaPz/Slim-PDO/blob/master/docs/Statement/SELECT.md
     *
     * @return array Mảng dữ liệu phù hợp với yêu cầu map theo biến format truyền vào
     */
    public function getResult($wheres = [], $selectColumn = '*', $options = NULL);

    /**
     * Function getSum
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/29/18 15:33
     *
     * @param string      $column
     * @param string|null $as
     * @param array       $wheres
     *
     * @return mixed
     */
    public function getSum($column = '*', $as = 'count', $wheres = []);

    /**
     * Function add
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/29/18 14:53
     *
     * @param array $data
     *
     * @see   https://github.com/FaaPz/Slim-PDO/blob/master/docs/Statement/INSERT.md
     *
     * @return null|string
     */
    public function add($data = []);

    /**
     * Function update
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/29/18 14:59
     *
     * @param array $data
     * @param array $wheres
     *
     * @see   https://github.com/FaaPz/Slim-PDO/blob/master/docs/Statement/UPDATE.md
     *
     * @return int
     */
    public function update($data = [], $wheres = []);

    /**
     * Function delete
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/29/18 15:02
     *
     * @param string $values
     * @param string $columns
     *
     * @see   https://github.com/FaaPz/Slim-PDO/blob/master/docs/Statement/DELETE.md
     *
     * @return int
     */
    public function delete($values = '', $columns = '');
}
