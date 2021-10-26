<?php
$host   = "localhost";
$user   = "username database";
$pass   = "password database";
$name   = "nama database";
 
mysql_connect("$host", "$user", "$pass");
mysql_select_db("$name");
?>