<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Users::index');

$routes->get('/login', 'Users::login');

$routes->get('/moodboard', 'Users::moodboard');

$routes->get('/roadmap', 'Users::roadmap');

$routes->get('/signup', 'Users::signup');
