<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['research/create-reseach-proposal'] = 'research/view';

$route['default_controller'] = 'admin/view';

$route['(:any)'] = 'admin/view/$1';

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
