<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2019-02-15 01:49:18 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::where() ~ APPPATH\classes\Controller\Index.php [ 14 ] in file:line
2019-02-15 01:49:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-15 01:57:25 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Database_MySQL_Result::where() ~ APPPATH\classes\Controller\Index.php [ 14 ] in file:line
2019-02-15 01:57:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-15 03:12:54 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH\classes\Controller\Index.php [ 19 ] in file:line
2019-02-15 03:12:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-15 03:13:12 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$id ~ APPPATH\classes\Controller\Index.php [ 18 ] in E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php:18
2019-02-15 03:13:12 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php(18): Kohana_Core::error_handler(8, 'Undefined prope...', 'E:\servers\hand...', 18, Array)
#1 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php:18
2019-02-15 03:16:50 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'user' in 'where clause' [ SELECT `task`.`id` AS `id`, `task`.`name` AS `name`, `task`.`description` AS `description`, `task`.`important` AS `important`, `task`.`date` AS `date`, `task`.`user_id` AS `user_id`, `task`.`deadline_id` AS `deadline_id` FROM `tasks` AS `task` WHERE `user` = '15' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-15 03:16:50 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `task`.`...', 'Model_Task', Array)
#1 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php(14): Kohana_ORM->find_all()
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in E:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-15 03:27:10 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '=>' (T_DOUBLE_ARROW) ~ APPPATH\classes\Controller\Index.php [ 16 ] in file:line
2019-02-15 03:27:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-15 03:28:00 --- CRITICAL: Kohana_Exception [ 0 ]: The deadline property does not exist in the Model_Task class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-15 03:28:00 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('deadline')
#1 E:\servers\handmade\data\htdocs\kohana\application\views\index.php(3): Kohana_ORM->__get('deadline')
#2 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('E:\servers\hand...')
#3 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\servers\hand...', Array)
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 E:\servers\handmade\data\htdocs\kohana\application\views\base.php(17): Kohana_View->__toString()
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('E:\servers\hand...')
#7 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\servers\hand...', Array)
#8 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#12 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#14 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-15 05:04:26 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'deadline' in 'order clause' [ SELECT `task`.`id` AS `id`, `task`.`name` AS `name`, `task`.`description` AS `description`, `task`.`important` AS `important`, `task`.`date` AS `date`, `task`.`user_id` AS `user_id`, `task`.`deadline_id` AS `deadline_id` FROM `tasks` AS `task` WHERE `user_id` = '15' ORDER BY `deadline` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-15 05:04:26 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `task`.`...', 'Model_Task', Array)
#1 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php(17): Kohana_ORM->find_all()
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in E:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-15 05:06:48 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'deadline.id' in 'order clause' [ SELECT `task`.`id` AS `id`, `task`.`name` AS `name`, `task`.`description` AS `description`, `task`.`important` AS `important`, `task`.`date` AS `date`, `task`.`user_id` AS `user_id`, `task`.`deadline_id` AS `deadline_id` FROM `tasks` AS `task` WHERE `user_id` = '15' ORDER BY `deadline`.`id` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-15 05:06:48 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `task`.`...', 'Model_Task', Array)
#1 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php(17): Kohana_ORM->find_all()
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in E:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-15 05:07:08 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column '`deadline`.`id`' in 'order clause' [ SELECT `task`.`id` AS `id`, `task`.`name` AS `name`, `task`.`description` AS `description`, `task`.`important` AS `important`, `task`.`date` AS `date`, `task`.`user_id` AS `user_id`, `task`.`deadline_id` AS `deadline_id` FROM `tasks` AS `task` WHERE `user_id` = '15' ORDER BY ```deadline```.```id``` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-15 05:07:08 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `task`.`...', 'Model_Task', Array)
#1 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php(17): Kohana_ORM->find_all()
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in E:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-15 05:07:23 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column '' in 'order clause' [ SELECT `task`.`id` AS `id`, `task`.`name` AS `name`, `task`.`description` AS `description`, `task`.`important` AS `important`, `task`.`date` AS `date`, `task`.`user_id` AS `user_id`, `task`.`deadline_id` AS `deadline_id` FROM `tasks` AS `task` WHERE `user_id` = '15' ORDER BY `` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-15 05:07:23 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `task`.`...', 'Model_Task', Array)
#1 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php(17): Kohana_ORM->find_all()
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in E:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-15 05:07:53 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'deadline' in 'order clause' [ SELECT `task`.`id` AS `id`, `task`.`name` AS `name`, `task`.`description` AS `description`, `task`.`important` AS `important`, `task`.`date` AS `date`, `task`.`user_id` AS `user_id`, `task`.`deadline_id` AS `deadline_id` FROM `tasks` AS `task` WHERE `user_id` = '15' ORDER BY `deadline` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-15 05:07:53 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `task`.`...', 'Model_Task', Array)
#1 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php(17): Kohana_ORM->find_all()
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in E:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-15 06:15:05 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\Controller\Index.php [ 24 ] in E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php:24
2019-02-15 06:15:05 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php(24): Kohana_Core::error_handler(4096, 'Object of class...', 'E:\servers\hand...', 24, Array)
#1 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php:24
2019-02-15 06:23:34 --- CRITICAL: Kohana_Exception [ 0 ]: The tasks property does not exist in the Model_Deadline class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-15 06:23:34 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('tasks')
#1 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php(21): Kohana_ORM->__get('tasks')
#2 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-15 06:23:59 --- CRITICAL: Kohana_Exception [ 0 ]: The tasks property does not exist in the Model_Deadline class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-15 06:23:59 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('tasks')
#1 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php(21): Kohana_ORM->__get('tasks')
#2 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-15 06:24:03 --- CRITICAL: Kohana_Exception [ 0 ]: The task property does not exist in the Model_Deadline class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-15 06:24:03 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('task')
#1 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php(21): Kohana_ORM->__get('task')
#2 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-15 06:26:07 --- CRITICAL: Kohana_Exception [ 0 ]: The task property does not exist in the Model_Deadline class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-15 06:26:07 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('task')
#1 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php(21): Kohana_ORM->__get('task')
#2 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-15 06:26:13 --- CRITICAL: Kohana_Exception [ 0 ]: The task property does not exist in the Model_Deadline class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-15 06:26:13 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('task')
#1 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php(21): Kohana_ORM->__get('task')
#2 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-15 06:26:17 --- CRITICAL: Kohana_Exception [ 0 ]: The task property does not exist in the Model_Deadline class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-15 06:26:17 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('task')
#1 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php(21): Kohana_ORM->__get('task')
#2 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-15 06:26:31 --- CRITICAL: Kohana_Exception [ 0 ]: The task property does not exist in the Model_Deadline class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-15 06:26:31 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('task')
#1 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php(21): Kohana_ORM->__get('task')
#2 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-15 06:26:56 --- CRITICAL: Kohana_Exception [ 0 ]: The task property does not exist in the Model_Deadline class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-15 06:26:56 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('task')
#1 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php(21): Kohana_ORM->__get('task')
#2 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-15 06:27:04 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_tasks' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2019-02-15 06:27:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-15 08:58:43 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$deadline ~ APPPATH\classes\Controller\Index.php [ 21 ] in E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php:21
2019-02-15 08:58:43 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php(21): Kohana_Core::error_handler(8, 'Undefined prope...', 'E:\servers\hand...', 21, Array)
#1 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php:21
2019-02-15 08:59:26 --- CRITICAL: Kohana_Exception [ 0 ]: The task property does not exist in the Model_Deadline class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-15 08:59:26 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('task')
#1 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php(21): Kohana_ORM->__get('task')
#2 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-15 09:08:05 --- CRITICAL: Kohana_Exception [ 0 ]: The deadline property does not exist in the Model_Task class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-15 09:08:05 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('deadline')
#1 E:\servers\handmade\data\htdocs\kohana\application\views\index.php(3): Kohana_ORM->__get('deadline')
#2 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('E:\servers\hand...')
#3 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\servers\hand...', Array)
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 E:\servers\handmade\data\htdocs\kohana\application\views\base.php(17): Kohana_View->__toString()
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('E:\servers\hand...')
#7 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\servers\hand...', Array)
#8 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#12 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#14 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-15 09:08:14 --- CRITICAL: Kohana_Exception [ 0 ]: The deadline property does not exist in the Model_Task class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-15 09:08:14 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('deadline')
#1 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php(22): Kohana_ORM->__get('deadline')
#2 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-15 09:11:03 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'user_id' in 'where clause' [ SELECT `deadline`.`id` AS `id`, `deadline`.`deadline` AS `deadline` FROM `deadlines` AS `deadline` WHERE `user_id` = '15' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-15 09:11:03 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `deadlin...', 'Model_Deadline', Array)
#1 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php(23): Kohana_ORM->find_all()
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in E:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-15 09:23:08 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '(', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH\classes\Controller\Index.php [ 21 ] in file:line
2019-02-15 09:23:08 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-15 09:23:26 --- CRITICAL: Kohana_Exception [ 0 ]: The users property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-15 09:23:26 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('users')
#1 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php(22): Kohana_ORM->__get('users')
#2 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-15 09:23:38 --- CRITICAL: Kohana_Exception [ 0 ]: The users property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-15 09:23:38 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('users')
#1 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php(22): Kohana_ORM->__get('users')
#2 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-15 09:23:43 --- CRITICAL: Kohana_Exception [ 0 ]: The user property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-15 09:23:43 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('user')
#1 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php(22): Kohana_ORM->__get('user')
#2 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-15 09:24:03 --- CRITICAL: Kohana_Exception [ 0 ]: The users property does not exist in the Model_Users class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-15 09:24:03 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('users')
#1 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php(22): Kohana_ORM->__get('users')
#2 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-15 09:24:09 --- CRITICAL: Kohana_Exception [ 0 ]: The users property does not exist in the Model_Users class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-15 09:24:09 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('users')
#1 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php(22): Kohana_ORM->__get('users')
#2 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-15 09:24:15 --- CRITICAL: Kohana_Exception [ 0 ]: The users property does not exist in the Model_Users class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-15 09:24:15 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('users')
#1 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php(22): Kohana_ORM->__get('users')
#2 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-15 09:24:29 --- CRITICAL: Kohana_Exception [ 0 ]: The users property does not exist in the Model_Users class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-15 09:24:29 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('users')
#1 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php(22): Kohana_ORM->__get('users')
#2 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-15 09:26:08 --- CRITICAL: Kohana_Exception [ 0 ]: The users property does not exist in the Model_Users class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-15 09:26:08 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('users')
#1 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php(22): Kohana_ORM->__get('users')
#2 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-15 09:26:56 --- CRITICAL: Kohana_Exception [ 0 ]: The user property does not exist in the Model_Users class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-15 09:26:56 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('user')
#1 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php(22): Kohana_ORM->__get('user')
#2 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-15 09:27:08 --- CRITICAL: Kohana_Exception [ 0 ]: The user property does not exist in the Model_Users class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-15 09:27:08 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('user')
#1 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php(22): Kohana_ORM->__get('user')
#2 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-15 09:27:14 --- CRITICAL: Kohana_Exception [ 0 ]: The user property does not exist in the Model_Users class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-15 09:27:14 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('user')
#1 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php(22): Kohana_ORM->__get('user')
#2 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-15 09:27:19 --- CRITICAL: Kohana_Exception [ 0 ]: The users property does not exist in the Model_Users class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-15 09:27:19 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('users')
#1 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php(22): Kohana_ORM->__get('users')
#2 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-15 09:27:28 --- CRITICAL: Kohana_Exception [ 0 ]: The users property does not exist in the Model_Users class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-15 09:27:28 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('users')
#1 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php(22): Kohana_ORM->__get('users')
#2 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-15 09:28:00 --- CRITICAL: Kohana_Exception [ 0 ]: The deadline property does not exist in the Model_Users class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-15 09:28:00 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('deadline')
#1 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php(22): Kohana_ORM->__get('deadline')
#2 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-15 09:45:08 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: tasks ~ APPPATH\views\index.php [ 4 ] in E:\servers\handmade\data\htdocs\kohana\application\views\index.php:4
2019-02-15 09:45:08 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\application\views\index.php(4): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\servers\hand...', 4, Array)
#1 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('E:\servers\hand...')
#2 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\servers\hand...', Array)
#3 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 E:\servers\handmade\data\htdocs\kohana\application\views\base.php(17): Kohana_View->__toString()
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('E:\servers\hand...')
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\servers\hand...', Array)
#7 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#13 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in E:\servers\handmade\data\htdocs\kohana\application\views\index.php:4
2019-02-15 09:46:16 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'endforeach' (T_ENDFOREACH) ~ APPPATH\views\index.php [ 24 ] in file:line
2019-02-15 09:46:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-15 09:46:37 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'endforeach' (T_ENDFOREACH) ~ APPPATH\views\index.php [ 24 ] in file:line
2019-02-15 09:46:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-15 09:48:06 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$deadline ~ APPPATH\views\index.php [ 5 ] in E:\servers\handmade\data\htdocs\kohana\application\views\index.php:5
2019-02-15 09:48:06 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\application\views\index.php(5): Kohana_Core::error_handler(8, 'Undefined prope...', 'E:\servers\hand...', 5, Array)
#1 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('E:\servers\hand...')
#2 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\servers\hand...', Array)
#3 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 E:\servers\handmade\data\htdocs\kohana\application\views\base.php(17): Kohana_View->__toString()
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('E:\servers\hand...')
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\servers\hand...', Array)
#7 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#13 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in E:\servers\handmade\data\htdocs\kohana\application\views\index.php:5
2019-02-15 20:39:21 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$deadline ~ APPPATH\views\index.php [ 26 ] in E:\servers\handmade\data\htdocs\kohana\application\views\index.php:26
2019-02-15 20:39:21 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\application\views\index.php(26): Kohana_Core::error_handler(8, 'Undefined prope...', 'E:\servers\hand...', 26, Array)
#1 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('E:\servers\hand...')
#2 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\servers\hand...', Array)
#3 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 E:\servers\handmade\data\htdocs\kohana\application\views\base.php(17): Kohana_View->__toString()
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('E:\servers\hand...')
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\servers\hand...', Array)
#7 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#13 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in E:\servers\handmade\data\htdocs\kohana\application\views\index.php:26
2019-02-15 20:39:36 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$important ~ APPPATH\views\index.php [ 31 ] in E:\servers\handmade\data\htdocs\kohana\application\views\index.php:31
2019-02-15 20:39:36 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\application\views\index.php(31): Kohana_Core::error_handler(8, 'Undefined prope...', 'E:\servers\hand...', 31, Array)
#1 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('E:\servers\hand...')
#2 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\servers\hand...', Array)
#3 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 E:\servers\handmade\data\htdocs\kohana\application\views\base.php(17): Kohana_View->__toString()
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('E:\servers\hand...')
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\servers\hand...', Array)
#7 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#13 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in E:\servers\handmade\data\htdocs\kohana\application\views\index.php:31
2019-02-15 20:39:56 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$important ~ APPPATH\views\index.php [ 31 ] in E:\servers\handmade\data\htdocs\kohana\application\views\index.php:31
2019-02-15 20:39:56 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\application\views\index.php(31): Kohana_Core::error_handler(8, 'Undefined prope...', 'E:\servers\hand...', 31, Array)
#1 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('E:\servers\hand...')
#2 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\servers\hand...', Array)
#3 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 E:\servers\handmade\data\htdocs\kohana\application\views\base.php(17): Kohana_View->__toString()
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('E:\servers\hand...')
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\servers\hand...', Array)
#7 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#13 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in E:\servers\handmade\data\htdocs\kohana\application\views\index.php:31
2019-02-15 20:40:04 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Database_MySQL_Result::$name ~ APPPATH\views\index.php [ 35 ] in E:\servers\handmade\data\htdocs\kohana\application\views\index.php:35
2019-02-15 20:40:04 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\application\views\index.php(35): Kohana_Core::error_handler(8, 'Undefined prope...', 'E:\servers\hand...', 35, Array)
#1 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('E:\servers\hand...')
#2 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\servers\hand...', Array)
#3 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 E:\servers\handmade\data\htdocs\kohana\application\views\base.php(17): Kohana_View->__toString()
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('E:\servers\hand...')
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\servers\hand...', Array)
#7 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#13 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in E:\servers\handmade\data\htdocs\kohana\application\views\index.php:35
2019-02-15 20:40:25 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index.php [ 26 ] in E:\servers\handmade\data\htdocs\kohana\application\views\index.php:26
2019-02-15 20:40:25 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\application\views\index.php(26): Kohana_Core::error_handler(8, 'Trying to get p...', 'E:\servers\hand...', 26, Array)
#1 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('E:\servers\hand...')
#2 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\servers\hand...', Array)
#3 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 E:\servers\handmade\data\htdocs\kohana\application\views\base.php(17): Kohana_View->__toString()
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('E:\servers\hand...')
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\servers\hand...', Array)
#7 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#13 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in E:\servers\handmade\data\htdocs\kohana\application\views\index.php:26
2019-02-15 22:25:40 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '{', expecting ';' ~ APPPATH\views\index.php [ 9 ] in file:line
2019-02-15 22:25:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-15 22:28:40 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '{', expecting ';' ~ APPPATH\views\index.php [ 32 ] in file:line
2019-02-15 22:28:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-15 22:42:24 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index.php [ 42 ] in E:\servers\handmade\data\htdocs\kohana\application\views\index.php:42
2019-02-15 22:42:24 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\application\views\index.php(42): Kohana_Core::error_handler(8, 'Trying to get p...', 'E:\servers\hand...', 42, Array)
#1 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('E:\servers\hand...')
#2 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\servers\hand...', Array)
#3 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 E:\servers\handmade\data\htdocs\kohana\application\views\base.php(17): Kohana_View->__toString()
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('E:\servers\hand...')
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\servers\hand...', Array)
#7 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#11 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#13 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in E:\servers\handmade\data\htdocs\kohana\application\views\index.php:42