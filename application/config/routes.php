<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'website';
$route['(:any)'] = 'website/$1';

$route['admin/(:any)'] = 'admin/$1';

$route['auth/(:any)'] = 'auth/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
