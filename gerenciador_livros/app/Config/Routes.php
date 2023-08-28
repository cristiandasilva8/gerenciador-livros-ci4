<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('livros', 'Livros::index');
$routes->get('livros/adicionar', 'Livros::adicionar');
$routes->post('livros/add', 'Livros::add');
$routes->match(['get', 'post'], 'livros/editar/(:num)', 'Livros::editar/$1');

// Adicione outras rotas para criar, editar e deletar depois.
