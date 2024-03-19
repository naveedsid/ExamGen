<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/dashboard', 'ContDashboard::index');

//---- Read -- Manage Users ------
$routes->get('/manage_users', 'ContManageUsers::index');
//---- Insert -- Manage Users ------
$routes->post('/manage_users/insert', 'ContManageUsers::insert');
//---- Edit -- Manage Users ------
$routes->get('/manage_users/edit/(:num)', 'ContManageUsers::edit/$1');
$routes->post('/manage_users/edit/(:num)', 'ContManageUsers::edit/$1');
//---- Delete -- Manage Users ------
$routes->get('/manage_users/delete/(:num)', 'ContManageUsers::delete/$1');


//---- Read -- Question Bank ------
$routes->get('/question_bank', 'ContQuestionBank::index');


//---- Read -- Subjects ------
$routes->get('/subjects', 'ContSubjects::index');
//---- Insert -- Subjects ------
$routes->post('/subjects/insert', 'ContSubjects::insert');
//---- Edit -- Subjects ------
$routes->get('/subjects/edit/(:num)', 'ContSubjects::edit/$1');
$routes->post('/subjects/edit/(:num)', 'ContSubjects::edit/$1');
//---- Delete -- Subjects ------
$routes->get('/subjects/delete/(:num)', 'ContSubjects::delete/$1');