<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-07-16 03:36:27 --- EMERGENCY: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt in your bootstrap.php. For more information check the documentation ~ SYSPATH/classes/Kohana/Cookie.php [ 158 ] in /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/Cookie.php:67
2016-07-16 03:36:27 --- DEBUG: #0 /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/Cookie.php(67): Kohana_Cookie::salt('__lncc_php_net', NULL)
#1 /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/Request.php(151): Kohana_Cookie::get('__lncc_php_net')
#2 /home/akhan/CodePHP/phpprojects/proj2/index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/Cookie.php:67
2016-07-16 03:41:02 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/Home.php [ 9 ] in /home/akhan/CodePHP/phpprojects/proj2/application/classes/Controller/Home.php:9
2016-07-16 03:41:02 --- DEBUG: #0 /home/akhan/CodePHP/phpprojects/proj2/application/classes/Controller/Home.php(9): Kohana_Core::error_handler(2, 'Attempt to assi...', '/home/akhan/Cod...', 9, Array)
#1 /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/akhan/CodePHP/phpprojects/proj2/index.php(118): Kohana_Request->execute()
#7 {main} in /home/akhan/CodePHP/phpprojects/proj2/application/classes/Controller/Home.php:9
2016-07-16 03:43:16 --- EMERGENCY: ErrorException [ 2 ]: Attempt to assign property of non-object ~ APPPATH/classes/Controller/Home.php [ 9 ] in /home/akhan/CodePHP/phpprojects/proj2/application/classes/Controller/Home.php:9
2016-07-16 03:43:16 --- DEBUG: #0 /home/akhan/CodePHP/phpprojects/proj2/application/classes/Controller/Home.php(9): Kohana_Core::error_handler(2, 'Attempt to assi...', '/home/akhan/Cod...', 9, Array)
#1 /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/akhan/CodePHP/phpprojects/proj2/index.php(118): Kohana_Request->execute()
#7 {main} in /home/akhan/CodePHP/phpprojects/proj2/application/classes/Controller/Home.php:9
2016-07-16 03:45:13 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: message ~ APPPATH/views/home.php [ 8 ] in /home/akhan/CodePHP/phpprojects/proj2/application/views/home.php:8
2016-07-16 03:45:13 --- DEBUG: #0 /home/akhan/CodePHP/phpprojects/proj2/application/views/home.php(8): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/akhan/Cod...', 8, Array)
#1 /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/View.php(62): include('/home/akhan/Cod...')
#2 /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/View.php(359): Kohana_View::capture('/home/akhan/Cod...', Array)
#3 /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/View.php(236): Kohana_View->render()
#4 /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/Response.php(160): Kohana_View->__toString()
#5 /home/akhan/CodePHP/phpprojects/proj2/application/classes/Controller/Home.php(7): Kohana_Response->body(Object(View))
#6 /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#7 [internal function]: Kohana_Controller->execute()
#8 /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#9 /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#11 /home/akhan/CodePHP/phpprojects/proj2/index.php(118): Kohana_Request->execute()
#12 {main} in /home/akhan/CodePHP/phpprojects/proj2/application/views/home.php:8
2016-07-16 03:46:16 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Controller/Home.php [ 7 ] in file:line
2016-07-16 03:46:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-16 03:46:51 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected ')' ~ APPPATH/classes/Controller/Home.php [ 7 ] in file:line
2016-07-16 03:46:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-16 13:13:55 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function base_url() ~ APPPATH/views/home.php [ 6 ] in file:line
2016-07-16 13:13:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-16 13:24:03 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'echo' (T_ECHO) ~ APPPATH/views/home.php [ 7 ] in file:line
2016-07-16 13:24:03 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-16 13:38:27 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'HTML' (T_STRING), expecting ',' or ';' ~ APPPATH/views/home.php [ 76 ] in file:line
2016-07-16 13:38:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-16 13:59:43 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined function redirect() ~ APPPATH/classes/Controller/Home.php [ 13 ] in file:line
2016-07-16 13:59:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-16 14:12:14 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Home.php [ 13 ] in file:line
2016-07-16 14:12:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-16 14:12:36 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Request::redirect() ~ APPPATH/classes/Controller/Home.php [ 13 ] in file:line
2016-07-16 14:12:36 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-16 14:24:21 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected '->' (T_OBJECT_OPERATOR), expecting ',' or ';' ~ APPPATH/views/home.php [ 22 ] in file:line
2016-07-16 14:24:21 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-16 14:36:46 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_home' not found ~ SYSPATH/classes/Kohana/Model.php [ 26 ] in file:line
2016-07-16 14:36:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-16 15:09:54 --- EMERGENCY: ErrorException [ 1 ]: Call to undefined method Database_Query_Builder_Select::result() ~ APPPATH/classes/Model/Home.php [ 10 ] in file:line
2016-07-16 15:09:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-16 15:12:54 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /home/akhan/CodePHP/phpprojects/proj2/modules/database/classes/Kohana/Database/MySQL.php:171
2016-07-16 15:12:54 --- DEBUG: #0 /home/akhan/CodePHP/phpprojects/proj2/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /home/akhan/CodePHP/phpprojects/proj2/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT * FROM `...', false, Array)
#2 /home/akhan/CodePHP/phpprojects/proj2/application/classes/Model/Home.php(9): Kohana_Database_Query->execute()
#3 /home/akhan/CodePHP/phpprojects/proj2/application/classes/Controller/Home.php(10): Model_Home->hello()
#4 /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#7 /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#9 /home/akhan/CodePHP/phpprojects/proj2/index.php(118): Kohana_Request->execute()
#10 {main} in /home/akhan/CodePHP/phpprojects/proj2/modules/database/classes/Kohana/Database/MySQL.php:171
2016-07-16 15:16:28 --- EMERGENCY: Kohana_Exception [ 0 ]: Database type not defined in default configuration ~ MODPATH/database/classes/Kohana/Database.php [ 70 ] in /home/akhan/CodePHP/phpprojects/proj2/modules/database/classes/Kohana/Database/Query.php:220
2016-07-16 15:16:28 --- DEBUG: #0 /home/akhan/CodePHP/phpprojects/proj2/modules/database/classes/Kohana/Database/Query.php(220): Kohana_Database::instance(NULL)
#1 /home/akhan/CodePHP/phpprojects/proj2/application/classes/Model/Home.php(9): Kohana_Database_Query->execute()
#2 /home/akhan/CodePHP/phpprojects/proj2/application/classes/Controller/Home.php(10): Model_Home->hello()
#3 /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/akhan/CodePHP/phpprojects/proj2/index.php(118): Kohana_Request->execute()
#9 {main} in /home/akhan/CodePHP/phpprojects/proj2/modules/database/classes/Kohana/Database/Query.php:220
2016-07-16 15:20:27 --- EMERGENCY: ErrorException [ 4 ]: syntax error, unexpected 'as' (T_AS), expecting ';' ~ APPPATH/views/home.php [ 20 ] in file:line
2016-07-16 15:20:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2016-07-16 15:47:02 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Controller_Home::$respond ~ APPPATH/classes/Controller/Home.php [ 12 ] in /home/akhan/CodePHP/phpprojects/proj2/application/classes/Controller/Home.php:12
2016-07-16 15:47:02 --- DEBUG: #0 /home/akhan/CodePHP/phpprojects/proj2/application/classes/Controller/Home.php(12): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/akhan/Cod...', 12, Array)
#1 /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/akhan/CodePHP/phpprojects/proj2/index.php(118): Kohana_Request->execute()
#7 {main} in /home/akhan/CodePHP/phpprojects/proj2/application/classes/Controller/Home.php:12
2016-07-16 16:15:25 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: model ~ APPPATH/classes/Controller/Home.php [ 9 ] in /home/akhan/CodePHP/phpprojects/proj2/application/classes/Controller/Home.php:9
2016-07-16 16:15:25 --- DEBUG: #0 /home/akhan/CodePHP/phpprojects/proj2/application/classes/Controller/Home.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/akhan/Cod...', 9, Array)
#1 /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/akhan/CodePHP/phpprojects/proj2/index.php(118): Kohana_Request->execute()
#7 {main} in /home/akhan/CodePHP/phpprojects/proj2/application/classes/Controller/Home.php:9
2016-07-16 16:17:43 --- EMERGENCY: ErrorException [ 4096 ]: Argument 1 passed to Kohana_Database_Query_Builder_Insert::values() must be of the type array, string given, called in /home/akhan/CodePHP/phpprojects/proj2/application/classes/Model/Home.php on line 7 and defined ~ MODPATH/database/classes/Kohana/Database/Query/Builder/Insert.php [ 83 ] in /home/akhan/CodePHP/phpprojects/proj2/modules/database/classes/Kohana/Database/Query/Builder/Insert.php:83
2016-07-16 16:17:43 --- DEBUG: #0 /home/akhan/CodePHP/phpprojects/proj2/modules/database/classes/Kohana/Database/Query/Builder/Insert.php(83): Kohana_Core::error_handler(4096, 'Argument 1 pass...', '/home/akhan/Cod...', 83, Array)
#1 /home/akhan/CodePHP/phpprojects/proj2/application/classes/Model/Home.php(7): Kohana_Database_Query_Builder_Insert->values('Kohana', 'https://kohanaf...')
#2 /home/akhan/CodePHP/phpprojects/proj2/application/classes/Controller/Home.php(11): Model_Home->add_link('Kohana', 'https://kohanaf...')
#3 /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#6 /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#8 /home/akhan/CodePHP/phpprojects/proj2/index.php(118): Kohana_Request->execute()
#9 {main} in /home/akhan/CodePHP/phpprojects/proj2/modules/database/classes/Kohana/Database/Query/Builder/Insert.php:83
2016-07-16 16:39:51 --- EMERGENCY: ErrorException [ 8 ]: Undefined variable: model ~ APPPATH/classes/Controller/Home.php [ 23 ] in /home/akhan/CodePHP/phpprojects/proj2/application/classes/Controller/Home.php:23
2016-07-16 16:39:51 --- DEBUG: #0 /home/akhan/CodePHP/phpprojects/proj2/application/classes/Controller/Home.php(23): Kohana_Core::error_handler(8, 'Undefined varia...', '/home/akhan/Cod...', 23, Array)
#1 /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/Controller.php(84): Controller_Home->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/akhan/CodePHP/phpprojects/proj2/index.php(118): Kohana_Request->execute()
#7 {main} in /home/akhan/CodePHP/phpprojects/proj2/application/classes/Controller/Home.php:23
2016-07-16 16:45:14 --- EMERGENCY: ErrorException [ 8 ]: Undefined property: Database_Query_Builder_Delete::$execute ~ APPPATH/classes/Model/Home.php [ 21 ] in /home/akhan/CodePHP/phpprojects/proj2/application/classes/Model/Home.php:21
2016-07-16 16:45:14 --- DEBUG: #0 /home/akhan/CodePHP/phpprojects/proj2/application/classes/Model/Home.php(21): Kohana_Core::error_handler(8, 'Undefined prope...', '/home/akhan/Cod...', 21, Array)
#1 /home/akhan/CodePHP/phpprojects/proj2/application/classes/Controller/Home.php(27): Model_Home->delete_link(0)
#2 /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/Controller.php(84): Controller_Home->action_delete()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#5 /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#7 /home/akhan/CodePHP/phpprojects/proj2/index.php(118): Kohana_Request->execute()
#8 {main} in /home/akhan/CodePHP/phpprojects/proj2/application/classes/Model/Home.php:21
2016-07-16 16:53:27 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_Home::action_delete(), called in /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/Controller.php on line 84 and defined ~ APPPATH/classes/Controller/Home.php [ 23 ] in /home/akhan/CodePHP/phpprojects/proj2/application/classes/Controller/Home.php:23
2016-07-16 16:53:27 --- DEBUG: #0 /home/akhan/CodePHP/phpprojects/proj2/application/classes/Controller/Home.php(23): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/akhan/Cod...', 23, Array)
#1 /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/Controller.php(84): Controller_Home->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/akhan/CodePHP/phpprojects/proj2/index.php(118): Kohana_Request->execute()
#7 {main} in /home/akhan/CodePHP/phpprojects/proj2/application/classes/Controller/Home.php:23
2016-07-16 16:54:05 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_Home::action_delete(), called in /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/Controller.php on line 84 and defined ~ APPPATH/classes/Controller/Home.php [ 23 ] in /home/akhan/CodePHP/phpprojects/proj2/application/classes/Controller/Home.php:23
2016-07-16 16:54:05 --- DEBUG: #0 /home/akhan/CodePHP/phpprojects/proj2/application/classes/Controller/Home.php(23): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/akhan/Cod...', 23, Array)
#1 /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/Controller.php(84): Controller_Home->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/akhan/CodePHP/phpprojects/proj2/index.php(118): Kohana_Request->execute()
#7 {main} in /home/akhan/CodePHP/phpprojects/proj2/application/classes/Controller/Home.php:23
2016-07-16 16:55:51 --- EMERGENCY: ErrorException [ 2 ]: Missing argument 1 for Controller_Home::action_delete(), called in /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/Controller.php on line 84 and defined ~ APPPATH/classes/Controller/Home.php [ 23 ] in /home/akhan/CodePHP/phpprojects/proj2/application/classes/Controller/Home.php:23
2016-07-16 16:55:51 --- DEBUG: #0 /home/akhan/CodePHP/phpprojects/proj2/application/classes/Controller/Home.php(23): Kohana_Core::error_handler(2, 'Missing argumen...', '/home/akhan/Cod...', 23, Array)
#1 /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/Controller.php(84): Controller_Home->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/akhan/CodePHP/phpprojects/proj2/system/classes/Kohana/Request.php(997): Kohana_Request_Client->execute(Object(Request))
#6 /home/akhan/CodePHP/phpprojects/proj2/index.php(118): Kohana_Request->execute()
#7 {main} in /home/akhan/CodePHP/phpprojects/proj2/application/classes/Controller/Home.php:23