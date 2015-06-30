<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-06-27 14:01:14 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')', expecting variable (T_VARIABLE) or '$' ~ APPPATH\classes\Controller\Objetivos.php [ 58 ] in file:line
2015-06-27 14:01:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-27 14:02:06 --- CRITICAL: ErrorException [ 8 ]: Undefined property: stdClass::$NOME_PROJ ~ APPPATH\views\templateObjetivosDetails.php [ 18 ] in C:\xampp\htdocs\PF\application\views\templateObjetivosDetails.php:18
2015-06-27 14:02:06 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateObjetivosDetails.php(18): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 18, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\views\templateWelcome.php(44): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Objetivos))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\PF\application\views\templateObjetivosDetails.php:18
2015-06-27 14:22:49 --- CRITICAL: ErrorException [ 1 ]: Cannot access protected property Database_MySQLi_Result::$_total_rows ~ APPPATH\classes\Model\Objetivo.php [ 62 ] in file:line
2015-06-27 14:22:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-27 14:23:09 --- CRITICAL: ErrorException [ 1 ]: Cannot access protected property Database_MySQLi_Result::$_total_rows ~ APPPATH\classes\Model\Objetivo.php [ 62 ] in file:line
2015-06-27 14:23:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-27 14:23:17 --- CRITICAL: ErrorException [ 1 ]: Cannot access protected property Database_MySQLi_Result::$_total_rows ~ APPPATH\classes\Model\Objetivo.php [ 62 ] in file:line
2015-06-27 14:23:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-27 14:23:40 --- CRITICAL: ErrorException [ 1 ]: Cannot access protected property Database_MySQLi_Result::$_total_rows ~ APPPATH\classes\Model\Objetivo.php [ 63 ] in file:line
2015-06-27 14:23:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-27 14:59:17 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: XML ~ APPPATH\classes\Controller\Indicadores.php [ 91 ] in C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php:91
2015-06-27 14:59:17 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php(91): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 91, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Indicadores->action_exportarXSD()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php:91
2015-06-27 15:06:25 --- CRITICAL: Exception [ 0 ]: String could not be parsed as XML ~ APPPATH\classes\Controller\Indicadores.php [ 93 ] in C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php:0
2015-06-27 15:06:25 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php(0): SimpleXMLElement->__construct()
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Indicadores->action_exportarXSD()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php:0
2015-06-27 15:07:04 --- CRITICAL: Exception [ 0 ]: String could not be parsed as XML ~ APPPATH\classes\Controller\Indicadores.php [ 93 ] in C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php:0
2015-06-27 15:07:04 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php(0): SimpleXMLElement->__construct()
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Indicadores->action_exportarXSD()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php:0
2015-06-27 15:07:49 --- CRITICAL: Exception [ 0 ]: String could not be parsed as XML ~ APPPATH\classes\Controller\Indicadores.php [ 93 ] in C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php:0
2015-06-27 15:07:49 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php(0): SimpleXMLElement->__construct()
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Indicadores->action_exportarXSD()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php:0
2015-06-27 15:16:55 --- CRITICAL: ErrorException [ 4096 ]: Object of class DOMDocument could not be converted to string ~ APPPATH\classes\Controller\Indicadores.php [ 161 ] in file:line
2015-06-27 15:16:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(4096, 'Object of class...', 'C:\xampp\htdocs...', 161, Array)
#1 C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php(161): str_replace('<?xml version="...', '<?xml version="...', 'Object')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Indicadores->action_exportarXSD()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-06-27 15:25:29 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant UTF - assumed 'UTF' ~ APPPATH\views\templateXML.php [ 8 ] in C:\xampp\htdocs\PF\application\views\templateXML.php:8
2015-06-27 15:25:29 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateXML.php(8): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\xampp\htdocs...', 8, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\PF\application\views\templateXML.php:8
2015-06-27 15:25:51 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant UTF - assumed 'UTF' ~ APPPATH\views\templateXML.php [ 8 ] in C:\xampp\htdocs\PF\application\views\templateXML.php:8
2015-06-27 15:25:51 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateXML.php(8): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\xampp\htdocs...', 8, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\PF\application\views\templateXML.php:8
2015-06-27 15:26:30 --- CRITICAL: ErrorException [ 2 ]: htmlentities(): charset `UTF8' not supported, assuming utf-8 ~ APPPATH\views\templateXML.php [ 8 ] in file:line
2015-06-27 15:26:30 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'htmlentities():...', 'C:\xampp\htdocs...', 8, Array)
#1 C:\xampp\htdocs\PF\application\views\templateXML.php(8): htmlentities('<?xml version="...', 3, 'UTF8')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2015-06-27 16:16:41 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: count ~ APPPATH\classes\Helper\XML.php [ 17 ] in C:\xampp\htdocs\PF\application\classes\Helper\XML.php:17
2015-06-27 16:16:41 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Helper\XML.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 17, Array)
#1 C:\xampp\htdocs\PF\application\classes\Controller\Importacoes.php(23): Helper_XML::xml_import('teste.xml')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Importacoes->action_importarXML()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Importacoes))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\PF\application\classes\Helper\XML.php:17
2015-06-27 16:16:58 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: count ~ APPPATH\classes\Helper\XML.php [ 17 ] in C:\xampp\htdocs\PF\application\classes\Helper\XML.php:17
2015-06-27 16:16:58 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Helper\XML.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 17, Array)
#1 C:\xampp\htdocs\PF\application\classes\Controller\Importacoes.php(23): Helper_XML::xml_import('teste.xml')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Importacoes->action_importarXML()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Importacoes))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\PF\application\classes\Helper\XML.php:17
2015-06-27 16:25:34 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: array_map ~ APPPATH\classes\Helper\XML.php [ 22 ] in C:\xampp\htdocs\PF\application\classes\Helper\XML.php:22
2015-06-27 16:25:34 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Helper\XML.php(22): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 22, Array)
#1 C:\xampp\htdocs\PF\application\classes\Controller\Importacoes.php(23): Helper_XML::xml_import('teste.xml')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Importacoes->action_importarXML()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Importacoes))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\PF\application\classes\Helper\XML.php:22
2015-06-27 16:26:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: arsort ~ APPPATH\classes\Helper\XML.php [ 24 ] in C:\xampp\htdocs\PF\application\classes\Helper\XML.php:24
2015-06-27 16:26:00 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Helper\XML.php(24): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 24, Array)
#1 C:\xampp\htdocs\PF\application\classes\Controller\Importacoes.php(23): Helper_XML::xml_import('teste.xml')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Importacoes->action_importarXML()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Importacoes))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\PF\application\classes\Helper\XML.php:24
2015-06-27 16:26:26 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Helper\XML.php [ 25 ] in C:\xampp\htdocs\PF\application\classes\Helper\XML.php:25
2015-06-27 16:26:26 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Helper\XML.php(25): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 25, Array)
#1 C:\xampp\htdocs\PF\application\classes\Controller\Importacoes.php(23): Helper_XML::xml_import('teste.xml')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Importacoes->action_importarXML()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Importacoes))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\PF\application\classes\Helper\XML.php:25
2015-06-27 16:26:44 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Helper\XML.php [ 25 ] in C:\xampp\htdocs\PF\application\classes\Helper\XML.php:25
2015-06-27 16:26:44 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Helper\XML.php(25): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 25, Array)
#1 C:\xampp\htdocs\PF\application\classes\Controller\Importacoes.php(23): Helper_XML::xml_import('teste.xml')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Importacoes->action_importarXML()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Importacoes))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\PF\application\classes\Helper\XML.php:25
2015-06-27 16:27:02 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Helper\XML.php [ 26 ] in C:\xampp\htdocs\PF\application\classes\Helper\XML.php:26
2015-06-27 16:27:02 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Helper\XML.php(26): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 26, Array)
#1 C:\xampp\htdocs\PF\application\classes\Controller\Importacoes.php(23): Helper_XML::xml_import('teste.xml')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Importacoes->action_importarXML()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Importacoes))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\PF\application\classes\Helper\XML.php:26