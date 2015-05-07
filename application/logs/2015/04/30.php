<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-04-30 08:27:23 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\views\templateGrupos.php [ 30 ] in file:line
2015-04-30 08:27:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-30 08:28:08 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO) ~ APPPATH\views\templateGrupos.php [ 31 ] in file:line
2015-04-30 08:28:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-30 08:28:18 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '?>' ~ APPPATH\views\templateGrupos.php [ 31 ] in file:line
2015-04-30 08:28:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-30 08:30:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: perspectiva ~ APPPATH\views\templateGrupos.php [ 27 ] in C:\xampp\htdocs\PF\application\views\templateGrupos.php:27
2015-04-30 08:30:56 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateGrupos.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 27, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\views\templateWelcome.php(30): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Grupos))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\PF\application\views\templateGrupos.php:27
2015-04-30 08:31:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: perspectiva ~ APPPATH\views\templateGrupos.php [ 27 ] in C:\xampp\htdocs\PF\application\views\templateGrupos.php:27
2015-04-30 08:31:51 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateGrupos.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 27, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\views\templateWelcome.php(30): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Grupos))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\PF\application\views\templateGrupos.php:27
2015-04-30 08:31:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: perspectiva ~ APPPATH\views\templateGrupos.php [ 27 ] in C:\xampp\htdocs\PF\application\views\templateGrupos.php:27
2015-04-30 08:31:56 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateGrupos.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 27, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\views\templateWelcome.php(30): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Grupos))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\PF\application\views\templateGrupos.php:27