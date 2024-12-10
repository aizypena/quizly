<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

 $routes->group('', ['namespace' => 'App\Controllers'], function($routes) {
    $routes->get('/', 'Index::index');
    $routes->get('login', 'Index::login');
    $routes->get('signup', 'Index::signup');
});