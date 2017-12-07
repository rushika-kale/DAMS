<!DOCTYPE html>

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
$editor=0;
if(isset($_GET['title']) AND !empty($_GET['title'])AND isset($_GET['user']) AND !empty($_GET['user']))
{
    if($_GET['user']==$username)
    {
        $title=$_GET['title'];
        $editor=1;
        
        $table=$_GET['type'];        
        $request=mysql_query( "SELECT * from $table where username='$username'&& pubname='$title'");
        $row=mysql_fetch_array($request);
    }
    else
    header('location: error.php');
}
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

//session_start(); /// initialize session
//function check_logged(){
     //global $_SESSION,$username;
    // if (!array_key_exists($_SESSION["logged"],$username)) {
      //    header('Location: data.html');
  //   };
//}; check_logged(); /// function checks if visitor is logged.
?> 
<html>
	<head>
	
		<link href="css/layout1.css" rel="stylesheet" type="text/css" />
		<link href="css/boot-tag.css" rel="stylesheet" type="text/css" />
		<link href="css/menu.css" rel="stylesheet" type="text/css" />
		<link href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css" rel="stylesheet" type="text/css" />
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="https://code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
        
        
 	
        <script src="js/short.js" type="text/javascript"></script>
		
		<script src="js/jquery.easing.min.js" type="text/javascript"></script>
		
		<script src="js/tabcontent.js" type="text/javascript"></script>
		<script src="js/tabcontent1.js" type="text/javascript"></script>
		<script src="js/tinybox.js" type="text/javascript"></script>
		<script src="js/boot-tag.js" type="text/javascript"></script>    
        


<style>
/* font*/


</style>

		
		
	
		<script>
		var room = 0;
function add_fields() {
   if(room<5){  room++;
	var anchor="'anchor";
	var xx="xx'";
	var date="'date";
	var da="'yyyy/MM/dd'";
    var objTo = document.getElementById('room_fileds')
    var divtest = document.createElement("div");
    divtest.innerHTML = '<label>Author' + room +':</label><div class="content">Name of Author: <input type="text"name="s'+room+'name" data-validate="required" class="size3"  /><br/>Institute Name: <input type="text"name="s'+room+'institute" class="size3" value="" /><br/>Contact No.:<input type="text" name="s'+room+'contact" data-validate="phone" placeholder="Number"><br/>';
        objTo.appendChild(divtest)
}}
		</script>
		<title>E-Resource Support System</title>
	</head>
	<body>
		<header>
		</header>
		<div class="container">
			<script type="text/javascript">
								ajaxinclude("qlink.php");
							</script>
		</div>
		<div class="frame">
		    	<script type="text/javascript">
								ajaxinclude("updates.php");
							</script>
		
		</div>
        <div class="frame">
				<div class="data">
			<div id="style1">
			<center>Add Publications
				</center>
                <?php
                if($editor==1){
                if(mysql_num_rows($request)==0)
                {echo '<center><label>There is No Such data. You will be redirected to make new Entry Below</label></center>';
                header( "refresh:3;url=addpub.php" );} }?></div>
			<?php
	$con=mysql_connect("localhost","root") or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db("faculty",$con) or die("Failed to connect to MySQL: " . mysql_error());	
