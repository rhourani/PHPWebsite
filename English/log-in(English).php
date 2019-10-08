<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<title> Log-in page </title>

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
				  
					<ul class="nav navbar-nav  navbar-right pad10">
						<div class="btn-group" >
							<a href="sign-up(English).php" class="btn btn-primary">
							<span class="glyphicon glyphicon-user"></span> Sign up</a>
					 		<a href="log-in(English).php" class="btn btn-success">
							<span class="glyphicon glyphicon-log-in"></span> Log in</a>
						</div> 
					</ul>
				</div>
			</div>
		</nav>
		<br>
		<div class="container">
			<form name="Login">
				<div class="row">
					<div class="col-md-8 well">
						<img src="images/male.png" class="img-circle img-responsive" width="200px" height="150px">
						<h3> Please Enter You Username and Password </h3>
						<div class="row">    
                            <div class="col-md-5">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td><label><b> User Name </b></label></td>
                                        </tr>
                                        <tr>
                                            <td><label><b> Password </b></label></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-md-6">
								<table>
									<tbody>
										<tr>
											<td><input type="text" name="Username" placeholder="User Name"></td>
										</tr>
                                        <tr>
											<td><input type="Password" name="Password" placeholder="Password"></td>
										</tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <br>
						<input type="submit" onclick="#" value="Log-in"/>
		        		<input type="reset" value="Reset"/>
		        		<input type="button" value="Close this window" onclick="self.close()">
		        		<br>
		        		<br>
		        		<div class="row">
		        			<div class="col-md-4">
		        				<div class="alert alert-info">
		        					<a href="#" style="text-decoration: underline;"> Continue as a guest </a>
		        				</div>
		        			</div>
		        			<div class="col-md-4">
		        				<div class="alert alert-danger">
		        					<span class="psw">Forgot <a href="#" style="text-decoration: underline;">password?</a> </span>
		        				</div>
		        			</div>
		        		</div>
					</div>
				</div>
			</form>
		</div>
	</body>
</html>