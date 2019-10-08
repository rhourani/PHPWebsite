<?php
include "veritabani.php";
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title> Makaleler </title>

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
						<strong> Şam & Kahire </strong>
					</span>
				</div>
				
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="Nav">
					<ul class="nav navbar-nav">
						<li><a href="Demo(Turkish).php"> Ana Sayfa </a></li>
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
			$makaleler=mysqli_query($baglanti,"SELECT * FROM makaleler");
			while($makale=mysqli_fetch_array($makaleler)){
		?>
			<table class="table">
				<div class="panel panel-info" id="articles">
					<div class="panel-heading">
					<h3 class="panel-title"> <?php echo $makale["baslik"]; ?> </h3>
					</div>
				<div class="media"> 
					<?php if ($makale["id"] == 1) { ?>
						<div class="media-left">
							<a href="Images/United_Arab_Republic.png">
							<img src="Images/United_Arab_Republic.png" alt="Map" width="200px" height="170px"></a>
						</div> <?php } ?>
					<?php if ($makale["id"] == 2) { ?>
						<div class="media-left">
							<a href="Images/1952.jpg"><img src="Images/1952.jpg" alt="photo" width="200px" height="170px"></a>
						</div> <?php } ?>
					<?php if ($makale["id"] == 3) { ?>
						<div class="media-left">
							<a href="Images/Sadat.jpg"><img src="Images/Sadat.jpg" alt="photo" width="200px" height="170px"></a>
						</div> <?php } ?>	
					<div class="media-body">
	  					<p> <?php echo $makale["icerik"]; ?> </p>
                        <div class="panel-body">
							<input type="text" name="comment" size="100" placeholder="Write your comment..." style="height: 50px">
							<input type="submit" name="submit-comment" value="OK" style="background: lightblue; height: 30px; width: 50px;">
						</div>
						<?php } ?>
					</div>
				</div>
			</table>
		</div>
	</body>
</html>