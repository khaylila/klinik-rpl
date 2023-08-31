<?php

use App\Controllers\Pasien;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('pasien/add', [Pasien::class, 'new']);
$routes->get('pasien', [Pasien::class, 'index']);

service('auth')->routes($routes);
