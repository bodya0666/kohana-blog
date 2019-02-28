<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2019-02-17 00:00:41 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'tasks.deadline_id' in 'on clause' [ SELECT `task`.`id` AS `id`, `task`.`name` AS `name`, `task`.`description` AS `description`, `task`.`important` AS `important`, `task`.`date` AS `date`, `task`.`user_id` AS `user_id`, `task`.`deadline_id` AS `deadline_id` FROM `tasks` AS `task` JOIN `deadlines` ON (`deadlines`.`id` = `tasks`.`deadline_id`) WHERE `user_id` = '15' ORDER BY `deadlines`.`id` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-17 00:00:41 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `task`.`...', 'Model_Task', Array)
#1 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php(18): Kohana_ORM->find_all()
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#7 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in E:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-17 01:21:17 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index.php [ 8 ] in E:\servers\handmade\data\htdocs\kohana\application\views\index.php:8
2019-02-17 01:21:17 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\application\views\index.php(8): Kohana_Core::error_handler(8, 'Trying to get p...', 'E:\servers\hand...', 8, Array)
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
#14 {main} in E:\servers\handmade\data\htdocs\kohana\application\views\index.php:8
2019-02-17 02:21:01 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\index.php [ 8 ] in E:\servers\handmade\data\htdocs\kohana\application\views\index.php:8
2019-02-17 02:21:01 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\application\views\index.php(8): Kohana_Core::error_handler(8, 'Trying to get p...', 'E:\servers\hand...', 8, Array)
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
#14 {main} in E:\servers\handmade\data\htdocs\kohana\application\views\index.php:8
2019-02-17 10:18:43 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Session_Native as array ~ APPPATH\classes\Controller\Index.php [ 10 ] in file:line
2019-02-17 10:18:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-17 10:18:49 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Session_Native::$id ~ APPPATH\classes\Controller\Index.php [ 10 ] in E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php:10
2019-02-17 10:18:49 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php(10): Kohana_Core::error_handler(8, 'Undefined prope...', 'E:\servers\hand...', 10, Array)
#1 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php:10
2019-02-17 10:19:03 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Session_Native::$user_id ~ APPPATH\classes\Controller\Index.php [ 10 ] in E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php:10
2019-02-17 10:19:03 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php(10): Kohana_Core::error_handler(8, 'Undefined prope...', 'E:\servers\hand...', 10, Array)
#1 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php:10
2019-02-17 10:19:28 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Session_Native as array ~ APPPATH\classes\Controller\Index.php [ 10 ] in file:line
2019-02-17 10:19:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-17 10:19:47 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\Index.php [ 10 ] in E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php:10
2019-02-17 10:19:47 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php(10): Kohana_Core::error_handler(8, 'Array to string...', 'E:\servers\hand...', 10, Array)
#1 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php:10
2019-02-17 10:19:56 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\Index.php [ 10 ] in E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php:10
2019-02-17 10:19:56 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php(10): Kohana_Core::error_handler(8, 'Undefined offse...', 'E:\servers\hand...', 10, Array)
#1 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php:10
2019-02-17 10:20:08 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Controller\Index.php [ 10 ] in E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php:10
2019-02-17 10:20:08 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php(10): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\servers\hand...', 10, Array)
#1 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php:10
2019-02-17 10:20:16 --- CRITICAL: ErrorException [ 8 ]: Undefined index: user_id ~ APPPATH\classes\Controller\Index.php [ 10 ] in E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php:10
2019-02-17 10:20:16 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php(10): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\servers\hand...', 10, Array)
#1 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php:10
2019-02-17 10:22:14 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Session_Native as array ~ APPPATH\classes\Controller\Index.php [ 9 ] in file:line
2019-02-17 10:22:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-17 10:22:23 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Session_Native::$auth_user ~ APPPATH\classes\Controller\Index.php [ 9 ] in E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php:9
2019-02-17 10:22:23 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php(9): Kohana_Core::error_handler(8, 'Undefined prope...', 'E:\servers\hand...', 9, Array)
#1 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Index->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index))
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Index.php:9
2019-02-17 10:45:57 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Task.php [ 11 ] in E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Task.php:11
2019-02-17 10:45:57 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Task.php(11): Kohana_Core::error_handler(2, 'Attempt to assi...', 'E:\servers\hand...', 11, Array)
#1 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(69): Controller_Task->before()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Task))
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Task.php:11
2019-02-17 10:46:09 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Task.php [ 11 ] in E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Task.php:11
2019-02-17 10:46:09 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Task.php(11): Kohana_Core::error_handler(2, 'Attempt to assi...', 'E:\servers\hand...', 11, Array)
#1 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(69): Controller_Task->before()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Task))
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Task.php:11
2019-02-17 10:46:10 --- CRITICAL: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH\classes\Controller\Task.php [ 11 ] in E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Task.php:11
2019-02-17 10:46:10 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Task.php(11): Kohana_Core::error_handler(2, 'Attempt to assi...', 'E:\servers\hand...', 11, Array)
#1 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(69): Controller_Task->before()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Task))
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Task.php:11
2019-02-17 10:54:16 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: errors ~ APPPATH\views\add.php [ 5 ] in E:\servers\handmade\data\htdocs\kohana\application\views\add.php:5
2019-02-17 10:54:16 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\application\views\add.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\servers\hand...', 5, Array)
#1 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('E:\servers\hand...')
#2 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\servers\hand...', Array)
#3 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 E:\servers\handmade\data\htdocs\kohana\application\views\base.php(17): Kohana_View->__toString()
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('E:\servers\hand...')
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\servers\hand...', Array)
#7 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Task))
#11 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#13 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in E:\servers\handmade\data\htdocs\kohana\application\views\add.php:5
2019-02-17 23:26:09 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_deadlines' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2019-02-17 23:26:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-17 23:26:24 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Deadline as array ~ APPPATH\classes\Controller\Task.php [ 39 ] in file:line
2019-02-17 23:26:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-17 23:28:50 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Deadline as array ~ APPPATH\classes\Controller\Task.php [ 40 ] in file:line
2019-02-17 23:28:50 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-17 23:29:17 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\Task.php [ 41 ] in E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Task.php:41
2019-02-17 23:29:17 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Task.php(41): Kohana_Core::error_handler(8, 'Undefined offse...', 'E:\servers\hand...', 41, Array)
#1 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Task->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Task))
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Task.php:41
2019-02-17 23:29:27 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\Task.php [ 41 ] in E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Task.php:41
2019-02-17 23:29:27 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Task.php(41): Kohana_Core::error_handler(8, 'Undefined offse...', 'E:\servers\hand...', 41, Array)
#1 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Task->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Task))
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Task.php:41
2019-02-17 23:30:16 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Deadline as array ~ APPPATH\classes\Controller\Task.php [ 41 ] in file:line
2019-02-17 23:30:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line