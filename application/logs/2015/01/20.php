<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-01-20 15:03:31 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'var_dump' (T_STRING), expecting ',' or ';' ~ APPPATH\views\cadastraTurma.php [ 4 ] in file:line
2015-01-20 15:03:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-20 15:04:39 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'var_dump' (T_STRING), expecting ',' or ';' ~ APPPATH\views\cadastraTurma.php [ 4 ] in file:line
2015-01-20 15:04:39 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-20 15:04:43 --- CRITICAL: Database_Exception [ 1452 ]: [1452] Cannot add or update a child row: a foreign key constraint fails (`trabweb`.`turmas`, CONSTRAINT `fk_TURMA_DISCIPLINA1` FOREIGN KEY (`DISCIPLINA_CODDISC`) REFERENCES `disciplinas` (`CODDISC`) ON DELETE NO ACTION ON UPDATE NO ACTION) ( INSERT INTO `turmas` (`maxalunos`) VALUES ('99') ) ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 181 ] in C:\xampp\htdocs\universidade\modules\database\classes\Kohana\Database\Query.php:251
2015-01-20 15:04:43 --- DEBUG: #0 C:\xampp\htdocs\universidade\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `tu...', false, Array)
#1 C:\xampp\htdocs\universidade\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\xampp\htdocs\universidade\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 C:\xampp\htdocs\universidade\application\classes\Controller\controllerTurma.php(14): Kohana_ORM->save()
#4 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller.php(84): Controller_controllerTurma->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_controllerTurma))
#7 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\universidade\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\universidade\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\universidade\modules\database\classes\Kohana\Database\Query.php:251
2015-01-20 15:04:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'var_dump' (T_STRING), expecting ',' or ';' ~ APPPATH\views\cadastraTurma.php [ 4 ] in file:line
2015-01-20 15:04:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-20 15:04:54 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'var_dump' (T_STRING), expecting ',' or ';' ~ APPPATH\views\cadastraTurma.php [ 4 ] in file:line
2015-01-20 15:04:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-20 15:05:09 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$var_dump' (T_VARIABLE), expecting ',' or ';' ~ APPPATH\views\cadastraTurma.php [ 4 ] in file:line
2015-01-20 15:05:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-20 15:05:26 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$var_dump' (T_VARIABLE), expecting function (T_FUNCTION) ~ APPPATH\classes\Controller\controllerTurma.php [ 7 ] in file:line
2015-01-20 15:05:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-20 15:05:32 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'var_dump' (T_STRING), expecting function (T_FUNCTION) ~ APPPATH\classes\Controller\controllerTurma.php [ 7 ] in file:line
2015-01-20 15:05:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-20 15:05:44 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\cadastraTurma.php [ 12 ] in file:line
2015-01-20 15:05:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-20 15:05:52 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ' ~ APPPATH\views\cadastraTurma.php [ 12 ] in file:line
2015-01-20 15:05:52 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2015-01-20 15:13:44 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: disciplinas ~ APPPATH\views\cadastraTurma.php [ 6 ] in C:\xampp\htdocs\universidade\application\views\cadastraTurma.php:6
2015-01-20 15:13:44 --- DEBUG: #0 C:\xampp\htdocs\universidade\application\views\cadastraTurma.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 6, Array)
#1 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\universidade\application\views\templateWelcome.php(12): Kohana_View->__toString()
#5 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_controllerTurma))
#11 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\universidade\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\universidade\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\universidade\application\views\cadastraTurma.php:6
2015-01-20 15:14:16 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: DISCIPLINA_CODDISC ~ APPPATH\classes\Controller\controllerTurma.php [ 20 ] in C:\xampp\htdocs\universidade\application\classes\Controller\controllerTurma.php:20
2015-01-20 15:14:16 --- DEBUG: #0 C:\xampp\htdocs\universidade\application\classes\Controller\controllerTurma.php(20): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 20, Array)
#1 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller.php(84): Controller_controllerTurma->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_controllerTurma))
#4 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\xampp\htdocs\universidade\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\xampp\htdocs\universidade\index.php(118): Kohana_Request->execute()
#7 {main} in C:\xampp\htdocs\universidade\application\classes\Controller\controllerTurma.php:20
2015-01-20 15:14:47 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: disciplinas ~ APPPATH\views\cadastraTurma.php [ 6 ] in C:\xampp\htdocs\universidade\application\views\cadastraTurma.php:6
2015-01-20 15:14:47 --- DEBUG: #0 C:\xampp\htdocs\universidade\application\views\cadastraTurma.php(6): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 6, Array)
#1 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\universidade\application\views\templateWelcome.php(12): Kohana_View->__toString()
#5 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_controllerTurma))
#11 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\universidade\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\universidade\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\universidade\application\views\cadastraTurma.php:6
2015-01-20 15:33:33 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: DISCIPLINA_CODDISC ~ APPPATH\views\Inscrever.php [ 3 ] in C:\xampp\htdocs\universidade\application\views\Inscrever.php:3
2015-01-20 15:33:33 --- DEBUG: #0 C:\xampp\htdocs\universidade\application\views\Inscrever.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 3, Array)
#1 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\universidade\application\views\templateWelcome.php(12): Kohana_View->__toString()
#5 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_controllerInscricao))
#11 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\universidade\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\universidade\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\universidade\application\views\Inscrever.php:3
2015-01-20 15:35:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: DISCIPLINA_CODDISC ~ APPPATH\views\Inscrever.php [ 3 ] in C:\xampp\htdocs\universidade\application\views\Inscrever.php:3
2015-01-20 15:35:24 --- DEBUG: #0 C:\xampp\htdocs\universidade\application\views\Inscrever.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\xampp\htdocs...', 3, Array)
#1 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#2 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#3 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\xampp\htdocs\universidade\application\views\templateWelcome.php(12): Kohana_View->__toString()
#5 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(61): include('C:\xampp\htdocs...')
#6 C:\xampp\htdocs\universidade\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\xampp\htdocs...', Array)
#7 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_controllerInscricao))
#11 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\xampp\htdocs\universidade\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\xampp\htdocs\universidade\index.php(118): Kohana_Request->execute()
#14 {main} in C:\xampp\htdocs\universidade\application\views\Inscrever.php:3
2015-01-20 15:38:57 --- CRITICAL: Database_Exception [ 1452 ]: [1452] Cannot add or update a child row: a foreign key constraint fails (`trabweb`.`inscricoes`, CONSTRAINT `fk_ALUNO_has_TURMA_ALUNO` FOREIGN KEY (`ALUNO_MATRICULA`) REFERENCES `alunos` (`MATRICULA`) ON DELETE NO ACTION ON UPDATE NO ACTION) ( INSERT INTO `inscricoes` (`ALUNO_MATRICULA`, `DATA`) VALUES ('1', '2015') ) ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 181 ] in C:\xampp\htdocs\universidade\modules\database\classes\Kohana\Database\Query.php:251
2015-01-20 15:38:57 --- DEBUG: #0 C:\xampp\htdocs\universidade\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `in...', false, Array)
#1 C:\xampp\htdocs\universidade\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\xampp\htdocs\universidade\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 C:\xampp\htdocs\universidade\application\classes\Controller\controllerInscricao.php(14): Kohana_ORM->save()
#4 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller.php(84): Controller_controllerInscricao->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_controllerInscricao))
#7 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\universidade\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\universidade\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\universidade\modules\database\classes\Kohana\Database\Query.php:251
2015-01-20 15:39:40 --- CRITICAL: Database_Exception [ 1452 ]: [1452] Cannot add or update a child row: a foreign key constraint fails (`trabweb`.`inscricoes`, CONSTRAINT `fk_ALUNO_has_TURMA_ALUNO` FOREIGN KEY (`ALUNO_MATRICULA`) REFERENCES `alunos` (`MATRICULA`) ON DELETE NO ACTION ON UPDATE NO ACTION) ( INSERT INTO `inscricoes` (`ALUNO_MATRICULA`, `DATA`) VALUES ('1', '2015') ) ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 181 ] in C:\xampp\htdocs\universidade\modules\database\classes\Kohana\Database\Query.php:251
2015-01-20 15:39:40 --- DEBUG: #0 C:\xampp\htdocs\universidade\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `in...', false, Array)
#1 C:\xampp\htdocs\universidade\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\xampp\htdocs\universidade\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 C:\xampp\htdocs\universidade\application\classes\Controller\controllerInscricao.php(14): Kohana_ORM->save()
#4 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller.php(84): Controller_controllerInscricao->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_controllerInscricao))
#7 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\universidade\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\universidade\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\universidade\modules\database\classes\Kohana\Database\Query.php:251
2015-01-20 15:43:45 --- CRITICAL: Database_Exception [ 1452 ]: [1452] Cannot add or update a child row: a foreign key constraint fails (`trabweb`.`inscricoes`, CONSTRAINT `fk_ALUNO_has_TURMA_ALUNO` FOREIGN KEY (`ALUNO_MATRICULA`) REFERENCES `alunos` (`MATRICULA`) ON DELETE NO ACTION ON UPDATE NO ACTION) ( INSERT INTO `inscricoes` (`ALUNO_MATRICULA`, `DATA`) VALUES ('1', '2015') ) ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 181 ] in C:\xampp\htdocs\universidade\modules\database\classes\Kohana\Database\Query.php:251
2015-01-20 15:43:45 --- DEBUG: #0 C:\xampp\htdocs\universidade\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `in...', false, Array)
#1 C:\xampp\htdocs\universidade\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQLi))
#2 C:\xampp\htdocs\universidade\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 C:\xampp\htdocs\universidade\application\classes\Controller\controllerInscricao.php(12): Kohana_ORM->save()
#4 C:\xampp\htdocs\universidade\system\classes\Kohana\Controller.php(84): Controller_controllerInscricao->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_controllerInscricao))
#7 C:\xampp\htdocs\universidade\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\xampp\htdocs\universidade\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\xampp\htdocs\universidade\index.php(118): Kohana_Request->execute()
#10 {main} in C:\xampp\htdocs\universidade\modules\database\classes\Kohana\Database\Query.php:251
2015-01-20 15:56:16 --- CRITICAL: Database_Exception [ 1452 ]: [1452] Cannot add or update a child row: a foreign key constraint fails (`trabweb`.`inscricoes`, CONSTRAINT `fk_ALUNO_has_TURMA_ALUNO` FOREIGN KEY (`ALUNO_MATRICULA`) REFERENCES `alunos` (`MATRICULA`) ON DELETE NO ACTION ON UPDATE NO ACTION) ( INSERT INTO `inscricoes` (`ALUNO_MATRICULA`, `DATA`) VALUES ('1', '2015') ) ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 181 ] in C:\xampp\htdocs\universidade\modules\database\classes\Kohana\Database\Query.php:251
2015-01-20 15:56:16 --- DEBUG: #0 C:\xampp\htdocs\universidade\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `in...', false, Array)
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