<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2019-02-19 21:41:12 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '2019-02-22' for key 'deadline' [ INSERT INTO `deadlines` (`deadline`) VALUES ('2019-02-22') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-19 21:41:12 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `de...', false, Array)
#1 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Task.php(46): Kohana_ORM->save()
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Task->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Task))
#7 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in E:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-19 21:46:09 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '2019-02-22' for key 'deadline' [ INSERT INTO `deadlines` (`deadline`) VALUES ('2019-02-22') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-19 21:46:09 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `de...', false, Array)
#1 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 E:\servers\handmade\data\htdocs\kohana\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Task.php(46): Kohana_ORM->save()
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Task->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Task))
#7 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#9 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#10 {main} in E:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-19 23:04:24 --- CRITICAL: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Validation::rule() must be of the type array, integer given, called in E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Task.php on line 49 and defined ~ SYSPATH\classes\Kohana\Validation.php [ 211 ] in E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Validation.php:211
2019-02-19 23:04:24 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Validation.php(211): Kohana_Core::error_handler(4096, 'Argument 3 pass...', 'E:\servers\hand...', 211, Array)
#1 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Task.php(49): Kohana_Validation->rule('deadline', 'date', 2)
#2 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Task->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Task))
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Validation.php:211
2019-02-19 23:04:46 --- CRITICAL: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Validation::rule() must be of the type array, integer given, called in E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Task.php on line 49 and defined ~ SYSPATH\classes\Kohana\Validation.php [ 211 ] in E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Validation.php:211
2019-02-19 23:04:46 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Validation.php(211): Kohana_Core::error_handler(4096, 'Argument 3 pass...', 'E:\servers\hand...', 211, Array)
#1 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Task.php(49): Kohana_Validation->rule('deadline', 'date', 2, 3)
#2 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Task->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Task))
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Validation.php:211
2019-02-19 23:05:04 --- CRITICAL: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Validation::rule() must be of the type array, integer given, called in E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Task.php on line 49 and defined ~ SYSPATH\classes\Kohana\Validation.php [ 211 ] in E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Validation.php:211
2019-02-19 23:05:04 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Validation.php(211): Kohana_Core::error_handler(4096, 'Argument 3 pass...', 'E:\servers\hand...', 211, Array)
#1 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Task.php(49): Kohana_Validation->rule('deadline', 'date', 2)
#2 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Task->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Task))
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Validation.php:211
2019-02-19 23:05:24 --- CRITICAL: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Validation::rule() must be of the type array, integer given, called in E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Task.php on line 49 and defined ~ SYSPATH\classes\Kohana\Validation.php [ 211 ] in E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Validation.php:211
2019-02-19 23:05:24 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Validation.php(211): Kohana_Core::error_handler(4096, 'Argument 3 pass...', 'E:\servers\hand...', 211, Array)
#1 E:\servers\handmade\data\htdocs\kohana\application\classes\Controller\Task.php(49): Kohana_Validation->rule('deadline', 'date', 2)
#2 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Controller.php(84): Controller_Task->action_add()
#3 [internal function]: Kohana_Controller->execute()
#4 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Task))
#5 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Request.php(993): Kohana_Request_Client->execute(Object(Request))
#7 E:\servers\handmade\data\htdocs\kohana\index.php(118): Kohana_Request->execute()
#8 {main} in E:\servers\handmade\data\htdocs\kohana\system\classes\Kohana\Validation.php:211