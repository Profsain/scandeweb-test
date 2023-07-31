<?php
// mysql hostname
$db_host = "localhost";

// mysql username for the database

$db_username = "juniordev";

// mysql password for the database

$db_pass = "Xtra@@24434";

// mysql database name

$db_name = "juniordev";

// Connect to the mysql database

$connect = mysqli_connect("$db_host", "$db_username", "$db_pass") or die("could not connect to mysql");

mysqli_select_db($con,"$db_name") or die("no databse");


?>
