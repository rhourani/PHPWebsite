<?php

$username = $_POST['user'];
$password = $_POST['pass'];

$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

mysql_connect('localhost','admin','admin');
mysql_select_db('webtek');

$reasult = mysql_query("SELECT * FROM users where username = '$username' and password = '$password'") or die("Couldn't do the connect!!");
$row = mysql_fetch_array($reasult);

if ($row['username'] == $username && $row['password'] == $password) {
	echo "Login Success!!! Welcome".$row['username'];
} 
else {
	 echo "Failed";
}

?>