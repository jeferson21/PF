<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-04-21 00:08:05 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\templateGrupos.php [ 23 ] in C:\xampp\htdocs\PF\application\views\templateGrupos.php:23
2015-04-21 00:08:05 --- DEBUG: #0 C:\xampp\htdocs\PF\application\views\templateGrupos.php(23): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\xampp\htdocs...', 23, Array)
#1 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\PF\application\views\templateWelcome.php(30): Kohana_View->__toString()
#5 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\PF\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Grupos))
#11 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\PF\application\views\templateGrupos.php:23
2015-04-21 00:14:07 --- CRITICAL: Database_Exception [ 1062 ]: [1062] Duplicate entry '0' for key 'PRIMARY' ( INSERT INTO `objetivos` (`DESCRICAO_OBJ`, `GRUPOS_idGRUPO`, `SITUACAO_OBJ`) VALUES ('Rentabilizar Ativos', '6', '0') ) ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 181 ] in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251
2015-04-21 00:14:07 --- DEBUG: #0 C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `ob...', false, Array)
#1 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\xampp\htdocs\PF\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 C:\xampp\htdocs\PF\application\classes\Controller\Objetivos.php(24): Kohana_ORM->save()
#4 C:\xampp\htdocs\PF\system\classes\Kohana\Controller.php(84): Controller_Objetivos->action_salvar()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Objetivos))
#7 C:\xampp\htdocs\PF\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\PF\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\PF\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\PF\modules\database\classes\Kohana\Database\Query.php:251