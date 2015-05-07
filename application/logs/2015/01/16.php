<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-01-16 05:24:50 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2015-01-16 05:24:50 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('usuarios')
#3 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(1)
#7 C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php(10): Kohana_ORM::factory('Usuario', 1)
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2015-01-16 05:26:45 --- CRITICAL: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2015-01-16 05:26:45 --- DEBUG: #0 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('usuarios')
#3 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 C:\xampp\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(1)
#7 C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php(10): Kohana_ORM::factory('Usuario', 1)
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#11 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2015-01-16 05:58:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\views\templateWelcome.php [ 6 ] in C:\xampp\htdocs\kohana\application\views\templateWelcome.php:6
2015-01-16 05:58:12 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\views\templateWelcome.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 6, Array)
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\kohana\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#7 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\kohana\application\views\templateWelcome.php:6
2015-01-16 06:13:46 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php:11
2015-01-16 06:13:46 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php(11): Kohana_ORM->find()
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php:11
2015-01-16 06:14:49 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php:11
2015-01-16 06:14:49 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php(11): Kohana_ORM->find()
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php:11
2015-01-16 06:14:51 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php:11
2015-01-16 06:14:51 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php(11): Kohana_ORM->find()
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php:11
2015-01-16 06:14:52 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php:11
2015-01-16 06:14:52 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php(11): Kohana_ORM->find()
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php:11
2015-01-16 06:15:56 --- CRITICAL: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 991 ] in C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php:11
2015-01-16 06:15:56 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php(11): Kohana_ORM->find_all()
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php:11
2015-01-16 06:20:26 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php:11
2015-01-16 06:20:26 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php(11): Kohana_ORM->find()
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php:11
2015-01-16 06:21:31 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$usuarios' (T_VARIABLE) ~ APPPATH\classes\Controller\welcome.php [ 11 ] in file:line
2015-01-16 06:21:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-16 06:21:52 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php:12
2015-01-16 06:21:52 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php(12): Kohana_ORM->find()
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php:12
2015-01-16 06:27:49 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php:12
2015-01-16 06:27:49 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php(12): Kohana_ORM->find()
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php:12
2015-01-16 06:59:47 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php:11
2015-01-16 06:59:47 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php(11): Kohana_ORM->find()
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php:11
2015-01-16 06:59:52 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php:11
2015-01-16 06:59:52 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php(11): Kohana_ORM->find()
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php:11
2015-01-16 07:04:25 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php:11
2015-01-16 07:04:25 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php(11): Kohana_ORM->find()
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php:11
2015-01-16 07:05:07 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php:11
2015-01-16 07:05:07 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php(11): Kohana_ORM->find()
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php:11
2015-01-16 07:05:08 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php:11
2015-01-16 07:05:08 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php(11): Kohana_ORM->find()
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php:11
2015-01-16 07:05:08 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php:11
2015-01-16 07:05:08 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php(11): Kohana_ORM->find()
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php:11
2015-01-16 07:05:09 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php:11
2015-01-16 07:05:09 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php(11): Kohana_ORM->find()
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php:11
2015-01-16 07:21:14 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php:12
2015-01-16 07:21:14 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php(12): Kohana_ORM->find()
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php:12
2015-01-16 10:04:30 --- CRITICAL: Kohana_Exception [ 0 ]: Method find() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 966 ] in C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php:15
2015-01-16 10:04:30 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php(15): Kohana_ORM->find()
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php:15
2015-01-16 10:14:27 --- CRITICAL: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 991 ] in C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php:14
2015-01-16 10:14:27 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php(14): Kohana_ORM->find_all()
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php:14
2015-01-16 10:14:29 --- CRITICAL: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 991 ] in C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php:14
2015-01-16 10:14:29 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php(14): Kohana_ORM->find_all()
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php:14
2015-01-16 10:14:29 --- CRITICAL: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 991 ] in C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php:14
2015-01-16 10:14:29 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php(14): Kohana_ORM->find_all()
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php:14
2015-01-16 10:15:19 --- CRITICAL: Kohana_Exception [ 0 ]: Method find_all() cannot be called on loaded objects ~ MODPATH\orm\classes\Kohana\ORM.php [ 991 ] in C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php:15
2015-01-16 10:15:19 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php(15): Kohana_ORM->find_all()
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php:15
2015-01-16 10:35:11 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\welcome.php [ 39 ] in file:line
2015-01-16 10:35:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-16 10:35:36 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\welcome.php [ 46 ] in file:line
2015-01-16 10:35:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-16 14:53:09 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete empresarial model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php:45
2015-01-16 14:53:09 --- DEBUG: #0 C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php(45): Kohana_ORM->delete()
#1 C:\xampp\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Welcome->action_deletar()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#4 C:\xampp\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\kohana\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\kohana\application\classes\Controller\welcome.php:45