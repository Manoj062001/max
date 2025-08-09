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
$routes->get('test', 'Product::test');

// Product
$routes->get('product/(:any)', 'Product::productDetails/$1');

// Forms
$routes->post('/forms/contact', 'Forms::contact');

// Admin
$routes->group('admin/', static function ($routes) {
    $routes->match(['get', 'post'], '/', 'Admin::index');
    $routes->match(['get', 'post'], 'contact', 'Admin::contact');
    $routes->match(['get', 'post'], 'product', 'Admin::product');
    
    $routes->match(['get', 'post'], 'addproduct', 'Admin::addproduct');
    $routes->match(['get', 'post'], 'editproduct/(:num)', 'Admin::editproduct/$1');
    $routes->get('logout', 'Admin::logout');
});