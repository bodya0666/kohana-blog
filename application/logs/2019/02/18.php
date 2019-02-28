<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2019-02-18 02:49:09 --- CRITICAL: ErrorException [ 4 ]: syntax error, unexpected '$content' (T_VARIABLE) ~ APPPATH\classes\Controller\Task.php [ 31 ] in file:line
2019-02-18 02:49:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2019-02-18 02:50:41 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '2019-02-12' for key 'deadline' [ INSERT INTO `deadlines` (`deadline`) VALUES ('2019-02-12') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-18 02:50:41 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `de...', false, Array)
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
2019-02-18 02:51:18 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '2019-02-12' for key 'deadline' [ INSERT INTO `deadlines` (`deadline`) VALUES ('2019-02-12') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-18 02:51:18 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `de...', false, Array)
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
2019-02-18 02:51:30 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '2019-02-12' for key 'deadline' [ INSERT INTO `deadlines` (`deadline`) VALUES ('2019-02-12') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-18 02:51:30 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `de...', false, Array)
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
2019-02-18 02:51:47 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '2019-02-12' for key 'deadline' [ INSERT INTO `deadlines` (`deadline`) VALUES ('2019-02-12') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in E:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php:251
2019-02-18 02:51:47 --- DEBUG: #0 E:\servers\handmade\data\htdocs\kohana\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `de...', false, Array)
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