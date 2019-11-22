<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['spmc'] = 'SputumCollection';
$route['sca'] = 'SpecimenCodeAssign';
$route['menu'] = 'Menu';
$route['pulmoeval'] = 'PulmonaryEvaluation';
$route['default_controller'] = 'main';
$route['(:any)'] = 'pages/view/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;