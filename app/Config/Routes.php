<?php

use CodeIgniter\Router\RouteCollection;

use App\Controllers\News;
use App\Controllers\Tasks;
use App\Controllers\Pages;


/** @var RouteCollection $routes */
$routes->get('/', 'Home::index');

// News
$routes->get('news', [News::class, 'index']);
$routes->get('news/(:segment)', [News::class, 'show']);

// Tasks
$routes->get('tasks', [Tasks::class, "index"]);

// Pages (default)
$routes->get('pages', [Pages::class, 'index']);
$routes->get('(:segment)', [Pages::class, 'view']);

