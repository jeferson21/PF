<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-04-19 18:03:06 --- CRITICAL: Database_Exception [ 1451 ]: [1451] Cannot delete or update a parent row: a foreign key constraint fails (`mapaestrategico`.`grupos`, CONSTRAINT `fk_GRUPOS_PERSPECTIVAS` FOREIGN KEY (`PERSPECTIVAS_idPERSPECTIVA`) REFERENCES `perspectivas` (`idPERSPECTIVA`) ON DELETE NO ACTION ON UPDATE NO ACTION) ( DELETE FROM `perspectivas` WHERE `idPERSPECTIVA` = '1' ) ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 181 ] in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-04-19 18:03:06 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(4, 'DELETE FROM `pe...', false, Array)
#1 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1442): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\xampp\htdocs\PF\application\classes\Controller\Perspectivas.php(28): Kohana_ORM->delete()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Perspectivas->action_delete()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perspectivas))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-04-19 18:03:14 --- CRITICAL: Database_Exception [ 1451 ]: [1451] Cannot delete or update a parent row: a foreign key constraint fails (`mapaestrategico`.`grupos`, CONSTRAINT `fk_GRUPOS_PERSPECTIVAS` FOREIGN KEY (`PERSPECTIVAS_idPERSPECTIVA`) REFERENCES `perspectivas` (`idPERSPECTIVA`) ON DELETE NO ACTION ON UPDATE NO ACTION) ( DELETE FROM `perspectivas` WHERE `idPERSPECTIVA` = '1' ) ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 181 ] in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-04-19 18:03:14 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(4, 'DELETE FROM `pe...', false, Array)
#1 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1442): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\xampp\htdocs\PF\application\classes\Controller\Perspectivas.php(28): Kohana_ORM->delete()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Perspectivas->action_delete()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perspectivas))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251