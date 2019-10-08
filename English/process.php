<?php
require_once 'database.php';
include 'sign-up.php';
include 'log-in.php';
mysql_connect('localhost','admin','admin');
mysql_select_db('webteken');

$username = $_POST['user'];
$email = $_POST['email'];
$password = $_POST['pass'];
$newUsername = $_POST['newUser'];
$newMail = $_POST['newMail'];
$newPassword = $_POST['newPass'];
$submit = $_POST['submit'];


$reasult = mysql_query("SELECT * FROM users where username = '$username' and password = '$password' and email = '$email'") 
			or die("Couldn't do the connection!!");
$row = mysql_fetch_array($reasult);

if ($row['username'] == $username && $row['password'] == $password && $row['email'] == $email) {
	echo "Login Success!!! Welcome".' '.$row['username'];
} 
else {
	 echo "Failed";
}

if ($submit) {
	if ($newUsername && $newMail && $newPassword) {
		$insert = mysqli_query($connection, "INSERT INTO users (username, email, password, permission) VALUES ('$newUsername', '$newMail', '$newPassword')");
	}
	else {
		echo "Please fill the feilds!";
	}
}


?>