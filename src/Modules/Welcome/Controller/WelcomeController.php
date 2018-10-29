<?php
/**
 * Project slim-3-hmvc-skeleton.
 * Created by PhpStorm.
 * User: 713uk13m <dev@nguyenanhung.com>
 * Date: 10/29/18
 * Time: 17:35
 */

namespace Modules\Welcome\Controller;

use Psr\Container\ContainerInterface;
use Slim\Http\Request;
use Slim\Http\Response;

class WelcomeController
{
    /** @var object \Psr\Container\ContainerInterface */
    protected $container;
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
        $this->logger    = $this->container->logger;
    }

    /**
     * Function index
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/29/18 17:36
     *
     * @param \Slim\Http\Request  $request
     * @param \Slim\Http\Response $response
     *
     * @return \Slim\Http\Response
     * @link  /module/welcome
     */
    public function index(Request $request, Response $response)
    {
        $this->logger->info(__FUNCTION__);
        $params            = $request->getQueryParams();
        $params['version'] = VERSION;
        $params['module']  = __CLASS__;
        $params['test_case']  = 'Module Welcome';

        return $response->withJson($params);
    }

}