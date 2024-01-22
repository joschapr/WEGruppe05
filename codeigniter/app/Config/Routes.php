<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes-> setDefaultController('Home');
$routes->get('/','Home::index');
$routes->get('first', 'First::index');
$routes->get('first/index', 'First::index');
$routes->get('first/table_stat', 'First::table_stat');

$routes->get('/','Gruppennummer::Startseite');
$routes->get('Spalten','Gruppennummer::Spalten');
$routes->get('Formular','Gruppennummer::Formular');
$routes->get('Startseite','Gruppennummer::Startseite');
$routes->get('Board','Gruppennummer::Board');

