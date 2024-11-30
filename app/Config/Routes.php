<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
//$routes->get('/', 'Accueil::index'); // Définir la route par défaut vers le contrôleur Accueil
//$routes->get('/accueil', 'Accueil::index'); // Optionnel, pour définir explicitement /accueil
$routes->get('/login', 'LoginController::index');
$routes->get('/activity', 'ActivitiesController::index');
$routes->post('login/', 'LoginController::authenticate');
$routes->post('login/LoginController/authenticate','LoginController::authenticate');
$routes->post('/LoginController/authenticate', 'LoginController::authenticate');
$routes->get('/accueil', function () {
    return view('accueil');
});
$routes->get('/profile', 'ProfileController::update');
$routes->post('/profil', 'ProfileController::update');
$routes->post('/profile/update', 'ProfileController::update');
$routes->get('/voyages', 'Trips::index'); 
$routes->get('activities/create','ActivitiesController::create');
$routes->get('/activities/update/','ActivitiesController::update');
$routes->get('/activities/edit/(:num)', 'ActivitiesController::edit/$1');
$routes->post('activities/update/(:num)', 'ActivitiesController::update/$1');
$routes->get('activities/activity', 'ActivitiesController::index');
$routes->get('/activities/delete/(:num)', 'ActivitiesController::delete/$1');
$routes->get('/activity/store','ActivitiesController::store');
$routes->post('/activity/store','ActivitiesController::store');
$routes->get('/account','AccountController::index');
$routes->get('/account/delete/(:num)', 'AccountController::delete/$1');
//$routes->get('/logout', 'Logout::index');
$routes->get('/trips/delete/(:num)', 'Trips::delete/$1');
$routes->get('/trips/list', 'Trips::index');
$routes->get('/trips/create', 'Trips::create');
$routes->post('/trips/store', 'Trips::store');
$routes->get('/trips/store', 'Trips::store');
$routes->get('/trips/edit/(:num)', 'Trips::edit/$1'); 
$routes->post('/trips/update/(:num)', 'Trips::update/$1'); 
$routes->get('/trips', 'Trips::Store');
