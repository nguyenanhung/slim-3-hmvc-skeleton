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
        $params                  = $request->getQueryParams();
        $params['version']       = VERSION;
        $params['ENVIRONMENT']   = ENVIRONMENT;
        $params['PROJECT_PATH']  = PROJECT_PATH;
        $params['VENDOR_PATH']   = VENDOR_PATH;
        $params['TEMPLATE_PATH'] = TEMPLATE_PATH;
        $params['PUBLIC_PATH']   = PUBLIC_PATH;
        $params['SOURCE_PATH']   = SOURCE_PATH;
        $params['CONFIG_PATH']   = CONFIG_PATH;
        $params['APP_PATH']      = APP_PATH;
        $params['COMMANDS_PATH'] = COMMANDS_PATH;
        $params['HELPER_PATH']   = HELPER_PATH;
        $params['LIBRARY_PATH']  = LIBRARY_PATH;
        $params['STORAGE_PATH']  = STORAGE_PATH;
        $params['CACHE_PATH']    = CACHE_PATH;
        $params['LOGS_PATH']     = LOGS_PATH;
        $params['IP']            = ipAddress();

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
                'getDistinctResult' => $db->getDistinctResult('service')
            ]
        ];

        return $response->withJson($params);
    }

}
