<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-01-27 11:01:07 --- CRITICAL: View_Exception [ 0 ]: The requested view templateWelcome could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\universidade\system\classes\Kohana\View.php:137
2015-01-27 11:01:07 --- DEBUG: #0 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(137): Kohana_View->set_filename('templateWelcome')
#1 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(30): Kohana_View->__construct('templateWelcome', NULL)
#2 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('templateWelcome')
#3 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\universidade\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\universidade\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\universidade\system\classes\Kohana\View.php:137