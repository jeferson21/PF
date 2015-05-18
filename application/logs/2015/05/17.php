<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-05-17 06:36:59 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''DATA_INI'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH\messages\forms\projeto.php [ 16 ] in file:line
2015-05-17 06:36:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-17 06:47:42 --- CRITICAL: ErrorException [ 2 ]: checkdate() expects parameter 3 to be long, string given ~ MODPATH\orm\classes\ORM.php [ 8 ] in file:line
2015-05-17 06:47:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'checkdate() exp...', 'C:\xampp\htdocs...', 8, Array)
#1 C:\xampp\htdocs\PF\modules\orm\classes\ORM.php(8): checkdate('21', '11', '')
#2 [internal function]: ORM->is_date(Object(Validation), 'DATA_INI')
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#4 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#5 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#6 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#7 C:\xampp\htdocs\PF\application\classes\Controller\Projetos.php(30): Kohana_ORM->save()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Projetos->action_salvar()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Projetos))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#14 {main} in file:line
2015-05-17 06:48:55 --- CRITICAL: ErrorException [ 2 ]: checkdate() expects parameter 3 to be long, string given ~ MODPATH\orm\classes\ORM.php [ 8 ] in file:line
2015-05-17 06:48:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'checkdate() exp...', 'C:\xampp\htdocs...', 8, Array)
#1 C:\xampp\htdocs\PF\modules\orm\classes\ORM.php(8): checkdate('21', '11', '')
#2 [internal function]: ORM->is_date(Object(Validation), 'DATA_INI')
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#4 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#5 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#6 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#7 C:\xampp\htdocs\PF\application\classes\Controller\Projetos.php(30): Kohana_ORM->save()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Projetos->action_salvar()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Projetos))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#14 {main} in file:line
2015-05-17 06:51:33 --- CRITICAL: ErrorException [ 2 ]: checkdate() expects parameter 3 to be long, string given ~ MODPATH\orm\classes\ORM.php [ 8 ] in file:line
2015-05-17 06:51:33 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'checkdate() exp...', 'C:\xampp\htdocs...', 8, Array)
#1 C:\xampp\htdocs\PF\modules\orm\classes\ORM.php(8): checkdate('21', '11', '')
#2 [internal function]: ORM->is_date(Object(Validation), 'DATA_INI')
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#4 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#5 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#6 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#7 C:\xampp\htdocs\PF\application\classes\Controller\Projetos.php(30): Kohana_ORM->save()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Projetos->action_salvar()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Projetos))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#14 {main} in file:line
2015-05-17 06:56:08 --- CRITICAL: ErrorException [ 2 ]: checkdate() expects parameter 3 to be long, string given ~ MODPATH\orm\classes\ORM.php [ 8 ] in file:line
2015-05-17 06:56:08 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'checkdate() exp...', 'C:\xampp\htdocs...', 8, Array)
#1 C:\xampp\htdocs\PF\modules\orm\classes\ORM.php(8): checkdate('21', '11', '')
#2 [internal function]: ORM->is_date(Object(Validation), 'DATA_INI')
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#4 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#5 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#6 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#7 C:\xampp\htdocs\PF\application\classes\Controller\Projetos.php(30): Kohana_ORM->save()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Projetos->action_salvar()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Projetos))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#14 {main} in file:line
2015-05-17 06:57:42 --- CRITICAL: ErrorException [ 2 ]: checkdate() expects parameter 3 to be long, string given ~ MODPATH\orm\classes\ORM.php [ 8 ] in file:line
2015-05-17 06:57:42 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'checkdate() exp...', 'C:\xampp\htdocs...', 8, Array)
#1 C:\xampp\htdocs\PF\modules\orm\classes\ORM.php(8): checkdate('11', '11', '')
#2 [internal function]: ORM->is_date(Object(Validation), 'DATA_INI')
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#4 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#5 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#6 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#7 C:\xampp\htdocs\PF\application\classes\Controller\Projetos.php(30): Kohana_ORM->save()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Projetos->action_salvar()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Projetos))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#14 {main} in file:line
2015-05-17 06:58:13 --- CRITICAL: ErrorException [ 2 ]: checkdate() expects parameter 3 to be long, string given ~ MODPATH\orm\classes\ORM.php [ 8 ] in file:line
2015-05-17 06:58:13 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'checkdate() exp...', 'C:\xampp\htdocs...', 8, Array)
#1 C:\xampp\htdocs\PF\modules\orm\classes\ORM.php(8): checkdate('11', '11', '')
#2 [internal function]: ORM->is_date(Object(Validation), 'DATA_INI')
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#4 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#5 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#6 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#7 C:\xampp\htdocs\PF\application\classes\Controller\Projetos.php(30): Kohana_ORM->save()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Projetos->action_salvar()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Projetos))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#14 {main} in file:line
2015-05-17 06:59:41 --- CRITICAL: ErrorException [ 2 ]: checkdate() expects parameter 3 to be long, string given ~ MODPATH\orm\classes\ORM.php [ 8 ] in file:line
2015-05-17 06:59:41 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'checkdate() exp...', 'C:\xampp\htdocs...', 8, Array)
#1 C:\xampp\htdocs\PF\modules\orm\classes\ORM.php(8): checkdate('11', '11', '')
#2 [internal function]: ORM->is_date(Object(Validation), 'DATA_INI')
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#4 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#5 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#6 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#7 C:\xampp\htdocs\PF\application\classes\Controller\Projetos.php(30): Kohana_ORM->save()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Projetos->action_salvar()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Projetos))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#14 {main} in file:line
2015-05-17 07:08:39 --- CRITICAL: Kohana_Exception [ 0 ]: The DESCRICAO_OBJ property does not exist in the Model_Grupo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603
2015-05-17 07:08:39 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('DESCRICAO_OBJ')
#1 C:\xampp\htdocs\PF\application\views\templateObjetivos.php(24): Kohana_ORM->__get('DESCRICAO_OBJ')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\PF\application\views\templateWelcome.php(41): Kohana_View->__toString()
#6 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Objetivos))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603
2015-05-17 11:13:21 --- CRITICAL: Kohana_Exception [ 0 ]: The requested route does not exist: logout ~ SYSPATH\classes\Kohana\Route.php [ 109 ] in C:\xampp\htdocs\PF\application\views\templateWelcome.php:38
2015-05-17 11:13:21 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateWelcome.php(38): Kohana_Route::get('logout')
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perspectivas))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\PF\application\views\templateWelcome.php:38
2015-05-17 11:14:29 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Users::$is_logged ~ APPPATH\classes\Controller\Users.php [ 49 ] in C:\xampp\htdocs\PF\application\classes\Controller\Users.php:49
2015-05-17 11:14:29 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Users.php(49): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 49, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Users->action_logout()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Users.php:49
2015-05-17 11:17:35 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Users::$is_logged ~ APPPATH\classes\Controller\Users.php [ 49 ] in C:\xampp\htdocs\PF\application\classes\Controller\Users.php:49
2015-05-17 11:17:35 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Users.php(49): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 49, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Users->action_logout()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Users.php:49
2015-05-17 11:23:17 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Users::$is_logged ~ APPPATH\classes\Controller\Users.php [ 50 ] in C:\xampp\htdocs\PF\application\classes\Controller\Users.php:50
2015-05-17 11:23:17 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Users.php(50): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 50, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Users->action_logout()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Users.php:50
2015-05-17 14:16:52 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Users::$is_logged ~ APPPATH\classes\Controller\Users.php [ 50 ] in C:\xampp\htdocs\PF\application\classes\Controller\Users.php:50
2015-05-17 14:16:52 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Users.php(50): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 50, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Users->action_logout()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Users.php:50
2015-05-17 14:17:08 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Users::$logged_in ~ APPPATH\classes\Controller\Users.php [ 50 ] in C:\xampp\htdocs\PF\application\classes\Controller\Users.php:50
2015-05-17 14:17:08 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Users.php(50): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 50, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Users->action_logout()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Users.php:50
2015-05-17 17:18:49 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\Users.php [ 74 ] in file:line
2015-05-17 17:18:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-17 17:19:12 --- CRITICAL: ErrorException [ 1 ]: Class 'Flash' not found ~ APPPATH\classes\Controller\Users.php [ 52 ] in file:line
2015-05-17 17:19:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-17 17:19:57 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Users::$is_logged ~ APPPATH\classes\Controller\Users.php [ 15 ] in C:\xampp\htdocs\PF\application\classes\Controller\Users.php:15
2015-05-17 17:19:57 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Users.php(15): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 15, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Users->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Users.php:15
2015-05-17 17:23:22 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Users::$is_logged ~ APPPATH\classes\Controller\Users.php [ 15 ] in C:\xampp\htdocs\PF\application\classes\Controller\Users.php:15
2015-05-17 17:23:22 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Users.php(15): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 15, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Users->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Users.php:15
2015-05-17 17:28:36 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Users::is_logged() ~ APPPATH\classes\Controller\Users.php [ 14 ] in file:line
2015-05-17 17:28:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-17 17:28:55 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Users::$is_logged ~ APPPATH\classes\Controller\Users.php [ 16 ] in C:\xampp\htdocs\PF\application\classes\Controller\Users.php:16
2015-05-17 17:28:55 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Users.php(16): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 16, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Users->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Users.php:16
2015-05-17 17:34:15 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Controller\Users.php [ 49 ] in file:line
2015-05-17 17:34:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line