$username=$_SESSION['username1'];	
			$result = mysql_query("SELECT * FROM workshop WHERE username='$username'");
			?>
		<form  class="form" action="insertpub.php"  method="post">
							<ul id="progressbar">
		<li class="active">Publication</li>
		<li>Publication Details</li>
		<li>Abstract</li>
		<li>Author's Details</li>
		</ul>				
					<fieldset>
                    <table>
                    <tr>
                    
                    <?php if($editor==1)
				
                    /*echo '<td><input type="text" name="research" data-validate="alpha" placeholder="'.$row['research'].'" class="size3" /></td>';
                    else
                    echo '<td><input type="text" name="research"data-validate="alpha" class="size3" /></td>'*/ ?>
                    </tr>
                    <tr>
                    <td><label>Area of Research:</label></td>
                    <?php 
                
                    echo '<td><select name="research">';
                        
                    echo '
					<option value="">Select Area</option>
					<option value="cn">CN</option>
					<option value="cvsc">CVSC</option>
					<option value="dm">DM</option>
					<option value="lp">LP</option>
					<option value="others">OTHERS</option>';
					
                     
                    echo '</select></td>';
                   
                    
				
                     ?>
                    </tr>
					
					
					
					<tr>
                    <td><label>Academic Year of Publication:</label></td>
                    <?php if($editor==1){
                    $row1=$row['pyear']+1;
                    echo '<td><select name="pyear" class="size3" data-validate="required" >
                    <option value="'.$row['pyear'].'">'.$row['pyear'].'-'.$row1.'</option>';
                    $i=0;
                    $year=2010;
                    
                    for($i=0;$i<6;$i++)
                    {
                        $year1=$year+1;
                        echo '<option value="'.$year.'">'.$year.'-'.$year1.'</option>';
                        $year=$year+1;
                    }
                    echo '</select></td>';}
                     else{
                     echo '<td><select name="pyear" class="size3" data-validate="required" >';
                     $i=0;
                    $year=2010;
                    
                    for($i=0;$i<6;$i++)
                    {
                        $year1=$year+1;
                        echo '<option value="'.$year.'">'.$year.'-'.$year1.'</option>';
                        $year=$year+1;
                    }
                    echo '</select></td>';} ?>
                    </tr>
					
					
					
					
                    <tr><td>
                    <label>Title:</label></td>
                    <?php 
                    if($editor==1){
                    ECHO '<td><input type="text" class="size9" name="pubname" data-validate="alphaNumeric" value="'.$row['pubname'].'" placeholder="'.$row['pubname'].'"></td>';}
                    else
                     ECHO '<td><input type="text" class="size3" name="pubname" data-validate="alphaNumeric,required" placeholder="Title"></td>'?>
                   </tr>

      
        
 <tr><td>  <label for="db">Type</label></td>
    <?php
    if($editor==1)
    {
        echo '<td><label>'.$row['type'].'</label></td>
        <td><select name="dbType" id="dbType" readonly>
  
   <option value="'.$row['type'].'"></option>
   
   
   
</select></td>';
    }
    else
echo '<td><select name="dbType" id="dbType" required>
   <option>Choose Publication Type</option>
   <option value="journal">Journal</option>
   <option value="conference">Conference</option>
   <option value="thesis">Thesis</option>
   <option value="dataset">Data Set</option>
   <option value="book">Book</option>
   <option value="bookchapter">Book Chapter</option>
   <option value="patent">Patent</option>
   <option value="copyright">Copyright</option>
   <option value="report">Report</option>
   
   
   
</select></td>'; ?>

 <script>


   $('#dbType').change(function(){
   selection = $(this).val();    
   switch(selection)
   { 
       case 'journal':
           $('#journal').show();
           $('#conference').hide();
           $('#thesis').hide();
           $('#book').hide();
           $('#bookchapter').hide();
           $('#report').hide();
           $('#dataset').hide();
           $('#patent').hide();
           $('#copyright').hide();
           break;
       case 'conference':
           $('#journal').hide();
           $('#conference').show();
           $('#thesis').hide();
           $('#book').hide();
           $('#bookchapter').hide();
           $('#report').hide();
           $('#dataset').hide();
           $('#patent').hide();
           $('#copyright').hide();
           break;
       case 'thesis':
           $('#journal').hide();
           $('#conference').hide();
           $('#thesis').show();
           $('#book').hide();
           $('#bookchapter').hide();
           $('#report').hide();
           $('#dataset').hide();
           $('#patent').hide();
           $('#copyright').hide();           
           break;
       case 'dataset':
           $('#journal').hide();
           $('#conference').hide();
           $('#thesis').hide();
           $('#book').hide();
           $('#bookchapter').hide();
           $('#report').hide();
           $('#dataset').show();
           $('#patent').hide();
           $('#copyright').hide();           
           break; 
       case 'book':
           $('#journal').hide();
           $('#conference').hide();
           $('#thesis').hide();
           $('#book').show();
           $('#bookchapter').hide();
           $('#report').hide();
           $('#dataset').hide();
           $('#patent').hide();
           $('#copyright').hide();
           break;
       case 'bookchapter':
           $('#journal').hide();
           $('#conference').hide();
           $('#thesis').hide();
           $('#book').hide();
           $('#bookchapter').show();
           $('#report').hide();
           $('#dataset').hide();
           $('#patent').hide();
           $('#copyright').hide();
           break;
       case 'patent':
           $('#journal').hide();
           $('#conference').hide();
           $('#thesis').hide();
           $('#book').hide();
           $('#bookchapter').hide();
           $('#report').hide();
           $('#dataset').hide();
           $('#patent').show();
           $('#copyright').hide();
           break;
       case 'copyright':
           $('#journal').hide();
           $('#conference').hide();
           $('#thesis').hide();
           $('#book').hide();
           $('#bookchapter').hide();
           $('#report').hide();
           $('#dataset').hide();
           $('#patent').hide();
           $('#copyright').show();
           break;
       case 'report':
       
           $('#journal').hide();
           $('#conference').hide();
           $('#thesis').hide();
           $('#book').hide();
           $('#bookchapter').hide();
           $('#report').show();
           $('#dataset').hide();
           $('#patent').hide();
           $('#copyright').hide();
           break;    
       
           default:   
           $('#def').show();
           $('#journal').hiide();
           $('#conference').hide();
           $('#thesis').hide();
           $('#book').hide();
           $('#bookchapter').hide();
           $('#report').hide();
           $('#dataset').hide();
           $('#patent').hide();
           $('#copyright').hide();
          
           break;
   }
});
</script></tr>
</table>

						</font><input type="button" name="next" class="next action-button" value="Next" />
