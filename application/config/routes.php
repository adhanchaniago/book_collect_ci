<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'loginController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

$route['login'] = 'loginController';
$route['login/action'] = 'loginController/action';
$route['logout'] = 'loginController/logout';
$route['register'] = 'loginController/register';
$route['register/insert'] = 'loginController/insert_user';

# admin
$route['admin'] = 'adminController/dashboard';
$route['admin/add_user'] = 'adminController/add_user';
$route['admin/insert_user'] = 'adminController/insert_user';
$route['admin/add_buku'] = 'adminController/add_buku';
$route['admin/insert_buku'] = 'adminController/insert_buku';
$route['admin/list_buku'] = 'adminController/list_buku';
$route['admin/add_berita'] = 'adminController/add_berita';
$route['admin/insert_berita'] = 'adminController/insert_berita';
# anggota
$route['anggota'] = 'anggotaController/dashboard';
$route['anggota/add_donasi'] = 'anggotaController/add_donasi';
$route['anggota/add_non_donasi'] = 'anggotaController/add_non_donasi';
