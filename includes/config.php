<?php 


define('DB_HOST','remotemysql.com');
define('DB_USER','TwvAbM8z3z');
define('DB_PASS','tIJq2t2Iov');
define('DB_NAME','TwvAbM8z3z')


// // DB credentials.
// define('DB_HOST','localhost');
// define('DB_USER','root');
// define('DB_PASS','');
// define('DB_NAME','abhi');
// // Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>