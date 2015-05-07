<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-04-17 12:10:54 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:1302
2015-04-17 12:10:54 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 C:\xampp\htdocs\PF\application\classes\Controller\Projetos.php(18): Kohana_ORM->save()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Projetos->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Projetos))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:1302
2015-04-17 12:17:35 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:1302
2015-04-17 12:17:35 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 C:\xampp\htdocs\PF\application\classes\Controller\Projetos.php(18): Kohana_ORM->save()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Projetos->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Projetos))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:1302
2015-04-17 12:44:06 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '>' ~ APPPATH\views\templatePerspectivas.php [ 26 ] in file:line
2015-04-17 12:44:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-17 12:44:34 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant id - assumed 'id' ~ APPPATH\views\templatePerspectivas.php [ 25 ] in C:\xampp\htdocs\PF\application\views\templatePerspectivas.php:25
2015-04-17 12:44:34 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templatePerspectivas.php(25): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\xampp\htdocs...', 25, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\views\templateWelcome.php(30): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perspectivas))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\PF\application\views\templatePerspectivas.php:25
2015-04-17 12:47:48 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\templatePerspectivas.php [ 24 ] in file:line
2015-04-17 12:47:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-17 12:51:14 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\templatePerspectivas.php [ 26 ] in file:line
2015-04-17 12:51:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-17 12:52:07 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete perspectiva model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\xampp\htdocs\PF\application\classes\Controller\Perspectivas.php:40
2015-04-17 12:52:07 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Perspectivas.php(40): Kohana_ORM->delete()
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Perspectivas->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perspectivas))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Perspectivas.php:40
2015-04-17 12:52:40 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$perspectiva' (T_VARIABLE) ~ APPPATH\classes\Controller\Perspectivas.php [ 41 ] in file:line
2015-04-17 12:52:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-17 12:52:46 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete perspectiva model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\xampp\htdocs\PF\application\classes\Controller\Perspectivas.php:41
2015-04-17 12:52:46 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Perspectivas.php(41): Kohana_ORM->delete()
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Perspectivas->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perspectivas))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Perspectivas.php:41
2015-04-17 12:53:21 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\templateWelcome.php [ 30 ] in C:\xampp\htdocs\PF\application\views\templateWelcome.php:30
2015-04-17 12:53:21 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateWelcome.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 30, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perspectivas))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\PF\application\views\templateWelcome.php:30
2015-04-17 12:53:34 --- CRITICAL: Database_Exception [ 1451 ]: [1451] Cannot delete or update a parent row: a foreign key constraint fails (`mapaestrategico`.`grupos`, CONSTRAINT `fk_GRUPOS_PERSPECTIVAS` FOREIGN KEY (`PERSPECTIVAS_idPERSPECTIVA`) REFERENCES `perspectivas` (`idPERSPECTIVA`) ON DELETE NO ACTION ON UPDATE NO ACTION) ( DELETE FROM `perspectivas` WHERE `idPERSPECTIVA` = '1' ) ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 181 ] in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-04-17 12:53:34 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(4, 'DELETE FROM `pe...', false, Array)
#1 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1442): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\xampp\htdocs\PF\application\classes\Controller\Perspectivas.php(40): Kohana_ORM->delete()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Perspectivas->action_delete()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perspectivas))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-04-17 13:02:12 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH\classes\Model\Perspectiva.php [ 11 ] in file:line
2015-04-17 13:02:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-17 13:02:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\templateWelcome.php [ 30 ] in C:\xampp\htdocs\PF\application\views\templateWelcome.php:30
2015-04-17 13:02:27 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateWelcome.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 30, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perspectivas))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\PF\application\views\templateWelcome.php:30
2015-04-17 13:03:18 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\templateWelcome.php [ 30 ] in C:\xampp\htdocs\PF\application\views\templateWelcome.php:30
2015-04-17 13:03:18 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateWelcome.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 30, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perspectivas))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\PF\application\views\templateWelcome.php:30
2015-04-17 13:03:31 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\templateWelcome.php [ 30 ] in C:\xampp\htdocs\PF\application\views\templateWelcome.php:30
2015-04-17 13:03:31 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateWelcome.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 30, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perspectivas))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\PF\application\views\templateWelcome.php:30
2015-04-17 13:04:16 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\templateWelcome.php [ 30 ] in C:\xampp\htdocs\PF\application\views\templateWelcome.php:30
2015-04-17 13:04:16 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateWelcome.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 30, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perspectivas))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\PF\application\views\templateWelcome.php:30
2015-04-17 13:04:19 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\templateWelcome.php [ 30 ] in C:\xampp\htdocs\PF\application\views\templateWelcome.php:30
2015-04-17 13:04:19 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateWelcome.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 30, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perspectivas))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\PF\application\views\templateWelcome.php:30
2015-04-17 13:05:07 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\Perspectivas.php [ 41 ] in file:line
2015-04-17 13:05:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-17 13:05:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\templateWelcome.php [ 30 ] in C:\xampp\htdocs\PF\application\views\templateWelcome.php:30
2015-04-17 13:05:14 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateWelcome.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 30, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perspectivas))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\PF\application\views\templateWelcome.php:30
2015-04-17 13:05:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\templateWelcome.php [ 30 ] in C:\xampp\htdocs\PF\application\views\templateWelcome.php:30
2015-04-17 13:05:40 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateWelcome.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 30, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perspectivas))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\PF\application\views\templateWelcome.php:30
2015-04-17 13:07:50 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\templateWelcome.php [ 30 ] in C:\xampp\htdocs\PF\application\views\templateWelcome.php:30
2015-04-17 13:07:50 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateWelcome.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 30, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perspectivas))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\PF\application\views\templateWelcome.php:30
2015-04-17 13:08:14 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Grupo as array ~ APPPATH\classes\Controller\Perspectivas.php [ 43 ] in file:line
2015-04-17 13:08:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-17 13:08:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\templateWelcome.php [ 30 ] in C:\xampp\htdocs\PF\application\views\templateWelcome.php:30
2015-04-17 13:08:28 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateWelcome.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 30, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perspectivas))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\PF\application\views\templateWelcome.php:30
2015-04-17 13:11:25 --- CRITICAL: Database_Exception [ 1451 ]: [1451] Cannot delete or update a parent row: a foreign key constraint fails (`mapaestrategico`.`grupos`, CONSTRAINT `fk_GRUPOS_PERSPECTIVAS` FOREIGN KEY (`PERSPECTIVAS_idPERSPECTIVA`) REFERENCES `perspectivas` (`idPERSPECTIVA`) ON DELETE NO ACTION ON UPDATE NO ACTION) ( DELETE FROM `perspectivas` WHERE `idPERSPECTIVA` = '1' ) ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 181 ] in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-04-17 13:11:25 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(4, 'DELETE FROM `pe...', false, Array)
#1 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1442): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\xampp\htdocs\PF\application\classes\Controller\Perspectivas.php(40): Kohana_ORM->delete()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Perspectivas->action_delete()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perspectivas))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-04-17 13:23:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$perspectiva' (T_VARIABLE) ~ APPPATH\views\edit\templateEditPerspectivas.php [ 6 ] in file:line
2015-04-17 13:23:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-17 13:23:46 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Perspectiva as array ~ APPPATH\views\edit\templateEditPerspectivas.php [ 6 ] in file:line
2015-04-17 13:23:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-17 13:33:03 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Perspectiva::edit() ~ APPPATH\classes\Controller\Perspectivas.php [ 47 ] in file:line
2015-04-17 13:33:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-17 13:42:27 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Controller\Perspectivas.php [ 26 ] in file:line
2015-04-17 13:42:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-17 13:42:38 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Controller\Perspectivas.php [ 26 ] in file:line
2015-04-17 13:42:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-17 13:42:49 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Controller\Perspectivas.php [ 26 ] in file:line
2015-04-17 13:42:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-17 13:42:58 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'public' (T_PUBLIC) ~ APPPATH\classes\Controller\Perspectivas.php [ 26 ] in file:line
2015-04-17 13:42:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line