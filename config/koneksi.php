<?php 
define('HOST','localhost');
define('USER','root');
define('PASS','');
define('DB','latihid');
$conn = new mysqli(HOST,USER,PASS,DB) or die('Connetion error to the database');
?>