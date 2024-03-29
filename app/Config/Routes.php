<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'Home::index');
$routes->get('/dashboard', 'Home::dashboard');

$routes->get('/user', 'User::index');
$routes->get('/user/delete/(:num)', 'User::delete/$1');
$routes->post('/user/insert', 'User::insert');
$routes->post('/user/update', 'User::update');
$routes->post("/user/login", "User::login");
$routes->post("/user/change_password", "User::change_password");
$routes->get("/user/data", 'User::data_datatable');

$routes->get("/product", 'Product::index');
$routes->post("/product/insert", 'Product::insert');
$routes->post("/product/update", 'Product::update');
$routes->get("/product/delete/(:num)", 'Product::delete/$1');
$routes->get("/product/log/(:num)", 'Product::logs/$1');
$routes->get("/product/log/data/(:num)", 'Product::get_log/$1');
$routes->get("/product/log/delete/(:num)/(:num)", 'Product::delete_log/$1/$2');
$routes->get("/product/log/export/(:num)", 'Product::export_log_excel/$1');
$routes->get("/product/data", 'Product::data_datatable');
$routes->get("/product/data_dropdown", 'Product::data_select2');
$routes->get("/product/product_in", 'Product::product_in');
$routes->get("/product/product_out", 'Product::product_out');
$routes->get("/api/product/data", 'ProductAPI::data');
$routes->post("/api/product/a05869c11f255af1658d097412becd7a2d18c2cfee88d1ae673c507ad19b4b79b", 'ProductAPI::product_in');
$routes->post("/api/product/a4da417fff412476e243f88bec965a2ba3419f67c52b910ec2bf5aa980bfa751c", 'ProductAPI::product_out');

$routes->get("/login", "Login::index");
$routes->get('/logout', 'User::logout');

/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
