<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('add_course', 'Addcourse::index');
$routes->get('course', 'Course::index');
$routes->get('coursemanagement', 'Coursemanagement::index');
$routes->get('course/year1', 'Courseyear1::index');

