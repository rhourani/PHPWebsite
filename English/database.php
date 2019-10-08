<?php

$user = 'admin';
$password = 'admin';
$database = 'webteken';
$connection = mysqli_connect('localhost',$user,$password) or die('We couldn\'t connect to the database');

mysqli_connect('localhost',$user,$password) or die('We couldn\'t connect to the database');
mysqli_select_db($connection, $database) or die("Failed");

?>