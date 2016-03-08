<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*$route['crud'] = 'crud';*/
$route['crud/update/(:any)']   = 'crud/update/$1';
$route['crud/delete/(:any)']   = 'crud/delete/$1';
$route['crud/create']          = 'crud/create';

$route['default_controller']   = 'crud';
$route['404_override']         = '';
$route['translate_uri_dashes'] = FALSE;