<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Anasayfa::index');
$routes->get('mongo/(:num)', 'Anasayfa::test/$1');
$routes->match(['get','post'],'anasayfa', 'Anasayfa::/');
$routes->get('panel', 'Anasayfa::panel');
$routes->match(['get','post'],'login', 'Anasayfa::login');
$routes->get('logout', 'Anasayfa::logout');
$routes->match(['get','post'],'hakkimizda', 'Anasayfa::hakkimizda');
$routes->match(['get','post'],'projeler', 'Anasayfa::projeler');

$routes->get('projeler', 'Projekontrol::index');
$routes->post('projekontrol/add', 'Projekontrol::add');
$routes->get('projeler/delete/(:segment)', 'Projekontrol::delete/$1');
$routes->post('/projekontrol/update/(:any)', 'Projekontrol::update/$1'); 