<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['research/(:any)'] = 'research/view/$1';

$route['default_controller'] = 'admin/view';

$route['(:any)'] = 'admin/view/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
