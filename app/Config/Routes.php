<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/page', 'page::nama');
$routes->get('/music', 'page::musik');
$routes->get('/asal', 'page::asall');
$routes->get('/makanan', 'page::makanann');
