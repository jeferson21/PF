<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2014-12-14 08:35:58 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\MySQL.php:171
2014-12-14 08:35:58 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('usuarios')
#3 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(1)
#7 C:\xampp\htdocs\PF\application\classes\Controller\welcome.php(10): Kohana_ORM::factory('Usuario', 1)
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\MySQL.php:171
2014-12-14 09:15:31 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\MySQL.php:171
2014-12-14 09:15:31 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('usuarios')
#3 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(1)
#7 C:\xampp\htdocs\PF\application\classes\Controller\welcome.php(10): Kohana_ORM::factory('Usuario', 1)
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\MySQL.php:171
2014-12-14 09:17:25 --- CRITICAL: ErrorException [ 1 ]: Class 'Database_MySQLi' not found ~ MODPATH\database\classes\Kohana\Database.php [ 78 ] in file:line
2014-12-14 09:17:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-14 09:37:56 --- CRITICAL: ErrorException [ 1 ]: Class 'Database_MySQLi' not found ~ MODPATH\database\classes\Kohana\Database.php [ 78 ] in file:line
2014-12-14 09:37:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-14 09:38:03 --- CRITICAL: ErrorException [ 1 ]: Class 'Database_MySQLi' not found ~ MODPATH\database\classes\Kohana\Database.php [ 78 ] in file:line
2014-12-14 09:38:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-14 09:41:29 --- CRITICAL: ErrorException [ 1 ]: Class 'Kohana_Database_MySQLi' not found ~ MODPATH\database\classes\Database\MySQLi.php [ 3 ] in file:line
2014-12-14 09:41:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-14 09:53:13 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 65 ] in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\MySQLi.php:65
2014-12-14 09:53:13 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\MySQLi.php(65): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\xampp\htdocs...', 65, Array)
#1 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\MySQLi.php(158): Kohana_Database_MySQLi->connect()
#2 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\MySQLi.php(348): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#3 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('usuarios')
#4 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#5 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#6 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#7 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(1)
#8 C:\xampp\htdocs\PF\application\classes\Controller\welcome.php(10): Kohana_ORM::factory('Usuario', 1)
#9 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\MySQLi.php:65
2014-12-14 10:04:18 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 65 ] in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\MySQLi.php:65
2014-12-14 10:04:18 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\MySQLi.php(65): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\xampp\htdocs...', 65, Array)
#1 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\MySQLi.php(158): Kohana_Database_MySQLi->connect()
#2 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\MySQLi.php(348): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#3 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('usuarios')
#4 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#5 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#6 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#7 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(1)
#8 C:\xampp\htdocs\PF\application\classes\Controller\welcome.php(10): Kohana_ORM::factory('Usuario', 1)
#9 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\MySQLi.php:65
2014-12-14 10:04:41 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 65 ] in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\MySQLi.php:65
2014-12-14 10:04:41 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\MySQLi.php(65): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\xampp\htdocs...', 65, Array)
#1 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\MySQLi.php(158): Kohana_Database_MySQLi->connect()
#2 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\MySQLi.php(348): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#3 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('usuarios')
#4 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#5 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#6 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#7 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(1)
#8 C:\xampp\htdocs\PF\application\classes\Controller\welcome.php(10): Kohana_ORM::factory('Usuario', 1)
#9 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\MySQLi.php:65
2014-12-14 11:12:12 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 65 ] in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\MySQLi.php:65
2014-12-14 11:12:12 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\MySQLi.php(65): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\xampp\htdocs...', 65, Array)
#1 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\MySQLi.php(158): Kohana_Database_MySQLi->connect()
#2 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\MySQLi.php(348): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#3 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('usuarios')
#4 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#5 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#6 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#7 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(1)
#8 C:\xampp\htdocs\PF\application\classes\Controller\welcome.php(10): Kohana_ORM::factory('Usuario', 1)
#9 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\MySQLi.php:65
2014-12-14 19:30:40 --- CRITICAL: Database_Exception [ 1146 ]: [1146] Table 'aula.empresarials' doesn't exist ( SHOW FULL COLUMNS FROM `empresarials` ) ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 181 ] in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\MySQLi.php:348
2014-12-14 19:30:40 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\MySQLi.php(348): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('empresarials')
#2 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(1)
#6 C:\xampp\htdocs\PF\application\classes\Controller\welcome.php(10): Kohana_ORM::factory('Empresarial', 1)
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\MySQLi.php:348
2014-12-14 19:33:53 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH\classes\Model\empresarial.php [ 10 ] in file:line
2014-12-14 19:33:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-14 19:39:26 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in C:\xampp\htdocs\PF\application\classes\Controller\welcome.php:11
2014-12-14 19:39:26 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\welcome.php(11): Kohana_ORM->find()
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\welcome.php:11
2014-12-14 19:40:19 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in C:\xampp\htdocs\PF\application\classes\Controller\welcome.php:11
2014-12-14 19:40:19 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\welcome.php(11): Kohana_ORM->find()
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\welcome.php:11
2014-12-14 19:40:20 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in C:\xampp\htdocs\PF\application\classes\Controller\welcome.php:11
2014-12-14 19:40:20 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\welcome.php(11): Kohana_ORM->find()
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\welcome.php:11
2014-12-14 19:40:35 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in C:\xampp\htdocs\PF\application\classes\Controller\welcome.php:11
2014-12-14 19:40:35 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\welcome.php(11): Kohana_ORM->find()
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\welcome.php:11
2014-12-14 19:41:12 --- CRITICAL: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 991 ] in C:\xampp\htdocs\PF\application\classes\Controller\welcome.php:11
2014-12-14 19:41:12 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\welcome.php(11): Kohana_ORM->find_all()
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\welcome.php:11
2014-12-14 19:41:13 --- CRITICAL: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 991 ] in C:\xampp\htdocs\PF\application\classes\Controller\welcome.php:11
2014-12-14 19:41:13 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\welcome.php(11): Kohana_ORM->find_all()
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\welcome.php:11
2014-12-14 19:41:13 --- CRITICAL: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 991 ] in C:\xampp\htdocs\PF\application\classes\Controller\welcome.php:11
2014-12-14 19:41:13 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\welcome.php(11): Kohana_ORM->find_all()
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\welcome.php:11
2014-12-14 19:41:13 --- CRITICAL: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 991 ] in C:\xampp\htdocs\PF\application\classes\Controller\welcome.php:11
2014-12-14 19:41:13 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\welcome.php(11): Kohana_ORM->find_all()
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\welcome.php:11
2014-12-14 20:12:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$usuarios' (T_VARIABLE) ~ APPPATH\classes\Controller\welcome.php [ 11 ] in file:line
2014-12-14 20:12:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-14 20:13:38 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$usuarios' (T_VARIABLE) ~ APPPATH\classes\Controller\welcome.php [ 12 ] in file:line
2014-12-14 20:13:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-14 20:13:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$usuarios' (T_VARIABLE) ~ APPPATH\classes\Controller\welcome.php [ 12 ] in file:line
2014-12-14 20:13:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-14 20:14:18 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$usuarios' (T_VARIABLE) ~ APPPATH\classes\Controller\welcome.php [ 12 ] in file:line
2014-12-14 20:14:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-14 21:10:03 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQLi_Result::$id ~ APPPATH\classes\Controller\welcome.php [ 17 ] in C:\xampp\htdocs\PF\application\classes\Controller\welcome.php:17
2014-12-14 21:10:03 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\welcome.php(17): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 17, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\welcome.php:17
2014-12-14 21:50:08 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '*', expecting function (T_FUNCTION) ~ APPPATH\classes\Controller\welcome.php [ 30 ] in file:line
2014-12-14 21:50:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-14 21:50:45 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: usuarios ~ APPPATH\views\index\editar.php [ 15 ] in C:\xampp\htdocs\PF\application\views\index\editar.php:15
2014-12-14 21:50:45 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\index\editar.php(15): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 15, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\views\templateWelcome.php(6): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\PF\application\views\index\editar.php:15
2014-12-14 21:51:13 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant btn_submit - assumed 'btn_submit' ~ APPPATH\views\index\editar.php [ 16 ] in C:\xampp\htdocs\PF\application\views\index\editar.php:16
2014-12-14 21:51:13 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\index\editar.php(16): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\xampp\htdocs...', 16, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\views\templateWelcome.php(6): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\PF\application\views\index\editar.php:16
2014-12-14 22:01:46 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\welcome.php [ 38 ] in file:line
2014-12-14 22:01:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-14 22:03:21 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\welcome.php [ 38 ] in file:line
2014-12-14 22:03:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-14 22:03:38 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\welcome.php [ 38 ] in file:line
2014-12-14 22:03:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-14 22:19:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: usuario ~ APPPATH\views\index\list.php [ 2 ] in C:\xampp\htdocs\PF\application\views\index\list.php:2
2014-12-14 22:19:53 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\index\list.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 2, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\views\templateWelcome.php(6): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\PF\application\views\index\list.php:2
2014-12-14 22:20:31 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: usuario ~ APPPATH\views\index\list.php [ 2 ] in C:\xampp\htdocs\PF\application\views\index\list.php:2
2014-12-14 22:20:31 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\index\list.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 2, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\views\templateWelcome.php(6): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\PF\application\views\index\list.php:2
2014-12-14 22:20:36 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: usuario ~ APPPATH\views\index\list.php [ 2 ] in C:\xampp\htdocs\PF\application\views\index\list.php:2
2014-12-14 22:20:36 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\index\list.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 2, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\views\templateWelcome.php(6): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\PF\application\views\index\list.php:2
2014-12-14 22:21:34 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: usuario ~ APPPATH\views\index\list.php [ 2 ] in C:\xampp\htdocs\PF\application\views\index\list.php:2
2014-12-14 22:21:34 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\index\list.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 2, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\views\templateWelcome.php(6): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\PF\application\views\index\list.php:2
2014-12-14 22:22:01 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\welcome.php [ 38 ] in file:line
2014-12-14 22:22:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-14 22:22:44 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\welcome.php [ 38 ] in file:line
2014-12-14 22:22:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-14 22:24:27 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\welcome.php [ 38 ] in file:line
2014-12-14 22:24:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-14 22:40:07 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\welcome.php [ 45 ] in file:line
2014-12-14 22:40:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-14 22:40:17 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\welcome.php [ 45 ] in file:line
2014-12-14 22:40:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-14 22:44:42 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\welcome.php [ 47 ] in file:line
2014-12-14 22:44:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2014-12-14 22:44:50 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\welcome.php [ 47 ] in file:line
2014-12-14 22:44:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line