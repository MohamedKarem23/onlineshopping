<?php
define('DB_HOST' , 'localhost');
define('DB_USER' , 'root');
define('DB_PASS' , 'root');
define('DB_NAME' , 'Clothes');
// open connection
$conn = new mysqli(DB_HOST , DB_USER , DB_PASS,DB_NAME);
// $mysqli->select_db(DB_NAME);
 ?>
