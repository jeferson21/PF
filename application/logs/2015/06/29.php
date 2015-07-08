<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-06-29 18:28:04 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQLi_Result could not be converted to string ~ MODPATH\orm\classes\ORM.php [ 41 ] in C:\xampp\htdocs\PF\modules\orm\classes\ORM.php:41
2015-06-29 18:28:04 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\orm\classes\ORM.php(41): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\xampp\htdocs...', 41, Array)
#1 C:\xampp\htdocs\PF\application\classes\Controller\Metas.php(8): ORM::get_select_ind_obj()
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Metas->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Metas))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\PF\modules\orm\classes\ORM.php:41
2015-06-29 18:28:45 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQLi_Result could not be converted to string ~ MODPATH\orm\classes\ORM.php [ 41 ] in C:\xampp\htdocs\PF\modules\orm\classes\ORM.php:41
2015-06-29 18:28:45 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\orm\classes\ORM.php(41): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\xampp\htdocs...', 41, Array)
#1 C:\xampp\htdocs\PF\application\classes\Controller\Metas.php(8): ORM::get_select_ind_obj()
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Metas->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Metas))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\PF\modules\orm\classes\ORM.php:41
2015-06-29 18:31:07 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\Metas.php [ 8 ] in file:line
2015-06-29 18:31:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-29 18:31:22 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '{', expecting '(' ~ APPPATH\classes\Controller\Metas.php [ 8 ] in file:line
2015-06-29 18:31:22 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-29 18:31:29 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$INDICADORES_idINDICADOR' (T_VARIABLE), expecting '(' ~ APPPATH\classes\Controller\Metas.php [ 9 ] in file:line
2015-06-29 18:31:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-29 18:31:29 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$INDICADORES_idINDICADOR' (T_VARIABLE), expecting '(' ~ APPPATH\classes\Controller\Metas.php [ 9 ] in file:line
2015-06-29 18:31:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-29 19:10:45 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\orm\classes\ORM.php [ 47 ] in C:\xampp\htdocs\PF\modules\orm\classes\ORM.php:47
2015-06-29 19:10:45 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\orm\classes\ORM.php(47): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\xampp\htdocs...', 47, Array)
#1 C:\xampp\htdocs\PF\application\classes\Controller\Metas.php(8): ORM::get_select_ind_obj()
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Metas->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Metas))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\PF\modules\orm\classes\ORM.php:47
2015-06-29 19:14:48 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\orm\classes\ORM.php [ 47 ] in C:\xampp\htdocs\PF\modules\orm\classes\ORM.php:47
2015-06-29 19:14:48 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\orm\classes\ORM.php(47): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\xampp\htdocs...', 47, Array)
#1 C:\xampp\htdocs\PF\application\classes\Controller\Metas.php(8): ORM::get_select_ind_obj()
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Metas->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Metas))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\PF\modules\orm\classes\ORM.php:47
2015-06-29 21:13:27 --- CRITICAL: Kohana_Exception [ 0 ]: The DESCRICAO_OBJ property does not exist in the Model_Indicador class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603
2015-06-29 21:13:27 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('DESCRICAO_OBJ')
#1 C:\xampp\htdocs\PF\modules\orm\classes\ORM.php(34): Kohana_ORM->__get('DESCRICAO_OBJ')
#2 C:\xampp\htdocs\PF\application\classes\Controller\Metas.php(8): ORM::get_select_ind_obj()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Metas->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Metas))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603