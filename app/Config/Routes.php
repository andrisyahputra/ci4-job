<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

service('auth')->routes($routes);

// lwoongan
$routes->get('lowongan/detail/(:num)', 'Lowongan\LowonganController::detail/$1', ['as' => 'detail.lowongan']);

$routes->get('lowongan/kategori/(:any)', 'Lowongan\LowonganController::kategori/$1', ['as' => 'kategori.lowongan']);
