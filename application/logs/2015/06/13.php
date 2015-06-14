<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-06-13 09:43:04 --- CRITICAL: Database_Exception [ 1452 ]: [1452] Cannot add or update a child row: a foreign key constraint fails (`mapaestrategico`.`itens`, CONSTRAINT `fk_ITENS_MAPAS1` FOREIGN KEY (`MAPAS_idME`) REFERENCES `mapas` (`idME`) ON DELETE CASCADE ON UPDATE CASCADE) ( INSERT INTO `itens` () VALUES () ) ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 181 ] in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-06-13 09:43:04 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `it...', false, Array)
#1 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 C:\xampp\htdocs\PF\application\classes\Controller\Itens.php(37): Kohana_ORM->save()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Itens->action_salvar()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Itens))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-06-13 10:12:04 --- CRITICAL: Database_Exception [ 1146 ]: [1146] Table 'mapaestrategico.i' doesn't exist ( SELECT `i`.`INDICADORES_idINDICADOR`, `o`.`OBJETIVOS_idOBJETIVO`, `g`.`GRUPOS_idGRUPO`, `p`.`PERSPECTIVAS_idPERSPECTIVA` FROM `indicadores`, `i` JOIN `objetivo as o` ON (`o`.`OBJETIVOS_idOBJETIVO` = `i`.`OBJETIVOS_idOBJETIVO`) JOIN `grupo as g` ON (`g`.`GRUPOS_idGRUPO` = `o`.`GRUPOS_idGRUPO`) JOIN `perspectiva as p` ON (`p`.`PERSPECTIVAS_idPERSPECTIVA` = `g`.`PERSPECTIVAS_idPERSPECTIVA`) WHERE `i`.`INDICADORES_idINDICADOR` = 1 ) ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 181 ] in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-06-13 10:12:04 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT `i`.`IND...', false, Array)
#1 C:\xampp\htdocs\PF\application\classes\Controller\Itens.php(41): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Itens->action_salvar()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Itens))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-06-13 10:13:34 --- CRITICAL: Database_Exception [ 1146 ]: [1146] Table 'mapaestrategico.indicadores as i' doesn't exist ( SELECT `i`.`INDICADORES_idINDICADOR`, `o`.`OBJETIVOS_idOBJETIVO`, `g`.`GRUPOS_idGRUPO`, `p`.`PERSPECTIVAS_idPERSPECTIVA` FROM `indicadores as i` JOIN `objetivo as o` ON (`o`.`OBJETIVOS_idOBJETIVO` = `i`.`OBJETIVOS_idOBJETIVO`) JOIN `grupo as g` ON (`g`.`GRUPOS_idGRUPO` = `o`.`GRUPOS_idGRUPO`) JOIN `perspectiva as p` ON (`p`.`PERSPECTIVAS_idPERSPECTIVA` = `g`.`PERSPECTIVAS_idPERSPECTIVA`) WHERE `i`.`INDICADORES_idINDICADOR` = 1 ) ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 181 ] in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-06-13 10:13:34 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT `i`.`IND...', false, Array)
#1 C:\xampp\htdocs\PF\application\classes\Controller\Itens.php(41): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Itens->action_salvar()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Itens))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-06-13 10:16:15 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\Itens.php [ 39 ] in file:line
2015-06-13 10:16:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-13 10:16:58 --- CRITICAL: Database_Exception [ 1146 ]: [1146] Table 'mapaestrategico.objetivo' doesn't exist ( SELECT `i`.`INDICADORES_idINDICADOR`, `o`.`OBJETIVOS_idOBJETIVO`, `g`.`GRUPOS_idGRUPO`, `p`.`PERSPECTIVAS_idPERSPECTIVA` FROM `indicadores` AS `i` JOIN `objetivo` AS `o` ON (`o`.`OBJETIVOS_idOBJETIVO` = `i`.`OBJETIVOS_idOBJETIVO`) JOIN `grupo` AS `g` ON (`g`.`GRUPOS_idGRUPO` = `o`.`GRUPOS_idGRUPO`) JOIN `perspectiva` AS `p` ON (`p`.`PERSPECTIVAS_idPERSPECTIVA` = `g`.`PERSPECTIVAS_idPERSPECTIVA`) WHERE `i`.`INDICADORES_idINDICADOR` = 1 ) ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 181 ] in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-06-13 10:16:58 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT `i`.`IND...', false, Array)
#1 C:\xampp\htdocs\PF\application\classes\Controller\Itens.php(41): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Itens->action_salvar()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Itens))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-06-13 10:17:16 --- CRITICAL: Database_Exception [ 1146 ]: [1146] Table 'mapaestrategico.objetivo' doesn't exist ( SELECT `i`.`INDICADORES_idINDICADOR`, `o`.`OBJETIVOS_idOBJETIVO`, `g`.`GRUPOS_idGRUPO`, `p`.`PERSPECTIVAS_idPERSPECTIVA` FROM `indicadores` AS `i` JOIN `objetivo` AS `o` ON (`o`.`OBJETIVOS_idOBJETIVO` = `i`.`OBJETIVOS_idOBJETIVO`) JOIN `grupo` AS `g` ON (`g`.`GRUPOS_idGRUPO` = `o`.`GRUPOS_idGRUPO`) JOIN `perspectiva` AS `p` ON (`p`.`PERSPECTIVAS_idPERSPECTIVA` = `g`.`PERSPECTIVAS_idPERSPECTIVA`) WHERE `i`.`INDICADORES_idINDICADOR` = 1 ) ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 181 ] in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-06-13 10:17:16 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT `i`.`IND...', false, Array)
#1 C:\xampp\htdocs\PF\application\classes\Controller\Itens.php(41): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Itens->action_salvar()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Itens))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-06-13 10:18:26 --- CRITICAL: Database_Exception [ 1054 ]: [1054] Unknown column 'i.INDICADORES_idINDICADOR' in 'field list' ( SELECT `i`.`INDICADORES_idINDICADOR`, `o`.`OBJETIVOS_idOBJETIVO`, `g`.`GRUPOS_idGRUPO`, `p`.`PERSPECTIVAS_idPERSPECTIVA` FROM `indicadores` AS `i` JOIN `objetivos` AS `o` ON (`o`.`OBJETIVOS_idOBJETIVO` = `i`.`OBJETIVOS_idOBJETIVO`) JOIN `grupos` AS `g` ON (`g`.`GRUPOS_idGRUPO` = `o`.`GRUPOS_idGRUPO`) JOIN `perspectivas` AS `p` ON (`p`.`PERSPECTIVAS_idPERSPECTIVA` = `g`.`PERSPECTIVAS_idPERSPECTIVA`) WHERE `i`.`INDICADORES_idINDICADOR` = 1 ) ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 181 ] in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-06-13 10:18:26 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT `i`.`IND...', false, Array)
#1 C:\xampp\htdocs\PF\application\classes\Controller\Itens.php(41): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Itens->action_salvar()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Itens))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-06-13 10:22:31 --- CRITICAL: Database_Exception [ 1054 ]: [1054] Unknown column 'i.idOBJETIVO' in 'on clause' ( SELECT `i`.`idINDICADOR`, `o`.`idOBJETIVO`, `g`.`idGRUPO`, `p`.`idPERSPECTIVA` FROM `indicadores` AS `i` JOIN `objetivos` AS `o` ON (`o`.`idOBJETIVO` = `i`.`idOBJETIVO`) JOIN `grupos` AS `g` ON (`g`.`idGRUPO` = `o`.`idGRUPO`) JOIN `perspectivas` AS `p` ON (`p`.`idPERSPECTIVA` = `g`.`idPERSPECTIVA`) WHERE `i`.`idINDICADOR` = 1 ) ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 181 ] in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-06-13 10:22:31 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT `i`.`idI...', false, Array)
#1 C:\xampp\htdocs\PF\application\classes\Controller\Itens.php(40): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Itens->action_salvar()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Itens))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-06-13 10:27:42 --- CRITICAL: Database_Exception [ 1452 ]: [1452] Cannot add or update a child row: a foreign key constraint fails (`mapaestrategico`.`itens`, CONSTRAINT `fk_ITENS_MAPAS1` FOREIGN KEY (`MAPAS_idME`) REFERENCES `mapas` (`idME`) ON DELETE CASCADE ON UPDATE CASCADE) ( INSERT INTO `itens` () VALUES () ) ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 181 ] in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-06-13 10:27:42 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `it...', false, Array)
#1 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 C:\xampp\htdocs\PF\application\classes\Controller\Itens.php(47): Kohana_ORM->save()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Itens->action_salvar()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Itens))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-06-13 10:28:48 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQLi_Result::find_all() ~ APPPATH\classes\Controller\Itens.php [ 42 ] in file:line
2015-06-13 10:28:48 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-13 10:29:02 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQLi_Result::$find_all ~ APPPATH\classes\Controller\Itens.php [ 42 ] in C:\xampp\htdocs\PF\application\classes\Controller\Itens.php:42
2015-06-13 10:29:02 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Itens.php(42): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 42, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Itens->action_salvar()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Itens))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Itens.php:42
2015-06-13 10:29:15 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';' ~ APPPATH\classes\Controller\Itens.php [ 42 ] in file:line
2015-06-13 10:29:15 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-13 10:30:20 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\Itens.php [ 46 ] in C:\xampp\htdocs\PF\application\classes\Controller\Itens.php:46
2015-06-13 10:30:20 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Itens.php(46): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 46, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Itens->action_salvar()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Itens))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Itens.php:46
2015-06-13 10:31:10 --- CRITICAL: Database_Exception [ 1452 ]: [1452] Cannot add or update a child row: a foreign key constraint fails (`mapaestrategico`.`itens`, CONSTRAINT `fk_ITENS_MAPAS1` FOREIGN KEY (`MAPAS_idME`) REFERENCES `mapas` (`idME`) ON DELETE CASCADE ON UPDATE CASCADE) ( INSERT INTO `itens` () VALUES () ) ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 181 ] in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-06-13 10:31:10 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `it...', false, Array)
#1 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 C:\xampp\htdocs\PF\application\classes\Controller\Itens.php(52): Kohana_ORM->save()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Itens->action_salvar()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Itens))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-06-13 10:35:44 --- CRITICAL: Database_Exception [ 1452 ]: [1452] Cannot add or update a child row: a foreign key constraint fails (`mapaestrategico`.`itens`, CONSTRAINT `fk_ITENS_MAPAS1` FOREIGN KEY (`MAPAS_idME`) REFERENCES `mapas` (`idME`) ON DELETE CASCADE ON UPDATE CASCADE) ( INSERT INTO `itens` () VALUES () ) ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 181 ] in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-06-13 10:35:44 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `it...', false, Array)
#1 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 C:\xampp\htdocs\PF\application\classes\Controller\Itens.php(52): Kohana_ORM->save()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Itens->action_salvar()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Itens))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-06-13 10:40:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: PERSPECTIVAS_idPERSPECTIVA ~ APPPATH\classes\Controller\Itens.php [ 63 ] in C:\xampp\htdocs\PF\application\classes\Controller\Itens.php:63
2015-06-13 10:40:42 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Itens.php(63): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 63, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Itens->action_salvar()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Itens))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Itens.php:63
2015-06-13 10:41:53 --- CRITICAL: Database_Exception [ 1452 ]: [1452] Cannot add or update a child row: a foreign key constraint fails (`mapaestrategico`.`itens`, CONSTRAINT `fk_ITENS_MAPAS1` FOREIGN KEY (`MAPAS_idME`) REFERENCES `mapas` (`idME`) ON DELETE CASCADE ON UPDATE CASCADE) ( INSERT INTO `itens` () VALUES () ) ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 181 ] in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-06-13 10:41:53 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `it...', false, Array)
#1 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 C:\xampp\htdocs\PF\application\classes\Controller\Itens.php(54): Kohana_ORM->save()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Itens->action_salvar()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Itens))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-06-13 10:43:35 --- CRITICAL: Database_Exception [ 1452 ]: [1452] Cannot add or update a child row: a foreign key constraint fails (`mapaestrategico`.`itens`, CONSTRAINT `fk_ITENS_MAPAS1` FOREIGN KEY (`MAPAS_idME`) REFERENCES `mapas` (`idME`) ON DELETE CASCADE ON UPDATE CASCADE) ( INSERT INTO `itens` () VALUES () ) ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 181 ] in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-06-13 10:43:35 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `it...', false, Array)
#1 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 C:\xampp\htdocs\PF\application\classes\Controller\Itens.php(48): Kohana_ORM->save()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Itens->action_salvar()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Itens))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-06-13 10:43:49 --- CRITICAL: Database_Exception [ 1452 ]: [1452] Cannot add or update a child row: a foreign key constraint fails (`mapaestrategico`.`itens`, CONSTRAINT `fk_ITENS_MAPAS1` FOREIGN KEY (`MAPAS_idME`) REFERENCES `mapas` (`idME`) ON DELETE CASCADE ON UPDATE CASCADE) ( INSERT INTO `itens` () VALUES () ) ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 181 ] in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-06-13 10:43:49 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `it...', false, Array)
#1 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 C:\xampp\htdocs\PF\application\classes\Controller\Itens.php(48): Kohana_ORM->save()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Itens->action_salvar()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Itens))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-06-13 10:44:45 --- CRITICAL: Database_Exception [ 1452 ]: [1452] Cannot add or update a child row: a foreign key constraint fails (`mapaestrategico`.`itens`, CONSTRAINT `fk_ITENS_GRUPOS1` FOREIGN KEY (`GRUPOS_idGRUPO`) REFERENCES `grupos` (`idGRUPO`) ON DELETE CASCADE ON UPDATE CASCADE) ( INSERT INTO `itens` (`MAPAS_idME`) VALUES ('1') ) ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 181 ] in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-06-13 10:44:45 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `it...', false, Array)
#1 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 C:\xampp\htdocs\PF\application\classes\Controller\Itens.php(48): Kohana_ORM->save()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Itens->action_salvar()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Itens))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-06-13 10:46:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: idME ~ APPPATH\classes\Controller\Itens.php [ 45 ] in C:\xampp\htdocs\PF\application\classes\Controller\Itens.php:45
2015-06-13 10:46:42 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Itens.php(45): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 45, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Itens->action_salvar()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Itens))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Itens.php:45
2015-06-13 10:47:01 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\Itens.php [ 45 ] in C:\xampp\htdocs\PF\application\classes\Controller\Itens.php:45
2015-06-13 10:47:01 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Itens.php(45): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 45, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Itens->action_salvar()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Itens))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Itens.php:45
2015-06-13 10:49:14 --- CRITICAL: Database_Exception [ 1452 ]: [1452] Cannot add or update a child row: a foreign key constraint fails (`mapaestrategico`.`itens`, CONSTRAINT `fk_ITENS_GRUPOS1` FOREIGN KEY (`GRUPOS_idGRUPO`) REFERENCES `grupos` (`idGRUPO`) ON DELETE CASCADE ON UPDATE CASCADE) ( INSERT INTO `itens` (`MAPAS_idME`) VALUES ('1') ) ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 181 ] in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-06-13 10:49:14 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `it...', false, Array)
#1 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 C:\xampp\htdocs\PF\application\classes\Controller\Itens.php(50): Kohana_ORM->save()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Itens->action_salvar()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Itens))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-06-13 10:51:18 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\Itens.php [ 46 ] in C:\xampp\htdocs\PF\application\classes\Controller\Itens.php:46
2015-06-13 10:51:18 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Itens.php(46): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 46, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Itens->action_salvar()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Itens))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Itens.php:46
2015-06-13 10:52:09 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\Itens.php [ 46 ] in C:\xampp\htdocs\PF\application\classes\Controller\Itens.php:46
2015-06-13 10:52:09 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Itens.php(46): Kohana_Core::error_handler(8, 'Array to string...', 'C:\xampp\htdocs...', 46, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Itens->action_salvar()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Itens))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Itens.php:46
2015-06-13 10:53:37 --- CRITICAL: Database_Exception [ 1452 ]: [1452] Cannot add or update a child row: a foreign key constraint fails (`mapaestrategico`.`itens`, CONSTRAINT `fk_ITENS_GRUPOS1` FOREIGN KEY (`GRUPOS_idGRUPO`) REFERENCES `grupos` (`idGRUPO`) ON DELETE CASCADE ON UPDATE CASCADE) ( INSERT INTO `itens` (`MAPAS_idME`) VALUES ('1') ) ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 181 ] in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-06-13 10:53:37 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `it...', false, Array)
#1 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 C:\xampp\htdocs\PF\application\classes\Controller\Itens.php(50): Kohana_ORM->save()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Itens->action_salvar()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Itens))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-06-13 10:57:49 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Itens.php [ 46 ] in C:\xampp\htdocs\PF\application\classes\Controller\Itens.php:46
2015-06-13 10:57:49 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Itens.php(46): Kohana_Core::error_handler(2, 'Attempt to assi...', 'C:\xampp\htdocs...', 46, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Itens->action_salvar()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Itens))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Itens.php:46
2015-06-13 10:58:01 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_Query_Builder_Select::$as_objec ~ APPPATH\classes\Controller\Itens.php [ 40 ] in C:\xampp\htdocs\PF\application\classes\Controller\Itens.php:40
2015-06-13 10:58:01 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Itens.php(40): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 40, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Itens->action_salvar()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Itens))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Itens.php:40
2015-06-13 10:58:17 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_Query_Builder_Select::$as_object ~ APPPATH\classes\Controller\Itens.php [ 40 ] in C:\xampp\htdocs\PF\application\classes\Controller\Itens.php:40
2015-06-13 10:58:17 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Itens.php(40): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 40, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Itens->action_salvar()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Itens))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Itens.php:40
2015-06-13 10:58:41 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_ORM::values() must be of the type array, object given, called in C:\xampp\htdocs\PF\application\classes\Controller\Itens.php on line 47 and defined ~ MODPATH\orm\classes\Kohana\ORM.php [ 775 ] in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:775
2015-06-13 10:58:41 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(775): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\xampp\htdocs...', 775, Array)
#1 C:\xampp\htdocs\PF\application\classes\Controller\Itens.php(47): Kohana_ORM->values(Object(stdClass))
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Itens->action_salvar()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Itens))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:775
2015-06-13 11:02:08 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_ORM::values() must be of the type array, object given, called in C:\xampp\htdocs\PF\application\classes\Controller\Itens.php on line 44 and defined ~ MODPATH\orm\classes\Kohana\ORM.php [ 775 ] in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:775
2015-06-13 11:02:08 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(775): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'C:\xampp\htdocs...', 775, Array)
#1 C:\xampp\htdocs\PF\application\classes\Controller\Itens.php(44): Kohana_ORM->values(Object(stdClass))
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Itens->action_salvar()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Itens))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:775
2015-06-13 11:03:06 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::as_array() ~ APPPATH\classes\Controller\Itens.php [ 39 ] in file:line
2015-06-13 11:03:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-13 11:04:08 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: consulta ~ APPPATH\classes\Controller\Itens.php [ 41 ] in C:\xampp\htdocs\PF\application\classes\Controller\Itens.php:41
2015-06-13 11:04:08 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Itens.php(41): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 41, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Itens->action_salvar()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Itens))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Itens.php:41
2015-06-13 11:04:41 --- CRITICAL: Database_Exception [ 1452 ]: [1452] Cannot add or update a child row: a foreign key constraint fails (`mapaestrategico`.`itens`, CONSTRAINT `fk_ITENS_GRUPOS1` FOREIGN KEY (`GRUPOS_idGRUPO`) REFERENCES `grupos` (`idGRUPO`) ON DELETE CASCADE ON UPDATE CASCADE) ( INSERT INTO `itens` (`MAPAS_idME`) VALUES ('1') ) ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 181 ] in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-06-13 11:04:41 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `it...', false, Array)
#1 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 C:\xampp\htdocs\PF\application\classes\Controller\Itens.php(49): Kohana_ORM->save()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Itens->action_salvar()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Itens))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-06-13 11:05:10 --- CRITICAL: Database_Exception [ 1452 ]: [1452] Cannot add or update a child row: a foreign key constraint fails (`mapaestrategico`.`itens`, CONSTRAINT `fk_ITENS_GRUPOS1` FOREIGN KEY (`GRUPOS_idGRUPO`) REFERENCES `grupos` (`idGRUPO`) ON DELETE CASCADE ON UPDATE CASCADE) ( INSERT INTO `itens` (`MAPAS_idME`) VALUES ('1') ) ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 181 ] in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-06-13 11:05:10 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `it...', false, Array)
#1 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 C:\xampp\htdocs\PF\application\classes\Controller\Itens.php(50): Kohana_ORM->save()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Itens->action_salvar()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Itens))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-06-13 11:06:45 --- CRITICAL: Database_Exception [ 1054 ]: [1054] Unknown column 'i.INDICADORES_idINDICADOR' in 'field list' ( SELECT `i`.`INDICADORES_idINDICADOR`, `i`.`OBJETIVOS_idOBJETIVO`, `g`.`GRUPOS_idGRUPO`, `p`.`PERSPECTIVAS_idPERSPECTIVA` FROM `indicadores` AS `i` JOIN `objetivos` AS `o` ON (`o`.`idOBJETIVO` = `i`.`OBJETIVOS_idOBJETIVO`) JOIN `grupos` AS `g` ON (`g`.`idGRUPO` = `o`.`GRUPOS_idGRUPO`) JOIN `perspectivas` AS `p` ON (`p`.`idPERSPECTIVA` = `g`.`PERSPECTIVAS_idPERSPECTIVA`) WHERE `i`.`idINDICADOR` = 1 ) ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 181 ] in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-06-13 11:06:45 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT `i`.`IND...', true, Array)
#1 C:\xampp\htdocs\PF\application\classes\Controller\Itens.php(39): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Itens->action_salvar()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Itens))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-06-13 11:09:23 --- CRITICAL: Database_Exception [ 1054 ]: [1054] Unknown column 'g.GRUPOS_idGRUPO' in 'field list' ( SELECT `i`.`idINDICADOR` AS `INDICADORES_idINDICADOR`, `i`.`OBJETIVOS_idOBJETIVO`, `g`.`GRUPOS_idGRUPO`, `p`.`PERSPECTIVAS_idPERSPECTIVA` FROM `indicadores` AS `i` JOIN `objetivos` AS `o` ON (`o`.`idOBJETIVO` = `i`.`OBJETIVOS_idOBJETIVO`) JOIN `grupos` AS `g` ON (`g`.`idGRUPO` = `o`.`GRUPOS_idGRUPO`) JOIN `perspectivas` AS `p` ON (`p`.`idPERSPECTIVA` = `g`.`PERSPECTIVAS_idPERSPECTIVA`) WHERE `i`.`idINDICADOR` = 1 ) ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 181 ] in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-06-13 11:09:23 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT `i`.`idI...', true, Array)
#1 C:\xampp\htdocs\PF\application\classes\Controller\Itens.php(39): Kohana_Database_Query->execute()
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Itens->action_salvar()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Itens))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-06-13 11:14:56 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\Itens.php [ 42 ] in file:line
2015-06-13 11:14:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-13 11:15:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: PERSPECTIVAS_idPERSPECTIVA ~ APPPATH\classes\Controller\Itens.php [ 62 ] in C:\xampp\htdocs\PF\application\classes\Controller\Itens.php:62
2015-06-13 11:15:53 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Itens.php(62): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 62, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Itens->action_salvar()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Itens))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Itens.php:62
2015-06-13 11:18:56 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: PERSPECTIVAS_idPERSPECTIVA ~ APPPATH\classes\Controller\Itens.php [ 64 ] in C:\xampp\htdocs\PF\application\classes\Controller\Itens.php:64
2015-06-13 11:18:56 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Itens.php(64): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 64, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Itens->action_salvar()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Itens))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Itens.php:64
2015-06-13 13:30:00 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQLi_Result::$idINDICADOR ~ APPPATH\classes\Controller\Indicadores.php [ 115 ] in C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php:115
2015-06-13 13:30:00 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php(115): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 115, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Indicadores->action_exportarXSD()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php:115
2015-06-13 13:50:15 --- CRITICAL: Kohana_Exception [ 0 ]: The perspectivas property does not exist in the Model_Item class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603
2015-06-13 13:50:15 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('perspectivas')
#1 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(36): Kohana_ORM->__get('perspectivas')
#2 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(30): Controller_Mapas->action_get_map()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Mapas->action_exibir()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603
2015-06-13 13:50:35 --- CRITICAL: Kohana_Exception [ 0 ]: The perspectivas property does not exist in the Model_Item class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603
2015-06-13 13:50:35 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('perspectivas')
#1 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(36): Kohana_ORM->__get('perspectivas')
#2 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(30): Controller_Mapas->action_get_map()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Mapas->action_exibir()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603
2015-06-13 14:25:26 --- CRITICAL: Kohana_Exception [ 0 ]: The perspectivas property does not exist in the Model_Item class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603
2015-06-13 14:25:26 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('perspectivas')
#1 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(35): Kohana_ORM->__get('perspectivas')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Mapas->action_get_map()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603
2015-06-13 14:28:30 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\templateWelcome.php [ 58 ] in C:\xampp\htdocs\PF\application\views\templateWelcome.php:58
2015-06-13 14:28:30 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateWelcome.php(58): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 58, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\PF\application\views\templateWelcome.php:58
2015-06-13 14:28:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\templateWelcome.php [ 58 ] in C:\xampp\htdocs\PF\application\views\templateWelcome.php:58
2015-06-13 14:28:38 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateWelcome.php(58): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 58, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\PF\application\views\templateWelcome.php:58
2015-06-13 14:29:02 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\templateWelcome.php [ 58 ] in C:\xampp\htdocs\PF\application\views\templateWelcome.php:58
2015-06-13 14:29:02 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateWelcome.php(58): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 58, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\PF\application\views\templateWelcome.php:58
2015-06-13 14:29:07 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\templateWelcome.php [ 58 ] in C:\xampp\htdocs\PF\application\views\templateWelcome.php:58
2015-06-13 14:29:07 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateWelcome.php(58): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 58, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\PF\application\views\templateWelcome.php:58
2015-06-13 14:29:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\templateWelcome.php [ 58 ] in C:\xampp\htdocs\PF\application\views\templateWelcome.php:58
2015-06-13 14:29:29 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateWelcome.php(58): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 58, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\PF\application\views\templateWelcome.php:58
2015-06-13 14:33:48 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: fullMap ~ APPPATH\classes\Model\Mapa.php [ 39 ] in C:\xampp\htdocs\PF\application\classes\Model\Mapa.php:39
2015-06-13 14:33:48 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Model\Mapa.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 39, Array)
#1 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(36): Model_Mapa->get_map()
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Mapas->action_get_map()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\PF\application\classes\Model\Mapa.php:39
2015-06-13 14:33:58 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: fullMap ~ APPPATH\classes\Model\Mapa.php [ 39 ] in C:\xampp\htdocs\PF\application\classes\Model\Mapa.php:39
2015-06-13 14:33:58 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Model\Mapa.php(39): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 39, Array)
#1 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(36): Model_Mapa->get_map()
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Mapas->action_get_map()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\PF\application\classes\Model\Mapa.php:39
2015-06-13 14:48:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$grupo' (T_VARIABLE) ~ APPPATH\classes\Model\Mapa.php [ 41 ] in file:line
2015-06-13 14:48:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-13 15:02:39 --- CRITICAL: ErrorException [ 1 ]: Unsupported operand types ~ APPPATH\views\templateTabelaMapa.php [ 9 ] in file:line
2015-06-13 15:02:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-13 15:02:46 --- CRITICAL: ErrorException [ 1 ]: Unsupported operand types ~ APPPATH\views\templateTabelaMapa.php [ 9 ] in file:line
2015-06-13 15:02:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-13 15:03:09 --- CRITICAL: View_Exception [ 0 ]: The requested view templateMapaCompleto could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\PF\system\classes\Kohana\View.php:137
2015-06-13 15:03:09 --- DEBUG: #0 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(137): Kohana_View->set_filename('templateMapaCom...')
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(30): Kohana_View->__construct('templateMapaCom...', NULL)
#2 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(38): Kohana_View::factory('templateMapaCom...')
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Mapas->action_get_map()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\PF\system\classes\Kohana\View.php:137
2015-06-13 15:03:47 --- CRITICAL: View_Exception [ 0 ]: The requested view templateMapaCompleto could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\PF\system\classes\Kohana\View.php:137
2015-06-13 15:03:47 --- DEBUG: #0 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(137): Kohana_View->set_filename('templateMapaCom...')
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(30): Kohana_View->__construct('templateMapaCom...', NULL)
#2 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(38): Kohana_View::factory('templateMapaCom...')
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Mapas->action_get_map()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\PF\system\classes\Kohana\View.php:137
2015-06-13 15:03:54 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: mapas ~ APPPATH\views\templateMapaCompleto.php [ 4 ] in C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php:4
2015-06-13 15:03:54 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(39): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Mapas->action_get_map()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php:4
2015-06-13 15:04:55 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: perspectiva ~ APPPATH\views\templateMapaCompleto.php [ 4 ] in C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php:4
2015-06-13 15:04:55 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 4, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(39): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Mapas->action_get_map()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php:4
2015-06-13 15:05:10 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\templateMapaCompleto.php [ 9 ] in C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php:9
2015-06-13 15:05:10 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php(9): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\xampp\htdocs...', 9, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(39): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Mapas->action_get_map()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php:9
2015-06-13 15:05:35 --- CRITICAL: ErrorException [ 8 ]: Undefined index: DESCRICAO_PERSP ~ APPPATH\views\templateMapaCompleto.php [ 9 ] in C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php:9
2015-06-13 15:05:35 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php(9): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 9, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(39): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Mapas->action_get_map()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php:9
2015-06-13 15:05:55 --- CRITICAL: ErrorException [ 8 ]: Undefined index: DESCRICAO_PERSP ~ APPPATH\views\templateMapaCompleto.php [ 9 ] in C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php:9
2015-06-13 15:05:55 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php(9): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 9, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(39): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Mapas->action_get_map()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php:9
2015-06-13 15:06:13 --- CRITICAL: ErrorException [ 8 ]: Undefined index: DESCRICAO_PERSP ~ APPPATH\views\templateMapaCompleto.php [ 9 ] in C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php:9
2015-06-13 15:06:13 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php(9): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 9, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(39): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Mapas->action_get_map()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php:9
2015-06-13 15:09:48 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\templateMapaCompleto.php [ 14 ] in C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php:14
2015-06-13 15:09:48 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php(14): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\xampp\htdocs...', 14, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(39): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Mapas->action_get_map()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php:14
2015-06-13 15:10:26 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ']' ~ APPPATH\views\templateMapaCompleto.php [ 14 ] in file:line
2015-06-13 15:10:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-13 15:10:35 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\templateMapaCompleto.php [ 21 ] in C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php:21
2015-06-13 15:10:35 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php(21): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\xampp\htdocs...', 21, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(39): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Mapas->action_get_map()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php:21
2015-06-13 15:14:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: perspectiva ~ APPPATH\views\templateMapaCompleto.php [ 5 ] in C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php:5
2015-06-13 15:14:14 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 5, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(39): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Mapas->action_get_map()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php:5
2015-06-13 15:14:35 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: setPerspectivas ~ APPPATH\views\templateMapaCompleto.php [ 5 ] in C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php:5
2015-06-13 15:14:35 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 5, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(39): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Mapas->action_get_map()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php:5
2015-06-13 15:14:41 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\templateMapaCompleto.php [ 21 ] in C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php:21
2015-06-13 15:14:41 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php(21): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\xampp\htdocs...', 21, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(39): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Mapas->action_get_map()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php:21
2015-06-13 15:28:33 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'foreach' (T_FOREACH) ~ APPPATH\classes\Model\Mapa.php [ 39 ] in file:line
2015-06-13 15:28:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-13 15:29:08 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\templateMapaCompleto.php [ 12 ] in C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php:12
2015-06-13 15:29:08 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php(12): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\xampp\htdocs...', 12, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(39): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Mapas->action_get_map()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php:12
2015-06-13 15:30:18 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\templateMapaCompleto.php [ 13 ] in C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php:13
2015-06-13 15:30:18 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php(13): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\xampp\htdocs...', 13, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(39): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Mapas->action_get_map()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php:13
2015-06-13 15:30:57 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\views\templateMapaCompleto.php [ 27 ] in file:line
2015-06-13 15:30:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-13 15:31:03 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\views\templateMapaCompleto.php [ 27 ] in file:line
2015-06-13 15:31:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-13 15:37:38 --- CRITICAL: Kohana_Exception [ 0 ]: The countObjetivos property does not exist in the Model_Mapa class ~ MODPATH\orm\classes\Kohana\ORM.php [ 760 ] in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:702
2015-06-13 15:37:38 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(702): Kohana_ORM->set('countObjetivos', 3)
#1 C:\xampp\htdocs\PF\application\classes\Model\Mapa.php(62): Kohana_ORM->__set('countObjetivos', 3)
#2 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(36): Model_Mapa->get_map()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Mapas->action_get_map()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:702
2015-06-13 15:40:52 --- CRITICAL: Kohana_Exception [ 0 ]: The countObjetivos property does not exist in the Model_Mapa class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603
2015-06-13 15:40:52 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('countObjetivos')
#1 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(36): Kohana_ORM->__get('countObjetivos')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Mapas->action_get_map()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603
2015-06-13 15:41:29 --- CRITICAL: Kohana_Exception [ 0 ]: The countObjetivos property does not exist in the Model_Mapa class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603
2015-06-13 15:41:29 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('countObjetivos')
#1 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(36): Kohana_ORM->__get('countObjetivos')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Mapas->action_get_map()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603
2015-06-13 15:41:30 --- CRITICAL: Kohana_Exception [ 0 ]: The countObjetivos property does not exist in the Model_Mapa class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603
2015-06-13 15:41:30 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('countObjetivos')
#1 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(36): Kohana_ORM->__get('countObjetivos')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Mapas->action_get_map()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603
2015-06-13 15:41:31 --- CRITICAL: Kohana_Exception [ 0 ]: The countObjetivos property does not exist in the Model_Mapa class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603
2015-06-13 15:41:31 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('countObjetivos')
#1 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(36): Kohana_ORM->__get('countObjetivos')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Mapas->action_get_map()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603
2015-06-13 15:42:45 --- CRITICAL: ErrorException [ 8 ]: Undefined index: countObjetivos ~ APPPATH\views\templateMapaCompleto.php [ 11 ] in C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php:11
2015-06-13 15:42:45 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php(11): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 11, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(40): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Mapas->action_get_map()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php:11
2015-06-13 15:46:03 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\Indicadores.php [ 115 ] in file:line
2015-06-13 15:46:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-13 15:46:04 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\Indicadores.php [ 115 ] in file:line
2015-06-13 15:46:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-13 15:46:12 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\Indicadores.php [ 115 ] in file:line
2015-06-13 15:46:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-13 15:46:12 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\Indicadores.php [ 115 ] in file:line
2015-06-13 15:46:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-13 15:46:16 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\Indicadores.php [ 115 ] in file:line
2015-06-13 15:46:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-13 15:46:16 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\Indicadores.php [ 115 ] in file:line
2015-06-13 15:46:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-13 15:46:45 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\Indicadores.php [ 115 ] in file:line
2015-06-13 15:46:45 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-13 15:48:36 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: countObjetivos ~ APPPATH\classes\Model\Mapa.php [ 63 ] in C:\xampp\htdocs\PF\application\classes\Model\Mapa.php:63
2015-06-13 15:48:36 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Model\Mapa.php(63): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 63, Array)
#1 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(37): Model_Mapa->get_map()
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Mapas->action_get_map()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\PF\application\classes\Model\Mapa.php:63
2015-06-13 15:48:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: countObjetivos ~ APPPATH\classes\Model\Mapa.php [ 63 ] in C:\xampp\htdocs\PF\application\classes\Model\Mapa.php:63
2015-06-13 15:48:40 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Model\Mapa.php(63): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 63, Array)
#1 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(37): Model_Mapa->get_map()
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Mapas->action_get_map()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\PF\application\classes\Model\Mapa.php:63
2015-06-13 15:49:11 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: countObjetivos ~ APPPATH\classes\Model\Mapa.php [ 63 ] in C:\xampp\htdocs\PF\application\classes\Model\Mapa.php:63
2015-06-13 15:49:11 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Model\Mapa.php(63): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 63, Array)
#1 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(37): Model_Mapa->get_map()
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Mapas->action_get_map()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\PF\application\classes\Model\Mapa.php:63
2015-06-13 15:49:55 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: fullMap ~ APPPATH\classes\Model\Mapa.php [ 65 ] in C:\xampp\htdocs\PF\application\classes\Model\Mapa.php:65
2015-06-13 15:49:55 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Model\Mapa.php(65): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 65, Array)
#1 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(37): Model_Mapa->get_map()
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Mapas->action_get_map()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\PF\application\classes\Model\Mapa.php:65
2015-06-13 15:49:58 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: fullMap ~ APPPATH\classes\Model\Mapa.php [ 65 ] in C:\xampp\htdocs\PF\application\classes\Model\Mapa.php:65
2015-06-13 15:49:58 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Model\Mapa.php(65): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 65, Array)
#1 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(37): Model_Mapa->get_map()
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Mapas->action_get_map()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\PF\application\classes\Model\Mapa.php:65
2015-06-13 16:30:09 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '1' (T_LNUMBER), expecting variable (T_VARIABLE) or '$' ~ APPPATH\classes\Controller\Mapas.php [ 35 ] in file:line
2015-06-13 16:30:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-13 16:31:49 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '(', expecting ',' or ';' ~ APPPATH\classes\Model\Mapa.php [ 7 ] in file:line
2015-06-13 16:31:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-13 16:32:31 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: objetivo ~ APPPATH\classes\Model\Mapa.php [ 78 ] in C:\xampp\htdocs\PF\application\classes\Model\Mapa.php:78
2015-06-13 16:32:31 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Model\Mapa.php(78): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 78, Array)
#1 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(37): Model_Mapa->get_map2()
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Mapas->action_get_map()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\PF\application\classes\Model\Mapa.php:78
2015-06-13 16:32:50 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: objetivo ~ APPPATH\classes\Model\Mapa.php [ 78 ] in C:\xampp\htdocs\PF\application\classes\Model\Mapa.php:78
2015-06-13 16:32:50 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Model\Mapa.php(78): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 78, Array)
#1 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(37): Model_Mapa->get_map2()
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Mapas->action_get_map()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\PF\application\classes\Model\Mapa.php:78
2015-06-13 16:33:08 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: fullMap ~ APPPATH\classes\Model\Mapa.php [ 85 ] in C:\xampp\htdocs\PF\application\classes\Model\Mapa.php:85
2015-06-13 16:33:08 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Model\Mapa.php(85): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 85, Array)
#1 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(37): Model_Mapa->get_map2()
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Mapas->action_get_map()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\PF\application\classes\Model\Mapa.php:85
2015-06-13 16:36:11 --- CRITICAL: ErrorException [ 1 ]: Call to a member function add() on a non-object ~ APPPATH\classes\Model\Mapa.php [ 81 ] in file:line
2015-06-13 16:36:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-13 16:39:49 --- CRITICAL: ErrorException [ 2 ]: end() expects parameter 1 to be array, null given ~ APPPATH\classes\Model\Mapa.php [ 77 ] in file:line
2015-06-13 16:39:49 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'end() expects p...', 'C:\xampp\htdocs...', 77, Array)
#1 C:\xampp\htdocs\PF\application\classes\Model\Mapa.php(77): end(NULL)
#2 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(37): Model_Mapa->get_map2()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Mapas->action_get_map()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-06-13 16:40:24 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ']' ~ APPPATH\classes\Model\Mapa.php [ 77 ] in file:line
2015-06-13 16:40:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-13 16:43:04 --- CRITICAL: ErrorException [ 2 ]: Missing argument 2 for Kohana_ORM::add(), called in C:\xampp\htdocs\PF\application\classes\Model\Mapa.php on line 82 and defined ~ MODPATH\orm\classes\Kohana\ORM.php [ 1563 ] in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:1563
2015-06-13 16:43:04 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1563): Kohana_Core::error_handler(2, 'Missing argumen...', 'C:\xampp\htdocs...', 1563, Array)
#1 C:\xampp\htdocs\PF\application\classes\Model\Mapa.php(82): Kohana_ORM->add(Object(Model_Perspectiva))
#2 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(37): Model_Mapa->get_map2()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Mapas->action_get_map()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:1563
2015-06-13 16:43:56 --- CRITICAL: Database_Exception [ 1103 ]: [1103] Incorrect table name '' ( INSERT INTO `` (`PERSPECTIVAS_idPERSPECTIVA`, `grupo_id`) VALUES ('1', '1') ) ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 181 ] in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-06-13 16:43:56 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `` ...', false, Array)
#1 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\xampp\htdocs\PF\application\classes\Model\Mapa.php(82): Kohana_ORM->add('grupo', '1')
#3 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(37): Model_Mapa->get_map2()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Mapas->action_get_map()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-06-13 16:47:15 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant idMap - assumed 'idMap' ~ APPPATH\classes\Controller\Mapas.php [ 35 ] in C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php:35
2015-06-13 16:47:15 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(35): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\xampp\htdocs...', 35, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Mapas->action_get_map()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php:35
2015-06-13 16:59:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: obj ~ APPPATH\views\templateMapaCompleto.php [ 21 ] in C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php:21
2015-06-13 16:59:40 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php(21): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 21, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(40): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Mapas->action_get_map()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#11 {main} in C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php:21
2015-06-13 16:59:52 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function get_color() ~ APPPATH\views\templateMapaCompleto.php [ 21 ] in file:line
2015-06-13 16:59:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-13 17:00:04 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function get_color() ~ APPPATH\views\templateMapaCompleto.php [ 21 ] in file:line
2015-06-13 17:00:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-13 17:00:08 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function get_color() ~ APPPATH\views\templateMapaCompleto.php [ 21 ] in file:line
2015-06-13 17:00:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-13 17:00:10 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function get_color() ~ APPPATH\views\templateMapaCompleto.php [ 21 ] in file:line
2015-06-13 17:00:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-13 17:00:13 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function get_color() ~ APPPATH\views\templateMapaCompleto.php [ 21 ] in file:line
2015-06-13 17:00:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-13 17:00:33 --- CRITICAL: ErrorException [ 1 ]: Call to undefined function get_color() ~ APPPATH\views\templateMapaCompleto.php [ 21 ] in file:line
2015-06-13 17:00:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-13 17:06:13 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Model\Objetivo.php [ 43 ] in C:\xampp\htdocs\PF\application\classes\Model\Objetivo.php:43
2015-06-13 17:06:13 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Model\Objetivo.php(43): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\xampp\htdocs...', 43, Array)
#1 C:\xampp\htdocs\PF\application\views\templateMapaCompleto.php(21): Model_Objetivo::get_color(Array)
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(43): Kohana_View->__toString()
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Mapas->action_get_map()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#9 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#12 {main} in C:\xampp\htdocs\PF\application\classes\Model\Objetivo.php:43
2015-06-13 17:38:49 --- CRITICAL: Kohana_Exception [ 0 ]: The INDICADORES_idINDICADOR property does not exist in the Model_Indicador class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603
2015-06-13 17:38:49 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('INDICADORES_idI...')
#1 C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php(117): Kohana_ORM->__get('INDICADORES_idI...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Indicadores->action_exportarXSD()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603
2015-06-13 17:40:20 --- CRITICAL: Kohana_Exception [ 0 ]: The projeto property does not exist in the Model_Indicador class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603
2015-06-13 17:40:20 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('projeto')
#1 C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php(127): Kohana_ORM->__get('projeto')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Indicadores->action_exportarXSD()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603
2015-06-13 17:44:04 --- CRITICAL: ErrorException [ 2 ]: SimpleXMLElement::addAttribute(): Attribute already exists ~ APPPATH\classes\Controller\Indicadores.php [ 119 ] in file:line
2015-06-13 17:44:04 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'SimpleXMLElemen...', 'C:\xampp\htdocs...', 119, Array)
#1 C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php(119): SimpleXMLElement->addAttribute('value', '2')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Indicadores->action_exportarXSD()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2015-06-13 17:49:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: projetos ~ APPPATH\views\templateProjetos.php [ 40 ] in C:\xampp\htdocs\PF\application\views\templateProjetos.php:40
2015-06-13 17:49:39 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateProjetos.php(40): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 40, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\views\templateWelcome.php(58): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Projetos))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\PF\application\views\templateProjetos.php:40
2015-06-13 18:03:27 --- CRITICAL: Kohana_Exception [ 0 ]: The _desc_column property does not exist in the Model_Item class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603
2015-06-13 18:03:27 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('_desc_column')
#1 C:\xampp\htdocs\PF\modules\orm\classes\ORM.php(15): Kohana_ORM->__get('_desc_column')
#2 C:\xampp\htdocs\PF\application\classes\Controller\Importacoes.php(9): ORM::get_select('Item')
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Importacoes->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Importacoes))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603
2015-06-13 19:58:22 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: INDICADORES_idINDICADOR ~ APPPATH\views\templateImportacoes.php [ 8 ] in C:\xampp\htdocs\PF\application\views\templateImportacoes.php:8
2015-06-13 19:58:22 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateImportacoes.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 8, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\views\templateWelcome.php(58): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Importacoes))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\PF\application\views\templateImportacoes.php:8
2015-06-13 19:58:46 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: INDICADORES_idINDICADOR ~ APPPATH\views\templateImportacoes.php [ 8 ] in C:\xampp\htdocs\PF\application\views\templateImportacoes.php:8
2015-06-13 19:58:46 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateImportacoes.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 8, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\views\templateWelcome.php(58): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Importacoes))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\PF\application\views\templateImportacoes.php:8
2015-06-13 20:13:48 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: importacoes ~ APPPATH\views\templateImportacoes.php [ 23 ] in C:\xampp\htdocs\PF\application\views\templateImportacoes.php:23
2015-06-13 20:13:48 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateImportacoes.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 23, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\views\templateWelcome.php(58): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Importacoes))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\PF\application\views\templateImportacoes.php:23
2015-06-13 20:14:15 --- CRITICAL: ErrorException [ 8 ]: Undefined index: INDICADORES_idINDICADOR ~ APPPATH\classes\Controller\Importacoes.php [ 20 ] in C:\xampp\htdocs\PF\application\classes\Controller\Importacoes.php:20
2015-06-13 20:14:15 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Importacoes.php(20): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 20, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Importacoes->action_importarXML()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Importacoes))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Importacoes.php:20
2015-06-13 20:15:22 --- CRITICAL: ErrorException [ 8 ]: Undefined index: INDICADORES_idINDICADOR ~ APPPATH\classes\Controller\Importacoes.php [ 22 ] in C:\xampp\htdocs\PF\application\classes\Controller\Importacoes.php:22
2015-06-13 20:15:22 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Importacoes.php(22): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 22, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Importacoes->action_importarXML()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Importacoes))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Importacoes.php:22
2015-06-13 20:17:59 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: importacoes ~ APPPATH\views\templateImportacoes.php [ 23 ] in C:\xampp\htdocs\PF\application\views\templateImportacoes.php:23
2015-06-13 20:17:59 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateImportacoes.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 23, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\views\templateWelcome.php(58): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Importacoes))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\PF\application\views\templateImportacoes.php:23
2015-06-13 20:19:30 --- CRITICAL: Kohana_Exception [ 0 ]: The item property does not exist in the Model_Importacao class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603
2015-06-13 20:19:30 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('item')
#1 C:\xampp\htdocs\PF\application\views\templateImportacoes.php(25): Kohana_ORM->__get('item')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\PF\application\views\templateWelcome.php(58): Kohana_View->__toString()
#6 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Importacoes))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603
2015-06-13 20:20:10 --- CRITICAL: Kohana_Exception [ 0 ]: The item property does not exist in the Model_Importacao class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603
2015-06-13 20:20:10 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('item')
#1 C:\xampp\htdocs\PF\application\views\templateImportacoes.php(25): Kohana_ORM->__get('item')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\PF\application\views\templateWelcome.php(58): Kohana_View->__toString()
#6 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Importacoes))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603
2015-06-13 20:20:12 --- CRITICAL: Kohana_Exception [ 0 ]: The item property does not exist in the Model_Importacao class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603
2015-06-13 20:20:12 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('item')
#1 C:\xampp\htdocs\PF\application\views\templateImportacoes.php(25): Kohana_ORM->__get('item')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\PF\application\views\templateWelcome.php(58): Kohana_View->__toString()
#6 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Importacoes))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603
2015-06-13 20:20:23 --- CRITICAL: Kohana_Exception [ 0 ]: The item property does not exist in the Model_Importacao class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603
2015-06-13 20:20:23 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('item')
#1 C:\xampp\htdocs\PF\application\views\templateImportacoes.php(25): Kohana_ORM->__get('item')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\PF\application\views\templateWelcome.php(58): Kohana_View->__toString()
#6 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Importacoes))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603