<?php

define('DBHOST', 'mariadb');
define('DBNAME', 'useraccounts');
define('DBUSER', 'artuser');
define('DBPASS', 'mypassword');
define('DBCONNSTRING','mysql:host=mariadb;dbname=useraccounts;charset=utf8mb4;');

$db = new PDO(DBCONNSTRING,DBUSER,DBPASS);
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

 ?>
