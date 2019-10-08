<?php
require_once 'database.php';
include 'sign-up.php';
mysql_connect('localhost','admin','admin');
mysql_select_db('webteken');

$newUsername = $_POST['newUser'];
$newMail = $_POST['newMail'];
$newPassword = $_POST['newPass'];
$submit = $_POST['submit'];



if ($submit) {
	if ($newUsername && $newMail && $newPassword) {
		$insert = mysqli_query($connection, "INSERT INTO users (username, email, password) VALUES ('$newUsername', '$newMail', '$newPassword')")
		or die("Failed");
		echo "Successed!";
	}
	else {
		echo "Please fill the feilds!";
	}
}

?>