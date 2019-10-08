<?php
include 'database.php';

mysql_connect('localhost','admin','admin');
mysql_select_db('webtek');

$writer = $_POST['writer'];
$comment = $_POST['comment'];
$submit = $_POST['submit'];

if ($submit) {
	if ($writer && $comment) {
		mysql_query("INSERT INTO comments (writer, comment) VALUES ('$writer', '$comment')");
	}
	else {
		echo "Please fill the feilds!";
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="articles.php" method="POST">
								<input type="text" name="writer" placeholder="Name">
								<input type="text" name="comment" maxlength="140" size="100" placeholder="Write your comment..." style="height: 50px">
								<input type="submit" name="submit" value="Comment" style="background: lightblue; height: 30px; width: 80px;">
							</form>
</body>
</html>