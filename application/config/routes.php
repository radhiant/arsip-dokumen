<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'home/index';
$route['buku'] = 'buku/index';
$route['anggota'] = 'anggota/index';
$route['user'] = 'user/index';
$route['transaksi'] = 'transaksi/index';
$route['lelang'] = 'lelang/index';


$route['(:any)'] = 'home/index/$1';





$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
