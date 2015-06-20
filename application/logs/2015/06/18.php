<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-06-18 07:11:01 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$dom' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH\classes\Controller\Indicadores.php [ 163 ] in file:line
2015-06-18 07:11:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-06-18 07:11:34 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQLi_Result::$NOME_PROJ ~ APPPATH\classes\Controller\Indicadores.php [ 157 ] in C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php:157
2015-06-18 07:11:34 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php(157): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 157, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Indicadores->action_exportarXSD()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php:157
2015-06-18 07:22:09 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: projeto ~ APPPATH\classes\Controller\Indicadores.php [ 146 ] in C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php:146
2015-06-18 07:22:09 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php(146): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 146, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Indicadores->action_exportarXSD()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php:146
2015-06-18 07:23:19 --- CRITICAL: ErrorException [ 8 ]: Undefined variable:  ~ APPPATH\classes\Controller\Indicadores.php [ 152 ] in C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php:152
2015-06-18 07:23:19 --- DEBUG: #0 C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php(152): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 152, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Indicadores->action_exportarXSD()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php:152