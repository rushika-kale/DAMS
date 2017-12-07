<?php
session_start();
 
//Check whether the session variable SESS_MEMBER_ID is present or not
if(!isset($_SESSION['username1']) || (trim($_SESSION['username1']) == '')) {
header("location: home.php");
exit();
$username=$_SESSION['username1'];
}
$username=$_SESSION['username1'];
$con=mysql_connect("localhost","root") or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db("faculty",$con) or die("Failed to connect to MySQL: " . mysql_error());
$aquery = mysql_fetch_array(mysql_query("SELECT * FROM faculty.workshop ORDER BY userid DESC LIMIT 1"));
$ac=mysql_fetch_array(mysql_query("SELECT access FROM faculty.facdb WHERE username='$username'"));

$userid=$aquery['userid'];


if (isset($_POST['jname'])  AND !empty($_POST['jname']))
	{
	   $pubname=$_POST['pubname'];
	   $aequery = mysql_query("SELECT * FROM faculty.journal where username='$username'&& pubname='$pubname' ");
        
            if(mysql_num_rows($aequery)>0)
            {
                echo "update";
            }
        else{
	   $hquery11=mysql_query("insert into journal (username,pubname) values ('$username','$pubname') ");
       echo "insert";}
              
       if(isset($_POST['research']) AND !empty($_POST['research']))
            $hquery=mysql_query("update journal set research='".$_POST['research']."' where username='$username'&& pubname='$pubname' ");       
       if(isset($_POST['pyear']) AND !empty($_POST['pyear']))
            $hquery=mysql_query("update journal set pyear='".$_POST['pyear']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['jname']) AND !empty($_POST['jname']))
            $hquery=mysql_query("update journal set jname='".$_POST['jname']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['jtype']) AND !empty($_POST['jtype']))
            $hquery=mysql_query("update journal set jtype='".$_POST['jtype']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['jpublisher']) AND !empty($_POST['jpublisher']))
            $hquery=mysql_query("update journal set jpublisher='".$_POST['jpublisher']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['reference']) AND !empty($_POST['reference']))
            $hquery=mysql_query("update journal set reference='".$_POST['reference']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['jimpact']) AND !empty($_POST['jimpact']))
            $hquery=mysql_query("update journal set jimpact='".$_POST['jimpact']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['jvolume']) AND !empty($_POST['jvolume']))
            $hquery=mysql_query("update journal set jvolume='".$_POST['jvolume']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['jissue']) AND !empty($_POST['jissue']))
            $hquery=mysql_query("update journal set jissue='".$_POST['jissue']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['jpage']) AND !empty($_POST['jpage']))
            $hquery=mysql_query("update journal set jpage='".$_POST['jpage']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['jmoney']) AND !empty($_POST['jmoney']))
            $hquery=mysql_query("update journal set jmoney='".$_POST['jmoney']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['jdoi']) AND !empty($_POST['jdoi']))
            $hquery=mysql_query("update journal set jdoi='".$_POST['jdoi']."' where username='$username'&& pubname='$pubname' ");
        $date=$_POST['jdate'];
       $date = str_replace('/', '-', $date);
       $date = date("Y-m-d", strtotime($date));
       if (isset($_POST['jdate'])  AND !empty($_POST['jdate']))
            $hquery=mysql_query("update journal set jdate='$date' where username='$username' && pubname='$pubname'");
       if(isset($_POST['abstract']) AND !empty($_POST['abstract']))
            $hquery=mysql_query("update journal set abstract='".$_POST['abstract']."' where username='$username'&& pubname='$pubname' ");
       if (isset($_POST['s1_name'])  AND !empty($_POST['s1_name']))
            $hquery=mysql_query("update journal set s1_name='".$_POST['s1_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s1_institute'])  AND !empty($_POST['s1_institute']))
            $hquery=mysql_query("update journal set s1_institute='".$_POST['s1_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s1_dept'])  AND !empty($_POST['s1_dept']))
            $hquery=mysql_query("update journal set s1_dept='".$_POST['s1_dept']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s1_contact'])  AND !empty($_POST['s1_contact']))
            $hquery=mysql_query("update journal set s1_contact='".$_POST['s1_contact']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_name'])  AND !empty($_POST['s2_name']))
            $hquery=mysql_query("update journal set s2_name='".$_POST['s2_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_institute'])  AND !empty($_POST['s2_institute']))
            $hquery=mysql_query("update journal set s2_institute='".$_POST['s2_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_dept'])  AND !empty($_POST['s2_dept']))
            $hquery=mysql_query("update journal set s2_dept='".$_POST['s2_dept']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_contact'])  AND !empty($_POST['s2_contact']))
            $hquery=mysql_query("update journal set s2_contact='".$_POST['s2_contact']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_name'])  AND !empty($_POST['s3_name']))
            $hquery=mysql_query("update journal set s3_name='".$_POST['s3_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_institute'])  AND !empty($_POST['s3_institute']))
            $hquery=mysql_query("update journal set s3_institute='".$_POST['s3_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_dept'])  AND !empty($_POST['s3_dept']))
            $hquery=mysql_query("update journal set s3_dept='".$_POST['s3_dept']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_contact'])  AND !empty($_POST['s3_contact']))
            $hquery=mysql_query("update journal set s3_contact='".$_POST['s3_contact']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_name'])  AND !empty($_POST['s4_name']))
            $hquery=mysql_query("update journal set s4_name='".$_POST['s4_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_institute'])  AND !empty($_POST['s4_institute']))
            $hquery=mysql_query("update journal set s4_institute='".$_POST['s4_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_dept'])  AND !empty($_POST['s4_dept']))
            $hquery=mysql_query("update journal set s4_dept='".$_POST['s4_dept']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_contact'])  AND !empty($_POST['s4_contact']))
            $hquery=mysql_query("update journal set s4_contact='".$_POST['s4_contact']."' where username='$username'&& pubname='$pubname'");
       
        
    }
    else if (isset($_POST['cname'])  AND !empty($_POST['cname']))
    {
        $pubname=$_POST['pubname'];
	   $hquery=mysql_query("insert into conference (username,pubname) values ('$username','$pubname') ");
       if(isset($_POST['research']) AND !empty($_POST['research']))
            $hquery=mysql_query("update conference set research='".$_POST['research']."' where username='$username'&& pubname='$pubname' ");       
       if(isset($_POST['pyear']) AND !empty($_POST['pyear']))
            $hquery=mysql_query("update conference set pyear='".$_POST['pyear']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['cname']) AND !empty($_POST['cname']))
            $hquery=mysql_query("update conference set cname='".$_POST['cname']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['ctype']) AND !empty($_POST['ctype']))
            $hquery=mysql_query("update conference set ctype='".$_POST['ctype']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['corganiser']) AND !empty($_POST['corganiser']))
            $hquery=mysql_query("update conference set corganiser='".$_POST['corganiser']."' where username='$username'&& pubname='$pubname' ");
   if(isset($_POST['clocation']) AND !empty($_POST['clocation']))
            $hquery=mysql_query("update conference set clocation='".$_POST['clocation']."' where username='$username'&& pubname='$pubname' ");
