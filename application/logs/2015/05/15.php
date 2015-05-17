<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-05-15 14:32:11 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Route::home() ~ APPPATH\classes\Controller\Users.php [ 20 ] in file:line
2015-05-15 14:32:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-15 14:34:14 --- CRITICAL: ErrorException [ 4096 ]: Object of class Route could not be converted to string ~ SYSPATH\classes\Kohana\Controller.php [ 127 ] in C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php:127
2015-05-15 14:34:14 --- DEBUG: #0 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(127): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\xampp\htdocs...', 127, Array)
#1 C:\xampp\htdocs\PF\application\classes\Controller\Users.php(20): Kohana_Controller::redirect(Object(Route))
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Users->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php:127
2015-05-15 14:45:51 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ APPPATH\classes\Controller\Users.php [ 17 ] in C:\xampp\htdocs\PF\application\classes\Controller\Users.php:17
2015-05-15 14:45:51 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Users.php(17): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 17, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Users->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Users.php:17
2015-05-15 14:46:53 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\Users.php [ 23 ] in file:line
2015-05-15 14:46:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-15 14:47:05 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ APPPATH\classes\Controller\Users.php [ 17 ] in C:\xampp\htdocs\PF\application\classes\Controller\Users.php:17
2015-05-15 14:47:05 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Users.php(17): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 17, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Users->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Users.php:17
2015-05-15 14:47:33 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ APPPATH\classes\Controller\Users.php [ 17 ] in C:\xampp\htdocs\PF\application\classes\Controller\Users.php:17
2015-05-15 14:47:33 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Users.php(17): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 17, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Users->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Users.php:17
2015-05-15 14:52:57 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH\classes\Controller\Users.php [ 31 ] in file:line
2015-05-15 14:52:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-15 14:55:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: var_dump ~ APPPATH\classes\Controller\Users.php [ 21 ] in C:\xampp\htdocs\PF\application\classes\Controller\Users.php:21
2015-05-15 14:55:24 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Users.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 21, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Users->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Users.php:21
2015-05-15 15:27:28 --- CRITICAL: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_Projeto' does not have a method 'is_date' ~ SYSPATH\classes\Kohana\Validation.php [ 377 ] in file:line
2015-05-15 15:27:28 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', 'C:\xampp\htdocs...', 377, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#2 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#3 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#4 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#5 C:\xampp\htdocs\PF\application\classes\Controller\Projetos.php(30): Kohana_ORM->save()
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Projetos->action_salvar()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Projetos))
#9 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2015-05-15 15:29:18 --- CRITICAL: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_Projeto' does not have a method 'is_date' ~ SYSPATH\classes\Kohana\Validation.php [ 377 ] in file:line
2015-05-15 15:29:18 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', 'C:\xampp\htdocs...', 377, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#2 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#3 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#4 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#5 C:\xampp\htdocs\PF\application\classes\Controller\Projetos.php(30): Kohana_ORM->save()
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Projetos->action_salvar()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Projetos))
#9 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#12 {main} in file:line
2015-05-15 15:30:56 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Model\Projeto.php [ 44 ] in file:line
2015-05-15 15:30:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-15 15:31:11 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$array' (T_VARIABLE) ~ APPPATH\classes\Model\Projeto.php [ 45 ] in file:line
2015-05-15 15:31:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-15 15:34:34 --- CRITICAL: ErrorException [ 2 ]: call_user_func_array() expects parameter 1 to be a valid callback, class 'Model_Projeto' does not have a method 'is_date' ~ SYSPATH\classes\Kohana\Validation.php [ 377 ] in file:line
2015-05-15 15:34:34 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'call_user_func_...', 'C:\xampp\htdocs...', 377, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#2 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#3 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#4 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#5 C:\xampp\htdocs\PF\application\classes\Controller\Projetos.php(30): Kohana_ORM->save()
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Projetos->action_salvar()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Projetos))
#9 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#12 {main} in file:line