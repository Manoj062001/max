<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('about-us', 'Home::about');
$routes->get('contact-us', 'Home::contact');
$routes->get('terms-and-conditions', 'Home::terms');    

// Product Category Routes
$routes->get('potato-chips', 'Product::potatoChips');
$routes->get('corn-snacks', 'Product::cornSnacks');
$routes->get('rusks-and-cookies', 'Product::rusksCookies');
$routes->get('namkeen-snacks', 'Product::namkeenSnacks');
$routes->get('fryums-snacks', 'Product::fryumsSnacks');

// Forms
$routes->post('/forms/home_contact', 'Forms::homeContact');