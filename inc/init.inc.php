<?php
// Start Time, used for performance testing.
define('started', microtime());

// Max out error reporting.
error_reporting(-1);

// Define Database Variables
define('db_host', 'localhost');
define('db_database', 'clearmycache');
define('db_database_salt', 'j6fm');
define('db_username', 'root');
define('db_password', 'root');

// Start Sessions
//session_name();
//session_start();

// Include all the required files.
require('user_agent.class.php');
require('db.class.php');
?>