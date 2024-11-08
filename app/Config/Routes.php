<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', static function () {
    return view('welcome_message');
});

$routes->get('/io', '\Modules\Admin\Controllers\Io::index');