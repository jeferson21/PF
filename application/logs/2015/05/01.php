<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-05-01 10:45:27 --- CRITICAL: Database_Exception [ 1146 ]: [1146] Table 'mapaestrategico.objetivos' doesn't exist ( SHOW FULL COLUMNS FROM `objetivos` ) ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 181 ] in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\MySQLi.php:348
2015-05-01 10:45:27 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\MySQLi.php(348): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('objetivos')
#2 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(8): Kohana_ORM::factory('Objetivo')
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Mapas->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\MySQLi.php:348
2015-05-01 18:33:36 --- CRITICAL: Database_Exception [ 1146 ]: [1146] Table 'mapaestrategico.grupo' doesn't exist ( SELECT `DESCRICAO_PERSP`, `perspectiva`.`idPERSPECTIVA` AS `idPERSPECTIVA`, `perspectiva`.`TIPO_PERSP` AS `TIPO_PERSP`, `perspectiva`.`SITUACAO_PERSP` AS `SITUACAO_PERSP`, `perspectiva`.`DESCRICAO_PERSP` AS `DESCRICAO_PERSP` FROM `perspectivas` AS `perspectiva` RIGHT JOIN `Grupo` ON (`idPERSPECTIVA` = `PERSPECTIVAS_idPERSPECTIVA`) ) ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 181 ] in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-05-01 18:33:36 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(1, 'SELECT `DESCRIC...', 'Model_Perspecti...', Array)
#1 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php(15): Kohana_ORM->find_all()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Grupos->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Grupos))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-05-01 18:48:49 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '(', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH\classes\Controller\Grupos.php [ 19 ] in file:line
2015-05-01 18:48:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-01 18:56:50 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '/' ~ APPPATH\views\templateGrupos.php [ 25 ] in file:line
2015-05-01 18:56:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-05-01 19:00:05 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: query ~ APPPATH\classes\Controller\Grupos.php [ 19 ] in C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php:19
2015-05-01 19:00:05 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php(19): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 19, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Grupos->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Grupos))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php:19