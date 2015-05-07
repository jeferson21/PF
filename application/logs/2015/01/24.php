<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-01-24 08:13:36 --- CRITICAL: Database_Exception [ 1452 ]: [1452] Cannot add or update a child row: a foreign key constraint fails (`trabweb`.`inscricoes`, CONSTRAINT `fk_ALUNO_has_TURMA_TURMA1` FOREIGN KEY (`TURMA_codturma`) REFERENCES `turmas` (`codturma`) ON DELETE NO ACTION) ( INSERT INTO `inscricoes` (`ALUNO_MATRICULA`, `TURMA_codturma`, `DATA`) VALUES ('5', '2', '21/12/1992') ) ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 181 ] in C:\xampp\htdocs\universidade\modules\database\classes\Kohana\Database\Query.php:251
2015-01-24 08:13:36 --- DEBUG: #0 C:\xampp\htdocs\universidade\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `in...', false, Array)
#1 C:\xampp\htdocs\universidade\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\xampp\htdocs\universidade\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 C:\xampp\htdocs\universidade\application\classes\Controller\controllerInscricao.php(13): Kohana_ORM->save()
#4 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller.php(84): Controller_controllerInscricao->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_controllerInscricao))
#7 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\universidade\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\universidade\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\universidade\modules\database\classes\Kohana\Database\Query.php:251
2015-01-24 08:39:17 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Form::date() ~ APPPATH\views\Inscrever.php [ 7 ] in file:line
2015-01-24 08:39:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-24 11:36:49 --- CRITICAL: View_Exception [ 0 ]: The requested view  could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\universidade\system\classes\Kohana\View.php:137
2015-01-24 11:36:49 --- DEBUG: #0 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(137): Kohana_View->set_filename('<link rel="styl...')
#1 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(30): Kohana_View->__construct('<link rel="styl...', NULL)
#2 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('<link rel="styl...')
#3 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\universidade\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\universidade\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\universidade\system\classes\Kohana\View.php:137
2015-01-24 11:37:14 --- CRITICAL: View_Exception [ 0 ]: The requested view Style/Style.css could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\xampp\htdocs\universidade\system\classes\Kohana\View.php:137
2015-01-24 11:37:14 --- DEBUG: #0 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(137): Kohana_View->set_filename('Style/Style.css')
#1 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(30): Kohana_View->__construct('Style/Style.css', NULL)
#2 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('Style/Style.css')
#3 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller.php(69): Kohana_Controller_Template->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Welcome))
#6 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\xampp\htdocs\universidade\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#8 C:\xampp\htdocs\universidade\index.php(118): Kohana_Request->execute()
#9 {main} in C:\xampp\htdocs\universidade\system\classes\Kohana\View.php:137