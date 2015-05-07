<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-01-18 10:24:01 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\welcome.php [ 40 ] in file:line
2015-01-18 10:24:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-18 11:27:45 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\welcome.php [ 34 ] in file:line
2015-01-18 11:27:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-18 13:22:54 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Alunos' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2015-01-18 13:22:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-18 13:24:22 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Alunos' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2015-01-18 13:24:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-18 13:24:25 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Alunos' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2015-01-18 13:24:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-18 13:27:08 --- CRITICAL: Kohana_Exception [ 0 ]: The nome_al property does not exist in the Model_Aluno class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\universidade\modules\orm\classes\Kohana\ORM.php:603
2015-01-18 13:27:08 --- DEBUG: #0 C:\xampp\htdocs\universidade\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('nome_al')
#1 C:\xampp\htdocs\universidade\application\views\index\cadastrarAl.php(6): Kohana_ORM->__get('nome_al')
#2 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\universidade\application\views\templateWelcome.php(6): Kohana_View->__toString()
#6 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\universidade\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\universidade\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\universidade\modules\orm\classes\Kohana\ORM.php:603
2015-01-18 13:29:04 --- CRITICAL: Kohana_Exception [ 0 ]: The nome_al property does not exist in the Model_Aluno class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\universidade\modules\orm\classes\Kohana\ORM.php:603
2015-01-18 13:29:04 --- DEBUG: #0 C:\xampp\htdocs\universidade\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('nome_al')
#1 C:\xampp\htdocs\universidade\application\views\index\cadastrarAl.php(6): Kohana_ORM->__get('nome_al')
#2 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\universidade\application\views\templateWelcome.php(6): Kohana_View->__toString()
#6 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\universidade\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\universidade\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\universidade\modules\orm\classes\Kohana\ORM.php:603
2015-01-18 13:31:08 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: usuarios ~ APPPATH\views\index\cadastrarAl.php [ 6 ] in C:\xampp\htdocs\universidade\application\views\index\cadastrarAl.php:6
2015-01-18 13:31:08 --- DEBUG: #0 C:\xampp\htdocs\universidade\application\views\index\cadastrarAl.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 6, Array)
#1 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\universidade\application\views\templateWelcome.php(6): Kohana_View->__toString()
#5 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#11 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\universidade\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\universidade\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\universidade\application\views\index\cadastrarAl.php:6
2015-01-18 13:31:20 --- CRITICAL: Kohana_Exception [ 0 ]: The nome_al property does not exist in the Model_Aluno class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\universidade\modules\orm\classes\Kohana\ORM.php:603
2015-01-18 13:31:20 --- DEBUG: #0 C:\xampp\htdocs\universidade\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('nome_al')
#1 C:\xampp\htdocs\universidade\application\views\index\cadastrarAl.php(6): Kohana_ORM->__get('nome_al')
#2 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\universidade\application\views\templateWelcome.php(6): Kohana_View->__toString()
#6 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\universidade\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\universidade\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\universidade\modules\orm\classes\Kohana\ORM.php:603
2015-01-18 13:32:56 --- CRITICAL: Kohana_Exception [ 0 ]: The nome_al property does not exist in the Model_Aluno class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\universidade\modules\orm\classes\Kohana\ORM.php:603
2015-01-18 13:32:56 --- DEBUG: #0 C:\xampp\htdocs\universidade\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('nome_al')
#1 C:\xampp\htdocs\universidade\application\views\index\cadastrarAl.php(6): Kohana_ORM->__get('nome_al')
#2 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\universidade\application\views\templateWelcome.php(6): Kohana_View->__toString()
#6 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\universidade\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\universidade\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\universidade\modules\orm\classes\Kohana\ORM.php:603
2015-01-18 13:39:13 --- CRITICAL: Kohana_Exception [ 0 ]: The nome_al property does not exist in the Model_Aluno class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\universidade\modules\orm\classes\Kohana\ORM.php:603
2015-01-18 13:39:13 --- DEBUG: #0 C:\xampp\htdocs\universidade\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('nome_al')
#1 C:\xampp\htdocs\universidade\application\views\index\list.php(6): Kohana_ORM->__get('nome_al')
#2 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\universidade\application\views\templateWelcome.php(6): Kohana_View->__toString()
#6 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\universidade\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\universidade\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\universidade\modules\orm\classes\Kohana\ORM.php:603
2015-01-18 13:42:23 --- CRITICAL: Kohana_Exception [ 0 ]: The nome_al property does not exist in the Model_Aluno class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\universidade\modules\orm\classes\Kohana\ORM.php:603
2015-01-18 13:42:23 --- DEBUG: #0 C:\xampp\htdocs\universidade\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('nome_al')
#1 C:\xampp\htdocs\universidade\application\views\index\list.php(6): Kohana_ORM->__get('nome_al')
#2 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\universidade\application\views\templateWelcome.php(6): Kohana_View->__toString()
#6 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\universidade\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\universidade\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\universidade\modules\orm\classes\Kohana\ORM.php:603
2015-01-18 13:42:43 --- CRITICAL: Kohana_Exception [ 0 ]: The nome_al property does not exist in the Model_Aluno class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\universidade\modules\orm\classes\Kohana\ORM.php:603
2015-01-18 13:42:43 --- DEBUG: #0 C:\xampp\htdocs\universidade\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('nome_al')
#1 C:\xampp\htdocs\universidade\application\views\index\list.php(6): Kohana_ORM->__get('nome_al')
#2 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\universidade\application\views\templateWelcome.php(6): Kohana_View->__toString()
#6 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\universidade\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\universidade\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\universidade\modules\orm\classes\Kohana\ORM.php:603
2015-01-18 13:44:51 --- CRITICAL: Kohana_Exception [ 0 ]: The matricula property does not exist in the Model_Aluno class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\universidade\modules\orm\classes\Kohana\ORM.php:603
2015-01-18 13:44:51 --- DEBUG: #0 C:\xampp\htdocs\universidade\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('matricula')
#1 C:\xampp\htdocs\universidade\application\views\index\list.php(7): Kohana_ORM->__get('matricula')
#2 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\universidade\application\views\templateWelcome.php(6): Kohana_View->__toString()
#6 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\universidade\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\universidade\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\universidade\modules\orm\classes\Kohana\ORM.php:603
2015-01-18 13:45:06 --- CRITICAL: Kohana_Exception [ 0 ]: The matricula property does not exist in the Model_Aluno class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\universidade\modules\orm\classes\Kohana\ORM.php:603
2015-01-18 13:45:06 --- DEBUG: #0 C:\xampp\htdocs\universidade\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('matricula')
#1 C:\xampp\htdocs\universidade\application\views\index\list.php(7): Kohana_ORM->__get('matricula')
#2 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\universidade\application\views\templateWelcome.php(6): Kohana_View->__toString()
#6 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\universidade\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\universidade\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\universidade\modules\orm\classes\Kohana\ORM.php:603
2015-01-18 13:45:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '?>' ~ APPPATH\views\index\list.php [ 7 ] in file:line
2015-01-18 13:45:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-18 13:46:57 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '?>' ~ APPPATH\views\index\list.php [ 7 ] in file:line
2015-01-18 13:46:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-18 13:51:23 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete aluno model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\xampp\htdocs\universidade\application\classes\Controller\welcome.php:39
2015-01-18 13:51:23 --- DEBUG: #0 C:\xampp\htdocs\universidade\application\classes\Controller\welcome.php(39): Kohana_ORM->delete()
#1 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_deletar()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\universidade\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\universidade\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\universidade\application\classes\Controller\welcome.php:39
2015-01-18 14:03:14 --- CRITICAL: Database_Exception [ 1054 ]: [1054] Unknown column 'aluno.id' in 'where clause' ( SELECT `aluno`.`MATRICULA` AS `MATRICULA`, `aluno`.`NOME_AL` AS `NOME_AL`, `aluno`.`EMAIL` AS `EMAIL` FROM `alunos` AS `aluno` WHERE `aluno`.`id` = '4' LIMIT 1 ) ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 181 ] in C:\xampp\htdocs\universidade\modules\database\classes\Kohana\Database\Query.php:251
2015-01-18 14:03:14 --- DEBUG: #0 C:\xampp\htdocs\universidade\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT `aluno`....', false, Array)
#1 C:\xampp\htdocs\universidade\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\xampp\htdocs\universidade\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 C:\xampp\htdocs\universidade\modules\orm\classes\Kohana\ORM.php(271): Kohana_ORM->find()
#4 C:\xampp\htdocs\universidade\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct('4')
#5 C:\xampp\htdocs\universidade\application\classes\Controller\welcome.php(45): Kohana_ORM::factory('Aluno', '4')
#6 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_editar()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#9 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\universidade\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\universidade\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\universidade\modules\database\classes\Kohana\Database\Query.php:251
2015-01-18 14:06:08 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$_primary_key' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH\classes\Model\aluno.php [ 4 ] in file:line
2015-01-18 14:06:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-18 14:06:12 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$_primary_key' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH\classes\Model\aluno.php [ 4 ] in file:line
2015-01-18 14:06:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-18 14:07:22 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$_primary_key' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH\classes\Model\aluno.php [ 4 ] in file:line
2015-01-18 14:07:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-18 14:07:48 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$_primary_key' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH\classes\Model\aluno.php [ 4 ] in file:line
2015-01-18 14:07:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-18 14:08:02 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$_primary_key' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH\classes\Model\aluno.php [ 4 ] in file:line
2015-01-18 14:08:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-18 14:08:12 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$_primary_key' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH\classes\Model\aluno.php [ 4 ] in file:line
2015-01-18 14:08:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-18 15:04:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: disciplina ~ APPPATH\classes\Controller\controllerDisciplina.php [ 10 ] in C:\xampp\htdocs\universidade\application\classes\Controller\controllerDisciplina.php:10
2015-01-18 15:04:40 --- DEBUG: #0 C:\xampp\htdocs\universidade\application\classes\Controller\controllerDisciplina.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 10, Array)
#1 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller.php(84): Controller_controllerDisciplina->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_controllerDisciplina))
#4 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\universidade\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\universidade\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\universidade\application\classes\Controller\controllerDisciplina.php:10
2015-01-18 15:06:48 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: disciplina ~ APPPATH\classes\Controller\controllerDisciplina.php [ 10 ] in C:\xampp\htdocs\universidade\application\classes\Controller\controllerDisciplina.php:10
2015-01-18 15:06:48 --- DEBUG: #0 C:\xampp\htdocs\universidade\application\classes\Controller\controllerDisciplina.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 10, Array)
#1 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller.php(84): Controller_controllerDisciplina->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_controllerDisciplina))
#4 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\universidade\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\universidade\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\universidade\application\classes\Controller\controllerDisciplina.php:10
2015-01-18 15:08:18 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: disciplina ~ APPPATH\classes\Controller\controllerDisciplina.php [ 10 ] in C:\xampp\htdocs\universidade\application\classes\Controller\controllerDisciplina.php:10
2015-01-18 15:08:18 --- DEBUG: #0 C:\xampp\htdocs\universidade\application\classes\Controller\controllerDisciplina.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 10, Array)
#1 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller.php(84): Controller_controllerDisciplina->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_controllerDisciplina))
#4 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\universidade\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\universidade\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\universidade\application\classes\Controller\controllerDisciplina.php:10
2015-01-18 15:09:27 --- CRITICAL: View_Exception [ 0 ]: The requested view index/TemplateDisciplina could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\universidade\system\classes\Kohana\View.php:137
2015-01-18 15:09:27 --- DEBUG: #0 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(137): Kohana_View->set_filename('index/TemplateD...')
#1 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(30): Kohana_View->__construct('index/TemplateD...', NULL)
#2 C:\xampp\htdocs\universidade\application\classes\Controller\controllerDisciplina.php(9): Kohana_View::factory('index/TemplateD...')
#3 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller.php(84): Controller_controllerDisciplina->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_controllerDisciplina))
#6 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\universidade\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\universidade\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\universidade\system\classes\Kohana\View.php:137
2015-01-18 15:09:40 --- CRITICAL: View_Exception [ 0 ]: The requested view index/templateDisciplina could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\universidade\system\classes\Kohana\View.php:137
2015-01-18 15:09:40 --- DEBUG: #0 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(137): Kohana_View->set_filename('index/templateD...')
#1 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(30): Kohana_View->__construct('index/templateD...', NULL)
#2 C:\xampp\htdocs\universidade\application\classes\Controller\controllerDisciplina.php(9): Kohana_View::factory('index/templateD...')
#3 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller.php(84): Controller_controllerDisciplina->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_controllerDisciplina))
#6 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\universidade\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\universidade\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\universidade\system\classes\Kohana\View.php:137
2015-01-18 15:09:58 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\templateDisciplina.php [ 16 ] in C:\xampp\htdocs\universidade\application\views\templateDisciplina.php:16
2015-01-18 15:09:58 --- DEBUG: #0 C:\xampp\htdocs\universidade\application\views\templateDisciplina.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 16, Array)
#1 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\universidade\application\views\templateWelcome.php(13): Kohana_View->__toString()
#5 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_controllerDisciplina))
#11 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\universidade\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\universidade\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\universidade\application\views\templateDisciplina.php:16
2015-01-18 15:57:41 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\controllerTurma.php [ 45 ] in file:line
2015-01-18 15:57:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-18 15:58:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: disciplinas ~ APPPATH\classes\Controller\controllerTurma.php [ 18 ] in C:\xampp\htdocs\universidade\application\classes\Controller\controllerTurma.php:18
2015-01-18 15:58:25 --- DEBUG: #0 C:\xampp\htdocs\universidade\application\classes\Controller\controllerTurma.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 18, Array)
#1 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller.php(84): Controller_controllerTurma->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_controllerTurma))
#4 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\universidade\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\universidade\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\universidade\application\classes\Controller\controllerTurma.php:18