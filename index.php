
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Star Academy</title>

    <!-- Bootstrap -->
     <link href="/template/multi/images/slider/images65T38ENV.jpg" rel="icon" type="image">
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/jquery.bxslider.css">
	<link rel="stylesheet" type="text/css" href="css/isotope.css" media="screen" />	
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
	<link href="css/prettyPhoto.css" rel="stylesheet" />
	<link href="css/style.css" rel="stylesheet" />	
	
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
 
  <body>
	<header>		
		<nav class="navbar navbar-default navbar-static-top" role="navigation">
			<div class="navigation">
				<div class="container">					
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse.collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="navbar-brand">
							<a href="index.php"><h1><span>STAR</span>ACADEMY</h1></a>
						</div>
					</div>
					
					<div class="navbar-collapse collapse">							
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation"><a href="index.php" class="active">Home</a></li>
								<li role="presentation"><a href="application/step_1.php">Application  </a></li>
								<li role="presentation"><a href="#contact-us"  role="button" data-toggle="modal"><span class="glyphicon glyphicon-envelope"></span> Contact Us</a></li>
								<li role="presentation"><a href="#about-us" role="button" data-toggle="modal"><span class="glyphicon glyphicon-folder-open"></span> About Us</a></li>
								<li role="presentation"><a href="#admin" role="button"  data-toggle="modal"><span class="glyphicon glyphicon-log-in"></span> Login</a>
              </li>	
										
							</ul>
						
						</div>
						
					</div>						
				</div>
			</div>	
		</nav>		
	</header>
	<?php 

 include('admin-modal.php'); 
include('aboutus-modal.php');
include('contactus_modal.php');
?>
	<div class="slider">
		<div class="img-responsive">
			<ul class="bxslider">				
				<li><img src="images/1.jpg" alt=""/></li>								
							
			</ul>
		</div>	
    </div>

	</br>
	<footer>
	
		
		<div class="sub-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						&copy; 2019 <a  href="" >Star Academy</a>. All Rights Reserved.
					</div>
                   
					
				</div>
				<div class="pull-right">
					<a href="#home" class="scrollup"><i class="fa fa-angle-up fa-3x"></i></a>
				</div>
			</div>
		</div>		
	</footer>
   
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->	
    <script src="js/jquery-2.1.1.min.js"></script>	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/fancybox/jquery.fancybox.pack.js"></script>
	<script src="js/jquery.easing.1.3.js"></script>
	<script src="js/jquery.bxslider.min.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
	<script src="js/jquery.isotope.min.js"></script> 
	<script src="js/functions.js"></script>
	<script>
	wow = new WOW(
	 {
	
		}	) 
		.init();
	</script>
	
  </body>
</html>