<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('HomeController');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(true);
$routes->set404Override();
$routes->setAutoRoute(true);

/**
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// Frontend

$routes->get('', 'HomeController::index');
$routes->match(['get', 'post'], 'cek-pengumuman', 'HomeController::cek_pengumuman');

$routes->match(['get', 'post'], 'login', 'HomeController::login');
$routes->get('logout', 'HomeController::logout');


// Backend
$routes->group('admin', function ($routes) {
	$routes->get('', 'AdminController::index');

	$routes->group('tahun', function ($routes) {
		$routes->get('', 'AdminController::tahun');
		$routes->post('', 'AdminController::tahun_insert');
		$routes->post('update', 'AdminController::tahun_update');
		$routes->get('create', 'AdminController::tahun_create');
		$routes->get('edit/(:num)', 'AdminController::tahun_edit/$1');
		$routes->get('delete/(:num)', 'AdminController::tahun_delete/$1');
	});

	$routes->group('jurusan', function ($routes) {
		$routes->get('', 'AdminController::jurusan');
		$routes->post('', 'AdminController::jurusan_insert');
		$routes->post('update', 'AdminController::jurusan_update');
		$routes->get('create', 'AdminController::jurusan_create');
		$routes->get('edit/(:num)', 'AdminController::jurusan_edit/$1');
		$routes->get('delete/(:num)', 'AdminController::jurusan_delete/$1');
	});

	$routes->group('mata-pelajaran', function ($routes) {
		$routes->get('', 'AdminController::mata_pelajaran');
		$routes->post('', 'AdminController::mata_pelajaran_insert');
		$routes->post('update', 'AdminController::mata_pelajaran_update');
		$routes->get('create', 'AdminController::mata_pelajaran_create');
		$routes->get('edit/(:num)', 'AdminController::mata_pelajaran_edit/$1');
		$routes->get('delete/(:num)', 'AdminController::mata_pelajaran_delete/$1');
	});

	$routes->group('gelombang', function ($routes) {
		$routes->get('', 'AdminController::gelombang');
		$routes->post('', 'AdminController::gelombang_insert');
		$routes->post('update', 'AdminController::gelombang_update');
		$routes->get('create', 'AdminController::gelombang_create');
		$routes->get('edit/(:num)', 'AdminController::gelombang_edit/$1');
		$routes->get('delete/(:num)', 'AdminController::gelombang_delete/$1');
	});

	$routes->group('siswa', function ($routes) {
		$routes->get('', 'AdminController::siswa');
		$routes->post('', 'AdminController::siswa_insert');
		$routes->get('single/(:num)', 'AdminController::siswa_single/$1');
		$routes->get('create', 'AdminController::siswa_create');
		$routes->post('update', 'AdminController::siswa_update');
		$routes->get('edit/(:num)', 'AdminController::siswa_edit/$1');
		$routes->get('delete/(:num)', 'AdminController::siswa_delete/$1');
	});
});




/**
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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
