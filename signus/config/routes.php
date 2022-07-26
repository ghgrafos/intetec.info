<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different URLs to chosen controllers and their actions (functions).
 *
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Http\Middleware\CsrfProtectionMiddleware;
use Cake\Routing\RouteBuilder;
use Cake\Routing\Router;
use Cake\Routing\Route\DashedRoute;


Router::defaultRouteClass(DashedRoute::class);

Router::scope('/', function (RouteBuilder $routes) {
    // Register scoped middleware for in scopes.
    $routes->registerMiddleware('csrf', new CsrfProtectionMiddleware([
        'httpOnly' => true
    ]));

    $routes->applyMiddleware('csrf');

    $routes->connect('/', ['controller' => 'StaticPages', 'action' => 'display', 'home']);

    $routes->connect('/Staticpages/*', ['controller' => 'StaticPages', 'action' => 'display']);

    $routes->connect('/', ['controller' => 'Images', 'action' => 'display']);
    $routes->connect('/category/*', ['controller' => 'Images', 'action' => 'display']);

    $routes->fallbacks('InflectedRoute');
});

Router::prefix('admin', function ($routes) {

    $routes->connect('/', ['controller'=>'Welcome']);
    $routes->connect('/', ['controller'=>'Users']);

    $routes->fallbacks('InflectedRoute');
});
