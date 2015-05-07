<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-02-02 11:28:34 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: attrs ~ APPPATH\views\Inscrever.php [ 10 ] in C:\xampp\htdocs\universidade\application\views\Inscrever.php:10
2015-02-02 11:28:34 --- DEBUG: #0 C:\xampp\htdocs\universidade\application\views\Inscrever.php(10): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 10, Array)
#1 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\universidade\application\views\templateWelcome.php(19): Kohana_View->__toString()
#5 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_controllerInscricao))
#11 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\universidade\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\universidade\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\universidade\application\views\Inscrever.php:10
2015-02-02 13:36:32 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\Inscrever.php [ 28 ] in C:\xampp\htdocs\universidade\application\views\Inscrever.php:28
2015-02-02 13:36:32 --- DEBUG: #0 C:\xampp\htdocs\universidade\application\views\Inscrever.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 28, Array)
#1 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\universidade\application\views\templateWelcome.php(19): Kohana_View->__toString()
#5 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_controllerInscricao))
#11 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\universidade\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\universidade\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\universidade\application\views\Inscrever.php:28
2015-02-02 13:37:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: data ~ APPPATH\views\Inscrever.php [ 28 ] in C:\xampp\htdocs\universidade\application\views\Inscrever.php:28
2015-02-02 13:37:39 --- DEBUG: #0 C:\xampp\htdocs\universidade\application\views\Inscrever.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 28, Array)
#1 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\universidade\application\views\templateWelcome.php(19): Kohana_View->__toString()
#5 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_controllerInscricao))
#11 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\universidade\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\universidade\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\universidade\application\views\Inscrever.php:28
2015-02-02 13:42:12 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=' ~ APPPATH\views\Inscrever.php [ 27 ] in file:line
2015-02-02 13:42:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-02 13:42:21 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'type' (T_STRING), expecting ',' or ';' ~ APPPATH\views\Inscrever.php [ 27 ] in file:line
2015-02-02 13:42:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-02 13:42:23 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'type' (T_STRING), expecting ',' or ';' ~ APPPATH\views\Inscrever.php [ 27 ] in file:line
2015-02-02 13:42:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-02-02 13:52:36 --- CRITICAL: Database_Exception [ 1452 ]: [1452] Cannot add or update a child row: a foreign key constraint fails (`trabweb`.`inscricoes`, CONSTRAINT `fk_ALUNO_has_TURMA_TURMA1` FOREIGN KEY (`TURMA_codturma`) REFERENCES `turmas` (`codturma`) ON DELETE NO ACTION) ( INSERT INTO `inscricoes` (`ALUNO_MATRICULA`, `TURMA_codturma`) VALUES ('8', '0') ) ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 181 ] in C:\xampp\htdocs\universidade\modules\database\classes\Kohana\Database\Query.php:251
2015-02-02 13:52:36 --- DEBUG: #0 C:\xampp\htdocs\universidade\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `in...', false, Array)
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