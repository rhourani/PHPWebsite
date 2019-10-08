<!DOCTYPE html>
<html>
	<head lang="en-EN">
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title> Demo-EN </title>

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

	<body background="images/blue-leaves.jpg" style=" background-attachment: fixed;">
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#Nav" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<span class="navbar-brand" style="font-weight: bolder;color: white; font-family: 'Georgia','Times New Roman','Arial';">
						<strong> Damascus & Cairo </strong>
					</span>
				</div>
				
				<div class="collapse navbar-collapse" id="Nav">
					<ul class="nav navbar-nav">
						<?php
							$info = mysqli_query($connection, "SELECT * FROM navbar") or die("Failed");
							while ($sonuc = mysqli_fetch_array($info)) 
							{
								echo "<li><a href=".$sonuc["link"]."> ";
								echo $sonuc["title"];
								echo "</a></li>";
							}
						?>
				  	</ul>

				    <ul class="nav navbar-nav navbar-right">
				    	<li><a href="../turkish/Demo(Turkish).php" target="_blank">
					  		<img src="images/tr.png" width="30px" height="30px">
					  	</a></li>
						<li><a href="Demo(English).php">
					 		<img src="images/en.png" width="30px" height="30px">
						</a></li>
					</ul>
				  
					<ul class="nav navbar-nav  navbar-right pad10">
						<div class="btn-group" >
							<a href="#" class="btn btn-primary" id="myBtn1">
							<span class="glyphicon glyphicon-user"></span> Sign up</a> 
					 		<a href="#" class="btn btn-success" id="myBtn">
							<span class="glyphicon glyphicon-log-in"></span> Log in</a>
						</div> 
					</ul>
				</div>
			</div>
		</nav>
