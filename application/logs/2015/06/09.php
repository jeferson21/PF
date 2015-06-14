<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-06-09 07:35:00 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'table' (T_STRING), expecting ',' or ';' ~ APPPATH\views\templateTabelaMapa.php [ 9 ] in file:line
2015-06-09 07:35:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-09 07:40:56 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '0' (T_LNUMBER), expecting ',' or ';' ~ APPPATH\views\templateTabelaMapa.php [ 9 ] in file:line
2015-06-09 07:40:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-09 07:40:56 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '0' (T_LNUMBER), expecting ',' or ';' ~ APPPATH\views\templateTabelaMapa.php [ 9 ] in file:line
2015-06-09 07:40:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-09 08:39:23 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: instanciademapa ~ APPPATH\classes\Controller\Mapas.php [ 42 ] in C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php:42
2015-06-09 08:39:23 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(42): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 42, Array)
#1 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(20): Controller_Mapas->action_get_map()
#2 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Mapas->action_exibir()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#8 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php:42
2015-06-09 08:58:34 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH\views\edit\editPerspectivas.php [ 14 ] in file:line
2015-06-09 08:58:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-09 09:15:47 --- CRITICAL: ErrorException [ 4096 ]: Argument 2 passed to Kohana_View::factory() must be of the type array, string given, called in C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php on line 44 and defined ~ SYSPATH\classes\Kohana\View.php [ 28 ] in C:\xampp\htdocs\PF\system\classes\Kohana\View.php:28
2015-06-09 09:15:47 --- DEBUG: #0 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(28): Kohana_Core::error_handler(4096, 'Argument 2 pass...', 'C:\xampp\htdocs...', 28, Array)
#1 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(44): Kohana_View::factory('templateTabelaM...', '18')
#2 C:\xampp\htdocs\PF\application\classes\Controller\Mapas.php(20): Controller_Mapas->action_get_map()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Mapas->action_exibir()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\PF\system\classes\Kohana\View.php:28
2015-06-09 09:32:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: logout ~ APPPATH\views\templateWelcome.php [ 49 ] in C:\xampp\htdocs\PF\application\views\templateWelcome.php:49
2015-06-09 09:32:29 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateWelcome.php(49): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 49, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Mapas))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\PF\application\views\templateWelcome.php:49
2015-06-09 09:32:54 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '?>' ~ APPPATH\views\templateWelcome.php [ 49 ] in file:line
2015-06-09 09:32:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-09 09:33:26 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '?>' ~ APPPATH\views\templateWelcome.php [ 49 ] in file:line
2015-06-09 09:33:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-09 11:41:36 --- CRITICAL: Kohana_Exception [ 0 ]: The itens property does not exist in the Model_Importacao class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:603
2015-06-09 11:41:36 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('itens')
#1 C:\xampp\htdocs\PF\application\views\templateImportacoes.php(28): Kohana_ORM->__get('itens')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\xampp\htdocs\PF\application\views\templateWelcome.php(56): Kohana_View->__toString()
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
2015-06-09 11:42:07 --- CRITICAL: ErrorException [ 8 ]: Undefined index: idITENS ~ MODPATH\orm\classes\Kohana\ORM.php [ 633 ] in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:633
2015-06-09 11:42:07 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(633): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 633, Array)
#1 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('item')
#2 C:\xampp\htdocs\PF\application\views\templateImportacoes.php(28): Kohana_ORM->__get('item')
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#4 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#5 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 C:\xampp\htdocs\PF\application\views\templateWelcome.php(56): Kohana_View->__toString()
#7 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#8 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#9 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Importacoes))
#13 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#16 {main} in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:633
2015-06-09 11:42:29 --- CRITICAL: ErrorException [ 8 ]: Undefined index: idITEM ~ MODPATH\orm\classes\Kohana\ORM.php [ 633 ] in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:633
2015-06-09 11:42:29 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(633): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\xampp\htdocs...', 633, Array)
#1 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('item')
#2 C:\xampp\htdocs\PF\application\views\templateImportacoes.php(28): Kohana_ORM->__get('item')
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#4 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#5 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#6 C:\xampp\htdocs\PF\application\views\templateWelcome.php(56): Kohana_View->__toString()
#7 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#8 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#9 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#11 [internal function]: Kohana_Controller->execute()
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Importacoes))
#13 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#15 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#16 {main} in C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php:633