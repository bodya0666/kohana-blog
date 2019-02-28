<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2019-02-08 08:44:28 --- CRITICAL: ErrorException [ 1 ]: Call to a member function rule() on a non-object ~ MODPATH\orm\classes\Model\Auth\User.php [ 165 ] in file:line
2019-02-08 08:44:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-08 08:44:51 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected end of file, expecting function (T_FUNCTION) ~ APPPATH\classes\Model\User.php [ 32 ] in file:line
2019-02-08 08:44:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-08 08:45:56 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Model\User.php [ 31 ] in file:line
2019-02-08 08:45:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-08 08:50:18 --- CRITICAL: ErrorException [ 2048 ]: Declaration of Model_User::get_password_validation() should be compatible with Model_Auth_User::get_password_validation($values) ~ APPPATH\classes\Model\User.php [ 4 ] in E:\servers\handmade\data\htdocs\kohana\application\classes\Model\User.php:4
2019-02-08 08:50:18 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\application\classes\Model\User.php(4): Kohana_Core::error_handler(2048, 'Declaration of ...', 'E:\servers\hand...', 4, Array)
#1 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Core.php(511): require('E:\servers\hand...')
#2 [internal function]: Kohana_Core::auto_load('Model_user')
#3 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(46): spl_autoload_call('Model_user')
#4 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Registration.php(11): Kohana_ORM::factory('user')
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Registration->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#8 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#10 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in E:\servers\handmade\data\htdocs\kohana\application\classes\Model\User.php:4
2019-02-08 08:51:00 --- CRITICAL: Database_Exception [ 1048 ]: Column 'user_id' cannot be null [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES (NULL, '1') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-08 08:51:00 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1577): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Registration.php(13): Kohana_ORM->add('roles', '1')
#3 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Registration->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in E:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-08 10:58:15 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\registration.php [ 9 ] in E:\servers\handmade\data\htdocs\kohana\application\views\registration.php:9
2019-02-08 10:58:15 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\application\views\registration.php(9): Kohana_Core::error_handler(8, 'Array to string...', 'E:\servers\hand...', 9, Array)
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
#14 {main} in E:\servers\handmade\data\htdocs\kohana\application\views\registration.php:9
2019-02-08 10:59:05 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\views\registration.php [ 9 ] in E:\servers\handmade\data\htdocs\kohana\application\views\registration.php:9
2019-02-08 10:59:05 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\application\views\registration.php(9): Kohana_Core::error_handler(8, 'Array to string...', 'E:\servers\hand...', 9, Array)
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
#14 {main} in E:\servers\handmade\data\htdocs\kohana\application\views\registration.php:9
2019-02-08 11:00:11 --- CRITICAL: ErrorException [ 2 ]: implode(): Argument must be an array ~ APPPATH\views\registration.php [ 9 ] in file:line
2019-02-08 11:00:11 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'implode(): Argu...', 'E:\servers\hand...', 9, Array)
#1 E:\servers\handmade\data\htdocs\kohana\application\views\registration.php(9): implode('?????? ???? ???...')
#2 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('E:\servers\hand...')
#3 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\servers\hand...', Array)
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#5 E:\servers\handmade\data\htdocs\kohana\application\views\base.php(19): Kohana_View->__toString()
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('E:\servers\hand...')
#7 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\servers\hand...', Array)
#8 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Registration))
#12 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#14 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#15 {main} in file:line