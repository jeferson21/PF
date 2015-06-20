<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-06-15 12:34:21 --- CRITICAL: ErrorException [ 2 ]: filesize(): stat failed for &lt;?xml version=&quot;1.0&quot;?&gt;
&lt;xs:schema attributeFormDefault=&quot;unqualified&quot; elementFormDefault=&quot;qualified&quot; xs=&quot;http://www.w3.org/2001/XMLSchema&quot;&gt;
  &lt;xs:element name=&quot;Indicadores&quot;&gt;
    &lt;xs:complexType&gt;
      &lt;xs:sequence&gt;
        &lt;xs:element type=&quot;xs:date&quot; name=&quot;DATA&quot;/&gt;
        &lt;xs:element type=&quot;xs:string&quot; name=&quot;UNIDADE&quot;/&gt;
        &lt;xs:element type=&quot;xs:float&quot; name=&quot;VALOR&quot;/&gt;
        &lt;xs:element name=&quot;INDICADORES_idINDICADOR&quot; type=&quot;xs:int&quot; value=&quot;1&quot;/&gt;
        &lt;xs:element name=&quot;TIPO_IND&quot; type=&quot;xs:string&quot; value=&quot;Custo&quot;/&gt;
        &lt;xs:element name=&quot;INDICADORES_idINDICADOR&quot; type=&quot;xs:int&quot; value=&quot;2&quot;/&gt;
        &lt;xs:element name=&quot;TIPO_IND&quot; type=&quot;xs:string&quot; value=&quot;Prazo&quot;/&gt;
        &lt;xs:element name=&quot;INDICADORES_idINDICADOR&quot; type=&quot;xs:int&quot; value=&quot;3&quot;/&gt;
        &lt;xs:element name=&quot;TIPO_IND&quot; type=&quot;xs:string&quot; value=&quot;Satisfa&amp;#xE7;&amp;#xE3;o&quot;/&gt;
        &lt;xs:element name=&quot;INDICADORES_idINDICADOR&quot; type=&quot;xs:int&quot; value=&quot;4&quot;/&gt;
        &lt;xs:element name=&quot;TIPO_IND&quot; type=&quot;xs:string&quot; value=&quot;Indicador Persp 2&quot;/&gt;
        &lt;xs:element name=&quot;PROJETOS_idPROJETO&quot; type=&quot;xs:string&quot; value=&quot;2&quot;/&gt;
        &lt;xs:element name=&quot;NOME_PROJ&quot; type=&quot;xs:string&quot; value=&quot;2&quot;/&gt;
      &lt;/xs:sequence&gt;
    &lt;/xs:complexType&gt;
  &lt;/xs:element&gt;
&lt;/xs:schema&gt;
 ~ APPPATH\views\templateXML.php [ 7 ] in file:line
2015-06-15 12:34:21 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', 'C:\xampp\htdocs...', 7, Array)
#1 C:\xampp\htdocs\PF\application\views\templateXML.php(7): filesize('<?xml version="...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2015-06-15 12:35:01 --- CRITICAL: ErrorException [ 2 ]: filesize(): stat failed for Indicadores.xsd ~ APPPATH\views\templateXML.php [ 7 ] in file:line
2015-06-15 12:35:01 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', 'C:\xampp\htdocs...', 7, Array)
#1 C:\xampp\htdocs\PF\application\views\templateXML.php(7): filesize('Indicadores.xsd')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#11 {main} in file:line
2015-06-15 12:35:03 --- CRITICAL: ErrorException [ 2 ]: filesize(): stat failed for Indicadores.xsd ~ APPPATH\views\templateXML.php [ 7 ] in file:line
2015-06-15 12:35:03 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'filesize(): sta...', 'C:\xampp\htdocs...', 7, Array)
#1 C:\xampp\htdocs\PF\application\views\templateXML.php(7): filesize('Indicadores.xsd')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Indicadores))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#11 {main} in file:line