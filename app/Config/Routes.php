<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::authenticate');
$routes->get('/logout', 'Auth::logout');

$routes->post('/dashboard', 'Dashboard::index');

// Sirve como verificacion para saber si el logeado es admin o user
// $routes->group('admin', static function($routes){
//     $routes->get();
// });
