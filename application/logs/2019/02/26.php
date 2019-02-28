<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2019-02-26 12:55:13 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'date.id' in 'on clause' [ SELECT `post`.`id` AS `id`, `post`.`name` AS `name`, `post`.`description` AS `description`, `post`.`important` AS `important`, `post`.`date` AS `date`, `post`.`user_id` AS `user_id`, `post`.`date_id` AS `date_id` FROM `posts` AS `post` JOIN `dates` ON (`date`.`id` = `date_id`) ORDER BY `dates`.`date` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-26 12:55:13 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `post`.`...', 'Model_Post', Array)
#1 C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php(22): Kohana_ORM->find_all()
#4 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Feed->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#7 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-26 12:55:55 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'date.id' in 'on clause' [ SELECT `post`.`id` AS `id`, `post`.`name` AS `name`, `post`.`description` AS `description`, `post`.`important` AS `important`, `post`.`date` AS `date`, `post`.`user_id` AS `user_id`, `post`.`date_id` AS `date_id` FROM `posts` AS `post` JOIN `dates` ON (`date`.`id` = `date_id`) ORDER BY `dates`.`date` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-26 12:55:55 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `post`.`...', 'Model_Post', Array)
#1 C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php(22): Kohana_ORM->find_all()
#4 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Feed->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#7 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-26 12:57:31 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'date.id' in 'on clause' [ SELECT `post`.`id` AS `id`, `post`.`name` AS `name`, `post`.`description` AS `description`, `post`.`important` AS `important`, `post`.`date` AS `date`, `post`.`user_id` AS `user_id`, `post`.`date_id` AS `date_id` FROM `posts` AS `post` JOIN `dates` ON (`date`.`id` = `date_id`) ORDER BY `dates`.`date` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-26 12:57:31 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `post`.`...', 'Model_Post', Array)
#1 C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php(22): Kohana_ORM->find_all()
#4 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Feed->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#7 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-26 12:57:45 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'date.id' in 'on clause' [ SELECT `post`.`id` AS `id`, `post`.`name` AS `name`, `post`.`description` AS `description`, `post`.`important` AS `important`, `post`.`date` AS `date`, `post`.`user_id` AS `user_id`, `post`.`date_id` AS `date_id` FROM `posts` AS `post` JOIN `dates` ON (`date`.`id` = `date_id`) ORDER BY `dates`.`date` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-26 12:57:45 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `post`.`...', 'Model_Post', Array)
#1 C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php(22): Kohana_ORM->find_all()
#4 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Feed->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#7 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-26 13:02:24 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_date' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2019-02-26 13:02:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-26 13:03:58 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_date' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2019-02-26 13:03:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-26 13:04:21 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_date' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2019-02-26 13:04:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-26 13:05:09 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_date' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2019-02-26 13:05:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-26 13:08:54 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_date' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2019-02-26 13:08:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-26 13:09:11 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_date' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2019-02-26 13:09:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-26 13:10:12 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_date' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2019-02-26 13:10:12 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-26 13:10:20 --- CRITICAL: Kohana_Exception [ 0 ]: The dates property does not exist in the Model_Post class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-26 13:10:20 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('dates')
#1 C:\servers\handmade\data\htdocs\kohana\application\views\feed.php(5): Kohana_ORM->__get('dates')
#2 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('C:\servers\hand...')
#3 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\servers\hand...', Array)
#4 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 C:\servers\handmade\data\htdocs\kohana\application\views\base.php(17): Kohana_View->__toString()
#6 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('C:\servers\hand...')
#7 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\servers\hand...', Array)
#8 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#12 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#14 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-26 13:11:00 --- CRITICAL: Kohana_Exception [ 0 ]: The dates property does not exist in the Model_Post class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-26 13:11:00 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('dates')
#1 C:\servers\handmade\data\htdocs\kohana\application\views\feed.php(5): Kohana_ORM->__get('dates')
#2 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('C:\servers\hand...')
#3 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\servers\hand...', Array)
#4 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 C:\servers\handmade\data\htdocs\kohana\application\views\base.php(17): Kohana_View->__toString()
#6 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('C:\servers\hand...')
#7 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\servers\hand...', Array)
#8 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#12 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#14 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-26 13:11:10 --- CRITICAL: Kohana_Exception [ 0 ]: The dates property does not exist in the Model_Post class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-26 13:11:10 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('dates')
#1 C:\servers\handmade\data\htdocs\kohana\application\views\feed.php(5): Kohana_ORM->__get('dates')
#2 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('C:\servers\hand...')
#3 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\servers\hand...', Array)
#4 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 C:\servers\handmade\data\htdocs\kohana\application\views\base.php(17): Kohana_View->__toString()
#6 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('C:\servers\hand...')
#7 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\servers\hand...', Array)
#8 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#12 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#14 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-26 13:11:17 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_date' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2019-02-26 13:11:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-26 13:13:51 --- CRITICAL: Kohana_Exception [ 0 ]: The dates property does not exist in the Model_Post class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-26 13:13:51 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('dates')
#1 C:\servers\handmade\data\htdocs\kohana\application\views\feed.php(5): Kohana_ORM->__get('dates')
#2 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('C:\servers\hand...')
#3 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\servers\hand...', Array)
#4 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 C:\servers\handmade\data\htdocs\kohana\application\views\base.php(17): Kohana_View->__toString()
#6 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('C:\servers\hand...')
#7 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\servers\hand...', Array)
#8 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#12 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#14 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-26 13:22:17 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'while' (T_WHILE) ~ APPPATH\views\feed.php [ 7 ] in file:line
2019-02-26 13:22:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-26 13:30:00 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: post ~ APPPATH\views\feed.php [ 5 ] in C:\servers\handmade\data\htdocs\kohana\application\views\feed.php:5
2019-02-26 13:30:00 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\application\views\feed.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\servers\hand...', 5, Array)
#1 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('C:\servers\hand...')
#2 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\servers\hand...', Array)
#3 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\servers\handmade\data\htdocs\kohana\application\views\base.php(17): Kohana_View->__toString()
#5 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('C:\servers\hand...')
#6 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\servers\hand...', Array)
#7 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#11 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#13 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\servers\handmade\data\htdocs\kohana\application\views\feed.php:5
2019-02-26 13:31:49 --- CRITICAL: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\classes\Controller\Feed.php [ 17 ] in C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php:17
2019-02-26 13:31:49 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php(17): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\servers\hand...', 17, Array)
#1 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Feed->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#4 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php:17
2019-02-26 13:32:01 --- CRITICAL: ErrorException [ 8 ]: Undefined index: user_name ~ APPPATH\classes\Controller\Feed.php [ 17 ] in C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php:17
2019-02-26 13:32:01 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php(17): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\servers\hand...', 17, Array)
#1 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Feed->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#4 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php:17
2019-02-26 13:32:56 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ APPPATH\classes\Controller\Feed.php [ 17 ] in C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php:17
2019-02-26 13:32:56 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php(17): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\servers\hand...', 17, Array)
#1 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Feed->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#4 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php:17
2019-02-26 13:36:50 --- CRITICAL: ErrorException [ 8 ]: Undefined index: username ~ APPPATH\classes\Controller\Feed.php [ 17 ] in C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php:17
2019-02-26 13:36:50 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php(17): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\servers\hand...', 17, Array)
#1 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Feed->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#4 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php:17
2019-02-26 13:39:28 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Session_Native::username() ~ APPPATH\classes\Controller\Feed.php [ 17 ] in file:line
2019-02-26 13:39:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-26 13:40:23 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ APPPATH\classes\Controller\Feed.php [ 17 ] in file:line
2019-02-26 13:40:23 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-26 13:40:24 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ APPPATH\classes\Controller\Feed.php [ 17 ] in file:line
2019-02-26 13:40:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-26 13:40:24 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ APPPATH\classes\Controller\Feed.php [ 17 ] in file:line
2019-02-26 13:40:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-26 13:40:25 --- CRITICAL: ErrorException [ 1 ]: Call to a member function get() on a non-object ~ APPPATH\classes\Controller\Feed.php [ 17 ] in file:line
2019-02-26 13:40:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-26 13:53:57 --- CRITICAL: Database_Exception [ 1292 ]: Incorrect date value: '2019-02-31' for column 'date' at row 1 [ INSERT INTO `dates` (`date`) VALUES ('2019-02-31') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-26 13:53:57 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `da...', false, Array)
#1 C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php(37): Kohana_ORM->save()
#4 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Feed->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#7 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-26 13:58:26 --- CRITICAL: Database_Exception [ 1292 ]: Incorrect date value: '2019-02-31' for column 'date' at row 1 [ INSERT INTO `dates` (`date`) VALUES ('2019-02-31') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-26 13:58:26 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `da...', false, Array)
#1 C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php(38): Kohana_ORM->save()
#4 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Feed->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#7 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-26 13:59:24 --- CRITICAL: Database_Exception [ 1292 ]: Incorrect date value: '2019-02-31' for column 'date' at row 1 [ INSERT INTO `dates` (`date`) VALUES ('2019-02-31') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-26 13:59:24 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `da...', false, Array)
#1 C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php(38): Kohana_ORM->save()
#4 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Feed->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#7 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-26 14:08:29 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '2019-02-14' for key 'date' [ INSERT INTO `dates` (`date`) VALUES ('2019-02-14') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-26 14:08:29 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `da...', false, Array)
#1 C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php(41): Kohana_ORM->save()
#4 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Feed->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#7 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-26 14:08:40 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '2019-02-14' for key 'date' [ INSERT INTO `dates` (`date`) VALUES ('2019-02-14') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-26 14:08:40 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `da...', false, Array)
#1 C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php(41): Kohana_ORM->save()
#4 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Feed->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#7 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-26 14:23:16 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH\classes\Controller\Feed.php [ 49 ] in file:line
2019-02-26 14:23:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-26 14:23:37 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Validation::$name ~ APPPATH\classes\Controller\Feed.php [ 29 ] in C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php:29
2019-02-26 14:23:37 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php(29): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\servers\hand...', 29, Array)
#1 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Feed->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#4 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php:29
2019-02-26 14:27:49 --- CRITICAL: Database_Exception [ 1364 ]: Field 'user_id' doesn't have a default value [ INSERT INTO `posts` (`name`, `description`) VALUES ('rock and roll', 'rock and roll') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-26 14:27:49 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `po...', false, Array)
#1 C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php(50): Kohana_ORM->save()
#4 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Feed->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#7 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-26 14:29:17 --- CRITICAL: Database_Exception [ 1364 ]: Field 'date_id' doesn't have a default value [ INSERT INTO `posts` (`name`, `description`, `user_id`) VALUES ('rock and roll', 'rock and roll', '23') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-26 14:29:17 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `po...', false, Array)
#1 C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php(51): Kohana_ORM->save()
#4 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Feed->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#7 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-26 14:34:56 --- CRITICAL: Database_Exception [ 1364 ]: Field 'date_id' doesn't have a default value [ INSERT INTO `posts` (`name`, `description`, `user_id`) VALUES ('rock and roll', 'rock and roll', '23') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-26 14:34:56 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `po...', false, Array)
#1 C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php(54): Kohana_ORM->save()
#4 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Feed->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#7 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-26 14:51:01 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$this' (T_VARIABLE) ~ APPPATH\classes\Controller\Feed.php [ 67 ] in file:line
2019-02-26 14:51:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-26 15:11:50 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\views\post.php [ 2 ] in C:\servers\handmade\data\htdocs\kohana\application\views\post.php:2
2019-02-26 15:11:50 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\application\views\post.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\servers\hand...', 2, Array)
#1 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('C:\servers\hand...')
#2 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\servers\hand...', Array)
#3 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\servers\handmade\data\htdocs\kohana\application\views\base.php(17): Kohana_View->__toString()
#5 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('C:\servers\hand...')
#6 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\servers\hand...', Array)
#7 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#11 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#13 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\servers\handmade\data\htdocs\kohana\application\views\post.php:2
2019-02-26 15:12:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\views\post.php [ 2 ] in C:\servers\handmade\data\htdocs\kohana\application\views\post.php:2
2019-02-26 15:12:24 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\application\views\post.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\servers\hand...', 2, Array)
#1 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('C:\servers\hand...')
#2 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\servers\hand...', Array)
#3 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\servers\handmade\data\htdocs\kohana\application\views\base.php(17): Kohana_View->__toString()
#5 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('C:\servers\hand...')
#6 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\servers\hand...', Array)
#7 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#11 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#13 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\servers\handmade\data\htdocs\kohana\application\views\post.php:2
2019-02-26 15:12:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\views\post.php [ 2 ] in C:\servers\handmade\data\htdocs\kohana\application\views\post.php:2
2019-02-26 15:12:25 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\application\views\post.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\servers\hand...', 2, Array)
#1 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('C:\servers\hand...')
#2 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\servers\hand...', Array)
#3 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\servers\handmade\data\htdocs\kohana\application\views\base.php(17): Kohana_View->__toString()
#5 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('C:\servers\hand...')
#6 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\servers\hand...', Array)
#7 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#11 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#13 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\servers\handmade\data\htdocs\kohana\application\views\post.php:2
2019-02-26 15:15:55 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '.' ~ APPPATH\classes\Controller\Feed.php [ 74 ] in file:line
2019-02-26 15:15:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-26 15:20:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\views\post.php [ 2 ] in C:\servers\handmade\data\htdocs\kohana\application\views\post.php:2
2019-02-26 15:20:25 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\application\views\post.php(2): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\servers\hand...', 2, Array)
#1 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('C:\servers\hand...')
#2 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\servers\hand...', Array)
#3 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\servers\handmade\data\htdocs\kohana\application\views\base.php(17): Kohana_View->__toString()
#5 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('C:\servers\hand...')
#6 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\servers\hand...', Array)
#7 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#11 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#13 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\servers\handmade\data\htdocs\kohana\application\views\post.php:2
2019-02-26 16:16:32 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\post.php [ 2 ] in C:\servers\handmade\data\htdocs\kohana\application\views\post.php:2
2019-02-26 16:16:32 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\application\views\post.php(2): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\servers\hand...', 2, Array)
#1 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('C:\servers\hand...')
#2 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\servers\hand...', Array)
#3 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\servers\handmade\data\htdocs\kohana\application\views\base.php(17): Kohana_View->__toString()
#5 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('C:\servers\hand...')
#6 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\servers\hand...', Array)
#7 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#11 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#13 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\servers\handmade\data\htdocs\kohana\application\views\post.php:2
2019-02-26 16:16:42 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\post.php [ 2 ] in C:\servers\handmade\data\htdocs\kohana\application\views\post.php:2
2019-02-26 16:16:42 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\application\views\post.php(2): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\servers\hand...', 2, Array)
#1 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('C:\servers\hand...')
#2 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\servers\hand...', Array)
#3 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\servers\handmade\data\htdocs\kohana\application\views\base.php(17): Kohana_View->__toString()
#5 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('C:\servers\hand...')
#6 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\servers\hand...', Array)
#7 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#11 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#13 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\servers\handmade\data\htdocs\kohana\application\views\post.php:2
2019-02-26 16:17:23 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\post.php [ 2 ] in C:\servers\handmade\data\htdocs\kohana\application\views\post.php:2
2019-02-26 16:17:23 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\application\views\post.php(2): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\servers\hand...', 2, Array)
#1 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('C:\servers\hand...')
#2 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\servers\hand...', Array)
#3 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\servers\handmade\data\htdocs\kohana\application\views\base.php(17): Kohana_View->__toString()
#5 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('C:\servers\hand...')
#6 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\servers\hand...', Array)
#7 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#11 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#13 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\servers\handmade\data\htdocs\kohana\application\views\post.php:2
2019-02-26 16:26:20 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: error ~ APPPATH\views\post.php [ 17 ] in C:\servers\handmade\data\htdocs\kohana\application\views\post.php:17
2019-02-26 16:26:20 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\application\views\post.php(17): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\servers\hand...', 17, Array)
#1 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('C:\servers\hand...')
#2 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\servers\hand...', Array)
#3 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\servers\handmade\data\htdocs\kohana\application\views\base.php(17): Kohana_View->__toString()
#5 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('C:\servers\hand...')
#6 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\servers\hand...', Array)
#7 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#11 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#13 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\servers\handmade\data\htdocs\kohana\application\views\post.php:17
2019-02-26 16:27:05 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: error ~ APPPATH\views\post.php [ 18 ] in C:\servers\handmade\data\htdocs\kohana\application\views\post.php:18
2019-02-26 16:27:05 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\application\views\post.php(18): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\servers\hand...', 18, Array)
#1 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('C:\servers\hand...')
#2 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\servers\hand...', Array)
#3 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\servers\handmade\data\htdocs\kohana\application\views\base.php(17): Kohana_View->__toString()
#5 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('C:\servers\hand...')
#6 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\servers\hand...', Array)
#7 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#11 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#13 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\servers\handmade\data\htdocs\kohana\application\views\post.php:18
2019-02-26 16:28:18 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\Feed.php [ 73 ] in file:line
2019-02-26 16:28:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-26 16:38:29 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: add_comment ~ APPPATH\classes\Controller\Feed.php [ 91 ] in C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php:91
2019-02-26 16:38:29 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php(91): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\servers\hand...', 91, Array)
#1 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Feed->action_post()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#4 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php:91
2019-02-26 16:52:58 --- CRITICAL: Database_Exception [ 1052 ]: Column 'id' in where clause is ambiguous [ SELECT `post`.`id` AS `id`, `post`.`name` AS `name`, `post`.`description` AS `description`, `post`.`user_id` AS `user_id`, `post`.`date_id` AS `date_id` FROM `posts` AS `post` JOIN `comments` ON (`comments`.`post_id` = `post`.`id`) WHERE `id` = '220' ORDER BY `comments`.`date` DESC LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-26 16:52:58 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `post`.`...', false, Array)
#1 C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php(72): Kohana_ORM->find()
#4 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Feed->action_post()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#7 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-26 16:53:34 --- CRITICAL: Database_Exception [ 1052 ]: Column 'id' in where clause is ambiguous [ SELECT `post`.`id` AS `id`, `post`.`name` AS `name`, `post`.`description` AS `description`, `post`.`user_id` AS `user_id`, `post`.`date_id` AS `date_id` FROM `posts` AS `post` JOIN `comments` ON (`comments`.`post_id` = `id`) WHERE `id` = '220' ORDER BY `comments`.`date` DESC LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-26 16:53:34 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `post`.`...', false, Array)
#1 C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php(72): Kohana_ORM->find()
#4 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Feed->action_post()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#7 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-26 17:03:09 --- CRITICAL: Database_Exception [ 1146 ]: Table 'database.user' doesn't exist [ SELECT `comment`.`id` AS `id`, `comment`.`date` AS `date`, `comment`.`user_id` AS `user_id`, `comment`.`post_id` AS `post_id`, `comment`.`text` AS `text` FROM `comments` AS `comment` JOIN `user` ON (`user_id` = `user`.`id`) WHERE `post_id` = '220' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-26 17:03:09 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `comment...', false, Array)
#1 C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1072): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(979): Kohana_ORM->_load_result(false)
#3 C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php(74): Kohana_ORM->find()
#4 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Feed->action_post()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#7 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-26 17:03:31 --- CRITICAL: Database_Exception [ 1146 ]: Table 'database.user' doesn't exist [ SELECT `comment`.`id` AS `id`, `comment`.`date` AS `date`, `comment`.`user_id` AS `user_id`, `comment`.`post_id` AS `post_id`, `comment`.`text` AS `text` FROM `comments` AS `comment` JOIN `user` ON (`user_id` = `user`.`id`) WHERE `post_id` = '220' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-26 17:03:31 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `comment...', 'Model_Comment', Array)
#1 C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php(74): Kohana_ORM->find_all()
#4 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Feed->action_post()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#7 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-26 17:04:06 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_comments' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2019-02-26 17:04:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-26 17:07:13 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_comments' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in file:line
2019-02-26 17:07:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-26 17:07:29 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\classes\Model\Comment.php [ 8 ] in file:line
2019-02-26 17:07:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-26 17:08:15 --- CRITICAL: Database_Exception [ 1146 ]: Table 'database.post' doesn't exist [ SELECT `comment`.`id` AS `id`, `comment`.`date` AS `date`, `comment`.`user_id` AS `user_id`, `comment`.`post_id` AS `post_id`, `comment`.`text` AS `text` FROM `comments` AS `comment` JOIN `post` ON (`posts`.`id` = `post_id`) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-26 17:08:15 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `comment...', 'Model_Comment', Array)
#1 C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php(74): Kohana_ORM->find_all()
#4 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Feed->action_post()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#7 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-26 17:14:11 --- CRITICAL: Database_Exception [ 1146 ]: Table 'database.user' doesn't exist [ SELECT `comment`.`id` AS `id`, `comment`.`date` AS `date`, `comment`.`user_id` AS `user_id`, `comment`.`post_id` AS `post_id`, `comment`.`text` AS `text` FROM `comments` AS `comment` JOIN `user` ON (`user`.`id` = `user_id`) ORDER BY `comment`.`date` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-26 17:14:11 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `comment...', 'Model_Comment', Array)
#1 C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php(74): Kohana_ORM->find_all()
#4 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Feed->action_post()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#7 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-26 17:14:18 --- CRITICAL: Database_Exception [ 1146 ]: Table 'database.user' doesn't exist [ SELECT `comment`.`id` AS `id`, `comment`.`date` AS `date`, `comment`.`user_id` AS `user_id`, `comment`.`post_id` AS `post_id`, `comment`.`text` AS `text` FROM `comments` AS `comment` JOIN `user` ON (`users`.`id` = `user_id`) ORDER BY `comment`.`date` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-26 17:14:18 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `comment...', 'Model_Comment', Array)
#1 C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php(74): Kohana_ORM->find_all()
#4 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Feed->action_post()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#7 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-26 17:14:29 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'user.id' in 'on clause' [ SELECT `comment`.`id` AS `id`, `comment`.`date` AS `date`, `comment`.`user_id` AS `user_id`, `comment`.`post_id` AS `post_id`, `comment`.`text` AS `text` FROM `comments` AS `comment` JOIN `users` ON (`user`.`id` = `user_id`) ORDER BY `comment`.`date` DESC ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-26 17:14:29 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `comment...', 'Model_Comment', Array)
#1 C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php(74): Kohana_ORM->find_all()
#4 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Feed->action_post()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#7 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-26 17:14:43 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'user.id' in 'on clause' [ SELECT `comment`.`id` AS `id`, `comment`.`date` AS `date`, `comment`.`user_id` AS `user_id`, `comment`.`post_id` AS `post_id`, `comment`.`text` AS `text` FROM `comments` AS `comment` JOIN `users` ON (`user`.`id` = `user_id`) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-26 17:14:43 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `comment...', 'Model_Comment', Array)
#1 C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php(74): Kohana_ORM->find_all()
#4 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Feed->action_post()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#7 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in C:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-26 17:15:52 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-26 17:15:52 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('name')
#1 C:\servers\handmade\data\htdocs\kohana\application\views\post.php(10): Kohana_ORM->__get('name')
#2 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('C:\servers\hand...')
#3 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\servers\hand...', Array)
#4 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 C:\servers\handmade\data\htdocs\kohana\application\views\base.php(17): Kohana_View->__toString()
#6 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('C:\servers\hand...')
#7 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\servers\hand...', Array)
#8 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#12 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#14 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-26 17:16:07 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-26 17:16:07 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('name')
#1 C:\servers\handmade\data\htdocs\kohana\application\views\post.php(10): Kohana_ORM->__get('name')
#2 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('C:\servers\hand...')
#3 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\servers\hand...', Array)
#4 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 C:\servers\handmade\data\htdocs\kohana\application\views\base.php(17): Kohana_View->__toString()
#6 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('C:\servers\hand...')
#7 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\servers\hand...', Array)
#8 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#12 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#14 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-26 17:16:24 --- CRITICAL: Kohana_Exception [ 0 ]: The users property does not exist in the Model_Comment class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-26 17:16:24 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('users')
#1 C:\servers\handmade\data\htdocs\kohana\application\views\post.php(10): Kohana_ORM->__get('users')
#2 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('C:\servers\hand...')
#3 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\servers\hand...', Array)
#4 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 C:\servers\handmade\data\htdocs\kohana\application\views\base.php(17): Kohana_View->__toString()
#6 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('C:\servers\hand...')
#7 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\servers\hand...', Array)
#8 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#12 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#14 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-26 17:18:38 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: comment ~ APPPATH\classes\Controller\Feed.php [ 75 ] in C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php:75
2019-02-26 17:18:38 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php(75): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\servers\hand...', 75, Array)
#1 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Feed->action_post()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#4 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php:75
2019-02-26 17:23:27 --- CRITICAL: Kohana_Exception [ 0 ]: The users property does not exist in the Model_Comment class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-26 17:23:27 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('users')
#1 C:\servers\handmade\data\htdocs\kohana\application\views\post.php(10): Kohana_ORM->__get('users')
#2 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('C:\servers\hand...')
#3 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\servers\hand...', Array)
#4 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 C:\servers\handmade\data\htdocs\kohana\application\views\base.php(17): Kohana_View->__toString()
#6 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('C:\servers\hand...')
#7 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\servers\hand...', Array)
#8 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#12 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#14 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-26 17:23:54 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Users class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-26 17:23:54 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('name')
#1 C:\servers\handmade\data\htdocs\kohana\application\views\post.php(10): Kohana_ORM->__get('name')
#2 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('C:\servers\hand...')
#3 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\servers\hand...', Array)
#4 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 C:\servers\handmade\data\htdocs\kohana\application\views\base.php(17): Kohana_View->__toString()
#6 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('C:\servers\hand...')
#7 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\servers\hand...', Array)
#8 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#12 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#14 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-26 17:24:45 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Users class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-26 17:24:45 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('name')
#1 C:\servers\handmade\data\htdocs\kohana\application\views\post.php(10): Kohana_ORM->__get('name')
#2 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('C:\servers\hand...')
#3 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\servers\hand...', Array)
#4 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 C:\servers\handmade\data\htdocs\kohana\application\views\base.php(17): Kohana_View->__toString()
#6 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('C:\servers\hand...')
#7 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\servers\hand...', Array)
#8 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#12 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#14 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in C:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:603
2019-02-26 17:29:01 --- CRITICAL: ErrorException [ 8 ]: Undefined index: name ~ APPPATH\views\add.php [ 12 ] in C:\servers\handmade\data\htdocs\kohana\application\views\add.php:12
2019-02-26 17:29:01 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\application\views\add.php(12): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\servers\hand...', 12, Array)
#1 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('C:\servers\hand...')
#2 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\servers\hand...', Array)
#3 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\servers\handmade\data\htdocs\kohana\application\views\base.php(17): Kohana_View->__toString()
#5 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('C:\servers\hand...')
#6 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\servers\hand...', Array)
#7 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#11 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#13 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\servers\handmade\data\htdocs\kohana\application\views\add.php:12
2019-02-26 17:58:03 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Feed::$session ~ APPPATH\classes\Controller\Feed.php [ 16 ] in C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php:16
2019-02-26 17:58:03 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php(16): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\servers\hand...', 16, Array)
#1 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Feed->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#4 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php:16
2019-02-26 17:58:16 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Controller_Feed::$session ~ APPPATH\classes\Controller\Feed.php [ 16 ] in C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php:16
2019-02-26 17:58:16 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php(16): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\servers\hand...', 16, Array)
#1 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Feed->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#4 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php:16
2019-02-26 18:00:13 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Session_Native as array ~ APPPATH\classes\Controller\Feed.php [ 17 ] in file:line
2019-02-26 18:00:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-26 18:00:26 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Session_Native as array ~ APPPATH\classes\Controller\Feed.php [ 17 ] in file:line
2019-02-26 18:00:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-26 18:00:40 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '6' (T_LNUMBER), expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH\classes\Controller\Feed.php [ 17 ] in file:line
2019-02-26 18:00:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-26 18:00:57 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH\classes\Controller\Feed.php [ 17 ] in file:line
2019-02-26 18:00:57 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-26 18:01:11 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH\classes\Controller\Feed.php [ 17 ] in file:line
2019-02-26 18:01:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-26 18:03:00 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '[', expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH\classes\Controller\Feed.php [ 17 ] in file:line
2019-02-26 18:03:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-26 18:04:18 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Session_Native::as_aray() ~ APPPATH\classes\Controller\Feed.php [ 16 ] in file:line
2019-02-26 18:04:18 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-26 18:04:54 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 6 ~ APPPATH\classes\Controller\Feed.php [ 17 ] in C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php:17
2019-02-26 18:04:54 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php(17): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\servers\hand...', 17, Array)
#1 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Feed->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#4 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php:17
2019-02-26 18:06:04 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\Feed.php [ 18 ] in C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php:18
2019-02-26 18:06:04 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php(18): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\servers\hand...', 18, Array)
#1 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Feed->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#4 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php:18
2019-02-26 18:06:06 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 0 ~ APPPATH\classes\Controller\Feed.php [ 18 ] in C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php:18
2019-02-26 18:06:06 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php(18): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\servers\hand...', 18, Array)
#1 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Feed->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#4 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php:18
2019-02-26 18:06:21 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '0' (T_LNUMBER), expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH\classes\Controller\Feed.php [ 18 ] in file:line
2019-02-26 18:06:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-26 18:08:12 --- CRITICAL: ErrorException [ 8 ]: Undefined index: _original_values ~ APPPATH\classes\Controller\Feed.php [ 18 ] in C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php:18
2019-02-26 18:08:12 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php(18): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\servers\hand...', 18, Array)
#1 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Feed->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#4 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php:18
2019-02-26 18:08:27 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\classes\Controller\Feed.php [ 18 ] in C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php:18
2019-02-26 18:08:27 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php(18): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\servers\hand...', 18, Array)
#1 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Feed->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#4 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php:18
2019-02-26 18:09:16 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Session_Native::$_original_values ~ APPPATH\classes\Controller\Feed.php [ 18 ] in C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php:18
2019-02-26 18:09:16 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php(18): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\servers\hand...', 18, Array)
#1 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Feed->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#4 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php:18
2019-02-26 18:09:20 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Session_Native::$_original_values ~ APPPATH\classes\Controller\Feed.php [ 18 ] in C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php:18
2019-02-26 18:09:20 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php(18): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\servers\hand...', 18, Array)
#1 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Feed->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#4 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php:18
2019-02-26 18:09:23 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Session_Native::$_original_values ~ APPPATH\classes\Controller\Feed.php [ 18 ] in C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php:18
2019-02-26 18:09:23 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php(18): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\servers\hand...', 18, Array)
#1 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Feed->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#4 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php:18
2019-02-26 18:11:02 --- CRITICAL: ErrorException [ 8 ]: Undefined property: Session_Native::$_original_values ~ APPPATH\classes\Controller\Feed.php [ 18 ] in C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php:18
2019-02-26 18:11:02 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php(18): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\servers\hand...', 18, Array)
#1 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Feed->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#4 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php:18
2019-02-26 18:14:35 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_User as array ~ APPPATH\classes\Controller\Feed.php [ 18 ] in file:line
2019-02-26 18:14:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-26 18:18:14 --- CRITICAL: ErrorException [ 4096 ]: Object of class Database_MySQL_Result could not be converted to string ~ APPPATH\classes\Controller\Feed.php [ 20 ] in C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php:20
2019-02-26 18:18:14 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php(20): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\servers\hand...', 20, Array)
#1 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Feed->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#4 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in C:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php:20
2019-02-26 18:22:11 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\header.php [ 6 ] in C:\servers\handmade\data\htdocs\kohana\application\views\header.php:6
2019-02-26 18:22:11 --- DEBUG: #0 C:\servers\handmade\data\htdocs\kohana\application\views\header.php(6): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\servers\hand...', 6, Array)
#1 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('C:\servers\hand...')
#2 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\servers\hand...', Array)
#3 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 C:\servers\handmade\data\htdocs\kohana\application\views\base.php(15): Kohana_View->__toString()
#5 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('C:\servers\hand...')
#6 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('C:\servers\hand...', Array)
#7 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#11 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#13 C:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in C:\servers\handmade\data\htdocs\kohana\application\views\header.php:6
2019-02-26 18:36:46 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected 'if' (T_IF) ~ APPPATH\classes\Controller\Feed.php [ 88 ] in file:line
2019-02-26 18:36:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-26 19:27:03 --- CRITICAL: Database_Exception [ 1146 ]: Table 'database.posts' doesn't exist [ SHOW FULL COLUMNS FROM `posts` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:359
2019-02-26 19:27:03 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#1 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('posts')
#2 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#3 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#4 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#5 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#6 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php(22): Kohana_ORM::factory('post')
#7 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Feed->action_index()
#8 [internal function]: Kohana_Controller->execute()
#9 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#10 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#12 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#13 {main} in E:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:359
2019-02-26 20:09:12 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'comment_answer' in 'where clause' [ SELECT `comment`.`id` AS `id`, `comment`.`text` AS `text`, `comment`.`user_id` AS `user_id`, `comment`.`post_id` AS `post_id`, `comment`.`date` AS `date`, `comment`.`aswer_id` AS `aswer_id` FROM `comments` AS `comment` WHERE `comment_answer` > 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-26 20:09:12 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `comment...', 'Model_Comment', Array)
#1 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php(87): Kohana_ORM->find_all()
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Feed->action_post()
#5 [internal function]: Kohana_Controller->execute()
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#7 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in E:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-26 20:09:49 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'answer_id' in 'where clause' [ SELECT `comment`.`id` AS `id`, `comment`.`text` AS `text`, `comment`.`user_id` AS `user_id`, `comment`.`post_id` AS `post_id`, `comment`.`date` AS `date`, `comment`.`aswer_id` AS `aswer_id` FROM `comments` AS `comment` WHERE `answer_id` > 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-26 20:09:49 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `comment...', 'Model_Comment', Array)
#1 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Feed.php(87): Kohana_ORM->find_all()
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Feed->action_post()
#5 [internal function]: Kohana_Controller->execute()
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Feed))
#7 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in E:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251