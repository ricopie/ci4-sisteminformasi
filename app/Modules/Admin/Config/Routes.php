<?php

$routes->setDefaultNamespace('Modules');

$routes->group('admin', static function ($admin) {
    $admin->get('/', 'Admin\Controllers\Dashboard::index');
});