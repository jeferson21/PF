<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-05-31 19:16:15 --- CRITICAL: ErrorException [ 2 ]: simplexml_load_file(): I/O warning : failed to load external entity &quot;teste.xml&quot; ~ APPPATH\classes\Helper\XML.php [ 8 ] in file:line
2015-05-31 19:16:15 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'simplexml_load_...', 'C:\xampp\htdocs...', 8, Array)
#1 C:\xampp\htdocs\PF\application\classes\Helper\XML.php(8): simplexml_load_file('teste.xml')
#2 C:\xampp\htdocs\PF\application\classes\Controller\Indicadores.php(56): Helper_XML::xml_import('teste.xml', '1', '3')
#3 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Indicadores->action_importarXML()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#9 {main} in file:line