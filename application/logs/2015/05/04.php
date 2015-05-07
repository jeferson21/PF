<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-05-04 20:52:08 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: mapas ~ APPPATH\views\templateItens.php [ 31 ] in C:\xampp\htdocs\PF\application\views\templateItens.php:31
2015-05-04 20:52:08 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateItens.php(31): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 31, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\views\templateWelcome.php(41): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Itens))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\PF\application\views\templateItens.php:31
2015-05-04 20:53:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: mapas ~ APPPATH\views\templateItens.php [ 33 ] in C:\xampp\htdocs\PF\application\views\templateItens.php:33
2015-05-04 20:53:25 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateItens.php(33): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 33, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\views\templateWelcome.php(41): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Itens))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\PF\application\views\templateItens.php:33