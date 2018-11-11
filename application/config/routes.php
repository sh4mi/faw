<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['user/register'] = 'users/register';
$route['user/login'] = 'users/login';
$route['user/logout'] = 'users/logout';
$route['user/my'] = 'users/my';
//$route['any:'] = 'users/login';
$route['default_controller'] = 'users/login';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
