<?php

namespace Config;

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);

// ROUTE UTAMA PROYEK
$routes->get('/', 'AdminController::index');
$routes->get('detail/(:num)', 'AdminController::detail/$1');

// ROUTE ALTERNATIF (jika diperlukan)
$routes->group('admin', function($routes) {
    $routes->get('list', 'AdminController::index');
    $routes->get('view/(:num)', 'AdminController::detail/$1');
});

// JIKA PERLU API
$routes->group('api', ['namespace' => 'App\Controllers\API'], function($routes) {
    $routes->get('admins', 'AdminAPI::index');
    $routes->get('admin/(:num)', 'AdminAPI::show/$1');
});

// ROUTE DEFAULT CI4 (biarkan ini di bagian bawah)
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}