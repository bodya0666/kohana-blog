<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2019-02-25 04:26:04 --- CRITICAL: ErrorException [ 8 ]: Undefined index: auth ~ APPPATH\classes\Controller\Task.php [ 21 ] in E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Task.php:21
2019-02-25 04:26:04 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Task.php(21): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\servers\hand...', 21, Array)
#1 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Task->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Task))
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Task.php:21
2019-02-25 04:34:47 --- CRITICAL: ErrorException [ 8 ]: Undefined index: user_id ~ APPPATH\classes\Controller\Task.php [ 21 ] in E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Task.php:21
2019-02-25 04:34:47 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Task.php(21): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\servers\hand...', 21, Array)
#1 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Task->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Task))
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Task.php:21
2019-02-25 04:35:26 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\classes\Model\Validation.php [ 10 ] in E:\servers\handmade\data\htdocs\kohana\application\classes\Model\Validation.php:10
2019-02-25 04:35:26 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\application\classes\Model\Validation.php(10): Kohana_Core::error_handler(8, 'Undefined offse...', 'E:\servers\hand...', 10, Array)
#1 E:\servers\handmade\data\htdocs\kohana\application\classes\Model\Validation.php(16): Model_Validation->explode_date('')
#2 [internal function]: Model_Validation->check_date('', '2019')
#3 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#4 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Task.php(51): Kohana_Validation->check()
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Task->action_add()
#6 [internal function]: Kohana_Controller->execute()
#7 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Task))
#8 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#10 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#11 {main} in E:\servers\handmade\data\htdocs\kohana\application\classes\Model\Validation.php:10
2019-02-25 04:35:53 --- CRITICAL: ErrorException [ 8 ]: Undefined index: user_id ~ APPPATH\classes\Controller\Task.php [ 59 ] in E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Task.php:59
2019-02-25 04:35:53 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Task.php(59): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\servers\hand...', 59, Array)
#1 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Task->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Task))
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Task.php:59
2019-02-25 04:36:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: session ~ APPPATH\classes\Controller\Task.php [ 59 ] in E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Task.php:59
2019-02-25 04:36:25 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Task.php(59): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\servers\hand...', 59, Array)
#1 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Task->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Task))
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Task.php:59
2019-02-25 04:37:40 --- CRITICAL: ErrorException [ 8 ]: Undefined index: id ~ APPPATH\classes\Controller\Task.php [ 59 ] in E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Task.php:59
2019-02-25 04:37:40 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Task.php(59): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\servers\hand...', 59, Array)
#1 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Task->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Task))
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Task.php:59
2019-02-25 04:39:12 --- CRITICAL: ErrorException [ 8 ]: Undefined index: user_id ~ APPPATH\classes\Controller\Task.php [ 59 ] in E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Task.php:59
2019-02-25 04:39:12 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Task.php(59): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\servers\hand...', 59, Array)
#1 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Task->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Task))
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Task.php:59
2019-02-25 08:39:27 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR) ~ APPPATH\classes\Controller\Task.php [ 49 ] in file:line
2019-02-25 08:39:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-25 08:39:36 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\classes\Model\Validation.php [ 10 ] in E:\servers\handmade\data\htdocs\kohana\application\classes\Model\Validation.php:10
2019-02-25 08:39:36 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\application\classes\Model\Validation.php(10): Kohana_Core::error_handler(8, 'Undefined offse...', 'E:\servers\hand...', 10, Array)
#1 E:\servers\handmade\data\htdocs\kohana\application\classes\Model\Validation.php(16): Model_Validation->explode_date(12)
#2 E:\servers\handmade\data\htdocs\kohana\application\classes\Model\Validation.php(28): Model_Validation->check_date(12, '02')
#3 [internal function]: Model_Validation->month('2020-02-29', '2020-02-29')
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#5 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Task.php(50): Kohana_Validation->check()
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Task->action_add()
#7 [internal function]: Kohana_Controller->execute()
#8 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Task))
#9 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#11 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in E:\servers\handmade\data\htdocs\kohana\application\classes\Model\Validation.php:10
2019-02-25 08:43:11 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\classes\Model\Validation.php [ 10 ] in E:\servers\handmade\data\htdocs\kohana\application\classes\Model\Validation.php:10
2019-02-25 08:43:11 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\application\classes\Model\Validation.php(10): Kohana_Core::error_handler(8, 'Undefined offse...', 'E:\servers\hand...', 10, Array)
#1 E:\servers\handmade\data\htdocs\kohana\application\classes\Model\Validation.php(16): Model_Validation->explode_date(12)
#2 E:\servers\handmade\data\htdocs\kohana\application\classes\Model\Validation.php(28): Model_Validation->check_date(12, '02')
#3 [internal function]: Model_Validation->month('2020-02-29', '2020-02-29')
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Validation.php(377): call_user_func_array(Array, Array)
#5 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Task.php(50): Kohana_Validation->check()
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Task->action_add()
#7 [internal function]: Kohana_Controller->execute()
#8 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Task))
#9 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#11 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#12 {main} in E:\servers\handmade\data\htdocs\kohana\application\classes\Model\Validation.php:10
2019-02-25 08:45:53 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: date ~ APPPATH\classes\Controller\Task.php [ 58 ] in E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Task.php:58
2019-02-25 08:45:53 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Task.php(58): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\servers\hand...', 58, Array)
#1 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Task->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Task))
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Task.php:58
2019-02-25 08:46:21 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Task::check_date() ~ APPPATH\classes\Controller\Task.php [ 65 ] in file:line
2019-02-25 08:46:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-25 08:46:42 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\classes\Model\Validation.php [ 10 ] in E:\servers\handmade\data\htdocs\kohana\application\classes\Model\Validation.php:10
2019-02-25 08:46:42 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\application\classes\Model\Validation.php(10): Kohana_Core::error_handler(8, 'Undefined offse...', 'E:\servers\hand...', 10, Array)
#1 E:\servers\handmade\data\htdocs\kohana\application\classes\Model\Validation.php(16): Model_Validation->explode_date(12)
#2 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Task.php(65): Model_Validation->check_date(12, '02')
#3 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Task->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Task))
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in E:\servers\handmade\data\htdocs\kohana\application\classes\Model\Validation.php:10
2019-02-25 08:48:03 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\classes\Model\Validation.php [ 10 ] in E:\servers\handmade\data\htdocs\kohana\application\classes\Model\Validation.php:10
2019-02-25 08:48:03 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\application\classes\Model\Validation.php(10): Kohana_Core::error_handler(8, 'Undefined offse...', 'E:\servers\hand...', 10, Array)
#1 E:\servers\handmade\data\htdocs\kohana\application\classes\Model\Validation.php(16): Model_Validation->explode_date(12)
#2 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Task.php(65): Model_Validation->check_date(12, '02')
#3 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Task->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Task))
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in E:\servers\handmade\data\htdocs\kohana\application\classes\Model\Validation.php:10
2019-02-25 08:48:26 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 1 ~ APPPATH\classes\Model\Validation.php [ 10 ] in E:\servers\handmade\data\htdocs\kohana\application\classes\Model\Validation.php:10
2019-02-25 08:48:26 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\application\classes\Model\Validation.php(10): Kohana_Core::error_handler(8, 'Undefined offse...', 'E:\servers\hand...', 10, Array)
#1 E:\servers\handmade\data\htdocs\kohana\application\classes\Model\Validation.php(16): Model_Validation->explode_date('02')
#2 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Task.php(61): Model_Validation->check_date('02', '02')
#3 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Task->action_add()
#4 [internal function]: Kohana_Controller->execute()
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Task))
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#8 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#9 {main} in E:\servers\handmade\data\htdocs\kohana\application\classes\Model\Validation.php:10
2019-02-25 08:56:30 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR), expecting identifier (T_STRING) or variable (T_VARIABLE) or '{' or '$' ~ APPPATH\classes\Controller\Task.php [ 48 ] in file:line
2019-02-25 08:56:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-25 08:56:55 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '}' ~ APPPATH\classes\Controller\Task.php [ 73 ] in file:line
2019-02-25 08:56:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-25 09:17:45 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: content ~ APPPATH\classes\Controller\Task.php [ 32 ] in E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Task.php:32
2019-02-25 09:17:45 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Task.php(32): Kohana_Core::error_handler(8, 'Undefined varia...', 'E:\servers\hand...', 32, Array)
#1 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Task->action_add()
#2 [internal function]: Kohana_Controller->execute()
#3 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Task))
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#6 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#7 {main} in E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Task.php:32