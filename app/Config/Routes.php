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
$routes->get('activities','ActivitiesController::edit/$1');
$routes->get('/accueil', 'Accueil::index');
$routes->get('/profile', 'ProfileController::update');
$routes->post('/profil', 'ProfileController::update');
$routes->post('/profile/update', 'ProfileController::update');
$routes->get('/voyages', 'Trips::index'); 
$routes->get('activities/create','ActivitiesController::create');
$routes->get('/activities/update/','ActivitiesController::update');
$routes->get('/activities/edit/', 'ActivitiesController::edit');
$routes->get('/activities/edit/(:num)', 'ActivitiesController::edit/$1');
$routes->post('activities/update/(:num)', 'ActivitiesController::update/$1');
$routes->get('activities/activity', 'ActivitiesController::index');
$routes->get('/activities/delete/(:num)', 'ContactController::delete/$1');
$routes->get('/activity/store','ActivitiesController::store');
$routes->post('/activity/store','ActivitiesController::store');
$routes->get('/account','AccountController::index');
$routes->get('/activity/create','ActivitiesController::create');
$routes->get('/activities/edit/(:num)', 'ActivitiesController::edit/$1');

$routes->delete('/account/delete/(:num)', 'AccountController::delete/$1');

$routes->delete('/booking/delete/(:num)', 'BookingController::delete/$1');
$routes->get('/trips/delete/(:num)', 'Trips::delete/$1');
$routes->get('/trips/list', 'Trips::index');
$routes->get('/trips/create', 'Trips::create');
$routes->post('/trips/store', 'Trips::store');
$routes->get('/trips/store', 'Trips::store');
$routes->get('/trips/edit/(:num)', 'Trips::edit/$1'); 
$routes->post('/trips/update/(:num)', 'Trips::update/$1'); 
$routes->get('/trips', 'Trips::Store');
$routes->get('/trips/edit/', 'Trips::edit'); 
$routes->get('/dashboard', 'TotalController::index'); 
$routes->post('booking/updateStatus','BookingController::updateStatus');
$routes->get('/Website', 'WebsiteController::index'); 
$routes->get('/home', 'ActionsController::home'); 
$routes->get('/about', 'ActionsController::about'); 
$routes->get('/contact', 'ActionsController::contact'); 
$routes->get('/service', 'ActionsController::service'); 
$routes->post('/booking/create/(:num)', 'book::createBooking/$1'); 
$routes->get('/booking/create/(:num)', 'book::createBooking/$1'); 
$routes->get('/booking', 'Book::showBookings');
$routes->get('/booking', 'book::booking'); 
$routes->get('/trip', 'ActionsController::trips'); 
$routes->get('/book/(:num)', 'Book::index/$1');
$routes->delete('/book/delete/(:num)', 'Book::delete/$1');

//$routes->get('/paiement/(:num)', 'paiement::pay/$1');
$routes->get('/paiement/(:num)', 'PaymentController::index/$1');
$routes->post('paiement/payment', 'PaymentController::index');
$routes->get('paiement/checkout', 'Checkout::pay');
$routes->post('payment/process', 'PaymentController::processPayment');
$routes->post('payment/processPayment', 'PaymentController::processPayment');
$routes->get('paiement/payment', 'PaymentController::index');
$routes->get('website/checkout', 'PaymentController::processPayment');
$routes->get('/signup', 'Loginparticipant::register');
$routes->get('/loginP', 'Loginparticipant::login');
$routes->post('/register', 'Loginparticipant::index');
$routes->get('/seconnecter', 'Loginparticipant::seconnecter');
$routes->post('/seconnecter', 'Loginparticipant::seconnecter');
$routes->get('/update-profile', 'Loginparticipant::updateProfile');
$routes->post('/update-profile', 'Loginparticipant::updateProfile');
$routes->post('/contact/submit', 'ContactController::submit');
$routes->get('contact/afficher', 'ContactController::afficher');


