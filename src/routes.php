<?php
/**
 * Project slim-3-skeleton.
 * Created by PhpStorm.
 * User: 713uk13m <dev@nguyenanhung.com>
 * Date: 10/29/18
 * Time: 16:44
 */

use Slim\Http\Request;
use Slim\Http\Response;

// Routes
$app->get('/', function (Request $request, Response $response, array $args) {
    // Sample log message
    $this->logger->info("Slim-Skeleton '/' route" . json_encode($request->getQueryParams()));

    // Render index view
    return $this->renderer->render($response, 'index.phtml', $args);
});

// Default App
$app->group('/app', function () use ($app) {
    $app->get('/test', App\AppController::class . ':test');
    $app->get('/testDb', App\AppController::class . ':testDb');
});

// Router for Modules H.M.V.C - Example
$app->group('/module', function () use ($app) {
    $app->get('/welcome', Modules\Welcome\Controller\WelcomeController::class . ':index');
});
