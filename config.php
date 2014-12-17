<?php
/*
Site	:	WWW.FEWPRESS.COM
Author	:	Md. Rokonuzzaman Rokon
 * 
 */
 
define('BASE_PATH','http://localhost/qq/');
define('DB_HOST', 'localhost');
define('DB_NAME', 'qq');
define('DB_USER','root');
define('DB_PASSWORD','1234');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

?>