<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-07-04 12:47:55 --- CRITICAL: ErrorException [ 2 ]: array_sum() expects parameter 1 to be array, string given ~ APPPATH\classes\Helper\XML.php [ 18 ] in file:line
2015-07-04 12:47:55 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_sum() exp...', 'C:\xampp\htdocs...', 18, Array)
#1 C:\xampp\htdocs\PF\application\classes\Helper\XML.php(18): array_sum(' 110 ')
#2 C:\xampp\htdocs\PF\application\classes\Controller\Importacoes.php(23): Helper_XML::xml_import('ImportacaoXML.x...')
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Importacoes->action_importarXML()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Importacoes))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#9 {main} in file:line
2015-07-04 14:08:19 --- CRITICAL: ErrorException [ 8 ]: Undefined property: stdClass::$DESCRICAO_MET ~ APPPATH\views\templateObjetivosDetails.php [ 25 ] in C:\xampp\htdocs\PF\application\views\templateObjetivosDetails.php:25
2015-07-04 14:08:19 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateObjetivosDetails.php(25): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\xampp\htdocs...', 25, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\views\templateWelcome.php(41): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Objetivos))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\PF\application\views\templateObjetivosDetails.php:25
2015-07-04 15:01:10 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 30 seconds exceeded ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 59 ] in file:line
2015-07-04 15:01:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line