<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-06-12 18:10:59 --- CRITICAL: Kohana_Exception [ 0 ]: The _desc_column property does not exist in the Model_Item class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603
2015-06-12 18:10:59 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('_desc_column')
#1 C:\xampp\htdocs\PF\modules\orm\classes\ORM.php(15): Kohana_ORM->__get('_desc_column')
#2 C:\xampp\htdocs\PF\application\classes\Controller\Importacoes.php(9): ORM::get_select('Item')
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Importacoes->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Importacoes))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603
2015-06-12 18:26:32 --- CRITICAL: ErrorException [ 2 ]: SimpleXMLElement::addAttribute(): Attribute already exists ~ APPPATH\classes\Controller\Indicadores.php [ 81 ] in file:line
2015-06-12 18:26:32 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'SimpleXMLElemen...', 'C:\xampp\htdocs...', 81, Array)
#1 C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php(81): SimpleXMLElement->addAttribute('type', 'latest')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Indicadores->action_exportarXSD()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-06-12 18:30:00 --- CRITICAL: ErrorException [ 2 ]: SimpleXMLElement::addAttribute(): Attribute already exists ~ APPPATH\classes\Controller\Indicadores.php [ 81 ] in file:line
2015-06-12 18:30:00 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'SimpleXMLElemen...', 'C:\xampp\htdocs...', 81, Array)
#1 C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php(81): SimpleXMLElement->addAttribute('type', 'latest')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Indicadores->action_exportarXSD()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-06-12 18:31:20 --- CRITICAL: ErrorException [ 2 ]: SimpleXMLElement::addAttribute(): Attribute already exists ~ APPPATH\classes\Controller\Indicadores.php [ 81 ] in file:line
2015-06-12 18:31:20 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'SimpleXMLElemen...', 'C:\xampp\htdocs...', 81, Array)
#1 C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php(81): SimpleXMLElement->addAttribute('type', 'latest')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Indicadores->action_exportarXSD()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-06-12 18:40:44 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH\classes\Controller\Indicadores.php [ 88 ] in file:line
2015-06-12 18:40:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-12 18:45:34 --- CRITICAL: ErrorException [ 2 ]: SimpleXMLElement::addAttribute(): Attribute already exists ~ APPPATH\classes\Controller\Indicadores.php [ 82 ] in file:line
2015-06-12 18:45:34 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'SimpleXMLElemen...', 'C:\xampp\htdocs...', 82, Array)
#1 C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php(82): SimpleXMLElement->addAttribute('type', 'latest')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Indicadores->action_exportarXSD()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-06-12 18:46:12 --- CRITICAL: ErrorException [ 2 ]: SimpleXMLElement::addAttribute(): Attribute already exists ~ APPPATH\classes\Controller\Indicadores.php [ 86 ] in file:line
2015-06-12 18:46:12 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'SimpleXMLElemen...', 'C:\xampp\htdocs...', 86, Array)
#1 C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php(86): SimpleXMLElement->addAttribute('type', 'latest')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Indicadores->action_exportarXSD()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-06-12 18:46:13 --- CRITICAL: ErrorException [ 2 ]: SimpleXMLElement::addAttribute(): Attribute already exists ~ APPPATH\classes\Controller\Indicadores.php [ 86 ] in file:line
2015-06-12 18:46:13 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'SimpleXMLElemen...', 'C:\xampp\htdocs...', 86, Array)
#1 C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php(86): SimpleXMLElement->addAttribute('type', 'latest')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Indicadores->action_exportarXSD()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-06-12 18:46:37 --- CRITICAL: ErrorException [ 2 ]: SimpleXMLElement::addAttribute(): Attribute already exists ~ APPPATH\classes\Controller\Indicadores.php [ 86 ] in file:line
2015-06-12 18:46:37 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'SimpleXMLElemen...', 'C:\xampp\htdocs...', 86, Array)
#1 C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php(86): SimpleXMLElement->addAttribute('type', 'latest')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Indicadores->action_exportarXSD()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-06-12 18:47:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\templateWelcome.php [ 57 ] in C:\xampp\htdocs\PF\application\views\templateWelcome.php:57
2015-06-12 18:47:27 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateWelcome.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 57, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\PF\application\views\templateWelcome.php:57
2015-06-12 18:50:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\templateWelcome.php [ 57 ] in C:\xampp\htdocs\PF\application\views\templateWelcome.php:57
2015-06-12 18:50:12 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateWelcome.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 57, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\PF\application\views\templateWelcome.php:57
2015-06-12 18:50:17 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\templateWelcome.php [ 57 ] in C:\xampp\htdocs\PF\application\views\templateWelcome.php:57
2015-06-12 18:50:17 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateWelcome.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 57, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\PF\application\views\templateWelcome.php:57
2015-06-12 18:50:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\templateWelcome.php [ 57 ] in C:\xampp\htdocs\PF\application\views\templateWelcome.php:57
2015-06-12 18:50:56 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateWelcome.php(57): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 57, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\PF\application\views\templateWelcome.php:57
2015-06-12 19:02:19 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: XML ~ APPPATH\views\templateXSD.php [ 12 ] in C:\xampp\htdocs\PF\application\views\templateXSD.php:12
2015-06-12 19:02:19 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateXSD.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 12, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\views\templateWelcome.php(57): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\PF\application\views\templateXSD.php:12
2015-06-12 19:02:23 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: XML ~ APPPATH\views\templateXSD.php [ 12 ] in C:\xampp\htdocs\PF\application\views\templateXSD.php:12
2015-06-12 19:02:23 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateXSD.php(12): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 12, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\views\templateWelcome.php(57): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\PF\application\views\templateXSD.php:12
2015-06-12 19:07:45 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Indicadores.php [ 96 ] in C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php:96
2015-06-12 19:07:45 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php(96): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\xampp\htdocs...', 96, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Indicadores->action_exportarXSD()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php:96
2015-06-12 19:08:44 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'Header' (T_STRING) ~ APPPATH\views\templateXML.php [ 3 ] in file:line
2015-06-12 19:08:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-12 19:16:54 --- CRITICAL: ErrorException [ 2 ]: dom_import_simplexml() expects parameter 1 to be object, string given ~ APPPATH\classes\Controller\Indicadores.php [ 92 ] in file:line
2015-06-12 19:16:54 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'dom_import_simp...', 'C:\xampp\htdocs...', 92, Array)
#1 C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php(92): dom_import_simplexml('<?xml version="...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Indicadores->action_exportarXSD()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-06-12 19:29:56 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$newsXML' (T_VARIABLE) ~ APPPATH\classes\Controller\Indicadores.php [ 84 ] in file:line
2015-06-12 19:29:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-12 19:33:52 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: XML ~ APPPATH\views\templateXSD.php [ 14 ] in C:\xampp\htdocs\PF\application\views\templateXSD.php:14
2015-06-12 19:33:52 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateXSD.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 14, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\views\templateWelcome.php(57): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\PF\application\views\templateXSD.php:14
2015-06-12 19:42:56 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\classes\Controller\Indicadores.php [ 91 ] in file:line
2015-06-12 19:42:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-12 19:49:08 --- CRITICAL: ErrorException [ 2 ]: SimpleXMLElement::__construct(): namespace error : Namespace prefix xs on schema is not defined ~ APPPATH\classes\Controller\Indicadores.php [ 83 ] in file:line
2015-06-12 19:49:08 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'SimpleXMLElemen...', 'C:\xampp\htdocs...', 83, Array)
#1 C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php(83): SimpleXMLElement->__construct('<xs:schema></xs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Indicadores->action_exportarXSD()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-06-12 19:52:54 --- CRITICAL: ErrorException [ 2 ]: SimpleXMLElement::__construct(): namespace error : Namespace prefix xs on schema is not defined ~ APPPATH\classes\Controller\Indicadores.php [ 83 ] in file:line
2015-06-12 19:52:54 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'SimpleXMLElemen...', 'C:\xampp\htdocs...', 83, Array)
#1 C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php(83): SimpleXMLElement->__construct('<xs:schema></xs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Indicadores->action_exportarXSD()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-06-12 19:58:40 --- CRITICAL: Exception [ 0 ]: String could not be parsed as XML ~ APPPATH\classes\Controller\Indicadores.php [ 83 ] in C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php:83
2015-06-12 19:58:40 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php(83): SimpleXMLElement->__construct('')
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Indicadores->action_exportarXSD()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php:83
2015-06-12 20:02:21 --- CRITICAL: Exception [ 0 ]: String could not be parsed as XML ~ APPPATH\classes\Controller\Indicadores.php [ 83 ] in C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php:0
2015-06-12 20:02:21 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php(0): SimpleXMLElement->__construct()
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Indicadores->action_exportarXSD()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php:0
2015-06-12 20:02:29 --- CRITICAL: Exception [ 0 ]: String could not be parsed as XML ~ APPPATH\classes\Controller\Indicadores.php [ 83 ] in C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php:0
2015-06-12 20:02:29 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php(0): SimpleXMLElement->__construct()
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Indicadores->action_exportarXSD()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php:0
2015-06-12 20:03:59 --- CRITICAL: ErrorException [ 2 ]: SimpleXMLElement::__construct(): namespace error : Namespace prefix xs on schema is not defined ~ APPPATH\classes\Controller\Indicadores.php [ 84 ] in file:line
2015-06-12 20:03:59 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'SimpleXMLElemen...', 'C:\xampp\htdocs...', 84, Array)
#1 C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php(84): SimpleXMLElement->__construct('<xs:schema></xs...', 0, false, 'http://www.w3.o...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Indicadores->action_exportarXSD()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-06-12 20:13:56 --- CRITICAL: ErrorException [ 2 ]: SimpleXMLElement::__construct(): namespace error : Namespace prefix xs on schema is not defined ~ APPPATH\classes\Controller\Indicadores.php [ 83 ] in file:line
2015-06-12 20:13:56 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'SimpleXMLElemen...', 'C:\xampp\htdocs...', 83, Array)
#1 C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php(83): SimpleXMLElement->__construct('<xs:schema></xs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Indicadores->action_exportarXSD()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-06-12 20:36:09 --- CRITICAL: ErrorException [ 2 ]: SimpleXMLElement::addChild() expects at most 3 parameters, 4 given ~ APPPATH\classes\Controller\Indicadores.php [ 90 ] in file:line
2015-06-12 20:36:09 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'SimpleXMLElemen...', 'C:\xampp\htdocs...', 90, Array)
#1 C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php(90): SimpleXMLElement->addChild('xs:element', NULL, 'xs', false)
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Indicadores->action_exportarXSD()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-06-12 21:05:20 --- CRITICAL: ErrorException [ 2 ]: SimpleXMLElement::addAttribute(): Attribute requires prefix for namespace ~ APPPATH\classes\Controller\Indicadores.php [ 90 ] in file:line
2015-06-12 21:05:20 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'SimpleXMLElemen...', 'C:\xampp\htdocs...', 90, Array)
#1 C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php(90): SimpleXMLElement->addAttribute('name', 'Indicadores', 'AA')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Indicadores->action_exportarXSD()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-06-12 21:05:23 --- CRITICAL: ErrorException [ 2 ]: SimpleXMLElement::addAttribute(): Attribute requires prefix for namespace ~ APPPATH\classes\Controller\Indicadores.php [ 90 ] in file:line
2015-06-12 21:05:23 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'SimpleXMLElemen...', 'C:\xampp\htdocs...', 90, Array)
#1 C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php(90): SimpleXMLElement->addAttribute('name', 'Indicadores', 'AA')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Indicadores->action_exportarXSD()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-06-12 21:26:46 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: newsIntro ~ APPPATH\classes\Controller\Indicadores.php [ 94 ] in C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php:94
2015-06-12 21:26:46 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php(94): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 94, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Indicadores->action_exportarXSD()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php:94
2015-06-12 21:30:52 --- CRITICAL: ErrorException [ 8 ]: Undefined variable:  ~ APPPATH\classes\Controller\Indicadores.php [ 98 ] in C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php:98
2015-06-12 21:30:52 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php(98): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 98, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Indicadores->action_exportarXSD()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php:98
2015-06-12 21:34:30 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: newsXML ~ APPPATH\classes\Controller\Indicadores.php [ 119 ] in C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php:119
2015-06-12 21:34:30 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php(119): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 119, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Indicadores->action_exportarXSD()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php:119
2015-06-12 22:26:51 --- CRITICAL: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\Kohana\Controller\Template.php [ 44 ] in file:line
2015-06-12 22:26:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-12 22:27:11 --- CRITICAL: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\Kohana\Controller\Template.php [ 44 ] in file:line
2015-06-12 22:27:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-12 22:28:10 --- CRITICAL: ErrorException [ 1 ]: Call to a member function render() on a non-object ~ SYSPATH\classes\Kohana\Controller\Template.php [ 44 ] in file:line
2015-06-12 22:28:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-12 22:31:13 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'var_dump' (T_STRING) ~ APPPATH\classes\Controller\Grupos.php [ 12 ] in file:line
2015-06-12 22:31:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-12 22:31:18 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'var_dump' (T_STRING) ~ APPPATH\classes\Controller\Grupos.php [ 12 ] in file:line
2015-06-12 22:31:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-12 22:35:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: desc ~ APPPATH\classes\Controller\Grupos.php [ 14 ] in C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php:14
2015-06-12 22:35:12 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 14, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Grupos->action_getGrupos()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Grupos))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php:14
2015-06-12 22:43:23 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '{' ~ APPPATH\views\templateItens.php [ 12 ] in file:line
2015-06-12 22:43:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-12 23:17:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Grupos.php [ 16 ] in C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php:16
2015-06-12 23:17:10 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 16, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Grupos->action_getGrupos()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Grupos))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php:16
2015-06-12 23:17:20 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Grupos.php [ 16 ] in C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php:16
2015-06-12 23:17:20 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 16, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Grupos->action_getGrupos()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Grupos))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php:16
2015-06-12 23:18:33 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Grupos.php [ 16 ] in C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php:16
2015-06-12 23:18:33 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 16, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Grupos->action_getGrupos()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Grupos))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php:16
2015-06-12 23:19:16 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Grupos.php [ 16 ] in C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php:16
2015-06-12 23:19:16 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 16, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Grupos->action_getGrupos()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Grupos))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php:16
2015-06-12 23:20:35 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Grupos.php [ 16 ] in C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php:16
2015-06-12 23:20:35 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 16, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Grupos->action_getGrupos()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Grupos))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php:16
2015-06-12 23:21:03 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Grupos.php [ 16 ] in C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php:16
2015-06-12 23:21:03 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 16, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Grupos->action_getGrupos()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Grupos))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php:16
2015-06-12 23:36:10 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Grupos.php [ 14 ] in C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php:14
2015-06-12 23:36:10 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 14, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Grupos->action_getGrupos()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Grupos))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php:14
2015-06-12 23:36:13 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Grupos.php [ 14 ] in C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php:14
2015-06-12 23:36:13 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 14, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Grupos->action_getGrupos()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Grupos))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php:14
2015-06-12 23:36:16 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Grupos.php [ 14 ] in C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php:14
2015-06-12 23:36:16 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 14, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Grupos->action_getGrupos()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Grupos))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php:14
2015-06-12 23:36:27 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '')) . " " . $grupo->CATEGORIA ' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH\classes\Controller\Grupos.php [ 16 ] in file:line
2015-06-12 23:36:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-12 23:37:11 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\Grupos.php [ 14 ] in file:line
2015-06-12 23:37:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-12 23:37:41 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\Grupos.php [ 14 ] in file:line
2015-06-12 23:37:41 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-12 23:37:51 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\Grupos.php [ 14 ] in file:line
2015-06-12 23:37:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-12 23:40:16 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Grupos.php [ 14 ] in C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php:14
2015-06-12 23:40:16 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 14, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Grupos->action_getGrupos()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Grupos))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php:14
2015-06-12 23:45:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Grupos.php [ 14 ] in C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php:14
2015-06-12 23:45:38 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 14, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Grupos->action_getGrupos()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Grupos))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php:14
2015-06-12 23:47:31 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Grupos.php [ 14 ] in C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php:14
2015-06-12 23:47:31 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 14, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Grupos->action_getGrupos()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Grupos))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php:14
2015-06-12 23:47:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Grupos.php [ 14 ] in C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php:14
2015-06-12 23:47:39 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 14, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Grupos->action_getGrupos()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Grupos))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php:14
2015-06-12 23:47:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Grupos.php [ 14 ] in C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php:14
2015-06-12 23:47:40 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 14, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Grupos->action_getGrupos()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Grupos))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php:14
2015-06-12 23:50:37 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Grupos.php [ 14 ] in C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php:14
2015-06-12 23:50:37 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 14, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Grupos->action_getGrupos()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Grupos))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php:14
2015-06-12 23:51:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Grupos.php [ 14 ] in C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php:14
2015-06-12 23:51:00 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 14, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Grupos->action_getGrupos()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Grupos))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php:14
2015-06-12 23:51:03 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Grupos.php [ 14 ] in C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php:14
2015-06-12 23:51:03 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php(14): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 14, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Grupos->action_getGrupos()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Grupos))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php:14
2015-06-12 23:51:52 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Grupos.php [ 15 ] in C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php:15
2015-06-12 23:51:52 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 15, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Grupos->action_getGrupos()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Grupos))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php:15
2015-06-12 23:53:31 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Grupos.php [ 15 ] in C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php:15
2015-06-12 23:53:31 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 15, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Grupos->action_getGrupos()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Grupos))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php:15
2015-06-12 23:53:49 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Grupos.php [ 15 ] in C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php:15
2015-06-12 23:53:49 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 15, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Grupos->action_getGrupos()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Grupos))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php:15
2015-06-12 23:53:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Grupos.php [ 15 ] in C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php:15
2015-06-12 23:53:53 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 15, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Grupos->action_getGrupos()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Grupos))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php:15