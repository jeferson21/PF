<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-05-11 15:27:20 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\templateWelcome.php [ 41 ] in C:\xampp\htdocs\PF\application\views\templateWelcome.php:41
2015-05-11 15:27:20 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateWelcome.php(41): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 41, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\views\templateWelcome.php(41): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\PF\application\views\templateWelcome.php:41
2015-05-11 15:28:15 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\Welcome.php [ 10 ] in file:line
2015-05-11 15:28:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-11 16:54:28 --- CRITICAL: View_Exception [ 0 ]: The requested view templateLogin could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\PF\system\classes\Kohana\View.php:137
2015-05-11 16:54:28 --- DEBUG: #0 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(137): Kohana_View->set_filename('templateLogin')
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(30): Kohana_View->__construct('templateLogin', NULL)
#2 C:\xampp\htdocs\PF\application\classes\Controller\Welcome.php(8): Kohana_View::factory('templateLogin')
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\PF\system\classes\Kohana\View.php:137
2015-05-11 16:55:01 --- CRITICAL: View_Exception [ 0 ]: The requested view templateLogin could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\PF\system\classes\Kohana\View.php:137
2015-05-11 16:55:01 --- DEBUG: #0 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(137): Kohana_View->set_filename('templateLogin')
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(30): Kohana_View->__construct('templateLogin', NULL)
#2 C:\xampp\htdocs\PF\application\classes\Controller\Welcome.php(8): Kohana_View::factory('templateLogin')
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\PF\system\classes\Kohana\View.php:137
2015-05-11 16:55:49 --- CRITICAL: View_Exception [ 0 ]: The requested view templateLogin could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\PF\system\classes\Kohana\View.php:137
2015-05-11 16:55:49 --- DEBUG: #0 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(137): Kohana_View->set_filename('templateLogin')
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(30): Kohana_View->__construct('templateLogin', NULL)
#2 C:\xampp\htdocs\PF\application\classes\Controller\Welcome.php(8): Kohana_View::factory('templateLogin')
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\PF\system\classes\Kohana\View.php:137
2015-05-11 16:55:51 --- CRITICAL: View_Exception [ 0 ]: The requested view templateLogin could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\PF\system\classes\Kohana\View.php:137
2015-05-11 16:55:51 --- DEBUG: #0 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(137): Kohana_View->set_filename('templateLogin')
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(30): Kohana_View->__construct('templateLogin', NULL)
#2 C:\xampp\htdocs\PF\application\classes\Controller\Welcome.php(8): Kohana_View::factory('templateLogin')
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\PF\system\classes\Kohana\View.php:137
2015-05-11 16:55:51 --- CRITICAL: View_Exception [ 0 ]: The requested view templateLogin could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\PF\system\classes\Kohana\View.php:137
2015-05-11 16:55:51 --- DEBUG: #0 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(137): Kohana_View->set_filename('templateLogin')
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(30): Kohana_View->__construct('templateLogin', NULL)
#2 C:\xampp\htdocs\PF\application\classes\Controller\Welcome.php(8): Kohana_View::factory('templateLogin')
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\PF\system\classes\Kohana\View.php:137
2015-05-11 16:56:49 --- CRITICAL: View_Exception [ 0 ]: The requested view templateLogin could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\PF\system\classes\Kohana\View.php:137
2015-05-11 16:56:49 --- DEBUG: #0 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(137): Kohana_View->set_filename('templateLogin')
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(30): Kohana_View->__construct('templateLogin', NULL)
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('templateLogin')
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\PF\system\classes\Kohana\View.php:137
2015-05-11 16:56:51 --- CRITICAL: View_Exception [ 0 ]: The requested view templateLogin could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\PF\system\classes\Kohana\View.php:137
2015-05-11 16:56:51 --- DEBUG: #0 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(137): Kohana_View->set_filename('templateLogin')
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(30): Kohana_View->__construct('templateLogin', NULL)
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('templateLogin')
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\PF\system\classes\Kohana\View.php:137
2015-05-11 16:57:18 --- CRITICAL: View_Exception [ 0 ]: The requested view templateLogin could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\PF\system\classes\Kohana\View.php:137
2015-05-11 16:57:18 --- DEBUG: #0 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(137): Kohana_View->set_filename('templateLogin')
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(30): Kohana_View->__construct('templateLogin', NULL)
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('templateLogin')
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\PF\system\classes\Kohana\View.php:137
2015-05-11 16:58:32 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\Welcome.php [ 9 ] in file:line
2015-05-11 16:58:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-11 17:01:18 --- CRITICAL: View_Exception [ 0 ]: The requested view template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\PF\system\classes\Kohana\View.php:137
2015-05-11 17:01:18 --- DEBUG: #0 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(137): Kohana_View->set_filename('template')
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(30): Kohana_View->__construct('template', NULL)
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('template')
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\PF\system\classes\Kohana\View.php:137
2015-05-11 17:17:51 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Route::home() ~ APPPATH\bootstrap.php [ 154 ] in file:line
2015-05-11 17:17:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-11 17:21:36 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Welcome::$username ~ APPPATH\classes\Controller\Welcome.php [ 14 ] in C:\xampp\htdocs\PF\application\classes\Controller\Welcome.php:14
2015-05-11 17:21:36 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Welcome.php(14): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 14, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Welcome.php:14
2015-05-11 17:21:58 --- CRITICAL: ErrorException [ 2 ]: Missing argument 1 for Controller_Welcome::action_login(), called in C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php on line 84 and defined ~ APPPATH\classes\Controller\Welcome.php [ 12 ] in C:\xampp\htdocs\PF\application\classes\Controller\Welcome.php:12
2015-05-11 17:21:58 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Welcome.php(12): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\xampp\htdocs...', 12, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Welcome.php:12
2015-05-11 17:34:48 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH\classes\Controller\Welcome.php [ 29 ] in file:line
2015-05-11 17:34:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-11 17:35:18 --- CRITICAL: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\Kohana\Auth.php [ 155 ] in C:\xampp\htdocs\PF\modules\auth\classes\Kohana\Auth\File.php:40
2015-05-11 17:35:18 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\auth\classes\Kohana\Auth\File.php(40): Kohana_Auth->hash('admin')
#1 C:\xampp\htdocs\PF\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_File->_login('admin', 'admin', false)
#2 C:\xampp\htdocs\PF\application\classes\Controller\Welcome.php(17): Kohana_Auth->login('admin', 'admin')
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\PF\modules\auth\classes\Kohana\Auth\File.php:40
2015-05-11 18:07:57 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH\classes\Controller\Welcome.php [ 30 ] in file:line
2015-05-11 18:07:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-11 19:04:20 --- CRITICAL: ErrorException [ 8 ]: Undefined index: USER_LOGIN ~ APPPATH\classes\Controller\Welcome.php [ 26 ] in C:\xampp\htdocs\PF\application\classes\Controller\Welcome.php:26
2015-05-11 19:04:20 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Welcome.php(26): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 26, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Welcome.php:26
2015-05-11 19:05:18 --- CRITICAL: ErrorException [ 8 ]: Undefined index: USER_LOGIN ~ APPPATH\classes\Controller\Welcome.php [ 26 ] in C:\xampp\htdocs\PF\application\classes\Controller\Welcome.php:26
2015-05-11 19:05:18 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Welcome.php(26): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 26, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Welcome.php:26
2015-05-11 19:05:25 --- CRITICAL: ErrorException [ 8 ]: Undefined index: USER_LOGIN ~ APPPATH\classes\Controller\Welcome.php [ 26 ] in C:\xampp\htdocs\PF\application\classes\Controller\Welcome.php:26
2015-05-11 19:05:25 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Welcome.php(26): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 26, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Welcome.php:26
2015-05-11 19:26:47 --- CRITICAL: ErrorException [ 8 ]: Undefined index: USER_LOGIN ~ APPPATH\classes\Controller\Welcome.php [ 19 ] in C:\xampp\htdocs\PF\application\classes\Controller\Welcome.php:19
2015-05-11 19:26:47 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Welcome.php(19): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 19, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Welcome.php:19
2015-05-11 20:51:28 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH\classes\Controller\Welcome.php [ 27 ] in file:line
2015-05-11 20:51:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-11 20:51:52 --- CRITICAL: ErrorException [ 1 ]: Class Controller_Welcome contains 1 abstract method and must therefore be declared abstract or implement the remaining methods (Controller_Welcome::_login) ~ APPPATH\classes\Controller\Welcome.php [ 44 ] in file:line
2015-05-11 20:51:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-11 20:52:25 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'protected' (T_PROTECTED), expecting class (T_CLASS) ~ APPPATH\classes\Controller\Welcome.php [ 3 ] in file:line
2015-05-11 20:52:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-11 20:52:36 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ APPPATH\classes\Controller\Welcome.php [ 28 ] in C:\xampp\htdocs\PF\application\classes\Controller\Welcome.php:28
2015-05-11 20:52:36 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Welcome.php(28): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 28, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Welcome.php:28