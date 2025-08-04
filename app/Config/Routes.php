<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('about-us', 'Home::about');
$routes->get('contact-us', 'Home::contact');

// Product Category Routes
$routes->get('potato-chips', 'Product::potatoChips');
$routes->get('corn-snacks', 'Product::cornSnacks');
$routes->get('rusks-and-cookies', 'Product::rusksCookies');
$routes->get('namkeen-snacks', 'Product::namkeenSnacks');
$routes->get('fryums-snacks', 'Product::fryumsSnacks');

// Product Detail Routes (Sub-Categories)
$routes->group('product-detail', function($routes) {
    $routes->get('premium-rusks', 'ProductDetail::premiumRusks');
    $routes->get('regular-rusks', 'ProductDetail::regularRusks');
    $routes->get('butter-cookies', 'ProductDetail::butterCookies');
    $routes->get('chocolate-cookies', 'ProductDetail::chocolateCookies');
    $routes->get('specialty-cookies', 'ProductDetail::specialtyCookies');
    $routes->get('subcategories', 'ProductDetail::subcategories');
});

// Admin Routes
$routes->group('admin', function($routes) {
    $routes->get('/', 'Admin::index');
    $routes->get('dashboard', 'Admin::index');
    $routes->get('products', 'Admin::products');
    $routes->get('categories', 'Admin::categories');
    $routes->match(['get', 'post'], 'add-product', 'Admin::addProduct');
    $routes->match(['get', 'post'], 'edit-product/(:num)', 'Admin::editProduct/$1');
    $routes->get('delete-product/(:num)', 'Admin::deleteProduct/$1');
    $routes->match(['get', 'post'], 'manage-badge', 'Admin::manageBadge');
});