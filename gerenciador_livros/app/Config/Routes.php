<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('livros', 'Livros::index');
// Adicione outras rotas para criar, editar e deletar depois.
