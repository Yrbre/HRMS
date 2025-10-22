<?php 
// DB credentials.
define('DB_HOST','172.31.197.2');
define('DB_USER','sbr');
define('DB_PASS','Tifico@12345');
define('DB_NAME','hrms360');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>
