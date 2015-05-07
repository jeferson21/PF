<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-03-24 09:35:42 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Perspectiva' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2015-03-24 09:35:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-03-24 09:38:01 --- CRITICAL: Database_Exception [ 1146 ]: [1146] Table 'trabweb.perspectivas' doesn't exist ( SHOW FULL COLUMNS FROM `perspectivas` ) ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 181 ] in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\MySQLi.php:348
2015-03-24 09:38:01 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\MySQLi.php(348): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('perspectivas')
#2 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\PF\application\classes\Controller\Perspectivas.php(12): Kohana_ORM::factory('Perspectiva')
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Perspectivas->action_salvar()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perspectivas))
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\MySQLi.php:348
2015-03-24 09:42:58 --- CRITICAL: Database_Exception [ 1146 ]: [1146] Table 'trabweb.perspectivas' doesn't exist ( SHOW FULL COLUMNS FROM `perspectivas` ) ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 181 ] in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\MySQLi.php:348
2015-03-24 09:42:58 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\MySQLi.php(348): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('perspectivas')
#2 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\PF\application\classes\Controller\Perspectivas.php(12): Kohana_ORM::factory('Perspectiva')
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Perspectivas->action_salvar()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perspectivas))
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\MySQLi.php:348
2015-03-24 09:52:14 --- CRITICAL: Database_Exception [ 1146 ]: [1146] Table 'trabweb.perspectivas' doesn't exist ( SHOW FULL COLUMNS FROM `perspectivas` ) ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 181 ] in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\MySQLi.php:348
2015-03-24 09:52:14 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\MySQLi.php(348): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('perspectivas')
#2 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\PF\application\classes\Controller\Perspectivas.php(12): Kohana_ORM::factory('Perspectiva')
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Perspectivas->action_salvar()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perspectivas))
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\MySQLi.php:348