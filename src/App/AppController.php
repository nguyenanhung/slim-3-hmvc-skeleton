<?php
/**
 * Project testSlim.
 * Created by PhpStorm.
 * User: 713uk13m <dev@nguyenanhung.com>
 * Date: 10/20/18
 * Time: 16:05
 */

namespace App;

use App\Library\BaseModel;
use App\Library\Config;
use Psr\Container\ContainerInterface;
use Slim\Http\Request;
use Slim\Http\Response;

/**
 * Class AppController
 *
 * @package   App
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class AppController
{
    /** @var object \Psr\Container\ContainerInterface */
    protected $container;
    /** @var object DB PDO */
    protected $db;
    /** @var object Log */
    protected $logger;

    /**
     * ApiController constructor.
     *
     * @param \Psr\Container\ContainerInterface $container
     */
    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
        $this->db        = $this->container->db;
        $this->logger    = $this->container->logger;
    }

    /**
     * Function test
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/23/18 10:47
     *
     * @param \Slim\Http\Request  $request
     * @param \Slim\Http\Response $response
     *
     * @return \Slim\Http\Response
     */
    public function test(Request $request, Response $response)
    {
        $this->logger->info(__FUNCTION__);
        $params            = $request->getQueryParams();
        $params['version'] = VERSION;

        return $response->withJson($params);
    }

    /**
     * Function testDb
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/29/18 13:56
     *
     * @param \Slim\Http\Request  $request
     * @param \Slim\Http\Response $response
     *
     * @return \Slim\Http\Response
     */
    public function testDb(Request $request, Response $response)
    {
        $config = Config::getSettings();
        $db     = new BaseModel($config['db']);
        $db->setTable('TuVi');
        //
        $params = [
            'request' => $request->getQueryParams(),
            'data'    => [
                'sum'               => $db->getSum('id'),
                'checkExists'       => $db->checkExists('102001'),
                'getLatest'         => $db->getLatest('id'),
                'getOldest'         => $db->getOldest('id'),
                'getInfo'           => $db->getInfo('10200'),
                'getDistinctResult' => $db->getDistinctResult('service'),
                //                'add'               => $db->add(['service' => 'TV', 'mt' => 'TEST - ' . rand(1, 999999),
                //                                                 'date'    => date('Y-m-d'), 'timeCreated' => date('Y-m-d H:i:s')])
            ]
        ];

        return $response->withJson($params);
    }

}
