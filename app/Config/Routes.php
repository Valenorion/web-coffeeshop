<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');

$routes->get('login', 'AuthController::login');
$routes->post('login', 'AuthController::login');
$routes->get('logout', 'AuthController::logout');

$routes->get('menu', 'MenuController::index');
$routes->get('about', 'AboutController::index');

// ==================== ROUTES KHUSUS ADMIN ====================
$routes->get('admin/dashboard', 'AdminController::dashboard', ['filter' => 'admin']);

