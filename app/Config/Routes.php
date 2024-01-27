<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('/registrar', 'UserController::index');
$routes->post('/registrar', 'UserController::create');
$routes->post('/actualizar', 'ReporteController::update');
$routes->get('/eliminar/(:any)', 'UserController::delete/$1');
$routes->get('/detalles/(:any)', 'UserController::show/$1');
$routes->get('/descargar-reporte', 'ReporteController::descargarDatos');

$routes->get('/reporte', 'ReporteController::index');
$routes->get('/editar/(:any)', 'ReporteController::edit/$1');





