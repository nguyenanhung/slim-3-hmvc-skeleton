<?php
/**
 * Project slim-3-hmvc-skeleton.
 * Created by PhpStorm.
 * User: 713uk13m <dev@nguyenanhung.com>
 * Date: 10/29/18
 * Time: 17:37
 */

namespace Modules\Welcome\Model;

use App\Library\BaseModel;

/**
 * Class UserModel
 *
 * @package Modules\Welcome\Model
 */
class UserModel extends BaseModel
{
    /** @var string Table */
    protected $table = 'users';

    /**
     * UserModel constructor.
     *
     * @param string $db
     */
    public function __construct($db = '')
    {
        parent::__construct($db);
    }
}
