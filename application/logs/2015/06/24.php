<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-06-24 06:25:47 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: indicadores ~ APPPATH\views\templateIndicadores.php [ 27 ] in C:\xampp\htdocs\PF\application\views\templateIndicadores.php:27
2015-06-24 06:25:47 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateIndicadores.php(27): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 27, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\views\templateWelcome.php(45): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\PF\application\views\templateIndicadores.php:27
2015-06-24 06:29:03 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\Indicadores.php [ 38 ] in file:line
2015-06-24 06:29:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-24 06:29:44 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\templateIndicadores.php [ 27 ] in C:\xampp\htdocs\PF\application\views\templateIndicadores.php:27
2015-06-24 06:29:44 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateIndicadores.php(27): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\xampp\htdocs...', 27, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\views\templateWelcome.php(45): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\PF\application\views\templateIndicadores.php:27
2015-06-24 06:31:22 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\templateIndicadores.php [ 27 ] in C:\xampp\htdocs\PF\application\views\templateIndicadores.php:27
2015-06-24 06:31:22 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateIndicadores.php(27): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\xampp\htdocs...', 27, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\views\templateWelcome.php(45): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\PF\application\views\templateIndicadores.php:27
2015-06-24 06:35:57 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\templateIndicadores.php [ 27 ] in C:\xampp\htdocs\PF\application\views\templateIndicadores.php:27
2015-06-24 06:35:57 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateIndicadores.php(27): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\xampp\htdocs...', 27, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\views\templateWelcome.php(45): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\PF\application\views\templateIndicadores.php:27
2015-06-24 06:37:29 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\templateIndicadores.php [ 27 ] in C:\xampp\htdocs\PF\application\views\templateIndicadores.php:27
2015-06-24 06:37:29 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateIndicadores.php(27): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\xampp\htdocs...', 27, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\views\templateWelcome.php(45): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\PF\application\views\templateIndicadores.php:27
2015-06-24 11:47:15 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''-'' (T_CONSTANT_ENCAPSED_STRING), expecting ',' or ';' ~ APPPATH\views\templateObjetivosDetails.php [ 22 ] in file:line
2015-06-24 11:47:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-24 11:50:20 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH\views\templateObjetivosDetails.php [ 22 ] in file:line
2015-06-24 11:50:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-24 11:50:42 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH\views\templateObjetivosDetails.php [ 22 ] in file:line
2015-06-24 11:50:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-24 11:51:41 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\views\templateObjetivosDetails.php [ 32 ] in file:line
2015-06-24 11:51:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-24 11:51:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: meta ~ APPPATH\views\templateObjetivosDetails.php [ 21 ] in C:\xampp\htdocs\PF\application\views\templateObjetivosDetails.php:21
2015-06-24 11:51:51 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateObjetivosDetails.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 21, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\views\templateWelcome.php(45): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Objetivos))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\PF\application\views\templateObjetivosDetails.php:21
2015-06-24 12:14:47 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: elementFilhoProj ~ APPPATH\classes\Controller\Indicadores.php [ 172 ] in C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php:172
2015-06-24 12:14:47 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php(172): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 172, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Indicadores->action_exportarXSD()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php:172
2015-06-24 12:15:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: projeto ~ APPPATH\classes\Controller\Indicadores.php [ 175 ] in C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php:175
2015-06-24 12:15:28 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php(175): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 175, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Indicadores->action_exportarXSD()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php:175
2015-06-24 12:24:54 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$dom' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH\classes\Controller\Indicadores.php [ 191 ] in file:line
2015-06-24 12:24:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-24 12:25:34 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: projeto ~ APPPATH\classes\Controller\Indicadores.php [ 156 ] in C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php:156
2015-06-24 12:25:34 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php(156): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 156, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Indicadores->action_exportarXSD()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php:156
2015-06-24 12:26:55 --- CRITICAL: Kohana_Exception [ 0 ]: The TIPO_IND property does not exist in the Model_Projeto class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603
2015-06-24 12:26:55 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('TIPO_IND')
#1 C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php(156): Kohana_ORM->__get('TIPO_IND')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Indicadores->action_exportarXSD()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603
2015-06-24 17:48:42 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Model\Objetivo.php [ 120 ] in file:line
2015-06-24 17:48:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-24 18:21:19 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: color ~ APPPATH\classes\Model\Objetivo.php [ 78 ] in C:\xampp\htdocs\PF\application\classes\Model\Objetivo.php:78
2015-06-24 18:21:19 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Model\Objetivo.php(78): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 78, Array)
#1 C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php(33): Model_Objetivo::get_color(Array)
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(42): Kohana_View->__toString()
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Mapas->action_get_map()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#9 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\PF\application\classes\Model\Objetivo.php:78