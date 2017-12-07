<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>

<?php

//Start session
session_start();
 
//Check whether the session variable SESS_MEMBER_ID is present or not
if(!isset($_SESSION['username1']) || (trim($_SESSION['username1']) == '')) {
header('location: rva_login.php');
exit();

}
$username=$_SESSION['username1'];
$con=mysql_connect("localhost","root") or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db("faculty",$con) or die("Failed to connect to MySQL: " . mysql_error());
$ac=mysql_fetch_array(mysql_query("SELECT access FROM faculty.facdb WHERE username='$username'"));
$fname=mysql_fetch_array(mysql_query("SELECT f_name FROM faculty.profile WHERE username='$username'"));
$fname=mysql_fetch_array(mysql_query("SELECT f_name FROM faculty.profile WHERE username='$username'"));
								if (isset($fname['f_name'])  AND !empty($fname['f_name']))
									$fname=$fname['f_name'];
								else 
									$fname="First Name";
$image = mysql_fetch_array(mysql_query("SELECT images_path FROM  faculty.facimg where username='$username'"));
if (isset($image['images_path'])  AND !empty($image['images_path']))
{
									$image=$image['images_path'];	
}
?>

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
		
</head>
<body>
<div class="wrap"> 
	<div class="header-top">
	        <div class="logo">
				<a href="index.php"><img src="images/logo-5.png" alt=""/></a>
			 </div>
			 <img src="images/ycce.png" width="400" height="65" alt=""/>
		     <div class="h_menu4" ><!-- start h_menu4 -->
				<a class="toggleMenu" href="#">Menu</a>
				<ul class="nav" >
					<!--<li class="active"><a href="index.php">Home</a></li>-->
					<!--<li><a href="pages.html">Profile</a>
						<ul>
							<li><a href="pages.html">View</a></li>
							<li><a href="pages.html">Edit</a></li>
						</ul>
					</li>-->
					<li><a href="rva_report3.php">Report Generation</a>
					<li><a href="#">Events</a>
						<ul>
							<li class="active"><a href="">Organized</a></li>
							<li><a href="rva_add_workshop.php">&nbsp;&nbsp;&nbsp;&nbsp;Workshop</a></li>
							<li><a href="rva_add_seminar.php">&nbsp;&nbsp;&nbsp;&nbsp;Seminar</a></li>
							<li><a href="rva_add_fdp.php">&nbsp;&nbsp;&nbsp;&nbsp;FDP</a></li>
							<li><a href="rva_add_sttp.php">&nbsp;&nbsp;&nbsp;&nbsp;STTP</a></li>
							<li><a href="rva_add_indus.php">&nbsp;&nbsp;&nbsp;&nbsp;Industrial Visit</a></li>
							<li><a href="rva_add_guest.php">&nbsp;&nbsp;&nbsp;&nbsp;Guest Lecture</a></li>
							<li class="active"><a href=""><strong>Attended</strong></a></li>
							<li><a href="rva_add_atten_workshop.php">&nbsp;&nbsp;&nbsp;&nbsp;Workshop</a></li>
							<li><a href="rva_add_atten_seminar.php">&nbsp;&nbsp;&nbsp;&nbsp;Seminar</a></li>
							<li><a href="rva_add_atten_fdp.php">&nbsp;&nbsp;&nbsp;&nbsp;FDP</a></li>
							<li><a href="rva_add_atten_sttp.php">&nbsp;&nbsp;&nbsp;&nbsp;STTP</a></li>
						</ul>
					</li>
					<li><a href="#">Awards and Achievements</a>
						<ul>
							<li><a href="rva_add_awards.php">Add</a></li>
							
						</ul>
					</li>
					<li ><a href="#">Publications</a>
						<ul>
							<li><a href="rva_add_publi.php">Add</a></li>
							<li><a href="">Delete/Edit</a></li>
						</ul>
					</li>
			
				
				
				
				
				
				
					
					<?php
					if($ac['access']==1)
					echo '
					<li><a href="#">Admin</a>
						<ul>
							<li><a href="rva_createuser.php">Create User</a></li>
							<li><a href="">Faculty Profile</a></li>
							<li><a href="rva_addsession.php">Add Session</a></li>
						<!--	<li><a href="rva_report3.php">Report</a></li>-->
							<li><a href="rva_notification.php">Send Notification</a></li>
						</ul>
					</li>';
					
					if($ac['access']!=1)
					echo '
					<li>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>';
					?>
					<!--<li><img src="images/trans.png" width="65" height="65" alt=""/></li>-->
					<li><a href="#">  <img src="<?php echo $image;?>" width="65" height="65" alt="" > </a>
						<ul>
						<li class="active"><a href=""><?php echo $fname;?></a></li>
						<li><a href="">Settings</a></li>
						<li><a href="logout.php">Logout</a></li>
						</ul>
					</li>
					<!--<a href="contact.html">Contact</a>-->
				</ul>
				

				<script type="text/javascript" src="js/nav.js"></script>
			</div><!-- end h_menu4 -->
			<!--<div class="h_menu4" id="log_in">
			
					<ul class="nav">
					
						<li><a href="">Settings</a></li>
						<li><a href="logout.php">Logout</a></li>
					</ul>
					
			</div> -->
			

			
			
			
			
			
			<div class="clear"></div>
		</div><!-- end header_main4 -->
        <div class="slider">
				<!---start-da-slider----->
			  <div id="da-slider" class="da-slider">
				  
				  <?php
				  $res=mysqli_query($con, "Select * from notifier order by id desc");
				  
				  while( $row=mysqli_fetch_array($res))
				  {
				  echo '
				  <div class="da-slide">
					<h1>'.$row['title'].'</h1>
					<p>'.$row['text'].'</p>';
					if( !empty( $row['filename']) )
					{
						
						echo ' <a href="notifiles/'.$row['filename'].'" class="da-link">Download</a>';
					}
				  echo '</div>';
				  }
				  ?>
				  <!--<div class="da-slide">
					<h1>nostrud exerci tation ullamcorper</h1>
					<p>dignissim blandit praesent lup.</p>
					<a href="#about" class="da-link">Show More</a>
				  </div>
				  <div class="da-slide">
					<h1>augue duis dolore te feugait</h1>
					<p>quod mazim placerat facer possim.</p>
					<a href="#about" class="da-link">Show More</a>
				  </div>
				  <div class="da-slide">
					<h1>Mirum est notare quam littera</h1>
					<p>parum claram, anteposuerit litterarum.</p>
					<a href="#about" class="da-link">Show More</a>
				  </div>-->	
				  <nav class="da-arrows">
					<span class="da-arrows-prev"></span>
				 	<span class="da-arrows-next"></span>
				  </nav>
			   </div>
 		       <!---//End-da-slider----->
	      </div>
	</div>
	 <div class="main">
	     <div class="wrap">
	 	   <h2 class="m_1">Together, let's make the earth greener.</h2>
	 	     <div class="content-top">
	 	    	<div class="col_1_of_4 span_1_of_4">
	 	    		<i class="settings"> </i>
					<img src="images/pic.jpg" alt=""/>
					<div class="desc">
						<h3>Easily Customizable</h3>
						<p>Customize reports and obtain them in the desired format</p>
					</div>
				</div>
				<div class="col_1_of_4 span_1_of_4">
	 	    		<i class="clock"> </i>
					<img src="images/pic1.jpg" alt=""/>
					<div class="desc">
						<h3>Our Focus</h3>
						<p><ul><li>* Session-wise data management</li><li>* Customized report generation</li><li>* Responsive GUI</li><ul></p>
					</div>
				</div>
				<div class="col_1_of_4 span_1_of_4">
	 	    		<i class="settings"> </i>
					<img src="images/pic2.jpg" alt=""/>
					<div class="desc">
						<h3>Efficient Data Management</h3>
						<p>Quickly store or manipulate data in an easy environment.</p>
					</div>
				</div>
				<div class="clear"></div>
		     </div>
		     <!--<div class="m_3"><span class="left_line"></span> Top Features<span class="right_line"> </span></div>
		      <div class="content-middle">
	 	    	<div class="col_1_of_middle span_1_of_middle">
	 	    		<img src="images/mac_img1.png" alt=""/>
	 	    	</div>
				<div class="col_1_of_middle span_1_of_middle">
				   <h3>diam nonummy nibh euismod tincidunt ut laoreet dolore</h3>
	 	    	   <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie</p>
	 	    	   <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam</p>
	 	    	   <div class="btn"><a href="#">Learn More</a></div>
	 	    	</div>
				<div class="clear"></div>
		     </div>
		     <div class="content-middle-bottom">
	 	    	<div class="col_1_of_middle span_1_of_middle">
	 	    	   <h3>diam nonummy nibh euismod tincidunt ut laoreet dolore</h3>
	 	    	   <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duisautem vel eum iriure dolor in hendrerit in vulputate velit esse molestie</p>
	 	    	   <div class="btn"><a href="#">Learn More</a></div>
	 	    	</div>
				<div class="col_1_of_middle span_1_of_middle">
					<ul class="progress vertical">
					  <li class="bar bar-success" style="width:100%;height:70%;"> </li>
					</ul>
					<ul class="progress vertical">
					  <li class="bar bar-success" style="width:100%;height:60%;"> </li>
				    </ul>
				    <ul class="progress vertical">
					  <li class="bar bar-success" style="width:100%;height:20%;"> </li>
				    </ul>
				    <ul class="progress vertical">
					  <li class="bar bar-success" style="width:100%;height:40%;"> </li>
				    </ul>
				    <ul class="progress vertical">
					  <li class="bar bar-success" style="width:100%;height:10%;"> </li>
				    </ul>
			    </div>
				<div class="clear"></div>
		     </div>-->
		     <!--<div class="m_3"><span class="left_line"></span> Gallery<span class="right_line"> </span></div>
		      <div class="content-top">
				 <div class="col_1_of_projects span_1_of_projects"><a href="#">
				   <div class="view view-first">
                    <img src="images/pic3.jpg" alt=""/>
                      <div class="mask">
                        <h2>Hover Style #1</h2>
                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                         <a class="popup-with-zoom-anim" href="#small-dialog3"> <div class="info">Read More</div></a>
		                     <div id="small-dialog3" class="mfp-hide">
							   <div class="pop_up2">
							   	  <img src="images/pic3.jpg"/ alt=""/>
							   	  <h3 class="m_4"><a href="#">augue duis dolore te feugait</a></h3>
				                  <p class="m_5">Photography</p>
							   </div>
							 </div>
                        </div>
                     </div> 
					<h3 class="m_4"><a href="#">augue duis dolore te feugait</a></h3>
				    <p class="m_5">Photography</p>
				  </a> </div>
				 <div class="col_1_of_projects span_1_of_projects"><a href="#">
				   <div class="view view-first">
                    <img src="images/pic6.jpg" alt=""/>
                      <div class="mask">
                        <h2>Hover Style #1</h2>
                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                         <a class="popup-with-zoom-anim" href="#small-dialog4"> <div class="info">Read More</div></a>
		                     <div id="small-dialog4" class="mfp-hide">
							   <div class="pop_up2">
							   	  <img src="images/pic6.jpg"/ alt=""/>
							   	   <h3 class="m_4"><a href="#">augue duis dolore te feugait</a></h3>
				    				<p class="m_5">Branding</p>
							   </div>
							 </div>
                        </div>
                     </div> 
					<h3 class="m_4"><a href="#">augue duis dolore te feugait</a></h3>
				    <p class="m_5">Branding</p>
				  </a> </div>
				 <div class="col_1_of_projects span_1_of_projects"><a href="#">
				   <div class="view view-first">
                    <img src="images/pic5.jpg" alt=""/>
                      <div class="mask">
                        <h2>Hover Style #1</h2>
                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                         <a class="popup-with-zoom-anim" href="#small-dialog5"> <div class="info">Read More</div></a>
		                     <div id="small-dialog5" class="mfp-hide">
							   <div class="pop_up2">
							   	  <img src="images/pic5.jpg"/ alt=""/>
							   	   <h3 class="m_4"><a href="#">augue duis dolore te feugait</a></h3>
				    			   <p class="m_5">Web Design</p>
							   </div>
							 </div>
                        </div>
                     </div> 
					<h3 class="m_4"><a href="#">augue duis dolore te feugait</a></h3>
				    <p class="m_5">Web Design</p>
				  </a> </div>
				 <div class="col_1_of_projects span_1_of_projects"><a href="#">
				   <div class="view view-first">
                    <img src="images/pic4.jpg" alt=""/>
                      <div class="mask">
                        <h2>Hover Style #1</h2>
                        <p>A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.</p>
                         <a class="popup-with-zoom-anim" href="#small-dialog6"> <div class="info">Read More</div></a>
		                     <div id="small-dialog6" class="mfp-hide">
							   <div class="pop_up2">
							   	  <img src="images/pic4.jpg"/ alt=""/>
							   	   <h3 class="m_4"><a href="#">augue duis dolore te feugait</a></h3>
				    				<p class="m_5">Marketing</p>
							   </div>
							 </div>
                        </div>
                     </div> 
					<h3 class="m_4"><a href="#">augue duis dolore te feugait</a></h3>
				    <p class="m_5">Marketing</p>
				  </a> </div>
				<div class="clear"></div>
		 </div>-->
		 <div class="m_3"><span class="left_line"></span>Departmental Affairs Management System<span class="right_line"> </span></div>
		      <div class="wmuSlider example">
			    <div class="wmuSliderWrapper">
				   <article style="position: absolute; width: 100%; opacity: 0;"> 
				   	   <div class="banner-text">
						  <p>Departmental Affairs Management System is designed to minimize and manage all the paper work that is to be done in department by faculty as well as students.It provides you a automated mechanism like report generation and faculty profile management at single server.</p>
					   </div>
					   <h3 class="m_6">About Departmental Affairs Management System <span class="bg1"></span></h3>
				   </article>
				   <article style="position: relative; width: 100%; opacity: 1;"> 
				   	   <div class="banner-text">
						  <p>Mission of the Department is to prepare competent need based Computer Engineers in particular and responsible citizens for engineering profession in general. Department takes sustained and continued efforts to educate undergraduates for professional and software development jobs, post-graduate students for academic /R&D assignments, encourage the students to conduct research while interacting and collaborating with industry and research institutions of National and International eminence, design and develop projects to solve real life problems.</p>
					   </div>
					   <h3 class="m_6">Computer Technology Department<span class="bg1"></span></h3>
				   </article>
				   <article style="position: absolute; width: 100%; opacity: 0;">
				       <div class="banner-text">
						  <p>The Department offers post-graduate programmes, M. Tech. (CSE), M.E. (by research) and Ph.D. The curricula of programmes have been designed to cater to the ever changing needs and demands of IT industry with a proper blend of professional core and industry aligned electives.</p>
					   </div>
					    <h3 class="m_6">Computer Technology Department <span class="bg1"></span></h3>
				   </article>
				   <article style="position: absolute; width: 100%; opacity: 0;">
				        <div class="banner-text">
						  <p>Yeshwantrao Chavan College of Engineering (YCCE) is established in 1984 by Nagar Yuwak Shikshan Sanstha, Nagpur. It is affiliated to Rashtrasant Tukadoji Maharaj Nagpur University, Nagpur. YCCE is renowned for engineering education and research. For over 32 years, it has successfully nurtured young engineering professionals, becoming a sought after destination for students aspiring to higher technical education and placement in the competitive software and core industry. </p>
					   </div>
					    <h3 class="m_6">Y.C.C.E, <span class="bg1">Nagpur</span></h3>
				   </article>
				  </div>
                 <ul class="wmuSliderPagination">
                	<li><a href="#" class="">0</a></li>
                	<li><a href="#" class="class="wmuActive"">1</a></li>
                	<li><a href="#" >2</a></li>
                	<li><a href="#">3</a></li>
                </ul>
              </div>
                 <script src="js/jquery.wmuSlider.js"></script> 
				   <script>
       					$('.example').wmuSlider();         
   				   </script> 	
			</div>
	    </div>
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
</body>
</html>