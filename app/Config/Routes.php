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
$routes->setDefaultController('PublicHome');
$routes->setDefaultMethod('index');

$routes->setTranslateURIDashes(false);
$routes->set404Override();
// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.
$routes->get('/', 'PublicHome::index');
$routes->get('/loja', 'Loja::index');
$routes->get('/adotar', 'Adotar::index');
$routes->get('/parceiros', 'Parceiros::index');
$routes->get('/resgates', 'Resgates::index');
$routes->get('/transparencia', 'Transparencia::index');
$routes->get('/quero_ajudar', 'Quero_Ajudar::index');

//----- Galeria -----//
$routes->get('/galeria', 'Galeria::index');

//Lista
$routes->get("/galeria/listar", "Galeria::list");

//Adicionar
$routes->get("/galeria/criar", "Galeria::create");
$routes->post("/galeria/salvar", "Galeria::store");

//Editar
$routes->get("/galeria/editar/(:num)", "Galeria::edit/$1");

//Deletar
$routes->post("/galeria/deletar/(:num)", "Galeria::delete/$1");

//Exibir(Modal)
$routes->get('galeria/exibir/(:num)', 'Galeria::exibir/$1');

//----- Apadrinhar -----//
$routes->get('/apadrinhar', 'Apadrinhar::index');

//Lista
$routes->get("/apadrinhar/listar", "Apadrinhar::list");

//Adicionar
$routes->get("/apadrinhar/criar", "Apadrinhar::create");
$routes->post("/apadrinhar/salvar", "Apadrinhar::store");

//Editar
$routes->get("/apadrinhar/editar/(:num)", "Apadrinhar::edit/$1");

//Deletar
$routes->post("/apadrinhar/deletar/(:num)", "Apadrinhar::delete/$1");

//Exibir(Modal)
$routes->get('apadrinhar/exibir/(:num)', 'Apadrinhar::exibir/$1');

//Adotar 
$routes->group('adotar', function($routes){
    $routes->get('/', 'Adotar::index');
    $routes->get('listar', 'Adotar::list');
    $routes->get('criar', 'Adotar::create');
    $routes->get('editar/(:num)', 'Adotar::edit/$1');
    $routes->post('salvar', 'Adotar::store');
    $routes->post('deletar/(:num)', 'Adotar::delete/$1');
    $routes->get('exibir/(:num)', 'Adotar::exibir/$1');
});

//Routes
$routes->group('resgates', function($routes) {
    // Página principal mostrando as histórias de resgate (lista)
    $routes->get('', 'Resgates::index');

    // Rota para mostrar detalhes via AJAX (JSON)
    $routes->get('exibir/(:num)', 'Resgates::exibir/$1');

    // Rotas para administração (se quiser)
    $routes->get('criar', 'Resgates::create');
    $routes->post('salvar', 'Resgates::store');
    $routes->get('editar/(:num)', 'Resgates::edit/$1');
    $routes->post('deletar/(:num)', 'Resgates::delete/$1');

    // Lista para administração (opcional)
    $routes->get('listar', 'Resgates::list');
});


// Shield Routes
//service('auth')->routes($routes);

// service('auth')->routes($routes, [
//     'except' => ['register', 'magic-link', 'forgot', 'reset-password']
// ]);

// Protected Routes
$routes->group('', ['filter' => 'session'], static function($routes) {
});



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
