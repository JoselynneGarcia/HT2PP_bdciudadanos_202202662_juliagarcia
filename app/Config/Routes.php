<?php

use App\Controllers\Ciudadanos;
use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/niveles_academicos', 'Nivelesacad::index');
$routes->get('/ciudadanos', 'Ciudadanos::index');
$routes->get('/municipios', 'Municipios::index');
$routes->get('/departamentos', 'Departamentos::index');
$routes->get('/regiones', 'Regiones::index');

// CRUD Niveles Academicos
$routes->add('/niveles_academicos/create', 'Nivelesacad::create');
$routes->add('/niveles_academicos/edit/( :segment)', 'Nivelesacad::edit/$cod_nivel_acad');
$routes->add('/niveles_academicos/delete/( :segment)', 'Nivelesacad::delete/$cod_nivel_acad');

// CRUD CIUDADANOS
$routes->add('/ciudadanos/create', 'Ciudadanos::create');
$routes->add('/ciudadanos/edit/( :segment)', 'Ciudadanos::edit/$dpi');
$routes->add('/ciudadanos/delete/( :segment)', 'Ciudadanos::delete/$dpi');

// CRUD Municipios
$routes->add('/municipios/create', 'Municipios::create');
$routes->add('/municipios/edit/( :segment)', 'Municipios::edit/$cod_muni');
$routes->add('/municipios/delete/( :segment)', 'Municipiops::delete/$cod_muni');

// CRUD Departamentos
$routes->add('/departamentos/create', 'Departamentos::create');
$routes->add('/departamentos/edit/( :segment)', 'Departamentos::edit/$cod_depto');
$routes->add('/departamentos/delete/( :segment)', 'Municipiops::delete/$cod_depto');

// CRUD Regiones
$routes->add('/regiones/create', 'Regiones::create');
$routes->add('/regiones/edit/( :segment)', 'Regiones::edit/$cod_region');
$routes->add('/regiones/delete/( :segment)', 'Regiones::delete/$cod_region');