</fieldset>
<fieldset>
<!--Journal-->
<?PHP 
 if($editor==1)
 {
    if($row['type']=="Journal")
    {
     echo '<div id="journal">
        <table><tr><td><label>Journal:</label></td><td>
        <select class="size1" name="jtype">
            <option value="ij">IJ</option>
            <option value="nj">NJ</option>
        </select></td>
        </tr>
        <tr><td>
        <label>Journal Name:</label></td><td>
        <input type="text" name="jname" class="size3" data-validate="alphaNumeric" value="'.$row['jname'].'" placeholder="'.$row['jname'].'"/></td></tr>
        <tr><td><label>Publisher:</label></td><td>
        <input type="text" name="jpublisher" class="size3" data-validate="alphaNumeric" placeholder="'.$row['jpublisher'].'"/></td></tr>
        <tr><td><label>Refered:</label></td><td>
        Yes<input type="radio" name="reference" value="yes" default/>
        No<input type="radio" name="reference" value="no"/></td></tr>
        <tr><td><label>Impact Factor:</label></td>
        <td><input type="text" name="jimpact"data-validate="number" class="size1" placeholder="'.$row['jimpact'].'"  /></td></tr>
        <tr><td><label> Volume:</label></td><td>
        <input type="text" name="jvolume" data-validate="number" class="size1"placeholder="'.$row['jvolume'].'" /></td></tr>
        <tr><td><label>Issue:</label></td>
        <td><input  type="text" name="jissue"data-validate="number" class="size1" placeholder="'.$row['jissue'].'"/></td></tr>
        <tr><td><label>Pages:</label></td>
        <td><input type="text" name="jpage"data-validate="alphaNumeric" class="size1" placeholder="'.$row['jpage'].'"/></td></tr><tr><td>
        Paid<input type="radio" name="jmoney" value="paid" /></td><td>
        Free<input type="radio" name="jmoney" value="free" /></td></tr>
        <tr><td><label>DOI:</label></td><td>
        <input type="text" name="jdoi" class="size1"data-validate="alphaNumeric" placeholder="'.$row['jdoi'].'"/></td></tr>
      </table>
</div>'; 
    }
    if($row['type']=="conference")
    {
     echo '<div id="conference" >
    <label>Conference:</label>
    <select class="size1" name="ctype">
        <option value="ic">IC</option>
        <option value="nc">NC</option>
    </select><br />
    
    <label>Conference Name:</label>
    <input type="text" name="cname" class="size3"data-validate="alphaNumeric" placeholder="'.$row['cname'].'"/><br />
    <label>Organiser:</label>
    <input type="text" name="corganiser"data-validate="alphaNumeric" class="size3"placeholder="'.$row['corganiser'].'"/><br />
    <label>Location:</label>
    <input type="text" name="clocation"data-validate="alphaNumeric" class="size3"placeholder="'.$row['clocation'].'"/><br />
    <label> Volume:</label>
    <input type="text" name="cvolume"data-validate="number" class="size1"placeholder="'.$row['cvolume'].'" /><br />
    <label>Issue:</label>
    <input  type="text" name="cissue"data-validate="number" class="size1"placeholder="'.$row['cissue'].'"/><br />
    <label>Pages:</label>
    <input type="text" name="cpage"data-validate="alphaNumeric" class="size1" placeholder="'.$row['cpage'].'" /><br />
    Paid<input type="radio" name="cmoney" value="paid" />
    Free<input type="radio" name="cmoney" value="free" /><br />
    <label>DOI:</label>
    <input type="text" name="cdoi"data-validate="alphaNumeric" class="size1"placeholder="'.$row['cdoi'].'"/><br /><!--Certificate remaining-->
</div>';   
    }
    if($row['type']=="thesis")
    {
        echo '<div id="Thesis" >
    <table>
        <tr>
        <td><label>Title:</label></td><td><input type="text" name="ttitle"data-validate="alphaNumeric" class="size2" placeholder="'.$row['ttitle'].'"/></td>
        </tr>
        <tr>
            <td><label>Degree:</label></td><td><input type="text"data-validate="alphaNumeric" name="tdegree" class="size2" placeholder="'.$row['tdegree'].'"/></td>
        </tr>
        <tr>
            <td><label>Affiliation:</label></td><td><input type="text"data-validate="alphaNumeric" class="size2" name="taffiliate" placeholder="'.$row['taffiliate'].'"/></td>
        </tr>
        <tr>
        <td><label>Guide:</label></td><td><input type="text"data-validate="alphaNumeric" name="tguide" class="size2"placeholder="'.$row['tguide'].'"/></td>
        </tr>
        <tr>
            <td><label>Co-guide</label></td><td><input type="text"data-validate="alphaNumeric" name="tcguide" class="size2"placeholder="'.$row['tcguide'].'"/></td>
        </tr>
        <tr>
        <td><label>DOI:</label></td><td><input type="text" name="tdoi"data-validate="alphaNumeric" class="size1" placeholder="'.$row['tdoi'].'"/></td>
        </tr>
    </table>
</div><!--end of thesis-->';
    }
    if($row['type']=="book")
    {
        echo '<div id="book">
    <table>
        <tr>
            <td><label>Publisher:</label></td><td><input type="text" data-validate="alphaNumeric" name="bpublisher" class="size2" placeholder="'.$row['bpublisher'].'"/></td>
        </tr>
        <tr>
            <td><label>Editor:</label></td><td><input type="text" data-validate="alphaNumeric" name="beditor" class="size2"placeholder="'.$row['beditor'].'" /></td>
        </tr>
        <tr>
            <td><label>Edition:</label></td><td><input type="text" data-validate="alphaNumeric" name="bedition" class="size2" placeholder="'.$row['bedition'].'"/></td>
        </tr>
        <tr>
            <td><label>ISBN:</label></td><td><input type="text"data-validate="alphaNumeric" name="bisbn" class="size2"placeholder="'.$row['bisbn'].'" /></td>
        </tr>
        <tr>
            <td><label>Topic(s):</label></td><td><input type="text" data-validate="alphaNumeric" name="btopic"  class="size2"placeholder="'.$row['btopic'].'"/></td>
        </tr>
        <tr>
            <td><label>DOI:</label></td><td><input type="text" name="bdoi"data-validate="alphaNumeric" class="size2" placeholder="'.$row['bdoi'].'"/></td>
        </tr>
    </table>
</div><!--end of book-->
';
    }
    if($row['type']=="bookchapter")
    {
        echo '<div id="bookchapter">
    <table>
        <tr>
            <td><label>Chapter Name:</label></td><td><input type="text" data-validate="alphaNumeric" name="bcchaptername" placeholder="'.$row['bcchaptername'].'" class="size2"/></td>
        </tr>
        <tr>
            <td><label>Pages:</label></td><td><input type="text" data-validate="alphaNumeric" name="bcpages"  class="size2"placeholder="'.$row['bcpages'].'"/></td>
        </tr>
        <tr>
            <td><label>Book Title:</label></td><td><input type="text" data-validate="alphaNumeric" name="bcbooktitle"  class="size2"placeholder="'.$row['bcbooktitle'].'"/></td>
        </tr>
        <tr>
            <td><label>Editor(s):</label></td><td><input type="text" data-validate="alphaNumeric" name="bceditor"  class="size2"placeholder="'.$row['bceditor'].'"/></td>
        </tr>
        <tr>
            <td><label>Publisher:</label></td><td><input type="text" data-validate="alphaNumeric" name="bcpublisher"  class="size2"placeholder="'.$row['bcpublisher'].'"/></td>
        </tr>
        <tr>
            <td><label>Edition:</label></td><td><input type="text" data-validate="alphaNumeric" name="bcedition"  class="size2"placeholder="'.$row['bcedition'].'"/></td>
        </tr>
        <tr>
            <td><label>ISBN:</label></td><td><input type="text" data-validate="alphaNumeric"  name="bcisbn"  class="size2"placeholder="'.$row['bcisbn'].'"/></td>
        </tr>
        <tr>
            <td><label>Topic:</label></td><td><input type="text" data-validate="alphaNumeric" name="bctopic"  class="size2"placeholder="'.$row['bctopic'].'"/></td>
        </tr>
        <tr>
            <td><label>DOI:</label></td><td><input type="text" data-validate="alphaNumeric" name="bcdoi"  class="size2"placeholder="'.$row['bcdoi'].'"/></td>
        </tr>
    </table>
</div><!--end of book chapter-->
';
    }
    if($row['type']==="report")
    {
        echo '<div id="report">
    <table>
        <tr>
        <td><label>Report Number:</label></td><td><input type="text" name="rnumber" data-validate="number" class="size2"placeholder="'.$row['rnumber'].'" /></td>
        </tr>
        <tr>
            <td><label>Affiliation:</label></td><td><input type="text" name="raffiliate" data-validate="alphaNumeric" class="size2"placeholder="'.$row['raffiliate'].'" /></td>
        </tr>
        <tr>
            <td><label>Topics:</label></td><td><input type="text" class="size2" data-validate="alphaNumeric" name="rtopic"placeholder="'.$row['rtopic'].'" /></td>
        </tr>
    </table>
</div><!--end of report-->';
    }
    if($row['type']==="dataset")
    {
        echo '<div id="dataset" >
    <table>
        <tr>
            <td><label>Topic:</label></td><td><input type="text" data-validate="alphaNumeric" name="dtopic"  class="size2"placeholder="'.$row['dtopic'].'"/></td>
        </tr>
        <tr>
            <td><label>DOI:</label></td><td><input type="text" data-validate="alphaNumeric" name="ddoi" placeholder="'.$row['ddoi'].'" class="size2"/></td>
        </tr>
    </table>
</div><!--end of dataset-->';
    }
    if($row['type']==="patent")
    {
        echo '<div id="patent" >
    <table>
        <tr>
            <td><label>Reference Number:</label></td><td><input type="text" data-validate="number" name="pref" placeholder="'.$row['pref'].'" class="size2"/></td>
        </tr>
        <tr>
            <td><label>Topic:</label></td><td><input type="text"  name="ptopic"data-validate="alphaNumeric" placeholder="'.$row['ptopic'].'" class="size2"/></td>
        </tr>
        <tr>
            <td><label>DOI:</label></td><td><input type="text"data-validate="alphaNumeric"  name="pdoi" placeholder="'.$row['pdoi'].'" class="size2"/></td>
        </tr> 
    </table>
</div><!--end of patent-->';
    }
    if($row['type']==="copyright")
    {
        echo '<div id="copyright" >
    <table>
        <tr>
            <td><label>Diary Number:</label></td><td><input type="text" data-validate="number" name="crdiary"placeholder="'.$row['crdiary'].'"  class="size2"/></td>
        </tr>
        <tr>
            <td><label>Copyright Number:</label></td><td><input type="text" data-validate="number" name="crcopyright" placeholder="'.$row['crcopyright'].'" class="size2"/></td>
        </tr>
        <tr>
            <td><label>Topic:</label></td><td><input type="text"  name="crtopic" data-validate="alphaNumeric" placeholder="'.$row['crtopic'].'" class="size2"/></td>
        </tr>
        <tr>
            <td><label>DOI:</label></td><td><input type="text" data-validate="alphaNumeric" name="crdoi" placeholder="'.$row['crdoi'].'" class="size2"/></td>
        </tr>
    </table>
</div><!--end of copyright-->';
    }
    
 } else{
 ?>
  <div id="def" style="display:none;" >
  <label>Please Select Publication Type properly</label>
  </div>
<div id="journal" style="display:none;" >
    <table><tr><td><label>Journal:</label></td><td>
    <select class="size1" name="jtype">
        <option value="ij">IJ</option>
        <option value="nj">NJ</option>
    </select></td>
    </tr>
    <tr><td>
    <label>Journal Name:</label></td><td>
    
    <input type="text" name="jname" class="size3" data-validate="alphaNumeric,required" placeholder="Journal Name"/></td></tr>
    <tr><td><label>Publisher:</label></td><td>
    <input type="text" name="jpublsiher"data-validate="alphaNumeric" class="size3"/></td></tr>
    <tr><td><label>Refered:</label></td><td>
     Yes<input type="radio" name="reference" value="yes" />
     No<input type="radio" name="reference" value="no"/></td></tr>
    <tr><td><label>Impact Factor:</label></td>
    <td><input type="text" name="jimpact"data-validate="decimal" class="size1"  /></td></tr>
    <tr><td><label> Volume:</label></td><td>
    <input type="text" name="jvolume"data-validate="number" class="size1" /></td></tr>
    <tr><td><label>Issue:</label></td>
    <td><input  type="text" name="jissue" data-validate="number" class="size1"/></td></tr>
    <tr><td><label>Pages:</label></td>
    <td><input type="text" name="jpage" class="size1" data-validate="alphaNumeric"/></td></tr><tr><td>
    Paid<input type="radio" name="jmoney" value="paid" /></td><td>
    Free<input type="radio" name="jmoney" value="free" /></td></tr>
    <tr><td><label>DOI:</label></td><td>
    <input type="text" name="jdoi" class="size1"/></td></tr>
      </table>
</div>

<!--Conference-->
<div id="conference" style="display:none;">
    <label>Conference:</label>
    <select class="size1" name="ctype">
        <option value="ic">IC</option>
        <option value="nc">NC</option>
    </select><br />
    
    <label>Conference Name:</label>
    <input type="text" name="cname" class="size3"data-validate="alphaNumeric,required" placeholder="Conference Name"/><br />
    <label>Organiser:</label>
    <input type="text" name="corganiser"data-validate="alphaNumeric" class="size3"/><br />
    <label>Location:</label>
    <input type="text" name="clocation"data-validate="alphaNumeric" class="size3"/><br />
    <label> Volume:</label>
    <input type="text" name="cvolume"data-validate="number" class="size1" /><br />
    <label>Issue:</label>
    <input  type="text" name="cissue"data-validate="number" class="size1"/><br />
    <label>Pages:</label>
    <input type="text" name="cpage"data-validate="alphaNumeric" class="size1" /><br />
    Paid<input type="radio" name="cmoney" value="paid" />
    Free<input type="radio" name="cmoney" value="free" /><br />
    <label>DOI:</label>
    <input type="text" name="cdoi" class="size1"data-validate="alphaNumeric"/><br /><!--Certificate remaining-->
</div>

<!--Thesis-->
<div id="Thesis" style="display: none;">
    <table>
        <tr>
        <td><label>Title:</label></td><td><input type="text"data-validate="alphaNumeric,required" name="ttitle" class="size2" /></td>
        </tr>
        <tr>
            <td><label>Degree:</label></td><td><input type="text"data-validate="alphaNumeric" name="tdegree" class="size2" /></td>
        </tr>
        <tr>
            <td><label>Affiliation:</label></td><td><input type="text"data-validate="alphaNumeric" class="size2" name="taffiliate" /></td>
        </tr>
        <tr>
        <td><label>Guide:</label></td><td><input type="text"data-validate="alphaNumeric" name="tguide" class="size2"/></td>
        </tr>
        <tr>
            <td><label>Co-guide</label></td><td><input type="text"data-validate="alphaNumeric" name="tcguide" class="size2"/></td>
        </tr>
        <tr>
        <td><label>DOI:</label></td><td><input type="text"data-validate="alphaNumeric" name="tdoi" class="size1" /></td>
        </tr>
    </table>
</div><!--end of thesis-->

<!--Book-->
<div id="book" style="display: none;">
    <table>
        <tr>
            <td><label>Publisher:</label></td><td><input type="text"data-validate="alphaNumeric,required" name="bpublisher" class="size2" /></td>
        </tr>
        <tr>
            <td><label>Editor:</label></td><td><input type="text"data-validate="alphaNumeric" name="beditor" class="size2" /></td>
        </tr>
        <tr>
            <td><label>Edition:</label></td><td><input type="text"data-validate="alphaNumeric" name="bedition" class="size2" /></td>
        </tr>
        <tr>
            <td><label>ISBN:</label></td><td><input type="text"data-validate="alphaNumeric" name="bisbn" class="size2" /></td>
        </tr>
        <tr>
            <td><label>Topic(s):</label></td><td><input type="text"data-validate="alphaNumeric"  name="btopic"  class="size2"/></td>
        </tr>
        <tr>
            <td><label>DOI:</label></td><td><input type="text"data-validate="alphaNumeric" name="bdoi" class="size2" /></td>
        </tr>
    </table>
</div><!--end of book-->

<!-- Book Chapter-->
<div id="bookchapter" style="display: none;">
    <table>
        <tr>
            <td><label>Chapter Name:</label></td><td><input type="text"data-validate="alphaNumeric,required"  name="bcchaptername"  class="size2"/></td>
        </tr>
        <tr>
            <td><label>Pages:</label></td><td><input type="text" data-validate="alphaNumeric" name="bcpages"  class="size2"/></td>
        </tr>
        <tr>
            <td><label>Book Title:</label></td><td><input type="text" data-validate="alphaNumeric" name="bcbooktitle"  class="size2"/></td>
        </tr>
        <tr>
            <td><label>Editor(s):</label></td><td><input type="text" data-validate="alphaNumeric" name="bceditor"  class="size2"/></td>
        </tr>
        <tr>
            <td><label>Publisher:</label></td><td><input type="text"data-validate="alphaNumeric"  name="bcpublisher"  class="size2"/></td>
        </tr>
        <tr>
            <td><label>Edition:</label></td><td><input type="text" data-validate="number" name="bcedition"  class="size2"/></td>
        </tr>
        <tr>
            <td><label>ISBN:</label></td><td><input type="text" data-validate="alphaNumeric" name="bcisbn"  class="size2"/></td>
        </tr>
        <tr>
            <td><label>Topic:</label></td><td><input type="text"  name="bctopic" data-validate="alphaNumeric" class="size2"/></td>
        </tr>
        <tr>
            <td><label>DOI:</label></td><td><input type="text"  name="bcdoi"data-validate="alphaNumeric"  class="size2"/></td>
        </tr>
    </table>
</div><!--end of book chapter-->

<!--Report-->
<div id="report" style="display: none;">
    <table>
        <tr>
        <td><label>Report Number:</label></td><td><input type="text" name="rnumber"data-validate="number,required" class="size2" /></td>
        </tr>
        <tr>
            <td><label>Affiliation:</label></td><td><input type="text"data-validate="alphaNumeric" name="raffiliate" class="size2" /></td>
        </tr>
        <tr>
            <td><label>Topics:</label></td><td><input type="text" data-validate="alphaNumeric"class="size2" name="rtopic" /></td>
        </tr>
    </table>
</div><!--end of report-->

<!-- Dataset -->
<div id="dataset" style="display: none;">
    <table>
        <tr>
            <td><label>Topic:</label></td><td><input type="text" data-validate="alphaNumeric,required" name="dtopic"  class="size2"/></td>
        </tr>
        <tr>
            <td><label>DOI:</label></td><td><input type="text" data-validate="alphaNumeric" name="ddoi"  class="size2"/></td>
        </tr>
    </table>
</div><!--end of dataset-->

<!-- Patent -->
<div id="patent" style="display: none;">
    <table>
        <tr>
            <td><label>Reference Number:</label></td><td><input type="text"data-validate="number,required"  name="pref"  class="size2"/></td>
        </tr>
        <tr>
            <td><label>Topic:</label></td><td><input type="text" data-validate="alphaNumeric" name="ptopic"  class="size2"/></td>
        </tr>
        <tr>
            <td><label>DOI:</label></td><td><input type="text"data-validate="alphaNumeric"  name="pdoi"  class="size2"/></td>
        </tr> 
    </table>
</div><!--end of patent-->

<!-- Copyright-->
<div id="copyright" style="display: none;">
    <table>
        <tr>
            <td><label>Diary Number:</label></td><td><input type="text"data-validate="number,required"  name="crdiary"  class="size2"/></td>
        </tr>
        <tr>
            <td><label>Copyright Number:</label></td><td><input type="text" data-validate="number" name="crcopyright"  class="size2"/></td>
        </tr>
        <tr>
            <td><label>Topic:</label></td><td><input type="text"  name="crtopic"data-validate="alphaNumeric"  class="size2"/></td>
        </tr>
        <tr>
            <td><label>DOI:</label></td><td><input type="text"  name="crdoi" data-validate="alphaNumeric" class="size2"/></td>
        </tr>
    </table>
</div><!--end of copyright-->
<?php } ?> 
<input type="button" name="previous" class="previous action-button" value="Previous" />
<input type="button" name="next" class="next action-button" value="Next" />
</fieldset>

