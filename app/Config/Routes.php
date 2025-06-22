<?php

namespace Config;

use CodeIgniter\Router\RouteCollection;

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);

// Main Routes
$routes->get('/', 'AdminController::index');
$routes->get('detail/(:num)', 'AdminController::detail/$1');
$routes->get('search', 'AdminController::search');