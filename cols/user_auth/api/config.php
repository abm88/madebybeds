<?php
/**
 * Database configuration
 */
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_HOST', 'localhost');
define('DB_NAME', 'madebybeds');

$mysqlConnection = mysql_connect(DB_HOST, DB_USERNAME, DB_PASSWORD);
if (!$mysqlConnection)
{
  echo "Please try later.";
}
else
{
echo "ok";
}
?>
