<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-06-11 08:49:33 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''far_key'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH\classes\Model\Grupo.php [ 17 ] in file:line
2015-06-11 08:49:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-11 09:00:03 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''far_key'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH\classes\Model\Objetivo.php [ 23 ] in file:line
2015-06-11 09:00:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-11 09:44:50 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ''item'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' ~ APPPATH\classes\Model\Perspectiva.php [ 13 ] in file:line
2015-06-11 09:44:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-11 10:12:38 --- CRITICAL: Database_Exception [ 1146 ]: [1146] Table 'mapaestrategico.perspectivas' doesn't exist ( SHOW FULL COLUMNS FROM `perspectivas` ) ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 181 ] in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\MySQLi.php:348
2015-06-11 10:12:38 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\MySQLi.php(348): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('perspectivas')
#2 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\PF\modules\orm\classes\ORM.php(13): Kohana_ORM::factory('Perspectiva')
#7 C:\xampp\htdocs\PF\application\classes\Controller\Grupos.php(9): ORM::get_select('Perspectiva')
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Grupos->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Grupos))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\MySQLi.php:348
2015-06-11 10:12:43 --- CRITICAL: Database_Exception [ 1146 ]: [1146] Table 'mapaestrategico.perspectivas' doesn't exist ( SHOW FULL COLUMNS FROM `perspectivas` ) ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 181 ] in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\MySQLi.php:348
2015-06-11 10:12:43 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\MySQLi.php(348): Kohana_Database_MySQLi->query(1, 'SHOW FULL COLUM...', false)
#1 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQLi->list_columns('perspectivas')
#2 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 C:\xampp\htdocs\PF\application\classes\Controller\Perspectivas.php(8): Kohana_ORM::factory('Perspectiva')
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Perspectivas->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Perspectivas))
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#12 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#13 {main} in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\MySQLi.php:348
2015-06-11 12:07:32 --- CRITICAL: Kohana_Exception [ 0 ]: The DESCRICAO_IND property does not exist in the Model_Indicador class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603
2015-06-11 12:07:32 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('DESCRICAO_IND')
#1 C:\xampp\htdocs\PF\application\views\templateMetas.php(51): Kohana_ORM->__get('DESCRICAO_IND')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\PF\application\views\templateWelcome.php(56): Kohana_View->__toString()
#6 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Metas))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603
2015-06-11 12:22:32 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO) ~ APPPATH\views\templateMetas.php [ 61 ] in file:line
2015-06-11 12:22:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-11 12:23:42 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '"-"' (T_CONSTANT_ENCAPSED_STRING), expecting ',' or ';' ~ APPPATH\views\templateMetas.php [ 61 ] in file:line
2015-06-11 12:23:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-11 12:23:43 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '"-"' (T_CONSTANT_ENCAPSED_STRING), expecting ',' or ';' ~ APPPATH\views\templateMetas.php [ 61 ] in file:line
2015-06-11 12:23:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-11 12:27:36 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file ~ APPPATH\views\templateMetas.php [ 88 ] in file:line
2015-06-11 12:27:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-11 12:27:55 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}', expecting ',' or ';' ~ APPPATH\views\templateMetas.php [ 64 ] in file:line
2015-06-11 12:27:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-11 12:28:06 --- CRITICAL: Kohana_Exception [ 0 ]: The AMARELO_INI property does not exist in the Model_Meta class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603
2015-06-11 12:28:06 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('AMARELO_INI')
#1 C:\xampp\htdocs\PF\application\views\templateMetas.php(64): Kohana_ORM->__get('AMARELO_INI')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\PF\application\views\templateWelcome.php(56): Kohana_View->__toString()
#6 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#7 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Metas))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#15 {main} in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603
2015-06-11 17:42:13 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'class' (T_CLASS), expecting ',' or ';' ~ APPPATH\views\templateMetas.php [ 5 ] in file:line
2015-06-11 17:42:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line