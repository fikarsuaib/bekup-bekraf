<?php
defined('BASEPATH') OR exit('No direct script access allowed');
//nama folder/url = 'nama class';

$route['bekraf/baco/update/(:any)'] = 'classHello/Update/$1';
$route['bekraf/baco/edit/(:any)'] = 'classHello/Edit/$1';
$route['bekraf/baco/delete/(:any)'] = 'classHello/Delete/$1';
$route['bekraf/baco/create'] = 'classHello/Create';
$route['bekraf/baco'] = 'classHello/View';
$route['bekraf/profile/(:any)'] = 'classHello/profile/$1';
$route['bekraf'] = 'classHello';
$route['default_controller'] = 'welcome';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
