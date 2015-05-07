<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-04-23 08:28:47 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\Mapas.php [ 32 ] in file:line
2015-04-23 08:28:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-23 08:29:13 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\Model\Mapa.php [ 31 ] in file:line
2015-04-23 08:29:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-23 08:29:34 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: OBJETIVOS_idOBJETIVO ~ APPPATH\views\templateMapas.php [ 5 ] in C:\xampp\htdocs\PF\application\views\templateMapas.php:5
2015-04-23 08:29:34 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateMapas.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 5, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\views\templateWelcome.php(30): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\PF\application\views\templateMapas.php:5
2015-04-23 09:13:05 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO) ~ APPPATH\views\templateMapas.php [ 7 ] in file:line
2015-04-23 09:13:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-23 09:20:33 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''min_length'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH\messages\forms\mapa.php [ 14 ] in file:line
2015-04-23 09:20:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-23 09:21:33 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\messages\forms\mapa.php [ 13 ] in file:line
2015-04-23 09:21:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-23 09:21:43 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\messages\forms\mapa.php [ 13 ] in file:line
2015-04-23 09:21:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-23 09:28:20 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''min_length'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH\messages\forms\mapa.php [ 9 ] in file:line
2015-04-23 09:28:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-23 09:54:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: PERSPECTIVAS_idPERSPECTIVA ~ APPPATH\views\edit\editObjetivos.php [ 9 ] in C:\xampp\htdocs\PF\application\views\edit\editObjetivos.php:9
2015-04-23 09:54:00 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\edit\editObjetivos.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 9, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\views\templateWelcome.php(30): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Objetivos))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\PF\application\views\edit\editObjetivos.php:9
2015-04-23 09:54:13 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: PERSPECTIVAS_idPERSPECTIVA ~ APPPATH\views\edit\editObjetivos.php [ 9 ] in C:\xampp\htdocs\PF\application\views\edit\editObjetivos.php:9
2015-04-23 09:54:13 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\edit\editObjetivos.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 9, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\views\templateWelcome.php(30): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Objetivos))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\PF\application\views\edit\editObjetivos.php:9
2015-04-23 11:56:55 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: PERSPECTIVAS_idPERSPECTIVA ~ APPPATH\views\edit\editObjetivos.php [ 9 ] in C:\xampp\htdocs\PF\application\views\edit\editObjetivos.php:9
2015-04-23 11:56:55 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\edit\editObjetivos.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 9, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\views\templateWelcome.php(30): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Objetivos))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\PF\application\views\edit\editObjetivos.php:9
2015-04-23 12:01:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: PERSPECTIVAS_idPERSPECTIVA ~ APPPATH\views\edit\editObjetivos.php [ 9 ] in C:\xampp\htdocs\PF\application\views\edit\editObjetivos.php:9
2015-04-23 12:01:12 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\edit\editObjetivos.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 9, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\views\templateWelcome.php(30): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Objetivos))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\PF\application\views\edit\editObjetivos.php:9
2015-04-23 12:02:03 --- CRITICAL: Kohana_Exception [ 0 ]: The CATEGORIA property does not exist in the Model_Objetivo class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603
2015-04-23 12:02:03 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('CATEGORIA')
#1 C:\xampp\htdocs\PF\application\views\edit\editObjetivos.php(10): Kohana_ORM->__get('CATEGORIA')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\PF\application\views\templateWelcome.php(30): Kohana_View->__toString()
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
2015-04-23 12:03:34 --- CRITICAL: Database_Exception [ 1452 ]: [1452] Cannot add or update a child row: a foreign key constraint fails (`mapaestrategico`.`grupos`, CONSTRAINT `fk_GRUPOS_PERSPECTIVAS` FOREIGN KEY (`PERSPECTIVAS_idPERSPECTIVA`) REFERENCES `perspectivas` (`idPERSPECTIVA`) ON DELETE CASCADE ON UPDATE CASCADE) ( INSERT INTO `grupos` () VALUES () ) ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 181 ] in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-04-23 12:03:34 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `gr...', false, Array)
#1 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 C:\xampp\htdocs\PF\application\classes\Controller\Objetivos.php(45): Kohana_ORM->save()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Objetivos->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Objetivos))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-04-23 12:04:46 --- CRITICAL: Database_Exception [ 1452 ]: [1452] Cannot add or update a child row: a foreign key constraint fails (`mapaestrategico`.`grupos`, CONSTRAINT `fk_GRUPOS_PERSPECTIVAS` FOREIGN KEY (`PERSPECTIVAS_idPERSPECTIVA`) REFERENCES `perspectivas` (`idPERSPECTIVA`) ON DELETE CASCADE ON UPDATE CASCADE) ( INSERT INTO `grupos` () VALUES () ) ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 181 ] in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-04-23 12:04:46 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `gr...', false, Array)
#1 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 C:\xampp\htdocs\PF\application\classes\Controller\Objetivos.php(45): Kohana_ORM->save()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Objetivos->action_edit()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Objetivos))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-04-23 12:08:44 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Form::select() must be of the type array, string given, called in C:\xampp\htdocs\PF\application\views\edit\editObjetivos.php on line 9 and defined ~ SYSPATH\classes\Kohana\Form.php [ 252 ] in C:\xampp\htdocs\PF\system\classes\Kohana\Form.php:252
2015-04-23 12:08:44 --- DEBUG: #0 C:\xampp\htdocs\PF\system\classes\Kohana\Form.php(252): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'C:\xampp\htdocs...', 252, Array)
#1 C:\xampp\htdocs\PF\application\views\edit\editObjetivos.php(9): Kohana_Form::select('GRUPOS_idGRUPO', '6')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\PF\application\views\templateWelcome.php(30): Kohana_View->__toString()
#6 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Objetivos))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\PF\system\classes\Kohana\Form.php:252
2015-04-23 12:12:05 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: OBJETIVOS_idOBJETIVO ~ APPPATH\views\edit\editMapas.php [ 10 ] in C:\xampp\htdocs\PF\application\views\edit\editMapas.php:10
2015-04-23 12:12:05 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\edit\editMapas.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 10, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\views\templateWelcome.php(30): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\PF\application\views\edit\editMapas.php:10
2015-04-23 12:14:03 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: OBJETIVOS_idOBJETIVO ~ APPPATH\views\edit\editMapas.php [ 10 ] in C:\xampp\htdocs\PF\application\views\edit\editMapas.php:10
2015-04-23 12:14:03 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\edit\editMapas.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 10, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\views\templateWelcome.php(30): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\PF\application\views\edit\editMapas.php:10
2015-04-23 12:23:36 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\templateMapas.php [ 31 ] in C:\xampp\htdocs\PF\application\views\templateMapas.php:31
2015-04-23 12:23:36 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateMapas.php(31): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\xampp\htdocs...', 31, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\views\templateWelcome.php(30): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\PF\application\views\templateMapas.php:31
2015-04-23 12:24:45 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\templateMapas.php [ 31 ] in C:\xampp\htdocs\PF\application\views\templateMapas.php:31
2015-04-23 12:24:45 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateMapas.php(31): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\xampp\htdocs...', 31, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\views\templateWelcome.php(30): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\PF\application\views\templateMapas.php:31
2015-04-23 12:26:32 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\templateMapas.php [ 28 ] in C:\xampp\htdocs\PF\application\views\templateMapas.php:28
2015-04-23 12:26:32 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateMapas.php(28): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\xampp\htdocs...', 28, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\views\templateWelcome.php(30): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\PF\application\views\templateMapas.php:28
2015-04-23 12:27:48 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_Form::select() must be of the type array, object given, called in C:\xampp\htdocs\PF\application\views\templateMapas.php on line 6 and defined ~ SYSPATH\classes\Kohana\Form.php [ 252 ] in C:\xampp\htdocs\PF\system\classes\Kohana\Form.php:252
2015-04-23 12:27:48 --- DEBUG: #0 C:\xampp\htdocs\PF\system\classes\Kohana\Form.php(252): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'C:\xampp\htdocs...', 252, Array)
#1 C:\xampp\htdocs\PF\application\views\templateMapas.php(6): Kohana_Form::select('OBJETIVOS_idOBJ...', Object(Database_MySQLi_Result))
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\PF\application\views\templateWelcome.php(30): Kohana_View->__toString()
#6 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\PF\system\classes\Kohana\Form.php:252
2015-04-23 12:28:48 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\templateMapas.php [ 28 ] in C:\xampp\htdocs\PF\application\views\templateMapas.php:28
2015-04-23 12:28:48 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateMapas.php(28): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\xampp\htdocs...', 28, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\views\templateWelcome.php(30): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\PF\application\views\templateMapas.php:28
2015-04-23 12:44:08 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''' (T_ENCAPSED_AND_WHITESPACE), expecting ')' ~ APPPATH\classes\Model\Grupo.php [ 19 ] in file:line
2015-04-23 12:44:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-23 12:44:14 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''' (T_ENCAPSED_AND_WHITESPACE), expecting ')' ~ APPPATH\classes\Model\Grupo.php [ 19 ] in file:line
2015-04-23 12:44:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-23 12:44:33 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO) ~ APPPATH\views\templateGrupos.php [ 8 ] in file:line
2015-04-23 12:44:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-23 12:45:03 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\views\templateGrupos.php [ 8 ] in file:line
2015-04-23 12:45:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-23 12:47:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: grupos ~ APPPATH\views\templateGrupos.php [ 21 ] in C:\xampp\htdocs\PF\application\views\templateGrupos.php:21
2015-04-23 12:47:29 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateGrupos.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 21, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\views\templateWelcome.php(30): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Grupos))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\PF\application\views\templateGrupos.php:21
2015-04-23 12:49:28 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\templateGrupos.php [ 21 ] in C:\xampp\htdocs\PF\application\views\templateGrupos.php:21
2015-04-23 12:49:28 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateGrupos.php(21): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\xampp\htdocs...', 21, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\views\templateWelcome.php(30): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Grupos))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\PF\application\views\templateGrupos.php:21
2015-04-23 16:45:37 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''min_length'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH\messages\forms\mapa.php [ 13 ] in file:line
2015-04-23 16:45:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-23 16:55:26 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH\classes\Model\Objetivo.php [ 34 ] in file:line
2015-04-23 16:55:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-23 16:56:28 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:1302
2015-04-23 16:56:28 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 C:\xampp\htdocs\PF\application\classes\Controller\Objetivos.php(24): Kohana_ORM->save()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Objetivos->action_salvar()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Objetivos))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:1302
2015-04-23 16:57:02 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:1302
2015-04-23 16:57:02 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(NULL)
#1 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#2 C:\xampp\htdocs\PF\application\classes\Controller\Objetivos.php(24): Kohana_ORM->save()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Objetivos->action_salvar()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Objetivos))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:1302
2015-04-23 17:03:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\Objetivos.php [ 34 ] in file:line
2015-04-23 17:03:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-04-23 17:04:45 --- CRITICAL: ErrorException [ 1 ]: Method name must be a string ~ APPPATH\classes\Controller\Objetivos.php [ 29 ] in file:line
2015-04-23 17:04:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line