if(isset($_POST['cvolume']) AND !empty($_POST['cvolume']))
            $hquery=mysql_query("update conference set cvolume='".$_POST['cvolume']."' where username='$username'&& pubname='$pubname' ");
 if(isset($_POST['cissue']) AND !empty($_POST['cissue']))
            $hquery=mysql_query("update conference set cissue='".$_POST['cissue']."' where username='$username'&& pubname='$pubname' ");
 if(isset($_POST['cpage']) AND !empty($_POST['cpage']))
            $hquery=mysql_query("update conference set cpage='".$_POST['cpage']."' where username='$username'&& pubname='$pubname' ");
 if(isset($_POST['cmoney']) AND !empty($_POST['cmoney']))
            $hquery=mysql_query("update conference set cmoney='".$_POST['cmoney']."' where username='$username'&& pubname='$pubname' ");
   if(isset($_POST['cdoi']) AND !empty($_POST['cdoi']))
            $hquery=mysql_query("update conference set cdoi='".$_POST['cdoi']."' where username='$username'&& pubname='$pubname' ");
    $date=$_POST['jdate'];
       $date = str_replace('/', '-', $date);
       $date = date("Y-m-d", strtotime($date));
       if (isset($_POST['jdate'])  AND !empty($_POST['jdate']))
            $hquery=mysql_query("update conference set jdate='$date' where username='$username' && pubname='$pubname'");
       if(isset($_POST['abstract']) AND !empty($_POST['abstract']))
            $hquery=mysql_query("update conference set abstract='".$_POST['abstract']."' where username='$username'&& pubname='$pubname' ");
       if (isset($_POST['s1_name'])  AND !empty($_POST['s1_name']))
            $hquery=mysql_query("update conference set s1_name='".$_POST['s1_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s1_institute'])  AND !empty($_POST['s1_institute']))
            $hquery=mysql_query("update conference set s1_institute='".$_POST['s1_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s1_dept'])  AND !empty($_POST['s1_dept']))
            $hquery=mysql_query("update conference set s1_dept='".$_POST['s1_dept']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s1_contact'])  AND !empty($_POST['s1_contact']))
            $hquery=mysql_query("update conference set s1_contact='".$_POST['s1_contact']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_name'])  AND !empty($_POST['s2_name']))
            $hquery=mysql_query("update conference set s2_name='".$_POST['s2_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_institute'])  AND !empty($_POST['s2_institute']))
            $hquery=mysql_query("update conference set s2_institute='".$_POST['s2_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_dept'])  AND !empty($_POST['s2_dept']))
            $hquery=mysql_query("update conference set s2_dept='".$_POST['s2_dept']."' where username='$username'&& pubname='$pubnamee'");
       if (isset($_POST['s2_contact'])  AND !empty($_POST['s2_contact']))
            $hquery=mysql_query("update conference set s2_contact='".$_POST['s2_contact']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_name'])  AND !empty($_POST['s3_name']))
            $hquery=mysql_query("update conference set s3_name='".$_POST['s3_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_institute'])  AND !empty($_POST['s3_institute']))
            $hquery=mysql_query("update conference set s3_institute='".$_POST['s3_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_dept'])  AND !empty($_POST['s3_dept']))
            $hquery=mysql_query("update conference set s3_dept='".$_POST['s3_dept']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_contact'])  AND !empty($_POST['s3_contact']))
            $hquery=mysql_query("update conference set s3_contact='".$_POST['s3_contact']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_name'])  AND !empty($_POST['s4_name']))
            $hquery=mysql_query("update conference set s4_name='".$_POST['s4_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_institute'])  AND !empty($_POST['s4_institute']))
            $hquery=mysql_query("update conference set s4_institute='".$_POST['s4_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_dept'])  AND !empty($_POST['s4_dept']))
            $hquery=mysql_query("update conference set s4_dept='".$_POST['s4_dept']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_contact'])  AND !empty($_POST['s4_contact']))
            $hquery=mysql_query("update conference set s4_contact='".$_POST['s4_contact']."' where username='$username'&& pubname='$pubname'");
       
    }
    
    else if (isset($_POST['ttitle'])  AND !empty($_POST['ttitle']))
    {
         $pubname=$_POST['pubname'];
	   $hquery=mysql_query("insert into thesis (username,pubname) values ('$username','$pubname') ");
       if(isset($_POST['research']) AND !empty($_POST['research']))
            $hquery=mysql_query("update thesis set research='".$_POST['research']."' where username='$username'&& pubname='$pubname' ");       
       if(isset($_POST['pyear']) AND !empty($_POST['pyear']))
            $hquery=mysql_query("update thesis set pyear='".$_POST['pyear']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['ttitle']) AND !empty($_POST['ttitle']))
            $hquery=mysql_query("update thesis set ttitle='".$_POST['ttitle']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['tdegree']) AND !empty($_POST['tdegree']))
            $hquery=mysql_query("update thesis set tdegree='".$_POST['tdegree']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['taffiliate']) AND !empty($_POST['taffiliate']))
            $hquery=mysql_query("update thesis set taffiliate='".$_POST['taffiliate']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['tguide']) AND !empty($_POST['tguide']))
            $hquery=mysql_query("update thesis set tguide='".$_POST['tguide']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['tcguide']) AND !empty($_POST['tcguide']))
            $hquery=mysql_query("update thesis set tcguide='".$_POST['tcguide']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['tdoi']) AND !empty($_POST['tdoi']))
            $hquery=mysql_query("update thesis set tdoi='".$_POST['tdoi']."' where username='$username'&& pubname='$pubname' ");
       $date=$_POST['jdate'];
       $date = str_replace('/', '-', $date);
       $date = date("Y-m-d", strtotime($date));
       if (isset($_POST['jdate'])  AND !empty($_POST['jdate']))
            $hquery=mysql_query("update thesis set jdate='$date' where username='$username' && pubname='$pubname'");
       if(isset($_POST['abstract']) AND !empty($_POST['abstract']))
            $hquery=mysql_query("update thesis set abstract='".$_POST['abstract']."' where username='$username'&& pubname='$pubname' ");
       if (isset($_POST['s1_name'])  AND !empty($_POST['s1_name']))
            $hquery=mysql_query("update thesis set s1_name='".$_POST['s1_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s1_institute'])  AND !empty($_POST['s1_institute']))
            $hquery=mysql_query("update thesis set s1_institute='".$_POST['s1_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s1_dept'])  AND !empty($_POST['s1_dept']))
            $hquery=mysql_query("update thesis set s1_dept='".$_POST['s1_dept']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s1_contact'])  AND !empty($_POST['s1_contact']))
            $hquery=mysql_query("update thesis set s1_contact='".$_POST['s1_contact']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_name'])  AND !empty($_POST['s2_name']))
            $hquery=mysql_query("update thesis set s2_name='".$_POST['s2_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_institute'])  AND !empty($_POST['s2_institute']))
            $hquery=mysql_query("update thesis set s2_institute='".$_POST['s2_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_dept'])  AND !empty($_POST['s2_dept']))
            $hquery=mysql_query("update thesis set s2_dept='".$_POST['s2_dept']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_contact'])  AND !empty($_POST['s2_contact']))
            $hquery=mysql_query("update thesis set s2_contact='".$_POST['s2_contact']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_name'])  AND !empty($_POST['s3_name']))
            $hquery=mysql_query("update thesis set s3_name='".$_POST['s3_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_institute'])  AND !empty($_POST['s3_institute']))
            $hquery=mysql_query("update thesis set s3_institute='".$_POST['s3_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_dept'])  AND !empty($_POST['s3_dept']))
            $hquery=mysql_query("update thesis set s3_dept='".$_POST['s3_dept']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_contact'])  AND !empty($_POST['s3_contact']))
            $hquery=mysql_query("update thesis set s3_contact='".$_POST['s3_contact']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_name'])  AND !empty($_POST['s4_name']))
            $hquery=mysql_query("update thesis set s4_name='".$_POST['s4_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_institute'])  AND !empty($_POST['s4_institute']))
            $hquery=mysql_query("update thesis set s4_institute='".$_POST['s4_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_dept'])  AND !empty($_POST['s4_dept']))
            $hquery=mysql_query("update thesis set s4_dept='".$_POST['s4_dept']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_contact'])  AND !empty($_POST['s4_contact']))
            $hquery=mysql_query("update thesis set s4_contact='".$_POST['s4_contact']."' where username='$username'&& pubname='$pubname'");
       
       }
    
    else if (isset($_POST['bpublisher'])  AND !empty($_POST['bpublisher']))
    {
         $pubname=$_POST['pubname'];
	   $hquery=mysql_query("insert into book (username,pubname) values ('$username','$pubname') ");
       if(isset($_POST['research']) AND !empty($_POST['research']))
            $hquery=mysql_query("update book set research='".$_POST['research']."' where username='$username'&& pubname='$pubname' ");       
       if(isset($_POST['pyear']) AND !empty($_POST['pyear']))
            $hquery=mysql_query("update book set pyear='".$_POST['pyear']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['bpublisher']) AND !empty($_POST['bpublisher']))
            $hquery=mysql_query("update book set bpublisher='".$_POST['bpublisher']."' where username='$username'&& pubname='$pubname' ");
       
       if(isset($_POST['beditor']) AND !empty($_POST['beditor']))
            $hquery=mysql_query("update book set beditor='".$_POST['beditor']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['bedition']) AND !empty($_POST['bedition']))
            $hquery=mysql_query("update book set bedition='".$_POST['bedition']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['bisbn']) AND !empty($_POST['bisbn']))
            $hquery=mysql_query("update book set bisbn='".$_POST['bisbn']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['btopic']) AND !empty($_POST['btopic']))
            $hquery=mysql_query("update book set btopic='".$_POST['btopic']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['bdoi']) AND !empty($_POST['bdoi']))
            $hquery=mysql_query("update book set bdoi='".$_POST['bdoi']."' where username='$username'&& pubname='$pubname' ");
       $date=$_POST['jdate'];
       $date = str_replace('/', '-', $date);
       $date = date("Y-m-d", strtotime($date));
       if (isset($_POST['jdate'])  AND !empty($_POST['jdate']))
            $hquery=mysql_query("update book set jdate='$date' where username='$username' && pubname='$pubname'");
       if(isset($_POST['abstract']) AND !empty($_POST['abstract']))
            $hquery=mysql_query("update book set abstract='".$_POST['abstract']."' where username='$username'&& pubname='$pubname' ");
       if (isset($_POST['s1_name'])  AND !empty($_POST['s1_name']))
            $hquery=mysql_query("update book set s1_name='".$_POST['s1_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s1_institute'])  AND !empty($_POST['s1_institute']))
            $hquery=mysql_query("update book set s1_institute='".$_POST['s1_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s1_dept'])  AND !empty($_POST['s1_dept']))
            $hquery=mysql_query("update book set s1_dept='".$_POST['s1_dept']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s1_contact'])  AND !empty($_POST['s1_contact']))
            $hquery=mysql_query("update book set s1_contact='".$_POST['s1_contact']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_name'])  AND !empty($_POST['s2_name']))
            $hquery=mysql_query("update book set s2_name='".$_POST['s2_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_institute'])  AND !empty($_POST['s2_institute']))
            $hquery=mysql_query("update book set s2_institute='".$_POST['s2_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_dept'])  AND !empty($_POST['s2_dept']))
            $hquery=mysql_query("update book set s2_dept='".$_POST['s2_dept']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_contact'])  AND !empty($_POST['s2_contact']))
            $hquery=mysql_query("update book set s2_contact='".$_POST['s2_contact']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_name'])  AND !empty($_POST['s3_name']))
            $hquery=mysql_query("update book set s3_name='".$_POST['s3_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_institute'])  AND !empty($_POST['s3_institute']))
            $hquery=mysql_query("update book set s3_institute='".$_POST['s3_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_dept'])  AND !empty($_POST['s3_dept']))
            $hquery=mysql_query("update book set s3_dept='".$_POST['s3_dept']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_contact'])  AND !empty($_POST['s3_contact']))
            $hquery=mysql_query("update book set s3_contact='".$_POST['s3_contact']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_name'])  AND !empty($_POST['s4_name']))
            $hquery=mysql_query("update book set s4_name='".$_POST['s4_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_institute'])  AND !empty($_POST['s4_institute']))
            $hquery=mysql_query("update book set s4_institute='".$_POST['s4_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_dept'])  AND !empty($_POST['s4_dept']))
            $hquery=mysql_query("update book set s4_dept='".$_POST['s4_dept']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_contact'])  AND !empty($_POST['s4_contact']))
            $hquery=mysql_query("update book set s4_contact='".$_POST['s4_contact']."' where username='$username'&& pubname='$pubname'");
       
         }
    
    else if (isset($_POST['bcchaptername'])  AND !empty($_POST['bcchaptername']))
    {
         $pubname=$_POST['pubname'];
	   $hquery=mysql_query("insert into bookchapter (username,pubname) values ('$username','$pubname') ");
       if(isset($_POST['research']) AND !empty($_POST['research']))
            $hquery=mysql_query("update bookchapter set research='".$_POST['research']."' where username='$username'&& pubname='$pubname' ");       
       if(isset($_POST['pyear']) AND !empty($_POST['pyear']))
            $hquery=mysql_query("update bookchapter set pyear='".$_POST['pyear']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['bcchaptername']) AND !empty($_POST['bcchaptername']))
            $hquery=mysql_query("update bookchapter set bcchaptername='".$_POST['bcchaptername']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['bcpages']) AND !empty($_POST['bcpages']))
            $hquery=mysql_query("update bookchapter set bcpages='".$_POST['bcpages']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['bcbooktitle']) AND !empty($_POST['bcbooktitle']))
            $hquery=mysql_query("update bookchapter set bcbooktitle='".$_POST['bcbooktitle']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['bceditor']) AND !empty($_POST['bceditor']))
            $hquery=mysql_query("update bookchapter set bceditor='".$_POST['bceditor']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['bcpublisher']) AND !empty($_POST['bcpublisher']))
            $hquery=mysql_query("update bookchapter set bcpublisher='".$_POST['bcpublisher']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['bcedition']) AND !empty($_POST['bcedition']))
            $hquery=mysql_query("update bookchapter set bcedition='".$_POST['bcedition']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['bcisbn']) AND !empty($_POST['bcisbn']))
            $hquery=mysql_query("update bookchapter set bcisbn='".$_POST['bcisbn']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['bctopic']) AND !empty($_POST['bctopic']))
            $hquery=mysql_query("update bookchapter set bctopic='".$_POST['bctopic']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['bcdoi']) AND !empty($_POST['bcdoi']))
            $hquery=mysql_query("update bookchapter set bcdoi='".$_POST['bcdoi']."' where username='$username'&& pubname='$pubname' ");
       $date=$_POST['jdate'];
       $date = str_replace('/', '-', $date);
       $date = date("Y-m-d", strtotime($date));
       if (isset($_POST['jdate'])  AND !empty($_POST['jdate']))
            $hquery=mysql_query("update bookchapter set jdate='$date' where username='$username' && pubname='$pubname'");
       if(isset($_POST['abstract']) AND !empty($_POST['abstract']))
            $hquery=mysql_query("update bookchapter set abstract='".$_POST['abstract']."' where username='$username'&& pubname='$pubname' ");
       if (isset($_POST['s1_name'])  AND !empty($_POST['s1_name']))
            $hquery=mysql_query("update bookchapter set s1_name='".$_POST['s1_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s1_institute'])  AND !empty($_POST['s1_institute']))
            $hquery=mysql_query("update bookchapter set s1_institute='".$_POST['s1_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s1_dept'])  AND !empty($_POST['s1_dept']))
            $hquery=mysql_query("update bookchapter set s1_dept='".$_POST['s1_dept']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s1_contact'])  AND !empty($_POST['s1_contact']))
            $hquery=mysql_query("update bookchapter set s1_contact='".$_POST['s1_contact']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_name'])  AND !empty($_POST['s2_name']))
            $hquery=mysql_query("update bookchapter set s2_name='".$_POST['s2_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_institute'])  AND !empty($_POST['s2_institute']))
            $hquery=mysql_query("update bookchapter set s2_institute='".$_POST['s2_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_dept'])  AND !empty($_POST['s2_dept']))
            $hquery=mysql_query("update bookchapter set s2_dept='".$_POST['s2_dept']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_contact'])  AND !empty($_POST['s2_contact']))
            $hquery=mysql_query("update bookchapter set s2_contact='".$_POST['s2_contact']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_name'])  AND !empty($_POST['s3_name']))
            $hquery=mysql_query("update bookchapter set s3_name='".$_POST['s3_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_institute'])  AND !empty($_POST['s3_institute']))
            $hquery=mysql_query("update bookchapter set s3_institute='".$_POST['s3_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_dept'])  AND !empty($_POST['s3_dept']))
            $hquery=mysql_query("update bookchapter set s3_dept='".$_POST['s3_dept']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_contact'])  AND !empty($_POST['s3_contact']))
            $hquery=mysql_query("update bookchapter set s3_contact='".$_POST['s3_contact']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_name'])  AND !empty($_POST['s4_name']))
            $hquery=mysql_query("update bookchapter set s4_name='".$_POST['s4_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_institute'])  AND !empty($_POST['s4_institute']))
            $hquery=mysql_query("update bookchapter set s4_institute='".$_POST['s4_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_dept'])  AND !empty($_POST['s4_dept']))
            $hquery=mysql_query("update bookchapter set s4_dept='".$_POST['s4_dept']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_contact'])  AND !empty($_POST['s4_contact']))
            $hquery=mysql_query("update bookchapter set s4_contact='".$_POST['s4_contact']."' where username='$username'&& pubname='$pubname'");
       
         }
    
    else if (isset($_POST['rnumber'])  AND !empty($_POST['rnumber']))
    {
       $pubname=$_POST['pubname'];
	   $hquery=mysql_query("insert into report (username,pubname) values ('$username','$pubname') ");
       if(isset($_POST['research']) AND !empty($_POST['research']))
            $hquery=mysql_query("update report set research='".$_POST['research']."' where username='$username'&& pubname='$pubname' ");       
       if(isset($_POST['pyear']) AND !empty($_POST['pyear']))
            $hquery=mysql_query("update report set pyear='".$_POST['pyear']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['rnumber']) AND !empty($_POST['rnumber']))
            $hquery=mysql_query("update report set rnumber='".$_POST['rnumber']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['raffiliate']) AND !empty($_POST['raffiliate']))
            $hquery=mysql_query("update report set raffiliate='".$_POST['raffiliate']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['rtopic']) AND !empty($_POST['rtopic']))
            $hquery=mysql_query("update report set rtopic='".$_POST['rtopic']."' where username='$username'&& pubname='$pubname' ");
       $date=$_POST['jdate'];
       $date = str_replace('/', '-', $date);
       $date = date("Y-m-d", strtotime($date));
       if (isset($_POST['jdate'])  AND !empty($_POST['jdate']))
            $hquery=mysql_query("update report set jdate='$date' where username='$username' && pubname='$pubname'");
       if(isset($_POST['abstract']) AND !empty($_POST['abstract']))
            $hquery=mysql_query("update report set abstract='".$_POST['abstract']."' where username='$username'&& pubname='$pubname' ");
       if (isset($_POST['s1_name'])  AND !empty($_POST['s1_name']))
            $hquery=mysql_query("update report set s1_name='".$_POST['s1_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s1_institute'])  AND !empty($_POST['s1_institute']))
            $hquery=mysql_query("update report set s1_institute='".$_POST['s1_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s1_contact'])  AND !empty($_POST['s1_contact']))
            $hquery=mysql_query("update report set s1_contact='".$_POST['s1_contact']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s1_dept'])  AND !empty($_POST['s1_dept']))
            $hquery=mysql_query("update report set s1_dept='".$_POST['s1_dept']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_name'])  AND !empty($_POST['s2_name']))
            $hquery=mysql_query("update report set s2_name='".$_POST['s2_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_institute'])  AND !empty($_POST['s2_institute']))
            $hquery=mysql_query("update report set s2_institute='".$_POST['s2_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_contact'])  AND !empty($_POST['s2_contact']))
            $hquery=mysql_query("update report set s2_contact='".$_POST['s2_contact']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_dept'])  AND !empty($_POST['s2_dept']))
            $hquery=mysql_query("update report set s2_dept='".$_POST['s2_dept']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_name'])  AND !empty($_POST['s3_name']))
            $hquery=mysql_query("update report set s3_name='".$_POST['s3_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_institute'])  AND !empty($_POST['s3_institute']))
            $hquery=mysql_query("update report set s3_institute='".$_POST['s3_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_contact'])  AND !empty($_POST['s3_contact']))
            $hquery=mysql_query("update report set s3_contact='".$_POST['s3_contact']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_dept'])  AND !empty($_POST['s3_dept']))
            $hquery=mysql_query("update report set s3_dept='".$_POST['s3_dept']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_name'])  AND !empty($_POST['s4_name']))
            $hquery=mysql_query("update report set s4_name='".$_POST['s4_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_institute'])  AND !empty($_POST['s4_institute']))
            $hquery=mysql_query("update report set s4_institute='".$_POST['s4_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_contact'])  AND !empty($_POST['s4_contact']))
            $hquery=mysql_query("update report set s4_contact='".$_POST['s4_contact']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_dept'])  AND !empty($_POST['s4_dept']))
            $hquery=mysql_query("update report set s4_dept='".$_POST['s4_dept']."' where username='$username'&& pubname='$pubname'");
    
    
       }
    
    else if (isset($_POST['dtopic'])  AND !empty($_POST['dtopic']))
    {
       $pubname=$_POST['pubname'];
	   $hquery=mysql_query("insert into dataset (username,pubname) values ('$username','$pubname') ");
       if(isset($_POST['research']) AND !empty($_POST['research']))
            $hquery=mysql_query("update dataset set research='".$_POST['research']."' where username='$username'&& pubname='$pubname' ");       
       if(isset($_POST['pyear']) AND !empty($_POST['pyear']))
            $hquery=mysql_query("update dataset set pyear='".$_POST['pyear']."' where username='$username'&& pubname='$pubname' ");
            
       if(isset($_POST['ddoi']) AND !empty($_POST['ddoi']))
            $hquery=mysql_query("update dataset set ddoi='".$_POST['ddoi']."' where username='$username'&& pubname='$pubname' ");
       $date=$_POST['jdate'];
       $date = str_replace('/', '-', $date);
       $date = date("Y-m-d", strtotime($date));
       if (isset($_POST['jdate'])  AND !empty($_POST['jdate']))
            $hquery=mysql_query("update dataset set jdate='$date' where username='$username' && pubname='$pubname'");
       if(isset($_POST['abstract']) AND !empty($_POST['abstract']))
            $hquery=mysql_query("update dataset set abstract='".$_POST['abstract']."' where username='$username'&& pubname='$pubname' ");
       if (isset($_POST['s1_name'])  AND !empty($_POST['s1_name']))
            $hquery=mysql_query("update dataset set s1_name='".$_POST['s1_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s1_institute'])  AND !empty($_POST['s1_institute']))
            $hquery=mysql_query("update dataset set s1_institute='".$_POST['s1_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s1_contact'])  AND !empty($_POST['s1_contact']))
            $hquery=mysql_query("update dataset set s1_contact='".$_POST['s1_contact']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s1_dept'])  AND !empty($_POST['s1_dept']))
            $hquery=mysql_query("update dataset set s1_dept='".$_POST['s1_dept']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_name'])  AND !empty($_POST['s2_name']))
            $hquery=mysql_query("update dataset set s2_name='".$_POST['s2_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_institute'])  AND !empty($_POST['s2_institute']))
            $hquery=mysql_query("update dataset set s2_institute='".$_POST['s2_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_contact'])  AND !empty($_POST['s2_contact']))
            $hquery=mysql_query("update dataset set s2_contact='".$_POST['s2_contact']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_dept'])  AND !empty($_POST['s2_dept']))
            $hquery=mysql_query("update dataset set s2_dept='".$_POST['s2_dept']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_name'])  AND !empty($_POST['s3_name']))
            $hquery=mysql_query("update dataset set s3_name='".$_POST['s3_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_institute'])  AND !empty($_POST['s3_institute']))
            $hquery=mysql_query("update dataset set s3_institute='".$_POST['s3_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_contact'])  AND !empty($_POST['s3_contact']))
            $hquery=mysql_query("update dataset set s3_contact='".$_POST['s3_contact']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_dept'])  AND !empty($_POST['s3_dept']))
            $hquery=mysql_query("update dataset set s3_dept='".$_POST['s3_dept']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_name'])  AND !empty($_POST['s4_name']))
            $hquery=mysql_query("update dataset set s4_name='".$_POST['s4_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_institute'])  AND !empty($_POST['s4_institute']))
            $hquery=mysql_query("update dataset set s4_institute='".$_POST['s4_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_contact'])  AND !empty($_POST['s4_contact']))
            $hquery=mysql_query("update dataset set s4_contact='".$_POST['s4_contact']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_dept'])  AND !empty($_POST['s4_dept']))
            $hquery=mysql_query("update dataset set s4_dept='".$_POST['s4_dept']."' where username='$username'&& pubname='$pubname'");
       
    }
    
    else if (isset($_POST['pref'])  AND !empty($_POST['pref']))
    {
       $pubname=$_POST['pubname'];
	   $hquery=mysql_query("insert into patent (username,pubname) values ('$username','$pubname') ");
       if(isset($_POST['research']) AND !empty($_POST['research']))
            $hquery=mysql_query("update patent set research='".$_POST['research']."' where username='$username'&& pubname='$pubname' ");       
       if(isset($_POST['pyear']) AND !empty($_POST['pyear']))
            $hquery=mysql_query("update patent set pyear='".$_POST['pyear']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['ptopic']) AND !empty($_POST['ptopic']))
            $hquery=mysql_query("update patent set ptopic='".$_POST['ptopic']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['pdoi']) AND !empty($_POST['pdoi']))
            $hquery=mysql_query("update patent set pdoi='".$_POST['pdoi']."' where username='$username'&& pubname='$pubname' ");
       $date=$_POST['jdate'];
       $date = str_replace('/', '-', $date);
       $date = date("Y-m-d", strtotime($date));
       if (isset($_POST['jdate'])  AND !empty($_POST['jdate']))
            $hquery=mysql_query("update patent set jdate='$date' where username='$username' && pubname='$pubname'");
       if(isset($_POST['abstract']) AND !empty($_POST['abstract']))
            $hquery=mysql_query("update patent set abstract='".$_POST['abstract']."' where username='$username'&& pubname='$pubname' ");
       if (isset($_POST['s1_name'])  AND !empty($_POST['s1_name']))
            $hquery=mysql_query("update patent set s1_name='".$_POST['s1_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s1_institute'])  AND !empty($_POST['s1_institute']))
            $hquery=mysql_query("update patent set s1_institute='".$_POST['s1_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s1_contact'])  AND !empty($_POST['s1_contact']))
            $hquery=mysql_query("update patent set s1_contact='".$_POST['s1_contact']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s1_dept'])  AND !empty($_POST['s1_dept']))
            $hquery=mysql_query("update patent set s1_dept='".$_POST['s1_dept']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_name'])  AND !empty($_POST['s2_name']))
            $hquery=mysql_query("update patent set s2_name='".$_POST['s2_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_institute'])  AND !empty($_POST['s2_institute']))
            $hquery=mysql_query("update patent set s2_institute='".$_POST['s2_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_contact'])  AND !empty($_POST['s2_contact']))
            $hquery=mysql_query("update patent set s2_contact='".$_POST['s2_contact']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_dept'])  AND !empty($_POST['s2_dept']))
            $hquery=mysql_query("update patent set s2_dept='".$_POST['s2_dept']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_name'])  AND !empty($_POST['s3_name']))
            $hquery=mysql_query("update patent set s3_name='".$_POST['s3_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_institute'])  AND !empty($_POST['s3_institute']))
            $hquery=mysql_query("update patent set s3_institute='".$_POST['s3_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_contact'])  AND !empty($_POST['s3_contact']))
            $hquery=mysql_query("update patent set s3_contact='".$_POST['s3_contact']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_dept'])  AND !empty($_POST['s3_dept']))
            $hquery=mysql_query("update patent set s3_dept='".$_POST['s3_dept']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_name'])  AND !empty($_POST['s4_name']))
            $hquery=mysql_query("update patent set s4_name='".$_POST['s4_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_institute'])  AND !empty($_POST['s4_institute']))
            $hquery=mysql_query("update patent set s4_institute='".$_POST['s4_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_contact'])  AND !empty($_POST['s4_contact']))
            $hquery=mysql_query("update patent set s4_contact='".$_POST['s4_contact']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_dept'])  AND !empty($_POST['s4_dept']))
            $hquery=mysql_query("update patent set s4_dept='".$_POST['s4_dept']."' where username='$username'&& pubname='$pubname'");
        
    }
    
    else if (isset($_POST['crdiary'])  AND !empty($_POST['crdiary']))
    {
       $crdiary=$_POST['crdiary'];
	   $hquery=mysql_query("insert into copyright (username,crdiary) values ('$username','$crdiary') ");
       if(isset($_POST['crcopyright']) AND !empty($_POST['crcopyright']))
            $hquery=mysql_query("update copyright set crcopyright='".$_POST['crcopyright']."' where username='$username'&& crdiary='$crdiary' ");
       if(isset($_POST['crtopic']) AND !empty($_POST['crtopic']))
            $hquery=mysql_query("update copyright set crtopic='".$_POST['crtopic']."' where username='$username'&& crdiary='$crdiary' ");
       if(isset($_POST['crdoi']) AND !empty($_POST['crdoi']))
            $hquery=mysql_query("update copyright set crdoi='".$_POST['crdoi']."' where username='$username'&& crdiary='$crdiary' ");
       $date=$_POST['jdate'];
       $date = str_replace('/', '-', $date);
       $date = date("Y-m-d", strtotime($date));
       if (isset($_POST['jdate'])  AND !empty($_POST['jdate']))
            $hquery=mysql_query("update copyright set jdate='$date' where username='$username' && crdiary='$crdiary'");
       if(isset($_POST['abstract']) AND !empty($_POST['abstract']))
            $hquery=mysql_query("update copyright set abstract='".$_POST['abstract']."' where username='$username'&& crdiary='$crdiary' ");
       if (isset($_POST['s1_name'])  AND !empty($_POST['s1_name']))
            $hquery=mysql_query("update copyright set s1_name='".$_POST['s1_name']."' where username='$username'&& crdiary='$crdiary'");
       if (isset($_POST['s1_institute'])  AND !empty($_POST['s1_institute']))
            $hquery=mysql_query("update copyright set s1_institute='".$_POST['s1_institute']."' where username='$username'&& crdiary='$crdiary'");
       if (isset($_POST['s1_contact'])  AND !empty($_POST['s1_contact']))
            $hquery=mysql_query("update copyright set s1_contact='".$_POST['s1_contact']."' where username='$username'&& crdiary='$crdiary'");
       if (isset($_POST['s1_dept'])  AND !empty($_POST['s1_dept']))
            $hquery=mysql_query("update copyright set s1_dept='".$_POST['s1_dept']."' where username='$username'&& crdiary='$crdiary'");
       if (isset($_POST['s2_name'])  AND !empty($_POST['s2_name']))
            $hquery=mysql_query("update copyright set s2_name='".$_POST['s2_name']."' where username='$username'&& crdiary='$crdiary'");
       if (isset($_POST['s2_institute'])  AND !empty($_POST['s2_institute']))
            $hquery=mysql_query("update copyright set s2_institute='".$_POST['s2_institute']."' where username='$username'&& crdiary='$crdiary'");
       if (isset($_POST['s2_contact'])  AND !empty($_POST['s2_contact']))
            $hquery=mysql_query("update copyright set s2_contact='".$_POST['s2_contact']."' where username='$username'&& crdiary='$crdiary'");
       if (isset($_POST['s2_dept'])  AND !empty($_POST['s2_dept']))
            $hquery=mysql_query("update copyright set s2_dept='".$_POST['s2_dept']."' where username='$username'&& crdiary='$crdiary'");
       if (isset($_POST['s3_name'])  AND !empty($_POST['s3_name']))
            $hquery=mysql_query("update copyright set s3_name='".$_POST['s3_name']."' where username='$username'&& crdiary='$crdiary'");
       if (isset($_POST['s3_institute'])  AND !empty($_POST['s3_institute']))
            $hquery=mysql_query("update copyright set s3_institute='".$_POST['s3_institute']."' where username='$username'&& crdiary='$crdiary'");
       if (isset($_POST['s3_contact'])  AND !empty($_POST['s3_contact']))
            $hquery=mysql_query("update copyright set s3_contact='".$_POST['s3_contact']."' where username='$username'&& crdiary='$crdiary'");
       if (isset($_POST['s3_dept'])  AND !empty($_POST['s3_dept']))
            $hquery=mysql_query("update copyright set s3_dept='".$_POST['s3_dept']."' where username='$username'&& crdiary='$crdiary'");
       if (isset($_POST['s4_name'])  AND !empty($_POST['s4_name']))
            $hquery=mysql_query("update copyright set s4_name='".$_POST['s4_name']."' where username='$username'&& crdiary='$crdiary'");
       if (isset($_POST['s4_institute'])  AND !empty($_POST['s4_institute']))
            $hquery=mysql_query("update copyright set s4_institute='".$_POST['s4_institute']."' where username='$username'&& crdiary='$crdiary'");
       if (isset($_POST['s4_contact'])  AND !empty($_POST['s4_contact']))
            $hquery=mysql_query("update copyright set s4_contact='".$_POST['s4_contact']."' where username='$username'&& crdiary='$crdiary'");
       if (isset($_POST['s4_dept'])  AND !empty($_POST['s4_dept']))
            $hquery=mysql_query("update copyright set s4_dept='".$_POST['s4_dept']."' where username='$username'&& crdiary='$crdiary'");
        
    }
    
 header("location:pub.php")
	?>