<!--end of selection-->
<fieldset>
<table>
    <tr>
    <td><label>Date:</label></td>
        <td><script>
 $(function() {
    

    
    $( "#join" ).datepicker({
        dateFormat: "yy-mm-dd",
      defaultDate: "+1w",
      changeMonth: true,
      numberOfMonths: 1 });});</script>
      <input type="text"name="jdate" id="join"data-validate="required"/></td>
    </tr>
    <tr>
<?php
if($editor==1) 
      echo '<td><label>Abstract:</label></td><td><textarea name="abstract"value="'.$row['abstract'].'"data-validate="alphaNumeric" class="size8" ></textarea></td>'; 
      else
       echo '<td><label>Abstract:</label></td><td><textarea name="abstract"data-validate="alphaNumeric"  class="size8" ></textarea></td>';
       ?>
    </tr>
</table>
<input type="button" name="previous" class="previous action-button" value="Previous" />
<input type="button" name="next" class="next action-button" value="Next" />
</fieldset>
<fieldset>
<div id="room_fileds">
          
								
									<div class="content">
										<label>Secondary Authors:</label><br />
									</div>
								   </div>
								   <input type="button" id="more_fields" onclick="add_fields(this);"  value="Add More Authors"  /><br/>

		  <br />
<input type="button" name="previous" class="previous action-button" value="Previous" />
<input type="submit"  class="submit" value="Submit" />
</fieldset>

				</form>

				
		</div>
		</div>
