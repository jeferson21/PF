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
2015-06-20 09:58:15 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: indicador ~ APPPATH\classes\Controller\Indicadores.php [ 129 ] in C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php:129
2015-06-20 09:58:15 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php(129): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 129, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Indicadores->action_exportarXSD()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php:129
2015-06-20 09:59:20 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: elementFilhoIndicador ~ APPPATH\classes\Controller\Indicadores.php [ 140 ] in C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php:140
2015-06-20 09:59:20 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php(140): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 140, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Indicadores->action_exportarXSD()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php:140
2015-06-20 10:00:13 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: elementFilhoIndicador ~ APPPATH\classes\Controller\Indicadores.php [ 140 ] in C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php:140
2015-06-20 10:00:13 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php(140): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 140, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Indicadores->action_exportarXSD()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php:140
2015-06-20 11:13:43 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:1362
2015-06-20 11:13:43 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#1 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#2 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(82): Kohana_ORM->save()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Mapas->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:1362
2015-06-20 12:12:30 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=>' (T_DOUBLE_ARROW) ~ MODPATH\orm\classes\ORM.php [ 34 ] in file:line
2015-06-20 12:12:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-20 12:16:51 --- CRITICAL: Kohana_Exception [ 0 ]: The primary_key property does not exist in the Model_Indicador class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603
2015-06-20 12:16:51 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('primary_key')
#1 C:\xampp\htdocs\PF\modules\orm\classes\ORM.php(35): Kohana_ORM->__get('primary_key')
#2 C:\xampp\htdocs\PF\application\classes\Controller\Metas.php(8): ORM::get_select_ind_obj()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Metas->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Metas))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603
2015-06-20 12:21:22 --- CRITICAL: Kohana_Exception [ 0 ]: The idIINDICADOR property does not exist in the Model_Indicador class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603
2015-06-20 12:21:22 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('idIINDICADOR')
#1 C:\xampp\htdocs\PF\modules\orm\classes\ORM.php(34): Kohana_ORM->__get('idIINDICADOR')
#2 C:\xampp\htdocs\PF\application\classes\Controller\Metas.php(8): ORM::get_select_ind_obj()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Metas->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Metas))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603
2015-06-20 12:22:30 --- CRITICAL: ErrorException [ 8 ]: Undefined index: AMARELO_INI ~ APPPATH\views\templateMetas.php [ 25 ] in C:\xampp\htdocs\PF\application\views\templateMetas.php:25
2015-06-20 12:22:30 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateMetas.php(25): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 25, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\views\templateWelcome.php(57): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Metas))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\PF\application\views\templateMetas.php:25
2015-06-20 12:23:08 --- CRITICAL: ErrorException [ 8 ]: Undefined index: AMARELO_INI ~ APPPATH\views\templateMetas.php [ 25 ] in C:\xampp\htdocs\PF\application\views\templateMetas.php:25
2015-06-20 12:23:08 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateMetas.php(25): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 25, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\views\templateWelcome.php(57): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Metas))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\PF\application\views\templateMetas.php:25
2015-06-20 20:11:31 --- CRITICAL: ErrorException [ 4096 ]: Argument 3 passed to Kohana_HTML::anchor() must be of the type array, string given, called in C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php on line 34 and defined ~ SYSPATH\classes\Kohana\HTML.php [ 106 ] in C:\xampp\htdocs\PF\system\classes\Kohana\HTML.php:106
2015-06-20 20:11:31 --- DEBUG: #0 C:\xampp\htdocs\PF\system\classes\Kohana\HTML.php(106): Kohana_Core::error_handler(4096, 'Argument 3 pass...', 'C:\xampp\htdocs...', 106, Array)
#1 C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php(34): Kohana_HTML::anchor('Objetivos/detai...', 'Gerar Lucro', 'id=id-a')
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
#12 {main} in C:\xampp\htdocs\PF\system\classes\Kohana\HTML.php:106
2015-06-20 20:12:18 --- CRITICAL: ErrorException [ 4096 ]: Argument 3 passed to Kohana_HTML::anchor() must be of the type array, string given, called in C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php on line 34 and defined ~ SYSPATH\classes\Kohana\HTML.php [ 106 ] in C:\xampp\htdocs\PF\system\classes\Kohana\HTML.php:106
2015-06-20 20:12:18 --- DEBUG: #0 C:\xampp\htdocs\PF\system\classes\Kohana\HTML.php(106): Kohana_Core::error_handler(4096, 'Argument 3 pass...', 'C:\xampp\htdocs...', 106, Array)
#1 C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php(34): Kohana_HTML::anchor('Objetivos/detai...', 'Gerar Lucro', 'id="id-a"')
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
#12 {main} in C:\xampp\htdocs\PF\system\classes\Kohana\HTML.php:106
2015-06-20 20:55:12 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO) ~ APPPATH\views\templateMapaCompleto.php [ 6 ] in file:line
2015-06-20 20:55:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-20 20:55:14 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO) ~ APPPATH\views\templateMapaCompleto.php [ 6 ] in file:line
2015-06-20 20:55:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-20 20:55:15 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO) ~ APPPATH\views\templateMapaCompleto.php [ 6 ] in file:line
2015-06-20 20:55:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-20 20:55:18 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO) ~ APPPATH\views\templateMapaCompleto.php [ 6 ] in file:line
2015-06-20 20:55:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line