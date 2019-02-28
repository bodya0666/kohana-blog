<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2019-02-07 13:37:43 --- CRITICAL: Database_Exception [ 2 ]: mysql_connect(): Access denied for user ''@'localhost' (using password: NO) ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 67 ] in E:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2019-02-07 13:37:43 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php(171): Kohana_Database_MySQL->connect()
#1 E:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php(359): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1668): Kohana_Database_MySQL->list_columns('users')
#3 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(444): Kohana_ORM->list_columns()
#4 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(389): Kohana_ORM->reload_columns()
#5 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(254): Kohana_ORM->_initialize()
#6 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): Kohana_ORM->__construct(NULL)
#7 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Registration.php(12): Kohana_ORM::factory('User')
#8 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Registration->action_index()
#9 [internal function]: Kohana_Controller->execute()
#10 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#11 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#13 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in E:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\MySQL.php:171
2019-02-07 13:39:20 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1302
2019-02-07 13:39:20 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(Object(Validation))
#1 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#2 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Registration.php(13): Model_Auth_User->create_user(Array, Array)
#3 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Registration->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1302
2019-02-07 13:40:01 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH\classes\Kohana\Cookie.php [ 158 ] in E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2019-02-07 13:40:01 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('session', NULL)
#1 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(151): Kohana_Cookie::get('session')
#2 E:\servers\handmade\data\htdocs\kohana\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Cookie.php:67
2019-02-07 13:41:28 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1302
2019-02-07 13:41:28 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(Object(Validation))
#1 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#2 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Registration.php(13): Model_Auth_User->create_user(Array, Array)
#3 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Registration->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1302
2019-02-07 14:14:31 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1302
2019-02-07 14:14:31 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(Object(Validation))
#1 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#2 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Registration.php(13): Model_Auth_User->create_user(Array, Array)
#3 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Registration->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1302
2019-02-07 15:10:29 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\Registration.php [ 40 ] in file:line
2019-02-07 15:10:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-07 15:10:42 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1302
2019-02-07 15:10:42 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(Object(Validation))
#1 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#2 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Registration.php(16): Model_Auth_User->create_user(Array, Array)
#3 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Registration->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1302
2019-02-07 15:11:13 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1302
2019-02-07 15:11:13 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(Object(Validation))
#1 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#2 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Registration.php(16): Model_Auth_User->create_user(Array, Array)
#3 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Registration->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1302
2019-02-07 15:11:17 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1302
2019-02-07 15:11:17 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(Object(Validation))
#1 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#2 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Registration.php(16): Model_Auth_User->create_user(Array, Array)
#3 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Registration->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1302
2019-02-07 15:16:19 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1302
2019-02-07 15:16:19 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(Object(Validation))
#1 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#2 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Registration.php(16): Model_Auth_User->create_user(Array, Array)
#3 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Registration->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1302
2019-02-07 15:18:33 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\Registration.php [ 138 ] in file:line
2019-02-07 15:18:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-07 15:18:45 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1302
2019-02-07 15:18:45 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(Object(Validation))
#1 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#2 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Registration.php(14): Model_Auth_User->create_user(Array, Array)
#3 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Registration->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1302
2019-02-07 15:19:10 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1302
2019-02-07 15:19:10 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(Object(Validation))
#1 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#2 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Registration.php(14): Model_Auth_User->create_user(Array, Array)
#3 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Registration->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1302
2019-02-07 18:07:13 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1302
2019-02-07 18:07:13 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(Object(Validation))
#1 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#2 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Registration.php(13): Model_Auth_User->create_user(Array, Array)
#3 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Registration->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1302
2019-02-07 18:17:54 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1275 ] in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1302
2019-02-07 18:17:54 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1302): Kohana_ORM->check(Object(Validation))
#1 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Model\Auth\User.php(167): Kohana_ORM->create(Object(Validation))
#2 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Registration.php(13): Model_Auth_User->create_user(Array, Array)
#3 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Registration->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php:1302
2019-02-07 18:19:27 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}', expecting catch (T_CATCH) ~ APPPATH\classes\Controller\Registration.php [ 19 ] in file:line
2019-02-07 18:19:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-07 19:30:26 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\Registration.php [ 22 ] in E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Registration.php:22
2019-02-07 19:30:26 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Registration.php(22): Kohana_Core::error_handler(8, 'Array to string...', 'E:\servers\hand...', 22, Array)
#1 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Registration->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Registration.php:22
2019-02-07 19:36:00 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\registration.php [ 1 ] in E:\servers\handmade\data\htdocs\kohana\application\views\registration.php:1
2019-02-07 19:36:00 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\application\views\registration.php(1): Kohana_Core::error_handler(8, 'Array to string...', 'E:\servers\hand...', 1, Array)
#1 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('E:\servers\hand...')
#2 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\servers\hand...', Array)
#3 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 E:\servers\handmade\data\htdocs\kohana\application\views\base.php(19): Kohana_View->__toString()
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('E:\servers\hand...')
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\servers\hand...', Array)
#7 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#11 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#13 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in E:\servers\handmade\data\htdocs\kohana\application\views\registration.php:1
2019-02-07 19:39:07 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\registration.php [ 6 ] in E:\servers\handmade\data\htdocs\kohana\application\views\registration.php:6
2019-02-07 19:39:07 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\application\views\registration.php(6): Kohana_Core::error_handler(8, 'Array to string...', 'E:\servers\hand...', 6, Array)
#1 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('E:\servers\hand...')
#2 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\servers\hand...', Array)
#3 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 E:\servers\handmade\data\htdocs\kohana\application\views\base.php(19): Kohana_View->__toString()
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('E:\servers\hand...')
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\servers\hand...', Array)
#7 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#11 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#13 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in E:\servers\handmade\data\htdocs\kohana\application\views\registration.php:6
2019-02-07 19:39:52 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\registration.php [ 6 ] in E:\servers\handmade\data\htdocs\kohana\application\views\registration.php:6
2019-02-07 19:39:52 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\application\views\registration.php(6): Kohana_Core::error_handler(8, 'Array to string...', 'E:\servers\hand...', 6, Array)
#1 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('E:\servers\hand...')
#2 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\servers\hand...', Array)
#3 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 E:\servers\handmade\data\htdocs\kohana\application\views\base.php(19): Kohana_View->__toString()
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('E:\servers\hand...')
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\servers\hand...', Array)
#7 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#11 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#13 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in E:\servers\handmade\data\htdocs\kohana\application\views\registration.php:6