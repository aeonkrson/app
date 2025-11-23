<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
// $routes->get('/', 'Mahasiswa::index');
$routes->get('/mahasiswa', 'Mahasiswa::index');
$routes->get('/mahasiswa/create', 'Mahasiswa::create');
$routes->post('/mahasiswa/saveRegMahasiswa', 'Mahasiswa::saveRegMahasiswa');
$routes->post('/mahasiswa/UpdateRegMahasiswa', 'Mahasiswa::UpdateRegMahasiswa');
$routes->post('/mahasiswa/vEditMahasiswa', 'Mahasiswa::vEditMahasiswa');
$routes->get('/mahasiswa/deleteMahasiswa/(:num)', 'Mahasiswa::deleteMahasiswa/$1');
$routes->get('/login', 'Auth::login');
$routes->post('/login', 'Auth::login');
$routes->get('/logout', 'Auth::logout');


$routes->setAutoRoute(false);