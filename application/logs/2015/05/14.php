<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-05-14 20:26:45 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQLi_Result::$username ~ APPPATH\classes\Controller\Users.php [ 15 ] in C:\xampp\htdocs\PF\application\classes\Controller\Users.php:15
2015-05-14 20:26:45 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Users.php(15): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 15, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Users->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Users.php:15
2015-05-14 20:30:10 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQLi_Result::$username ~ APPPATH\classes\Controller\Users.php [ 15 ] in C:\xampp\htdocs\PF\application\classes\Controller\Users.php:15
2015-05-14 20:30:10 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Users.php(15): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 15, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Users->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Users.php:15