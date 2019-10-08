<!DOCTYPE html>
<html>
	<head>
		<title>Üye-Ol</title>
		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

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
	    <link rel="stylesheet" type="text/css" href="Demo-css.css">
	    <script src="Demo(English)-Javascript.js" type="text/javascript"></script>
		<script type="text/javascript" src="Demo(English)-javascript.js"></script>
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
				    	<li><a href="Demo(Turkish).php" target="_blank">
					  		<img src="images/tr.png" width="30px" height="30px">
					  	</a></li>
						<li><a href="../English/Demo(English).php">
					 		<img src="images/en.png" width="30px" height="30px">
						</a></li>
					</ul>
				  
					<ul class="nav navbar-nav  navbar-right pad10">
						<div class="btn-group" >
							<a href="sign-up(Turkish).php" class="btn btn-primary">
							<span class="glyphicon glyphicon-user"></span> Üye-Ol </a>
					 		<a href="log-in(Turkish).php" class="btn btn-success">
							<span class="glyphicon glyphicon-log-in"></span> Giriş </a>
						</div> 
					</ul>
				</div>
			</div>
		</nav>
        <br>
		<div class="container">
			<form name="Sign-up">
				<div class="row">
					<div class="col-md-8 well">
						<img src="images/male.png" class="img-circle img-responsive" width="200px" height="150px">
						<h3> Üye olduğnuzda paylaştığımız haberlere yorum yapabilirsiniz </h3>
                        <div class="row">
							<div class="col-md-5">
								<table>
									<tbody>
                                        <tr>
                                            <td><label><b> Kullanıcı Adı </b></label></td>
                                        </tr>
                                        <tr>
                                            <td><label><b> E-Postanız </b></label></td>
                                        </tr>
                                        <tr>
                                            <td><label><b> Parola </b></label></td>
                                        </tr>
                                        <tr>
                                            <td><label><b> Parolanızı tekrar yazınız </b></label></td>
                                        </tr>
                                    </tbody>
								</table>
							</div>
							<div class="col-md-6">
								<table>
									<tbody>
										<tr>
											<td><input type="text" name="Username" placeholder="Kullanıcı Adı"></td>
										</tr>
										<tr>
											<td><input type="text" name="E-Mail" placeholder="E-Posta"></td>
										</tr>
										<tr>
											<td><input type="Password" name="Password" placeholder="Parola"></td>
										</tr>
										<tr>
											<td><input type="Password" name="Password" placeholder="Parola"></td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<br>
                        
                        
                        
						<input type="submit" onclick="#" value="Üye-Ol"/>
		        		<input type="reset" value="Sıfırla"/>
		        		<input type="button" value="Pencereyi Kapat" onclick="self.close()">
					</div>
				</div>	
			</form>
		</div>
	</body>
</html>