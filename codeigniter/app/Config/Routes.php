<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/','Main::Startseite');
$routes->get('Spalten','Main::Spalten');
$routes->get('Formular','Main::Formular');
$routes->get('Startseite','Main::Startseite');
$routes->get('Board','Main::Board');





