<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2015-01-21 10:36:48 --- CRITICAL: Database_Exception [ 1452 ]: [1452] Cannot add or update a child row: a foreign key constraint fails (`trabweb`.`inscricoes`, CONSTRAINT `fk_ALUNO_has_TURMA_ALUNO` FOREIGN KEY (`ALUNO_MATRICULA`) REFERENCES `alunos` (`MATRICULA`) ON DELETE NO ACTION ON UPDATE NO ACTION) ( INSERT INTO `inscricoes` (`ALUNO_MATRICULA`, `DATA`) VALUES ('1', '2015') ) ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 181 ] in C:\xampp\htdocs\universidade\modules\database\classes\Kohana\Database\Query.php:251
2015-01-21 10:36:48 --- DEBUG: #0 C:\xampp\htdocs\universidade\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `in...', false, Array)
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
2015-01-21 10:50:05 --- CRITICAL: Database_Exception [ 1452 ]: [1452] Cannot add or update a child row: a foreign key constraint fails (`trabweb`.`inscricoes`, CONSTRAINT `fk_ALUNO_has_TURMA_ALUNO` FOREIGN KEY (`ALUNO_MATRICULA`) REFERENCES `alunos` (`MATRICULA`) ON DELETE NO ACTION ON UPDATE NO ACTION) ( INSERT INTO `inscricoes` (`ALUNO_MATRICULA`, `DATA`) VALUES ('1', '2015') ) ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 181 ] in C:\xampp\htdocs\universidade\modules\database\classes\Kohana\Database\Query.php:251
2015-01-21 10:50:05 --- DEBUG: #0 C:\xampp\htdocs\universidade\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `in...', false, Array)
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
2015-01-21 11:02:21 --- CRITICAL: Database_Exception [ 1452 ]: [1452] Cannot add or update a child row: a foreign key constraint fails (`trabweb`.`inscricoes`, CONSTRAINT `fk_ALUNO_has_TURMA_TURMA1` FOREIGN KEY (`TURMA_codturma`) REFERENCES `turmas` (`codturma`) ON DELETE NO ACTION) ( INSERT INTO `inscricoes` (`ALUNO_MATRICULA`, `DATA`) VALUES ('4', '2015') ) ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 181 ] in C:\xampp\htdocs\universidade\modules\database\classes\Kohana\Database\Query.php:251
2015-01-21 11:02:21 --- DEBUG: #0 C:\xampp\htdocs\universidade\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `in...', false, Array)
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
2015-01-21 11:38:41 --- CRITICAL: Database_Exception [ 1452 ]: [1452] Cannot add or update a child row: a foreign key constraint fails (`trabweb`.`inscricoes`, CONSTRAINT `fk_ALUNO_has_TURMA_TURMA1` FOREIGN KEY (`TURMA_codturma`) REFERENCES `turmas` (`codturma`) ON DELETE NO ACTION) ( INSERT INTO `inscricoes` (`ALUNO_MATRICULA`, `DATA`) VALUES ('6', '343') ) ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 181 ] in C:\xampp\htdocs\universidade\modules\database\classes\Kohana\Database\Query.php:251
2015-01-21 11:38:41 --- DEBUG: #0 C:\xampp\htdocs\universidade\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `in...', false, Array)
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
2015-01-21 11:38:54 --- CRITICAL: Database_Exception [ 1452 ]: [1452] Cannot add or update a child row: a foreign key constraint fails (`trabweb`.`inscricoes`, CONSTRAINT `fk_ALUNO_has_TURMA_TURMA1` FOREIGN KEY (`TURMA_codturma`) REFERENCES `turmas` (`codturma`) ON DELETE NO ACTION) ( INSERT INTO `inscricoes` (`ALUNO_MATRICULA`, `DATA`) VALUES ('6', '21/12/1992') ) ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 181 ] in C:\xampp\htdocs\universidade\modules\database\classes\Kohana\Database\Query.php:251
2015-01-21 11:38:54 --- DEBUG: #0 C:\xampp\htdocs\universidade\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `in...', false, Array)
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
2015-01-21 11:53:32 --- CRITICAL: Database_Exception [ 1452 ]: [1452] Cannot add or update a child row: a foreign key constraint fails (`trabweb`.`inscricoes`, CONSTRAINT `fk_ALUNO_has_TURMA_TURMA1` FOREIGN KEY (`TURMA_codturma`) REFERENCES `turmas` (`codturma`) ON DELETE NO ACTION) ( INSERT INTO `inscricoes` (`ALUNO_MATRICULA`, `DATA`) VALUES ('7', '21/12/1992') ) ~ MODPATH\database\classes\Kohana\Database\MySQLi.php [ 181 ] in C:\xampp\htdocs\universidade\modules\database\classes\Kohana\Database\Query.php:251
2015-01-21 11:53:32 --- DEBUG: #0 C:\xampp\htdocs\universidade\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQLi->query(2, 'INSERT INTO `in...', false, Array)
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