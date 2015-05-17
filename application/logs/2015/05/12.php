<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-05-12 07:22:21 --- CRITICAL: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\Kohana\Auth.php [ 155 ] in C:\xampp\htdocs\PF\modules\auth\classes\Kohana\Auth\File.php:40
2015-05-12 07:22:21 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\auth\classes\Kohana\Auth\File.php(40): Kohana_Auth->hash('admin')
#1 C:\xampp\htdocs\PF\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_File->_login('admin', 'admin', false)
#2 C:\xampp\htdocs\PF\application\classes\Controller\Welcome.php(19): Kohana_Auth->login('admin', 'admin')
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\PF\modules\auth\classes\Kohana\Auth\File.php:40
2015-05-12 07:30:20 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH\classes\Controller\Welcome.php [ 20 ] in file:line
2015-05-12 07:30:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-12 07:43:09 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '@', expecting function (T_FUNCTION) ~ MODPATH\auth\classes\Kohana\Auth.php [ 83 ] in file:line
2015-05-12 07:43:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-12 07:43:50 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'string' (T_STRING), expecting function (T_FUNCTION) ~ MODPATH\auth\classes\Kohana\Auth.php [ 83 ] in file:line
2015-05-12 07:43:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-12 07:44:54 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$username' (T_VARIABLE), expecting function (T_FUNCTION) ~ MODPATH\auth\classes\Kohana\Auth.php [ 83 ] in file:line
2015-05-12 07:44:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-12 08:43:09 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'default' (T_DEFAULT) ~ APPPATH\classes\Controller\Welcome.php [ 21 ] in file:line
2015-05-12 08:43:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-12 08:49:28 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH\classes\Controller\Welcome.php [ 22 ] in file:line
2015-05-12 08:49:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line