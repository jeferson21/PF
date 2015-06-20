<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-06-19 17:46:18 --- CRITICAL: ErrorException [ 8 ]: Undefined index: indicador ~ APPPATH\classes\Controller\Itens.php [ 35 ] in C:\xampp\htdocs\PF\application\classes\Controller\Itens.php:35
2015-06-19 17:46:18 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Itens.php(35): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 35, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Itens->action_salvar()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Itens))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Itens.php:35
2015-06-19 17:51:07 --- CRITICAL: Kohana_Exception [ 0 ]: The INDICADORES_idINDICADOR property does not exist in the Model_Item class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603
2015-06-19 17:51:07 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('INDICADORES_idI...')
#1 C:\xampp\htdocs\PF\application\classes\Model\Mapa.php(46): Kohana_ORM->__get('INDICADORES_idI...')
#2 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(38): Model_Mapa->get_map()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Mapas->action_get_map()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603
2015-06-19 17:53:36 --- CRITICAL: Kohana_Exception [ 0 ]: The INDICADORES_idINDICADOR property does not exist in the Model_Item class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603
2015-06-19 17:53:36 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('INDICADORES_idI...')
#1 C:\xampp\htdocs\PF\application\classes\Model\Mapa.php(46): Kohana_ORM->__get('INDICADORES_idI...')
#2 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(38): Model_Mapa->get_map()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Mapas->action_get_map()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603
2015-06-19 17:55:15 --- CRITICAL: Kohana_Exception [ 0 ]: The INDICADORES_idINDICADOR property does not exist in the Model_Item class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603
2015-06-19 17:55:15 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('INDICADORES_idI...')
#1 C:\xampp\htdocs\PF\application\classes\Model\Mapa.php(46): Kohana_ORM->__get('INDICADORES_idI...')
#2 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(38): Model_Mapa->get_map()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Mapas->action_get_map()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603
2015-06-19 17:55:35 --- CRITICAL: Kohana_Exception [ 0 ]: The INDICADORES_idINDICADOR property does not exist in the Model_Item class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603
2015-06-19 17:55:35 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('INDICADORES_idI...')
#1 C:\xampp\htdocs\PF\application\classes\Model\Mapa.php(46): Kohana_ORM->__get('INDICADORES_idI...')
#2 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(38): Model_Mapa->get_map()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Mapas->action_get_map()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603
2015-06-19 17:56:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: indicador ~ APPPATH\classes\Model\Mapa.php [ 60 ] in C:\xampp\htdocs\PF\application\classes\Model\Mapa.php:60
2015-06-19 17:56:42 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Model\Mapa.php(60): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 60, Array)
#1 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(38): Model_Mapa->get_map()
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Mapas->action_get_map()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\PF\application\classes\Model\Mapa.php:60
2015-06-19 17:57:04 --- CRITICAL: ErrorException [ 8 ]: Undefined index: indicadores ~ APPPATH\views\templateMapaCompleto.php [ 23 ] in C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php:23
2015-06-19 17:57:04 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php(23): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 23, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(41): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Mapas->action_get_map()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php:23
2015-06-19 17:59:55 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\classes\Model\Objetivo.php [ 44 ] in file:line
2015-06-19 17:59:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-19 18:00:17 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\classes\Model\Objetivo.php [ 44 ] in file:line
2015-06-19 18:00:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-19 18:01:05 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\classes\Model\Objetivo.php [ 44 ] in file:line
2015-06-19 18:01:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-19 18:20:25 --- CRITICAL: Database_Exception [ 1054 ]: [1054] Unknown column 'INDICADOR_idINDICADOR' in 'where clause' ( DELETE FROM `importacoes` WHERE `INDICADOR_idINDICADOR` = '1' ) ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 181 ] in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-06-19 18:20:25 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(4, 'DELETE FROM `im...', false, Array)
#1 C:\xampp\htdocs\PF\application\classes\Helper\XML.php(22): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\PF\application\classes\Controller\Importacoes.php(23): Helper_XML::xml_import('teste.xml')
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Importacoes->action_importarXML()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Importacoes))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-06-19 19:38:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\Model\Projeto.php [ 42 ] in file:line
2015-06-19 19:38:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-19 20:11:29 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\Projeto.php [ 15 ] in file:line
2015-06-19 20:11:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-19 20:11:37 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function explode_dates() ~ APPPATH\classes\Model\Projeto.php [ 12 ] in file:line
2015-06-19 20:11:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-19 20:17:17 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:1362
2015-06-19 20:17:17 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#1 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#2 C:\xampp\htdocs\PF\application\classes\Controller\Projetos.php(58): Kohana_ORM->save()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Projetos->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Projetos))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:1362
2015-06-19 20:18:33 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:1362
2015-06-19 20:18:33 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#1 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#2 C:\xampp\htdocs\PF\application\classes\Controller\Projetos.php(58): Kohana_ORM->save()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Projetos->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Projetos))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:1362
2015-06-19 20:21:57 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:1362
2015-06-19 20:21:57 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#1 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#2 C:\xampp\htdocs\PF\application\classes\Controller\Projetos.php(58): Kohana_ORM->save()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Projetos->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Projetos))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:1362
2015-06-19 20:25:03 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: idPROJETO ~ APPPATH\classes\Controller\Projetos.php [ 49 ] in C:\xampp\htdocs\PF\application\classes\Controller\Projetos.php:49
2015-06-19 20:25:03 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Projetos.php(49): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 49, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Projetos->action_edit()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Projetos))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Projetos.php:49
2015-06-19 20:25:17 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:1362
2015-06-19 20:25:17 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#1 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#2 C:\xampp\htdocs\PF\application\classes\Controller\Projetos.php(62): Kohana_ORM->save()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Projetos->action_edit()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Projetos))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:1362
2015-06-19 20:37:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: error ~ MODPATH\orm\classes\ORM.php [ 9 ] in C:\xampp\htdocs\PF\modules\orm\classes\ORM.php:9
2015-06-19 20:37:22 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\orm\classes\ORM.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 9, Array)
#1 [internal function]: ORM->is_date(Object(Validation), 'DATA')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#3 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#4 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#5 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#6 C:\xampp\htdocs\PF\application\classes\Controller\Projetos.php(62): Kohana_ORM->save()
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Projetos->action_edit()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Projetos))
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\PF\modules\orm\classes\ORM.php:9
2015-06-19 20:51:46 --- CRITICAL: ErrorException [ 2 ]: checkdate() expects parameter 3 to be long, string given ~ MODPATH\orm\classes\ORM.php [ 7 ] in file:line
2015-06-19 20:51:46 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'checkdate() exp...', 'C:\xampp\htdocs...', 7, Array)
#1 C:\xampp\htdocs\PF\modules\orm\classes\ORM.php(7): checkdate('12', '22', '')
#2 [internal function]: ORM->is_date(Object(Validation), 'DATA_INI')
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#4 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#5 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#6 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#7 C:\xampp\htdocs\PF\application\classes\Controller\Projetos.php(62): Kohana_ORM->save()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Projetos->action_edit()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Projetos))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#14 {main} in file:line
2015-06-19 20:51:59 --- CRITICAL: ErrorException [ 2 ]: checkdate() expects parameter 3 to be long, string given ~ MODPATH\orm\classes\ORM.php [ 7 ] in file:line
2015-06-19 20:51:59 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'checkdate() exp...', 'C:\xampp\htdocs...', 7, Array)
#1 C:\xampp\htdocs\PF\modules\orm\classes\ORM.php(7): checkdate('12', '22', '')
#2 [internal function]: ORM->is_date(Object(Validation), 'DATA_INI')
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#4 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#5 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#6 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#7 C:\xampp\htdocs\PF\application\classes\Controller\Projetos.php(62): Kohana_ORM->save()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Projetos->action_edit()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Projetos))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#14 {main} in file:line
2015-06-19 20:52:55 --- CRITICAL: ErrorException [ 2 ]: checkdate() expects parameter 2 to be long, string given ~ MODPATH\orm\classes\ORM.php [ 7 ] in file:line
2015-06-19 20:52:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'checkdate() exp...', 'C:\xampp\htdocs...', 7, Array)
#1 C:\xampp\htdocs\PF\modules\orm\classes\ORM.php(7): checkdate('12', '', '')
#2 [internal function]: ORM->is_date(Object(Validation), 'DATA_INI')
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#4 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1273): Kohana_Validation->check()
#5 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1362): Kohana_ORM->check(NULL)
#6 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->update(NULL)
#7 C:\xampp\htdocs\PF\application\classes\Controller\Projetos.php(62): Kohana_ORM->save()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Projetos->action_edit()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Projetos))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#14 {main} in file:line
2015-06-19 21:52:17 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: objetivo ~ APPPATH\classes\Model\Objetivo.php [ 51 ] in C:\xampp\htdocs\PF\application\classes\Model\Objetivo.php:51
2015-06-19 21:52:17 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Model\Objetivo.php(51): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 51, Array)
#1 C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php(23): Model_Objetivo::get_color(Array)
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(41): Kohana_View->__toString()
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Mapas->action_get_map()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#9 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\PF\application\classes\Model\Objetivo.php:51
2015-06-19 21:52:40 --- CRITICAL: Database_Exception [ 1054 ]: [1054] Unknown column 'i.INDICADOR' in 'on clause' ( SELECT `i`.`idINDICADOR` AS `INDICADORES_idINDICADOR` FROM `indicadores` AS `i` JOIN `importacoes` AS `im` ON (`i`.`INDICADOR` = `im`.`INDICADORES_idINDICADOR`) JOIN `metas` AS `m` ON (`m`.`INDICADORES_idINDICADOR` = `o`.`INDICADORES_idINDICADOR`) WHERE `i`.`OBJETIVOS_idOBJETIVO` = '1' ) ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 181 ] in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-06-19 21:52:40 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT `i`.`idI...', true, Array)
#1 C:\xampp\htdocs\PF\application\classes\Model\Objetivo.php(52): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php(23): Model_Objetivo::get_color(Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#4 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#5 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(41): Kohana_View->__toString()
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Mapas->action_get_map()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-06-19 22:07:04 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: objetivo ~ APPPATH\classes\Model\Objetivo.php [ 51 ] in C:\xampp\htdocs\PF\application\classes\Model\Objetivo.php:51
2015-06-19 22:07:04 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Model\Objetivo.php(51): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 51, Array)
#1 C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php(23): Model_Objetivo::get_color(Array)
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(41): Kohana_View->__toString()
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Mapas->action_get_map()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#9 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\PF\application\classes\Model\Objetivo.php:51
2015-06-19 22:07:18 --- CRITICAL: Database_Exception [ 1054 ]: [1054] Unknown column 'i.INDICADOR' in 'on clause' ( SELECT `i`.`idINDICADOR` AS `INDICADORES_idINDICADOR` FROM `indicadores` AS `i` JOIN `importacoes` AS `im` ON (`i`.`INDICADOR` = `im`.`INDICADORES_idINDICADOR`) JOIN `metas` AS `m` ON (`m`.`INDICADORES_idINDICADOR` = `o`.`INDICADORES_idINDICADOR`) WHERE `i`.`OBJETIVOS_idOBJETIVO` = '1' ) ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 181 ] in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-06-19 22:07:18 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT `i`.`idI...', true, Array)
#1 C:\xampp\htdocs\PF\application\classes\Model\Objetivo.php(52): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php(23): Model_Objetivo::get_color(Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#4 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#5 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(41): Kohana_View->__toString()
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Mapas->action_get_map()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-06-19 22:09:45 --- CRITICAL: Database_Exception [ 1054 ]: [1054] Unknown column 'i.INDICADOR' in 'on clause' ( SELECT `i`.`idINDICADOR` AS `INDICADORES_idINDICADOR` FROM `indicadores` AS `i` JOIN `importacoes` AS `im` ON (`i`.`INDICADOR` = `im`.`INDICADORES_idINDICADOR`) JOIN `metas` AS `m` ON (`i`.`INDICADOR` = `m`.`INDICADORES_idINDICADOR`) WHERE `i`.`OBJETIVOS_idOBJETIVO` = '1' ) ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 181 ] in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-06-19 22:09:45 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT `i`.`idI...', true, Array)
#1 C:\xampp\htdocs\PF\application\classes\Model\Objetivo.php(53): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php(23): Model_Objetivo::get_color(Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#4 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#5 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(41): Kohana_View->__toString()
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Mapas->action_get_map()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-06-19 22:14:07 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH\database\classes\Kohana\Database.php [ 507 ] in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database.php:507
2015-06-19 22:14:07 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database.php(507): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 507, Array)
#1 [internal function]: Kohana_Database->quote_column(Array)
#2 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query\Builder\Select.php(354): array_map(Array, Array)
#3 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQLi))
#4 C:\xampp\htdocs\PF\application\classes\Model\Objetivo.php(52): Kohana_Database_Query->execute()
#5 C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php(23): Model_Objetivo::get_color(Array)
#6 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#9 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(41): Kohana_View->__toString()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Mapas->action_get_map()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#13 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#16 {main} in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database.php:507
2015-06-19 22:14:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '*', expecting ')' ~ APPPATH\classes\Model\Objetivo.php [ 45 ] in file:line
2015-06-19 22:14:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-19 22:14:58 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '*', expecting ')' ~ APPPATH\classes\Model\Objetivo.php [ 45 ] in file:line
2015-06-19 22:14:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-19 22:15:12 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ MODPATH\database\classes\Kohana\Database.php [ 507 ] in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database.php:507
2015-06-19 22:15:12 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database.php(507): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 507, Array)
#1 [internal function]: Kohana_Database->quote_column(Array)
#2 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query\Builder\Select.php(354): array_map(Array, Array)
#3 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQLi))
#4 C:\xampp\htdocs\PF\application\classes\Model\Objetivo.php(52): Kohana_Database_Query->execute()
#5 C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php(23): Model_Objetivo::get_color(Array)
#6 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#9 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(41): Kohana_View->__toString()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Mapas->action_get_map()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#13 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#16 {main} in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database.php:507
2015-06-19 22:55:10 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\Objetivo.php [ 59 ] in file:line
2015-06-19 22:55:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-19 22:55:27 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\Objetivo.php [ 59 ] in file:line
2015-06-19 22:55:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-19 22:55:41 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function get_indicador_color() ~ APPPATH\classes\Model\Objetivo.php [ 58 ] in file:line
2015-06-19 22:55:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-19 23:12:43 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\templateMapaCompleto.php [ 18 ] in C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php:18
2015-06-19 23:12:43 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php(18): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\xampp\htdocs...', 18, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(42): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Mapas->action_get_map()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php:18
2015-06-19 23:12:48 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\templateMapaCompleto.php [ 18 ] in C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php:18
2015-06-19 23:12:48 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php(18): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\xampp\htdocs...', 18, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(42): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Mapas->action_get_map()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php:18
2015-06-19 23:24:26 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\templateMapaCompleto.php [ 44 ] in file:line
2015-06-19 23:24:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-19 23:24:27 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\templateMapaCompleto.php [ 44 ] in file:line
2015-06-19 23:24:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-19 23:24:30 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\templateMapaCompleto.php [ 44 ] in file:line
2015-06-19 23:24:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-19 23:24:34 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\templateMapaCompleto.php [ 44 ] in file:line
2015-06-19 23:24:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-19 23:24:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\templateMapaCompleto.php [ 44 ] in file:line
2015-06-19 23:24:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-19 23:24:48 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\templateMapaCompleto.php [ 44 ] in file:line
2015-06-19 23:24:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-19 23:24:54 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\templateMapaCompleto.php [ 44 ] in file:line
2015-06-19 23:24:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-19 23:26:01 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\templateMapaCompleto.php [ 29 ] in C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php:29
2015-06-19 23:26:01 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php(29): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\xampp\htdocs...', 29, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(42): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Mapas->action_get_map()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php:29
2015-06-19 23:26:43 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Objetivo as array ~ APPPATH\views\templateObjetivosDetails.php [ 4 ] in file:line
2015-06-19 23:26:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-19 23:29:47 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\Objetivos.php [ 55 ] in file:line
2015-06-19 23:29:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-19 23:29:56 --- CRITICAL: Kohana_Exception [ 0 ]: The find_all property does not exist in the Model_Indicador class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603
2015-06-19 23:29:56 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('find_all')
#1 C:\xampp\htdocs\PF\application\classes\Controller\Objetivos.php(52): Kohana_ORM->__get('find_all')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Objetivos->action_details()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Objetivos))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603
2015-06-19 23:40:26 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO), expecting ',' or ';' ~ APPPATH\views\templateObjetivosDetails.php [ 11 ] in file:line
2015-06-19 23:40:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-19 23:40:36 --- CRITICAL: Kohana_Exception [ 0 ]: The VALOR property does not exist in the Model_Indicador class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603
2015-06-19 23:40:36 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('VALOR')
#1 C:\xampp\htdocs\PF\application\classes\Model\Objetivo.php(70): Kohana_ORM->__get('VALOR')
#2 C:\xampp\htdocs\PF\application\classes\Model\Objetivo.php(80): Model_Objetivo::get_indicador_color(Object(Model_Indicador))
#3 C:\xampp\htdocs\PF\application\views\templateObjetivosDetails.php(9): Model_Objetivo::get_indicador_color_code(Object(Model_Indicador))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#5 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#6 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#7 C:\xampp\htdocs\PF\application\views\templateWelcome.php(57): Kohana_View->__toString()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#9 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#12 [internal function]: Kohana_Controller->execute()
#13 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Objetivos))
#14 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#15 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#16 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#17 {main} in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603