<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-06-20 00:52:21 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ',' ~ APPPATH\views\templateObjetivosDetails.php [ 17 ] in file:line
2015-06-20 00:52:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-20 07:56:36 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: obejtivos ~ APPPATH\classes\Controller\Indicadores.php [ 137 ] in C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php:137
2015-06-20 07:56:36 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php(137): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 137, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Indicadores->action_exportarXSD()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php:137
2015-06-20 07:56:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: objtivos ~ APPPATH\classes\Controller\Indicadores.php [ 137 ] in C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php:137
2015-06-20 07:56:53 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php(137): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 137, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Indicadores->action_exportarXSD()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php:137
2015-06-20 07:57:11 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQLi_Result::$objetivo ~ APPPATH\classes\Controller\Indicadores.php [ 142 ] in C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php:142
2015-06-20 07:57:11 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php(142): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 142, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Indicadores->action_exportarXSD()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php:142
2015-06-20 07:57:28 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQLi_Result::$DESCRICAO_OBJ ~ APPPATH\classes\Controller\Indicadores.php [ 142 ] in C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php:142
2015-06-20 07:57:28 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php(142): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 142, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Indicadores->action_exportarXSD()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php:142
2015-06-20 08:05:40 --- CRITICAL: Kohana_Exception [ 0 ]: The VERMELHO_INI property does not exist in the Model_Meta class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603
2015-06-20 08:05:40 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('VERMELHO_INI')
#1 C:\xampp\htdocs\PF\application\views\edit\editMetas.php(15): Kohana_ORM->__get('VERMELHO_INI')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\PF\application\views\templateWelcome.php(57): Kohana_View->__toString()
#6 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Metas))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603
2015-06-20 08:16:32 --- CRITICAL: Kohana_Exception [ 0 ]: The DESCRICAO_IND property does not exist in the Model_Indicador class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603
2015-06-20 08:16:32 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('DESCRICAO_IND')
#1 C:\xampp\htdocs\PF\application\views\edit\editMetas.php(57): Kohana_ORM->__get('DESCRICAO_IND')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\PF\application\views\templateWelcome.php(57): Kohana_View->__toString()
#6 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Metas))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603
2015-06-20 08:17:22 --- CRITICAL: Kohana_Exception [ 0 ]: The DESCRICAO_IND property does not exist in the Model_Indicador class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603
2015-06-20 08:17:22 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('DESCRICAO_IND')
#1 C:\xampp\htdocs\PF\application\views\edit\editMetas.php(57): Kohana_ORM->__get('DESCRICAO_IND')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\PF\application\views\templateWelcome.php(57): Kohana_View->__toString()
#6 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Metas))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603