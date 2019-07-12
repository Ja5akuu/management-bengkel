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
|	http://codeigniter.com/user_guide/general/routing.html
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
$route['default_controller'] = 'auth';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;


// setting route
$route['auth/login'] 	= 'auth/Auth/login';
$route['auth/logout'] 	= 'auth/Auth/logout';
$route['beranda'] 		= 'beranda/Beranda';

// user
$route['user/adduser']	= 'user/User/adduser';
$route['user/edit'] 	= 'user/User/edit';
$route['user/update'] 	= 'user/User/update';

// barang
$route['barang/addbarang']	= 'barang/Barang/addbarang';
$route['barang/edit'] 	 	= 'barang/Barang/edit';
$route['barang/update'] 	= 'barang/Barang/update';

// satuan
$route['satuan/addsatuan']	= 'satuan/Satuan/addsatuan';
$route['satuan/edit'] 	 	= 'satuan/Satuan/edit';
$route['satuan/update'] 	= 'satuan/Satuan/update';

// satuan
$route['kategori/addbarang']	= 'kategori/Kategori/addKategori';
$route['kategori/edit'] 	 	= 'kategori/Kategori/edit';
$route['kategori/update'] 	= 'kategori/Kategori/update';

// supplier
$route['supplier/addbarang']	= 'supplier/Supplier/addsupplier';
$route['supplier/edit'] 	 	= 'supplier/Supplier/edit';
$route['supplier/update'] 	= 'supplier/Supplier/update';

// service
$route['service/addservice']	= 'service/Service/addservice';
$route['service/edit'] 	 		= 'service/Service/edit';
$route['service/update'] 		= 'service/Service/update';


// teknisi
$route['teknisi/addteknisi']	= 'teknisi/Teknisi/addteknisi';
$route['teknisi/edit'] 	 		= 'teknisi/Teknisi/edit';
$route['teknisi/update'] 		= 'teknisi/Teknisi/update';

// pelanggan/
$route['pelanggan/addpelanggan/']	= 'pelanggan/Pelanggan/addpelanggan';
$route['pelanggan/edit'] 	 		= 'pelanggan/Pelanggan/edit';
$route['pelanggan/update'] 		= 'pelanggan/Pelanggan/update';


// pelanggan/
$route['transaksi/addtranskasi']	= 'transaksi/Transaksi/addtranskasi';
$route['transaksi/edit'] 	 		= 'transaksi/Transaksi/edit';
$route['transaksi/update'] 		= 'transaksi/Transaksi/update';

