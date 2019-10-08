<?php
include "database.php";

mysql_connect('localhost','admin','admin');
mysql_select_db('webtek');

$writer = $_POST['writer'];
$comment = $_POST['comment'];
$submit = $_POST['submit'];

if ($submit) {
	if ($writer && $comment) {
		$insert = mysqli_query($connection, "INSERT INTO comment (writer, comment) VALUES ('$writer', '$comment')");
		alert("Successed!");
	}
	else {
		echo "Please fill the feilds!";
	}
}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title> ARTICLES </title>

		<!-- Bootstrap -->
	    <link href="css/bootstrap.min.css" rel="stylesheet">
			<!-- Font Awesome CSS -->
		<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css" media="screen">	
		  <!-- ek stiller -->
	    <link href="css/style.css" rel="stylesheet">
	    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	    <script src="js/jquery-2.2.3.min.js"></script>
	    <!-- Include all compiled plugins (below), or include individual files as needed -->
	    <script src="js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>


	    <link rel="stylesheet" type="text/css" href="Demo-CSS.css">
	    <script src="Demo(English)-Javascript.js" type="text/javascript"></script>
	</head>
	<body style="background-image: url(http://wallpaperlayer.com/img/2015/6/blue-leaves-background-8434-8757-hd-wallpapers.jpg); background-attachment: fixed;">
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#Nav" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<span class="navbar-brand" style="font-weight: bolder;color: white;font-family: 'Georgia','Times New Roman';">
						<strong> Damascus & Cairo </strong>
					</span>
				</div>
				
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="Nav">
					<ul class="nav navbar-nav">
						<li><a href="Demo(English).php"> Home </a></li>
				  	</ul>
				 
				    <ul class="nav navbar-nav navbar-right">
				    	<li><a href="../turkish/Demo(Turkish).php" target="_blank">
					  		<img src="images/tr.png" width="30px" height="30px">
					  	</a></li>
						<li><a href="Demo(English).php">
					 		<img src="images/en.png" width="30px" height="30px">
						</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<br>
		<div class="container">
		<?php
			$articles=mysqli_query($connection,"SELECT * FROM articles");
			while($article=mysqli_fetch_array($articles)){
		?>
			<table class="table">
				<div class="panel panel-info" id="articles">
					<div class="panel-heading">
					<h3 class="panel-title"> <?php echo $article["header"]; ?> </h3>
					</div>
				<div class="media"> 
					<?php if ($article["id"] == 1) { ?>
						<div class="media-left">
							<a href="Images/United_Arab_Republic.png">
							<img src="Images/United_Arab_Republic.png" alt="Map" width="200px" height="170px"></a>
						</div> <?php } ?>
					<?php if ($article["id"] == 2) { ?>
						<div class="media-left">
							<a href="Images/1952.jpg"><img src="Images/1952.jpg" alt="photo" width="200px" height="170px"></a>
						</div> <?php } ?>
					<?php if ($article["id"] == 3) { ?>
						<div class="media-left">
							<a href="Images/Sadat.jpg"><img src="Images/Sadat.jpg" alt="photo" width="200px" height="170px"></a>
						</div> <?php } ?>	
					<div class="media-body">
	  					<p> <?php echo $article["content"]; ?> </p>
						<div class="panel-body">
							<form action="articles.php" method="POST">
								<input type="text" name="writer" placeholder="Name"><br>
								<textarea name="comment" placeholder="Write your comment..." style="width:80%;"></textarea>
								<input type="submit" name="submit" value="Comment" style="background: lightblue; height: 30px; width: 80px;">
							</form>
						</div>
						<?php } ?>
					</div>
				</div>
			</table>
		</div>
	</body>
</html>