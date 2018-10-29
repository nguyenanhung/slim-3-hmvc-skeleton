<?php
/**
 * Project slim-3-skeleton.
 * Created by PhpStorm.
 * User: 713uk13m <dev@nguyenanhung.com>
 * Date: 10/29/18
 * Time: 11:45
 */

namespace App\Library;

/**
 * Class BaseModel
 *
 * @package   App\Library
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class BaseModel implements BaseModelInterface
{
    const OPERATOR_EQUAL_TO                 = '=';
    const OP_EQ                             = '=';
    const OPERATOR_NOT_EQUAL_TO             = '!=';
    const OP_NE                             = '!=';
    const OPERATOR_LESS_THAN                = '<';
    const OP_LT                             = '<';
    const OPERATOR_LESS_THAN_OR_EQUAL_TO    = '<=';
    const OP_LTE                            = '<=';
    const OPERATOR_GREATER_THAN             = '>';
    const OP_GT                             = '>';
    const OPERATOR_GREATER_THAN_OR_EQUAL_TO = '>=';
    const OP_GTE                            = '>=';
    const OPERATOR_IS_LIKE                  = 'like';
    const OPERATOR_IS_NULL                  = 'is null';
    const OPERATOR_IS_NOT_NULL              = 'is not null';
    const ORDER_ASCENDING                   = 'asc';
    const ORDER_DESCENDING                  = 'desc';
    const PRIMARY_KEY                       = 'id';

    /** @var object \Slim\PDO\Database */
    protected $db;
    /** @var string Table to Setup */
    protected $table;

    /**
     * BaseModel constructor.
     *
     * @param string $db
     */
    public function __construct($db = '')
    {
        $this->db = Db::load($db);
    }

    /**
     * Function setTable
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/29/18 11:53
     *
     * @param string $table Table Database to Setup
     */
    public function setTable($table = '')
    {
        $this->table = $table;
    }

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
    public function checkExists($value = '', $column = 'id', $as = 'count', $distinct = FALSE)
    {
        return $this->db->select([$column])->from($this->table)->where($column, self::OPERATOR_EQUAL_TO, $value)->count($column, $as, $distinct)->execute()->fetch();
    }

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
    public function getLatest($column = 'created_at', $as = NULL)
    {
        return $this->db->select()->from($this->table)->max($column, $as)->execute()->fetch();
    }

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
    public function getOldest($column = 'created_at', $as = NULL)
    {
        return $this->db->select()->from($this->table)->min($column, $as)->execute()->fetch();
    }

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
    public function getAvg($column = 'created_at', $as = NULL)
    {
        return $this->db->select()->from($this->table)->avg($column, $as)->execute()->fetch();
    }

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
    public function getInfo($value = '', $column = 'id', $selectColumn = ['*'])
    {
        $selectColumn = !is_array($selectColumn) ? [$selectColumn] : ['*'];
        $db           = $this->db->select($selectColumn)->from($this->table);
        if (is_array($value)) {
            foreach ($value as $col => $val) {
                if (is_array($val)) {
                    $db->whereIn($col, $val);
                } else {
                    $db->where($col, '=', $val);
                }
            }
        } else {
            if (is_array($value)) {
                $db->whereIn($column, $value);
            } else {
                $db->where($column, self::OPERATOR_EQUAL_TO, $value);
            }
        }

        return $db->execute()->fetch();
    }

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
    public function getValue($value = '', $column = '', $columnOutput = '')
    {
        $result = $this->getInfo($value, $column, [$columnOutput]);
        if (!empty($columnOutput) && is_object($result) && isset($result->$columnOutput)) {
            return $result->$columnOutput;
        } else {
            return NULL;
        }
    }

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
    public function getDistinctResult($selectColumn = '')
    {
        $selectColumn = !is_array($selectColumn) ? [$selectColumn] : ['*'];

        return $this->db->select($selectColumn)->from($this->table)->distinct()->execute()->fetchAll();
    }

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
    public function getResult($wheres = [], $selectColumn = '*', $options = NULL)
    {
        $selectColumn = !is_array($selectColumn) ? [$selectColumn] : ['*'];
        $db           = $this->db->select($selectColumn)->from($this->table);
        if (!empty($wheres) && is_array($wheres) && count($wheres) > 0) {
            foreach ($wheres as $column => $value) {
                if (is_array($value)) {
                    $db->whereIn($column, $value);
                } else {
                    $db->where($column, self::OPERATOR_EQUAL_TO, $value);
                }
            }
        }
        if (isset($options['orderBy']) && is_array($options['orderBy'])) {
            foreach ($options['orderBy'] as $column => $direction) {
                $db->orderBy($column, $direction);
            }
        }
        if (isset($options['number']) && isset($options['offset'])) {
            $db->limit($options['number'], $options['offset']);
        }

        return $db->execute()->fetchAll();
    }

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
    public function getSum($column = '*', $as = NULL, $wheres = [])
    {
        $columns = !is_array($column) ? [$column] : ['*'];
        $db      = $this->db->select($columns)->from($this->table);
        if (!empty($wheres) && is_array($wheres) && count($wheres) > 0) {
            foreach ($wheres as $col => $val) {
                if (is_array($val)) {
                    $db->whereIn($col, $val);
                } else {
                    $db->where($col, self::OPERATOR_EQUAL_TO, $val);
                }
            }
        }

        return $db->sum($column, $as)->execute()->fetch();
    }

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
    public function add($data = [])
    {
        if (!is_array($data)) {
            return NULL;
        }

        return $this->db->insert($data)->into($this->table)->execute();
    }

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
    public function update($data = [], $wheres = [])
    {
        $db = $this->db->update($data)->table($this->table);
        foreach ($wheres as $column => $value) {
            if (is_array($value)) {
                $db->whereIn($column, $value);
            } else {
                $db->where($column, '=', $value);
            }
        }

        return $db->execute();
    }

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
    public function delete($values = '', $columns = '')
    {
        $db = $this->db->delete()->from($this->table);
        if (is_array($columns)) {
            foreach ($columns as $col => $val) {
                if (is_array($val)) {
                    $db->whereIn($col, $val);
                } else {
                    $db->where($col, '=', $val);
                }
            }
        } else {
            if (is_array($values)) {
                $db->whereIn($columns, $values);
            } else {
                $db->where($columns, '=', $values);
            }
        }

        return $db->execute();
    }
}