<!-- jQuery --> 


<!-- jQuery easing plugin --> 
<script src="js/jquery.easing.min.js" type="text/javascript"></script> 
<script>

$(function() {

//jQuery time
var current_fs, next_fs, previous_fs; //fieldsets
var left, opacity, scale; //fieldset properties which we will animate
var animating; //flag to prevent quick multi-click glitches

$(".next").click(function(){
	var result = document.getElementById('dbType').value;
if (result == "Choose Publication Type") {
alert("Please Select Publication Type");
}
else {




    
    if(animating) return false;
	animating = true;
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();
	}
	//activate next step on progressbar using the index of next_fs
	$("#progressbar li").eq($("fieldset").index(next_fs)).addClass("active");
	
	//show the next fieldset
	next_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale current_fs down to 80%
			scale = 1 - (1 - now) * 0.2;
			//2. bring next_fs from the right(50%)
			left = (now * 50)+"%";
			//3. increase opacity of next_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'transform': 'scale('+scale+')'});
			next_fs.css({'left': left, 'opacity': opacity});
		}, 
		duration: 0, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});

$(".previous").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();
	
	//de-activate current step on progressbar
	$("#progressbar li").eq($("fieldset").index(current_fs)).removeClass("active");
	
	//show the previous fieldset
	previous_fs.show(); 
	//hide the current fieldset with style
	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			//as the opacity of current_fs reduces to 0 - stored in "now"
			//1. scale previous_fs from 80% to 100%
			scale = 0.8 + (1 - now) * 0.2;
			//2. take current_fs to the right(50%) - from 0%
			left = ((1-now) * 50)+"%";
			//3. increase opacity of previous_fs to 1 as it moves in
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		}, 
		duration: 0, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 
		//this comes from the custom easing plugin
		easing: 'easeInOutBack'
	});
});


});
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

				
	</body>
</html>