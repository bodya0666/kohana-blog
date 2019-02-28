<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2019-02-11 11:14:28 --- CRITICAL: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Validation::factory() must be of the type array, string given, called in E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Auth.php on line 29 and defined ~ SYSPATH\classes\Kohana\Validation.php [ 19 ] in E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Validation.php:19
2019-02-11 11:14:28 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Validation.php(19): Kohana_Core::error_handler(4096, 'Argument 1 pass...', 'E:\servers\hand...', 19, Array)
#1 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Auth.php(29): Kohana_Validation::factory('$_POST')
#2 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Validation.php:19
2019-02-11 11:19:49 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected ';', expecting ')' ~ APPPATH\messages\validation.php [ 7 ] in file:line
2019-02-11 11:19:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-11 11:45:56 --- CRITICAL: ErrorException [ 8 ]: Undefined index: remember ~ SYSPATH\classes\Kohana\Validation.php [ 102 ] in E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Validation.php:102
2019-02-11 11:45:56 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Validation.php(102): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\servers\hand...', 102, Array)
#1 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Auth.php(34): Kohana_Validation->offsetGet('remember')
#2 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Validation.php:102
2019-02-11 11:45:59 --- CRITICAL: ErrorException [ 8 ]: Undefined index: remember ~ SYSPATH\classes\Kohana\Validation.php [ 102 ] in E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Validation.php:102
2019-02-11 11:45:59 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Validation.php(102): Kohana_Core::error_handler(8, 'Undefined index...', 'E:\servers\hand...', 102, Array)
#1 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Auth.php(34): Kohana_Validation->offsetGet('remember')
#2 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Validation.php:102
2019-02-11 16:04:32 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$errors' (T_VARIABLE), expecting ',' or ';' ~ APPPATH\views\registration.php [ 13 ] in file:line
2019-02-11 16:04:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-11 16:04:56 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$errors' (T_VARIABLE), expecting ',' or ';' ~ APPPATH\views\registration.php [ 18 ] in file:line
2019-02-11 16:04:56 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-11 16:05:00 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$errors' (T_VARIABLE), expecting ',' or ';' ~ APPPATH\views\registration.php [ 18 ] in file:line
2019-02-11 16:05:00 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-11 16:05:01 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$errors' (T_VARIABLE), expecting ',' or ';' ~ APPPATH\views\registration.php [ 18 ] in file:line
2019-02-11 16:05:01 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-11 16:05:02 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$errors' (T_VARIABLE), expecting ',' or ';' ~ APPPATH\views\registration.php [ 18 ] in file:line
2019-02-11 16:05:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-11 16:48:23 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\login.php [ 5 ] in E:\servers\handmade\data\htdocs\kohana\application\views\login.php:5
2019-02-11 16:48:23 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\application\views\login.php(5): Kohana_Core::error_handler(2, 'Invalid argumen...', 'E:\servers\hand...', 5, Array)
#1 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('E:\servers\hand...')
#2 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\servers\hand...', Array)
#3 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(236): Kohana_View->render()
#4 E:\servers\handmade\data\htdocs\kohana\application\views\base.php(19): Kohana_View->__toString()
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(62): include('E:\servers\hand...')
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\View.php(359): Kohana_View::capture('E:\servers\hand...', Array)
#7 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#11 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#13 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#14 {main} in E:\servers\handmade\data\htdocs\kohana\application\views\login.php:5
2019-02-11 16:48:59 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Auth.php [ 40 ] in file:line
2019-02-11 16:48:59 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-11 17:04:19 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Auth.php [ 40 ] in file:line
2019-02-11 17:04:19 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-11 17:04:53 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Auth.php [ 40 ] in file:line
2019-02-11 17:04:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-11 17:07:16 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Auth.php [ 40 ] in file:line
2019-02-11 17:07:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-11 17:07:20 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH\classes\Controller\Auth.php [ 40 ] in file:line
2019-02-11 17:07:20 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-11 19:07:27 --- CRITICAL: Kohana_Exception [ 0 ]: Untrusted host localhost. If you trust localhost, add it to the trusted hosts in the `url` config file. ~ SYSPATH\classes\Kohana\URL.php [ 107 ] in E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\URL.php:144
2019-02-11 19:07:27 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\URL.php(144): Kohana_URL::base(true, false)
#1 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\HTTP\Exception\Redirect.php(29): Kohana_URL::site('index', true, false)
#2 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\HTTP.php(40): Kohana_HTTP_Exception_Redirect->location('index')
#3 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Auth.php(39): Kohana_HTTP::redirect('index')
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Auth->action_login()
#5 [internal function]: Kohana_Controller->execute()
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Auth))
#7 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\URL.php:144