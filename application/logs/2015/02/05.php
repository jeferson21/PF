<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-05 08:50:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\templateWelcome.php [ 19 ] in C:\xampp\htdocs\PF\application\views\templateWelcome.php:19
2015-02-05 08:50:12 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateWelcome.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 19, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\PF\application\views\templateWelcome.php:19
2015-02-05 08:50:27 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\PF\system\classes\Kohana\View.php:137
2015-02-05 08:50:27 --- DEBUG: #0 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\PF\system\classes\Kohana\View.php:137
2015-02-05 08:54:54 --- CRITICAL: View_Exception [ 0 ]: The requested view templateWelcome could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\PF\system\classes\Kohana\View.php:137
2015-02-05 08:54:54 --- DEBUG: #0 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(137): Kohana_View->set_filename('templateWelcome')
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(30): Kohana_View->__construct('templateWelcome', NULL)
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('templateWelcome')
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hello))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\PF\system\classes\Kohana\View.php:137
2015-02-05 09:26:04 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\templateHello.php [ 19 ] in C:\xampp\htdocs\PF\application\views\templateHello.php:19
2015-02-05 09:26:04 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateHello.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 19, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Hello))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\PF\application\views\templateHello.php:19