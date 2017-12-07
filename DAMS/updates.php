
<?php

//Start session
session_start();
 
//Check whether the session variable SESS_MEMBER_ID is present or not
if(!isset($_SESSION['username1']) || (trim($_SESSION['username1']) == '')) {
header('location: home.php');
exit();}
$username=$_SESSION['username1'];

$con=mysql_connect("localhost","root") or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db("faculty",$con) or die("Failed to connect to MySQL: " . mysql_error());
$ac=mysql_fetch_array(mysql_query("SELECT access FROM faculty.facdb WHERE username='$username'"));
$image = mysql_fetch_array(mysql_query("SELECT images_path FROM  faculty.facimg where username='$username'"));
if (isset($image['images_path'])  AND !empty($image['images_path']))
{
									$image=$image['images_path'];	
}
$fname=mysql_fetch_array(mysql_query("SELECT f_name FROM faculty.profile WHERE username='$username'"));
								if (isset($fname['f_name'])  AND !empty($fname['f_name']))
									$fname=$fname['f_name'];
								else 
									$fname="First Name";


?>

<div class="update">
				<marquee direction="up" onmouseover="javascript:this.setAttribute('scrollamount','0');" onmouseout="javascript:this.setAttribute('scrollamount','5');">
				 <p>	<?php 
                   $up=mysql_query("select * from notifier order by userid desc");
if(mysql_num_rows($up)>0)
{
    while($row = mysql_fetch_array($up))
      { 
        
echo "<b><legend>".$row['title']."</b></legend>"; 
 ?><font size="2"><?php
 if(!empty($row['filename'])){
?>  <a href="<?php echo "notifiles/".$row['filename'] ?>"> <?php echo $row['text']."</a></font>";
 }else
  echo $row['text']."</font>";
?>                    
                   
					</p> <?php        }
} ?>
				</marquee>
			</div>