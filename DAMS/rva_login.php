<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>

<html>
<head>
<title>Departmental Affairs Management System</title>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Lato:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script src="js/jquery.min.js"></script>
<!---strat-slider---->
	    <link rel="stylesheet" type="text/css" href="css/slider.css" />
		<script type="text/javascript" src="js/modernizr.custom.28468.js"></script>
		<script type="text/javascript" src="js/jquery.cslider.js"></script>
			<script type="text/javascript">
				$(function() {
				
					$('#da-slider').cslider({
						autoplay	: true,
						bgincrement	: 450
					});
				
				});
			</script>
		<!---//strat-slider---->
<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
<link href="css/magnific-popup.css" rel="stylesheet" type="text/css">
		<script>
			$(document).ready(function() {
				$('.popup-with-zoom-anim').magnificPopup({
					type: 'inline',
					fixedContentPos: false,
					fixedBgPos: true,
					overflowY: 'auto',
					closeBtnInside: true,
					preloader: false,
					midClick: true,
					removalDelay: 300,
					mainClass: 'my-mfp-zoom-in'
			});
		});
		</script>
		
		
		
		<link href="dist/css/bootstrap.min.css" rel="stylesheet">
		<link href="dist/css/styles.css" rel="stylesheet">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href='http://fonts.googleapis.com/css?family=Lato:400,300,600,700,800' rel='stylesheet' type='text/css'>
<script src="js/jquery.min.js"></script>
		
		
		
</head>
<body>
<br/><br/><br/><br/><br/><br/><br/>			
			<div class="clear"></div>
		</div><!-- end header_main4 -->
    		<div class="modal-dialog">
			  <div class="modal-content">
				  <div class="modal-header">
					  <!--<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>-->
					  
					  <div class="form-group">
						  <button type="submit" class="btn btn-primary btn-lg btn-block active">Faculty Login</button>
						  <span class="pull-right"><a href="#"></a></span><span>

						</div>
				  </div>
				  <div class="modal-body">
						
				  <?php
					include 'functions.php';
					if (isset($_GET['id']))
					{
						$id = sanitizeString($_GET['id']);
						if($id==2)
						{	
							echo '<div class="alert alert-danger">
									<strong>Check your username or password!</strong> Something is  wrong.
								</div>';
						}
						else if($id==3)
						{	
							echo '<div class="alert alert-success" role="alert">
									<strong>You are logout successfully!</strong>
								</div>';
						}
					}
					?>

					  <form class="form col-md-12 center-block"  method="post" action="login.php">
						<div class="form-group">
						  <input type="text" name="username" class="form-control input-lg" placeholder="Faculty ID">
						</div>
						<div class="form-group">
						  <input type="password" name="password" class="form-control input-lg" placeholder="Password">
						</div>
						<div class="form-group">
						  <center><button type="submit" class="btn btn-info btn-lg">Sign In</button></center>
						  <span class="pull-right"><a href="#"></a></span><span>

						</div>
					  </form>
				  </div>
				 <div class="modal-footer">

				</div>

			  </div>
			  </div>
		
	</div>
	 <div class="main">
	    <div class="footer">
			<div class="wrap">
				<div class="footer-grid footer-grid1">&nbsp;</div>
				<div class="footer-grid footer-grid2">&nbsp;</div>
				<div class="footer-grid footer-grid3">&nbsp;</div>
				<div class="footer-grid footer-grid4">
					<h4>Contact</h4>
				    <ul>
						<li><i class="pin"> </i><div class="extra-wrap">
							<p>Yeshwantrao Chavan College of Engineering, <br>  Hingna Road, Wanadongri, Nagpur- 441110</p>
						</div></li>
						<li><i class="phone"> </i><div class="extra-wrap">
							<p>+91-7104-242919</p>
						</div></li>
						<li><i class="mail"> </i><div class="extra-wrap1">
							<p>info@ycce.edu</p>
						</div></li>
						<li><i class="earth"> </i><div class="extra-wrap1">
							<p>www.ycce.edu</p>
						</div></li>
					</ul>
				</div>
				<div class="clear"> </div>
			</div>
		</div>
		<div class="footer-bottom">
	 		  <div class="wrap">
	     	  	<div class="copy">
				   <p><a href="http://www.ct.ycce.in" target="_blank">Department of Computer Technology </a></p>
			    </div>
			    <div class="social">	
				   <!--<ul>	
					  <li class="facebook"><a href="#"><span> </span></a></li>
					  <li class="linkedin"><a href="#"><span> </span></a></li>
					  <li class="twitter"><a href="#"><span> </span></a></li>		
				   </ul>-->
			    </div>
			    <div class="clear"></div>
			  </div>
       </div>
	   <!-- script references -->
		<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
		<script src="dist/js/bootstrap.min.js"></script>
</body>
</html>
