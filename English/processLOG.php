<?php
require_once 'database.php';
include 'log-in.php';
mysql_connect('localhost','admin','admin');
mysql_select_db('webteken');

$username = $_POST['user'];
$email = $_POST['email'];
$password = $_POST['pass'];



$reasult = mysql_query("SELECT * FROM users where username = '$username' and password = '$password' and email = '$email'") 
			or die("Couldn't do the connection!!");
$row = mysql_fetch_array($reasult);

if ($row['username'] == $username && $row['password'] == $password && $row['email'] == $email) {
	echo "Login Success!!! Welcome".' '.$row['username'];
} 
else {
	 echo "Failed";
}


?>