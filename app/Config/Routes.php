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
// $routes->get('/', 'Home::Index');
//$routes->get('/', 'Home::index');

$routes->get('/welcome', 'AlumniController::index');
$routes->get('/', 'User::index');
$routes->get('/index', 'User::index');
$routes->get('/home', 'AlumniController::index');
$routes->get('/carialumni', 'AlumniController::cariAlumni');
$routes->get('/anggota', 'AlumniController::anggota');
$routes->get('/anggota/create', 'AlumniController::create');
$routes->post('anggota/save', 'AlumniController::save');
$routes->get('/anggota/(:segment)', 'AlumniController::detail/$1');
$routes->get('anggota/delete/(:num)', 'AlumniController::delete/$1');
$routes->get('/anggota/edit/(:segment)', 'AlumniController::edit/$1');
$routes->post('anggota/update/(:num)', 'AlumniController::update/$1');
$routes->get('/profil', 'AlumniController::myprofil');
$routes->get('/editprofile', 'AlumniController::editProfile');
$routes->get('/buat akun', 'AlumniController::createAkun');
$routes->get('/info akun', 'AlumniController::infoAkun');
$routes->get('/tambahAlumni', 'AlumniController::tambahAlumni');
$routes->post('/alumniSave', 'AlumniController::saveAlumni');
$routes->get('/alumni', 'AlumniController::daftarAlumni');

// buat hapus alumnni
$routes->get('/hapusAlumni/(:segment)', 'AlumniController::deleteAlumni/$1');

$routes->get('/berita', 'BeritaController::halamanBerita');
$routes->get('/detail-berita/(:num)', 'BeritaController::detailBerita/$1');
$routes->get('/posting-berita', 'BeritaController::postingBerita');
$routes->post('/posting-berita/save', 'BeritaController::save');
$routes->post('/posting-loker/save', 'LokerController::save');





$routes->get('/lowongan-pekerjaan', 'LokerController::halamanLoker');
$routes->get('/posting-loker', 'LokerController::postingLoker');





$routes->get('/login', 'AlumniController::loginBaru');

$routes->get('/register', 'AlumniController::registerBaru');
$routes->get('/user', 'AlumniController::user');



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
