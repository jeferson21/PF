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