<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/','Gruppennummer::Startseite');
$routes->get('Spalten','Gruppennummer::Spalten');
$routes->get('Formular','Gruppennummer::Formular');
$routes->get('Startseite','Gruppennummer::Startseite');
$routes->get('Board','Gruppennummer::Board');


