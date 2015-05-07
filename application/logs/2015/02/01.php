<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-01 14:02:37 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Form::date() ~ APPPATH\views\Inscrever.php [ 7 ] in file:line
2015-02-01 14:02:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-01 15:23:34 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'class' (T_CLASS), expecting function (T_FUNCTION) ~ APPPATH\classes\Controller\controllerInscricao.php [ 21 ] in file:line
2015-02-01 15:23:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-01 15:23:34 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'class' (T_CLASS), expecting function (T_FUNCTION) ~ APPPATH\classes\Controller\controllerInscricao.php [ 21 ] in file:line
2015-02-01 15:23:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-01 15:26:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: attrs ~ APPPATH\views\Inscrever.php [ 15 ] in C:\xampp\htdocs\universidade\application\views\Inscrever.php:15
2015-02-01 15:26:22 --- DEBUG: #0 C:\xampp\htdocs\universidade\application\views\Inscrever.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 15, Array)
#1 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\universidade\application\views\templateWelcome.php(19): Kohana_View->__toString()
#5 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_controllerInscricao))
#11 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\universidade\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\universidade\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\universidade\application\views\Inscrever.php:15
2015-02-01 15:27:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: attrs ~ APPPATH\views\Inscrever.php [ 24 ] in C:\xampp\htdocs\universidade\application\views\Inscrever.php:24
2015-02-01 15:27:00 --- DEBUG: #0 C:\xampp\htdocs\universidade\application\views\Inscrever.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 24, Array)
#1 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\universidade\application\views\templateWelcome.php(19): Kohana_View->__toString()
#5 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_controllerInscricao))
#11 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\universidade\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\universidade\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\universidade\application\views\Inscrever.php:24
2015-02-01 18:14:58 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: attrs ~ APPPATH\views\Inscrever.php [ 24 ] in C:\xampp\htdocs\universidade\application\views\Inscrever.php:24
2015-02-01 18:14:58 --- DEBUG: #0 C:\xampp\htdocs\universidade\application\views\Inscrever.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 24, Array)
#1 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\universidade\application\views\templateWelcome.php(19): Kohana_View->__toString()
#5 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_controllerInscricao))
#11 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\universidade\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\universidade\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\universidade\application\views\Inscrever.php:24