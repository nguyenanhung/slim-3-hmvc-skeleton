<?php

namespace Tests\Functional;

/**
 * Class ModuleTest
 *
 * @package Tests\Functional
 */
class ModuleTest extends BaseTestCase
{
    /**
     * Function testModuleWelcome
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 10/29/18 17:56
     *
     * @throws \Slim\Exception\MethodNotAllowedException
     * @throws \Slim\Exception\NotFoundException
     */
    public function testModuleWelcome()
    {
        $response = $this->runApp('GET', '/module/welcome');
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertContains('test_case', (string) $response->getBody());
    }
}