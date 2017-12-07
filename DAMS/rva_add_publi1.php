<?php
include 'rva_common.php';

$dbType=$_POST['dbType'];
echo $dbType;


if ($dbType=="Journal")
	{
	   $pubname=$_POST['pubname'];
	   $aequery = mysqli_query($con,"SELECT * FROM faculty.journal where username='$username'&& pubname='$pubname' ");
        
            if(mysqli_num_rows($aequery)>0)
            {
                echo "update";
            }
        else{
	   $hquery11=mysqli_query($con,"insert into journal (username,pubname) values ('$username','$pubname') ");
       echo "insert";}
              
       if(isset($_POST['research']) AND !empty($_POST['research']))
            $hquery=mysqli_query($con,"update journal set research='".$_POST['research']."' where username='$username'&& pubname='$pubname' ");       
       if(isset($_POST['pyear']) AND !empty($_POST['pyear']))
            $hquery=mysqli_query($con,"update journal set pyear='".$_POST['pyear']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['jname']) AND !empty($_POST['jname']))
            $hquery=mysqli_query($con,"update journal set jname='".$_POST['jname']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['jtype']) AND !empty($_POST['jtype']))
            $hquery=mysqli_query($con,"update journal set jtype='".$_POST['jtype']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['jpublisher']) AND !empty($_POST['jpublisher']))
            $hquery=mysqli_query($con,"update journal set jpublisher='".$_POST['jpublisher']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['reference']) AND !empty($_POST['reference']))
            $hquery=mysqli_query($con,"update journal set reference='".$_POST['reference']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['jimpact']) AND !empty($_POST['jimpact']))
            $hquery=mysqli_query($con,"update journal set jimpact='".$_POST['jimpact']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['jvolume']) AND !empty($_POST['jvolume']))
            $hquery=mysqli_query($con,"update journal set jvolume='".$_POST['jvolume']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['jissue']) AND !empty($_POST['jissue']))
            $hquery=mysqli_query($con,"update journal set jissue='".$_POST['jissue']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['jpage']) AND !empty($_POST['jpage']))
            $hquery=mysqli_query($con,"update journal set jpage='".$_POST['jpage']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['money']) AND !empty($_POST['money']))
            $hquery=mysqli_query($con,"update journal set jmoney='".$_POST['money']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['jdoi']) AND !empty($_POST['jdoi']))
            $hquery=mysqli_query($con,"update journal set jdoi='".$_POST['jdoi']."' where username='$username'&& pubname='$pubname' ");
       
	   $date=$_POST['jdate'];
       //$date = str_replace('/', '-', $date);
       //$date = date("Y-m-d", strtotime($date));
       if (isset($_POST['jdate'])  AND !empty($_POST['jdate']))
            $hquery=mysqli_query($con,"update journal set jdate='$date' where username='$username' && pubname='$pubname'");
       if(isset($_POST['abstract']) AND !empty($_POST['abstract']))
            $hquery=mysqli_query($con,"update journal set abstract='".$_POST['abstract']."' where username='$username'&& pubname='$pubname' ");
       if (isset($_POST['s1_name'])  AND !empty($_POST['s1_name']))
            $hquery=mysqli_query($con,"update journal set s1_name='".$_POST['s1_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s1_institute'])  AND !empty($_POST['s1_institute']))
            $hquery=mysqli_query($con,"update journal set s1_institute='".$_POST['s1_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s1_dept'])  AND !empty($_POST['s1_dept']))
            $hquery=mysqli_query($con,"update journal set s1_dept='".$_POST['s1_dept']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s1_contact'])  AND !empty($_POST['s1_contact']))
            $hquery=mysqli_query($con,"update journal set s1_contact='".$_POST['s1_contact']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_name'])  AND !empty($_POST['s2_name']))
            $hquery=mysqli_query($con,"update journal set s2_name='".$_POST['s2_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_institute'])  AND !empty($_POST['s2_institute']))
            $hquery=mysqli_query($con,"update journal set s2_institute='".$_POST['s2_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_dept'])  AND !empty($_POST['s2_dept']))
            $hquery=mysqli_query($con,"update journal set s2_dept='".$_POST['s2_dept']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_contact'])  AND !empty($_POST['s2_contact']))
            $hquery=mysqli_query($con,"update journal set s2_contact='".$_POST['s2_contact']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_name'])  AND !empty($_POST['s3_name']))
            $hquery=mysqli_query($con,"update journal set s3_name='".$_POST['s3_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_institute'])  AND !empty($_POST['s3_institute']))
            $hquery=mysqli_query($con,"update journal set s3_institute='".$_POST['s3_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_dept'])  AND !empty($_POST['s3_dept']))
            $hquery=mysqli_query($con,"update journal set s3_dept='".$_POST['s3_dept']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_contact'])  AND !empty($_POST['s3_contact']))
            $hquery=mysqli_query($con,"update journal set s3_contact='".$_POST['s3_contact']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_name'])  AND !empty($_POST['s4_name']))
            $hquery=mysqli_query($con,"update journal set s4_name='".$_POST['s4_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_institute'])  AND !empty($_POST['s4_institute']))
            $hquery=mysqli_query($con,"update journal set s4_institute='".$_POST['s4_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_dept'])  AND !empty($_POST['s4_dept']))
            $hquery=mysqli_query($con,"update journal set s4_dept='".$_POST['s4_dept']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_contact'])  AND !empty($_POST['s4_contact']))
            $hquery=mysqli_query($con,"update journal set s4_contact='".$_POST['s4_contact']."' where username='$username'&& pubname='$pubname'");
       
        
    }
    else if ($dbType=="Conference")
    {
        $pubname=$_POST['pubname'];
	   $hquery=mysqli_query($con,"insert into conference (username,pubname) values ('$username','$pubname') ");
       if(isset($_POST['research']) AND !empty($_POST['research']))
            $hquery=mysqli_query($con,"update conference set research='".$_POST['research']."' where username='$username'&& pubname='$pubname' ");       
       if(isset($_POST['pyear']) AND !empty($_POST['pyear']))
            $hquery=mysqli_query($con,"update conference set pyear='".$_POST['pyear']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['cname']) AND !empty($_POST['cname']))
            $hquery=mysqli_query($con,"update conference set cname='".$_POST['cname']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['ctype']) AND !empty($_POST['ctype']))
            $hquery=mysqli_query($con,"update conference set ctype='".$_POST['ctype']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['corganiser']) AND !empty($_POST['corganiser']))
				$hquery=mysqli_query($con,"update conference set corganiser='".$_POST['corganiser']."' where username='$username'&& pubname='$pubname' ");
	   if(isset($_POST['clocation']) AND !empty($_POST['clocation']))
				$hquery=mysqli_query($con,"update conference set clocation='".$_POST['clocation']."' where username='$username'&& pubname='$pubname' ");
		if(isset($_POST['cvolume']) AND !empty($_POST['cvolume']))
				$hquery=mysqli_query($con,"update conference set cvolume='".$_POST['cvolume']."' where username='$username'&& pubname='$pubname' ");
		if(isset($_POST['cissue']) AND !empty($_POST['cissue']))
				$hquery=mysqli_query($con,"update conference set cissue='".$_POST['cissue']."' where username='$username'&& pubname='$pubname' ");
		if(isset($_POST['cpage']) AND !empty($_POST['cpage']))
				$hquery=mysqli_query($con,"update conference set cpage='".$_POST['cpage']."' where username='$username'&& pubname='$pubname' ");
		if(isset($_POST['money1']) AND !empty($_POST['money1']))
				$hquery=mysqli_query($con,"update conference set cmoney='".$_POST['money1']."' where username='$username'&& pubname='$pubname' ");
	   if(isset($_POST['cdoi']) AND !empty($_POST['cdoi']))
				$hquery=mysqli_query($con,"update conference set cdoi='".$_POST['cdoi']."' where username='$username'&& pubname='$pubname' ");
		$date=$_POST['jdate'];
       //$date = str_replace('/', '-', $date);
       //$date = date("Y-m-d", strtotime($date));
       if (isset($_POST['jdate'])  AND !empty($_POST['jdate']))
            $hquery=mysqli_query($con,"update conference set jdate='$date' where username='$username' && pubname='$pubname'");
       if(isset($_POST['abstract']) AND !empty($_POST['abstract']))
            $hquery=mysqli_query($con,"update conference set abstract='".$_POST['abstract']."' where username='$username'&& pubname='$pubname' ");
       if (isset($_POST['s1_name'])  AND !empty($_POST['s1_name']))
            $hquery=mysqli_query($con,"update conference set s1_name='".$_POST['s1_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s1_institute'])  AND !empty($_POST['s1_institute']))
            $hquery=mysqli_query($con,"update conference set s1_institute='".$_POST['s1_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s1_dept'])  AND !empty($_POST['s1_dept']))
            $hquery=mysqli_query($con,"update conference set s1_dept='".$_POST['s1_dept']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s1_contact'])  AND !empty($_POST['s1_contact']))
            $hquery=mysqli_query($con,"update conference set s1_contact='".$_POST['s1_contact']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_name'])  AND !empty($_POST['s2_name']))
            $hquery=mysqli_query($con,"update conference set s2_name='".$_POST['s2_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_institute'])  AND !empty($_POST['s2_institute']))
            $hquery=mysqli_query($con,"update conference set s2_institute='".$_POST['s2_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_dept'])  AND !empty($_POST['s2_dept']))
            $hquery=mysqli_query($con,"update conference set s2_dept='".$_POST['s2_dept']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_contact'])  AND !empty($_POST['s2_contact']))
            $hquery=mysqli_query($con,"update conference set s2_contact='".$_POST['s2_contact']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_name'])  AND !empty($_POST['s3_name']))
            $hquery=mysqli_query($con,"update conference set s3_name='".$_POST['s3_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_institute'])  AND !empty($_POST['s3_institute']))
            $hquery=mysqli_query($con,"update conference set s3_institute='".$_POST['s3_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_dept'])  AND !empty($_POST['s3_dept']))
            $hquery=mysqli_query($con,"update conference set s3_dept='".$_POST['s3_dept']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_contact'])  AND !empty($_POST['s3_contact']))
            $hquery=mysqli_query($con,"update conference set s3_contact='".$_POST['s3_contact']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_name'])  AND !empty($_POST['s4_name']))
            $hquery=mysqli_query($con,"update conference set s4_name='".$_POST['s4_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_institute'])  AND !empty($_POST['s4_institute']))
            $hquery=mysqli_query($con,"update conference set s4_institute='".$_POST['s4_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_dept'])  AND !empty($_POST['s4_dept']))
            $hquery=mysqli_query($con,"update conference set s4_dept='".$_POST['s4_dept']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_contact'])  AND !empty($_POST['s4_contact']))
            $hquery=mysqli_query($con,"update conference set s4_contact='".$_POST['s4_contact']."' where username='$username'&& pubname='$pubname'");
       
    }
    
    else if ($dbType=="Thesis")
    {
         $pubname=$_POST['pubname'];
	   $hquery=mysqli_query($con,"insert into thesis (username,pubname) values ('$username','$pubname') ");
       if(isset($_POST['research']) AND !empty($_POST['research']))
            $hquery=mysqli_query($con,"update thesis set research='".$_POST['research']."' where username='$username'&& pubname='$pubname' ");       
       if(isset($_POST['pyear']) AND !empty($_POST['pyear']))
            $hquery=mysqli_query($con,"update thesis set pyear='".$_POST['pyear']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['ttitle']) AND !empty($_POST['ttitle']))
            $hquery=mysqli_query($con,"update thesis set ttitle='".$_POST['ttitle']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['tdegree']) AND !empty($_POST['tdegree']))
            $hquery=mysqli_query($con,"update thesis set tdegree='".$_POST['tdegree']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['taffiliate']) AND !empty($_POST['taffiliate']))
            $hquery=mysqli_query($con,"update thesis set taffiliate='".$_POST['taffiliate']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['tguide']) AND !empty($_POST['tguide']))
            $hquery=mysqli_query($con,"update thesis set tguide='".$_POST['tguide']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['tcguide']) AND !empty($_POST['tcguide']))
            $hquery=mysqli_query($con,"update thesis set tcguide='".$_POST['tcguide']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['tdoi']) AND !empty($_POST['tdoi']))
            $hquery=mysqli_query($con,"update thesis set tdoi='".$_POST['tdoi']."' where username='$username'&& pubname='$pubname' ");
       $date=$_POST['jdate'];
       //$date = str_replace('/', '-', $date);
       //$date = date("Y-m-d", strtotime($date));
       if (isset($_POST['jdate'])  AND !empty($_POST['jdate']))
            $hquery=mysqli_query($con,"update thesis set jdate='$date' where username='$username' && pubname='$pubname'");
       if(isset($_POST['abstract']) AND !empty($_POST['abstract']))
            $hquery=mysqli_query($con,"update thesis set abstract='".$_POST['abstract']."' where username='$username'&& pubname='$pubname' ");
       if (isset($_POST['s1_name'])  AND !empty($_POST['s1_name']))
            $hquery=mysqli_query($con,"update thesis set s1_name='".$_POST['s1_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s1_institute'])  AND !empty($_POST['s1_institute']))
            $hquery=mysqli_query($con,"update thesis set s1_institute='".$_POST['s1_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s1_dept'])  AND !empty($_POST['s1_dept']))
            $hquery=mysqli_query($con,"update thesis set s1_dept='".$_POST['s1_dept']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s1_contact'])  AND !empty($_POST['s1_contact']))
            $hquery=mysqli_query($con,"update thesis set s1_contact='".$_POST['s1_contact']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_name'])  AND !empty($_POST['s2_name']))
            $hquery=mysqli_query($con,"update thesis set s2_name='".$_POST['s2_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_institute'])  AND !empty($_POST['s2_institute']))
            $hquery=mysqli_query($con,"update thesis set s2_institute='".$_POST['s2_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_dept'])  AND !empty($_POST['s2_dept']))
            $hquery=mysqli_query($con,"update thesis set s2_dept='".$_POST['s2_dept']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_contact'])  AND !empty($_POST['s2_contact']))
            $hquery=mysqli_query($con,"update thesis set s2_contact='".$_POST['s2_contact']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_name'])  AND !empty($_POST['s3_name']))
            $hquery=mysqli_query($con,"update thesis set s3_name='".$_POST['s3_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_institute'])  AND !empty($_POST['s3_institute']))
            $hquery=mysqli_query($con,"update thesis set s3_institute='".$_POST['s3_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_dept'])  AND !empty($_POST['s3_dept']))
            $hquery=mysqli_query($con,"update thesis set s3_dept='".$_POST['s3_dept']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_contact'])  AND !empty($_POST['s3_contact']))
            $hquery=mysqli_query($con,"update thesis set s3_contact='".$_POST['s3_contact']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_name'])  AND !empty($_POST['s4_name']))
            $hquery=mysqli_query($con,"update thesis set s4_name='".$_POST['s4_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_institute'])  AND !empty($_POST['s4_institute']))
            $hquery=mysqli_query($con,"update thesis set s4_institute='".$_POST['s4_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_dept'])  AND !empty($_POST['s4_dept']))
            $hquery=mysqli_query($con,"update thesis set s4_dept='".$_POST['s4_dept']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_contact'])  AND !empty($_POST['s4_contact']))
            $hquery=mysqli_query($con,"update thesis set s4_contact='".$_POST['s4_contact']."' where username='$username'&& pubname='$pubname'");
       
       }
    
    else if ($dbType=="Book")
    {
         $pubname=$_POST['pubname'];
	   $hquery=mysqli_query($con,"insert into book (username,pubname) values ('$username','$pubname') ");
       if(isset($_POST['research']) AND !empty($_POST['research']))
            $hquery=mysqli_query($con,"update book set research='".$_POST['research']."' where username='$username'&& pubname='$pubname' ");       
       if(isset($_POST['pyear']) AND !empty($_POST['pyear']))
            $hquery=mysqli_query($con,"update book set pyear='".$_POST['pyear']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['bpublisher']) AND !empty($_POST['bpublisher']))
            $hquery=mysqli_query($con,"update book set bpublisher='".$_POST['bpublisher']."' where username='$username'&& pubname='$pubname' ");
       
       if(isset($_POST['beditor']) AND !empty($_POST['beditor']))
            $hquery=mysqli_query($con,"update book set beditor='".$_POST['beditor']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['bedition']) AND !empty($_POST['bedition']))
            $hquery=mysqli_query($con,"update book set bedition='".$_POST['bedition']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['bisbn']) AND !empty($_POST['bisbn']))
            $hquery=mysqli_query($con,"update book set bisbn='".$_POST['bisbn']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['btopic']) AND !empty($_POST['btopic']))
            $hquery=mysqli_query($con,"update book set btopic='".$_POST['btopic']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['bdoi']) AND !empty($_POST['bdoi']))
            $hquery=mysqli_query($con,"update book set bdoi='".$_POST['bdoi']."' where username='$username'&& pubname='$pubname' ");
       $date=$_POST['jdate'];
       //$date = str_replace('/', '-', $date);
       //$date = date("Y-m-d", strtotime($date));
       if (isset($_POST['jdate'])  AND !empty($_POST['jdate']))
            $hquery=mysqli_query($con,"update book set jdate='$date' where username='$username' && pubname='$pubname'");
       if(isset($_POST['abstract']) AND !empty($_POST['abstract']))
            $hquery=mysqli_query($con,"update book set abstract='".$_POST['abstract']."' where username='$username'&& pubname='$pubname' ");
       if (isset($_POST['s1_name'])  AND !empty($_POST['s1_name']))
            $hquery=mysqli_query($con,"update book set s1_name='".$_POST['s1_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s1_institute'])  AND !empty($_POST['s1_institute']))
            $hquery=mysqli_query($con,"update book set s1_institute='".$_POST['s1_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s1_dept'])  AND !empty($_POST['s1_dept']))
            $hquery=mysqli_query($con,"update book set s1_dept='".$_POST['s1_dept']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s1_contact'])  AND !empty($_POST['s1_contact']))
            $hquery=mysqli_query($con,"update book set s1_contact='".$_POST['s1_contact']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_name'])  AND !empty($_POST['s2_name']))
            $hquery=mysqli_query($con,"update book set s2_name='".$_POST['s2_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_institute'])  AND !empty($_POST['s2_institute']))
            $hquery=mysqli_query($con,"update book set s2_institute='".$_POST['s2_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_dept'])  AND !empty($_POST['s2_dept']))
            $hquery=mysqli_query($con,"update book set s2_dept='".$_POST['s2_dept']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_contact'])  AND !empty($_POST['s2_contact']))
            $hquery=mysqli_query($con,"update book set s2_contact='".$_POST['s2_contact']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_name'])  AND !empty($_POST['s3_name']))
            $hquery=mysqli_query($con,"update book set s3_name='".$_POST['s3_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_institute'])  AND !empty($_POST['s3_institute']))
            $hquery=mysqli_query($con,"update book set s3_institute='".$_POST['s3_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_dept'])  AND !empty($_POST['s3_dept']))
            $hquery=mysqli_query($con,"update book set s3_dept='".$_POST['s3_dept']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_contact'])  AND !empty($_POST['s3_contact']))
            $hquery=mysqli_query($con,"update book set s3_contact='".$_POST['s3_contact']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_name'])  AND !empty($_POST['s4_name']))
            $hquery=mysqli_query($con,"update book set s4_name='".$_POST['s4_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_institute'])  AND !empty($_POST['s4_institute']))
            $hquery=mysqli_query($con,"update book set s4_institute='".$_POST['s4_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_dept'])  AND !empty($_POST['s4_dept']))
            $hquery=mysqli_query($con,"update book set s4_dept='".$_POST['s4_dept']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_contact'])  AND !empty($_POST['s4_contact']))
            $hquery=mysqli_query($con,"update book set s4_contact='".$_POST['s4_contact']."' where username='$username'&& pubname='$pubname'");
       
         }
    
    else if ($dbType=="Book-Chapter")
    {
         $pubname=$_POST['pubname'];
	   $hquery=mysqli_query($con,"insert into bookchapter (username,pubname) values ('$username','$pubname') ");
       if(isset($_POST['research']) AND !empty($_POST['research']))
            $hquery=mysqli_query($con,"update bookchapter set research='".$_POST['research']."' where username='$username'&& pubname='$pubname' ");       
       if(isset($_POST['pyear']) AND !empty($_POST['pyear']))
            $hquery=mysqli_query($con,"update bookchapter set pyear='".$_POST['pyear']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['bcchaptername']) AND !empty($_POST['bcchaptername']))
            $hquery=mysqli_query($con,"update bookchapter set bcchaptername='".$_POST['bcchaptername']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['bcpages']) AND !empty($_POST['bcpages']))
            $hquery=mysqli_query($con,"update bookchapter set bcpages='".$_POST['bcpages']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['bcbooktitle']) AND !empty($_POST['bcbooktitle']))
            $hquery=mysqli_query($con,"update bookchapter set bcbooktitle='".$_POST['bcbooktitle']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['bceditor']) AND !empty($_POST['bceditor']))
            $hquery=mysqli_query($con,"update bookchapter set bceditor='".$_POST['bceditor']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['bcpublisher']) AND !empty($_POST['bcpublisher']))
            $hquery=mysqli_query($con,"update bookchapter set bcpublisher='".$_POST['bcpublisher']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['bcedition']) AND !empty($_POST['bcedition']))
            $hquery=mysqli_query($con,"update bookchapter set bcedition='".$_POST['bcedition']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['bcisbn']) AND !empty($_POST['bcisbn']))
            $hquery=mysqli_query($con,"update bookchapter set bcisbn='".$_POST['bcisbn']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['bctopic']) AND !empty($_POST['bctopic']))
            $hquery=mysqli_query($con,"update bookchapter set bctopic='".$_POST['bctopic']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['bcdoi']) AND !empty($_POST['bcdoi']))
            $hquery=mysqli_query($con,"update bookchapter set bcdoi='".$_POST['bcdoi']."' where username='$username'&& pubname='$pubname' ");
       $date=$_POST['jdate'];
       //$date = str_replace('/', '-', $date);
       //$date = date("Y-m-d", strtotime($date));
       if (isset($_POST['jdate'])  AND !empty($_POST['jdate']))
            $hquery=mysqli_query($con,"update bookchapter set jdate='$date' where username='$username' && pubname='$pubname'");
       if(isset($_POST['abstract']) AND !empty($_POST['abstract']))
            $hquery=mysqli_query($con,"update bookchapter set abstract='".$_POST['abstract']."' where username='$username'&& pubname='$pubname' ");
       if (isset($_POST['s1_name'])  AND !empty($_POST['s1_name']))
            $hquery=mysqli_query($con,"update bookchapter set s1_name='".$_POST['s1_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s1_institute'])  AND !empty($_POST['s1_institute']))
            $hquery=mysqli_query($con,"update bookchapter set s1_institute='".$_POST['s1_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s1_dept'])  AND !empty($_POST['s1_dept']))
            $hquery=mysqli_query($con,"update bookchapter set s1_dept='".$_POST['s1_dept']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s1_contact'])  AND !empty($_POST['s1_contact']))
            $hquery=mysqli_query($con,"update bookchapter set s1_contact='".$_POST['s1_contact']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_name'])  AND !empty($_POST['s2_name']))
            $hquery=mysqli_query($con,"update bookchapter set s2_name='".$_POST['s2_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_institute'])  AND !empty($_POST['s2_institute']))
            $hquery=mysqli_query($con,"update bookchapter set s2_institute='".$_POST['s2_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_dept'])  AND !empty($_POST['s2_dept']))
            $hquery=mysqli_query($con,"update bookchapter set s2_dept='".$_POST['s2_dept']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_contact'])  AND !empty($_POST['s2_contact']))
            $hquery=mysqli_query($con,"update bookchapter set s2_contact='".$_POST['s2_contact']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_name'])  AND !empty($_POST['s3_name']))
            $hquery=mysqli_query($con,"update bookchapter set s3_name='".$_POST['s3_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_institute'])  AND !empty($_POST['s3_institute']))
            $hquery=mysqli_query($con,"update bookchapter set s3_institute='".$_POST['s3_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_dept'])  AND !empty($_POST['s3_dept']))
            $hquery=mysqli_query($con,"update bookchapter set s3_dept='".$_POST['s3_dept']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_contact'])  AND !empty($_POST['s3_contact']))
            $hquery=mysqli_query($con,"update bookchapter set s3_contact='".$_POST['s3_contact']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_name'])  AND !empty($_POST['s4_name']))
            $hquery=mysqli_query($con,"update bookchapter set s4_name='".$_POST['s4_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_institute'])  AND !empty($_POST['s4_institute']))
            $hquery=mysqli_query($con,"update bookchapter set s4_institute='".$_POST['s4_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_dept'])  AND !empty($_POST['s4_dept']))
            $hquery=mysqli_query($con,"update bookchapter set s4_dept='".$_POST['s4_dept']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_contact'])  AND !empty($_POST['s4_contact']))
            $hquery=mysqli_query($con,"update bookchapter set s4_contact='".$_POST['s4_contact']."' where username='$username'&& pubname='$pubname'");
       
         }
    
    else if ($dbType=="Report")
    {
       $pubname=$_POST['pubname'];
	   $hquery=mysqli_query($con,"insert into report (username,pubname) values ('$username','$pubname') ");
       if(isset($_POST['research']) AND !empty($_POST['research']))
            $hquery=mysqli_query($con,"update report set research='".$_POST['research']."' where username='$username'&& pubname='$pubname' ");       
       if(isset($_POST['pyear']) AND !empty($_POST['pyear']))
            $hquery=mysqli_query($con,"update report set pyear='".$_POST['pyear']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['rnumber']) AND !empty($_POST['rnumber']))
            $hquery=mysqli_query($con,"update report set rnumber='".$_POST['rnumber']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['raffiliate']) AND !empty($_POST['raffiliate']))
            $hquery=mysqli_query($con,"update report set raffiliate='".$_POST['raffiliate']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['rtopic']) AND !empty($_POST['rtopic']))
            $hquery=mysqli_query($con,"update report set rtopic='".$_POST['rtopic']."' where username='$username'&& pubname='$pubname' ");
       $date=$_POST['jdate'];
       //$date = str_replace('/', '-', $date);
       //$date = date("Y-m-d", strtotime($date));
       if (isset($_POST['jdate'])  AND !empty($_POST['jdate']))
            $hquery=mysqli_query($con,"update report set jdate='$date' where username='$username' && pubname='$pubname'");
       if(isset($_POST['abstract']) AND !empty($_POST['abstract']))
            $hquery=mysqli_query($con,"update report set abstract='".$_POST['abstract']."' where username='$username'&& pubname='$pubname' ");
       if (isset($_POST['s1_name'])  AND !empty($_POST['s1_name']))
            $hquery=mysqli_query($con,"update report set s1_name='".$_POST['s1_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s1_institute'])  AND !empty($_POST['s1_institute']))
            $hquery=mysqli_query($con,"update report set s1_institute='".$_POST['s1_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s1_contact'])  AND !empty($_POST['s1_contact']))
            $hquery=mysqli_query($con,"update report set s1_contact='".$_POST['s1_contact']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s1_dept'])  AND !empty($_POST['s1_dept']))
            $hquery=mysqli_query($con,"update report set s1_dept='".$_POST['s1_dept']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_name'])  AND !empty($_POST['s2_name']))
            $hquery=mysqli_query($con,"update report set s2_name='".$_POST['s2_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_institute'])  AND !empty($_POST['s2_institute']))
            $hquery=mysqli_query($con,"update report set s2_institute='".$_POST['s2_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_contact'])  AND !empty($_POST['s2_contact']))
            $hquery=mysqli_query($con,"update report set s2_contact='".$_POST['s2_contact']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_dept'])  AND !empty($_POST['s2_dept']))
            $hquery=mysqli_query($con,"update report set s2_dept='".$_POST['s2_dept']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_name'])  AND !empty($_POST['s3_name']))
            $hquery=mysqli_query($con,"update report set s3_name='".$_POST['s3_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_institute'])  AND !empty($_POST['s3_institute']))
            $hquery=mysqli_query($con,"update report set s3_institute='".$_POST['s3_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_contact'])  AND !empty($_POST['s3_contact']))
            $hquery=mysqli_query($con,"update report set s3_contact='".$_POST['s3_contact']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_dept'])  AND !empty($_POST['s3_dept']))
            $hquery=mysqli_query($con,"update report set s3_dept='".$_POST['s3_dept']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_name'])  AND !empty($_POST['s4_name']))
            $hquery=mysqli_query($con,"update report set s4_name='".$_POST['s4_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_institute'])  AND !empty($_POST['s4_institute']))
            $hquery=mysqli_query($con,"update report set s4_institute='".$_POST['s4_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_contact'])  AND !empty($_POST['s4_contact']))
            $hquery=mysqli_query($con,"update report set s4_contact='".$_POST['s4_contact']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_dept'])  AND !empty($_POST['s4_dept']))
            $hquery=mysqli_query($con,"update report set s4_dept='".$_POST['s4_dept']."' where username='$username'&& pubname='$pubname'");
    
    
       }
    
    else if ($dbType=="Data")
    {
       $pubname=$_POST['pubname'];
	   $hquery=mysqli_query($con,"insert into dataset (username,pubname) values ('$username','$pubname') ");
       if(isset($_POST['research']) AND !empty($_POST['research']))
            $hquery=mysqli_query($con,"update dataset set research='".$_POST['research']."' where username='$username'&& pubname='$pubname' ");       
       if(isset($_POST['pyear']) AND !empty($_POST['pyear']))
            $hquery=mysqli_query($con,"update dataset set pyear='".$_POST['pyear']."' where username='$username'&& pubname='$pubname' ");
            
       if(isset($_POST['ddoi']) AND !empty($_POST['ddoi']))
            $hquery=mysqli_query($con,"update dataset set ddoi='".$_POST['ddoi']."' where username='$username'&& pubname='$pubname' ");
		if(isset($_POST['dtopic']) AND !empty($_POST['dtopic']))
            $hquery=mysqli_query($con,"update dataset set dtopic='".$_POST['dtopic']."' where username='$username'&& pubname='$pubname' ");
       $date=$_POST['jdate'];
       //$date = str_replace('/', '-', $date);
       //$date = date("Y-m-d", strtotime($date));
       if (isset($_POST['jdate'])  AND !empty($_POST['jdate']))
            $hquery=mysqli_query($con,"update dataset set jdate='$date' where username='$username' && pubname='$pubname'");
       if(isset($_POST['abstract']) AND !empty($_POST['abstract']))
            $hquery=mysqli_query($con,"update dataset set abstract='".$_POST['abstract']."' where username='$username'&& pubname='$pubname' ");
       if (isset($_POST['s1_name'])  AND !empty($_POST['s1_name']))
            $hquery=mysqli_query($con,"update dataset set s1_name='".$_POST['s1_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s1_institute'])  AND !empty($_POST['s1_institute']))
            $hquery=mysqli_query($con,"update dataset set s1_institute='".$_POST['s1_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s1_contact'])  AND !empty($_POST['s1_contact']))
            $hquery=mysqli_query($con,"update dataset set s1_contact='".$_POST['s1_contact']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s1_dept'])  AND !empty($_POST['s1_dept']))
            $hquery=mysqli_query($con,"update dataset set s1_dept='".$_POST['s1_dept']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_name'])  AND !empty($_POST['s2_name']))
            $hquery=mysqli_query($con,"update dataset set s2_name='".$_POST['s2_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_institute'])  AND !empty($_POST['s2_institute']))
            $hquery=mysqli_query($con,"update dataset set s2_institute='".$_POST['s2_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_contact'])  AND !empty($_POST['s2_contact']))
            $hquery=mysqli_query($con,"update dataset set s2_contact='".$_POST['s2_contact']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_dept'])  AND !empty($_POST['s2_dept']))
            $hquery=mysqli_query($con,"update dataset set s2_dept='".$_POST['s2_dept']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_name'])  AND !empty($_POST['s3_name']))
            $hquery=mysqli_query($con,"update dataset set s3_name='".$_POST['s3_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_institute'])  AND !empty($_POST['s3_institute']))
            $hquery=mysqli_query($con,"update dataset set s3_institute='".$_POST['s3_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_contact'])  AND !empty($_POST['s3_contact']))
            $hquery=mysqli_query($con,"update dataset set s3_contact='".$_POST['s3_contact']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_dept'])  AND !empty($_POST['s3_dept']))
            $hquery=mysqli_query($con,"update dataset set s3_dept='".$_POST['s3_dept']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_name'])  AND !empty($_POST['s4_name']))
            $hquery=mysqli_query($con,"update dataset set s4_name='".$_POST['s4_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_institute'])  AND !empty($_POST['s4_institute']))
            $hquery=mysqli_query($con,"update dataset set s4_institute='".$_POST['s4_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_contact'])  AND !empty($_POST['s4_contact']))
            $hquery=mysqli_query($con,"update dataset set s4_contact='".$_POST['s4_contact']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_dept'])  AND !empty($_POST['s4_dept']))
            $hquery=mysqli_query($con,"update dataset set s4_dept='".$_POST['s4_dept']."' where username='$username'&& pubname='$pubname'");
       
    }
    
    else if ($dbType=="Patent")
    {
       $pubname=$_POST['pubname'];
	   $hquery=mysqli_query($con,"insert into patent (username,pubname) values ('$username','$pubname') ");
       if(isset($_POST['research']) AND !empty($_POST['research']))
            $hquery=mysqli_query($con,"update patent set research='".$_POST['research']."' where username='$username'&& pubname='$pubname' ");       
       if(isset($_POST['pyear']) AND !empty($_POST['pyear']))
            $hquery=mysqli_query($con,"update patent set pyear='".$_POST['pyear']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['ptopic']) AND !empty($_POST['ptopic']))
            $hquery=mysqli_query($con,"update patent set ptopic='".$_POST['ptopic']."' where username='$username'&& pubname='$pubname' ");
       if(isset($_POST['pdoi']) AND !empty($_POST['pdoi']))
            $hquery=mysqli_query($con,"update patent set pdoi='".$_POST['pdoi']."' where username='$username'&& pubname='$pubname' ");
	   if(isset($_POST['pref']) AND !empty($_POST['pref']))
            $hquery=mysqli_query($con,"update patent set pref='".$_POST['pref']."' where username='$username'&& pubname='$pubname' ");
       $date=$_POST['jdate'];
       //$date = str_replace('/', '-', $date);
       //$date = date("Y-m-d", strtotime($date));
       if (isset($_POST['jdate'])  AND !empty($_POST['jdate']))
            $hquery=mysqli_query($con,"update patent set jdate='$date' where username='$username' && pubname='$pubname'");
       if(isset($_POST['abstract']) AND !empty($_POST['abstract']))
            $hquery=mysqli_query($con,"update patent set abstract='".$_POST['abstract']."' where username='$username'&& pubname='$pubname' ");
       if (isset($_POST['s1_name'])  AND !empty($_POST['s1_name']))
            $hquery=mysqli_query($con,"update patent set s1_name='".$_POST['s1_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s1_institute'])  AND !empty($_POST['s1_institute']))
            $hquery=mysqli_query($con,"update patent set s1_institute='".$_POST['s1_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s1_contact'])  AND !empty($_POST['s1_contact']))
            $hquery=mysqli_query($con,"update patent set s1_contact='".$_POST['s1_contact']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s1_dept'])  AND !empty($_POST['s1_dept']))
            $hquery=mysqli_query($con,"update patent set s1_dept='".$_POST['s1_dept']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_name'])  AND !empty($_POST['s2_name']))
            $hquery=mysqli_query($con,"update patent set s2_name='".$_POST['s2_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_institute'])  AND !empty($_POST['s2_institute']))
            $hquery=mysqli_query($con,"update patent set s2_institute='".$_POST['s2_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_contact'])  AND !empty($_POST['s2_contact']))
            $hquery=mysqli_query($con,"update patent set s2_contact='".$_POST['s2_contact']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s2_dept'])  AND !empty($_POST['s2_dept']))
            $hquery=mysqli_query($con,"update patent set s2_dept='".$_POST['s2_dept']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_name'])  AND !empty($_POST['s3_name']))
            $hquery=mysqli_query($con,"update patent set s3_name='".$_POST['s3_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_institute'])  AND !empty($_POST['s3_institute']))
            $hquery=mysqli_query($con,"update patent set s3_institute='".$_POST['s3_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_contact'])  AND !empty($_POST['s3_contact']))
            $hquery=mysqli_query($con,"update patent set s3_contact='".$_POST['s3_contact']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s3_dept'])  AND !empty($_POST['s3_dept']))
            $hquery=mysqli_query($con,"update patent set s3_dept='".$_POST['s3_dept']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_name'])  AND !empty($_POST['s4_name']))
            $hquery=mysqli_query($con,"update patent set s4_name='".$_POST['s4_name']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_institute'])  AND !empty($_POST['s4_institute']))
            $hquery=mysqli_query($con,"update patent set s4_institute='".$_POST['s4_institute']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_contact'])  AND !empty($_POST['s4_contact']))
            $hquery=mysqli_query($con,"update patent set s4_contact='".$_POST['s4_contact']."' where username='$username'&& pubname='$pubname'");
       if (isset($_POST['s4_dept'])  AND !empty($_POST['s4_dept']))
            $hquery=mysqli_query($con,"update patent set s4_dept='".$_POST['s4_dept']."' where username='$username'&& pubname='$pubname'");
        
    }
    
    else if ($dbType=="Copyright")
    {
		$pubname=$_POST['pubname'];	
       $crdiary=$_POST['crdiary'];
	   $hquery=mysqli_query($con,"insert into copyright (username,crdiary,pubname) values ('$username','$crdiary','$pubname') ");
       
	   
	   if(isset($_POST['research']) AND !empty($_POST['research']))
            $hquery=mysqli_query($con,"update copyright set research='".$_POST['research']."' where username='$username'&& pubname='$pubname' ");       
       if(isset($_POST['pyear']) AND !empty($_POST['pyear']))
            $hquery=mysqli_query($con,"update copyright set pyear='".$_POST['pyear']."' where username='$username'&& pubname='$pubname' ");
	   
	   
	   
	   if(isset($_POST['crcopyright']) AND !empty($_POST['crcopyright']))
            $hquery=mysqli_query($con,"update copyright set crcopyright='".$_POST['crcopyright']."' where username='$username'&& crdiary='$crdiary' ");
       if(isset($_POST['crtopic']) AND !empty($_POST['crtopic']))
            $hquery=mysqli_query($con,"update copyright set crtopic='".$_POST['crtopic']."' where username='$username'&& crdiary='$crdiary' ");
       if(isset($_POST['crdoi']) AND !empty($_POST['crdoi']))
            $hquery=mysqli_query($con,"update copyright set crdoi='".$_POST['crdoi']."' where username='$username'&& crdiary='$crdiary' ");
       $date=$_POST['jdate'];
       //$date = str_replace('/', '-', $date);
       //$date = date("Y-m-d", strtotime($date));
       if (isset($_POST['jdate'])  AND !empty($_POST['jdate']))
            $hquery=mysqli_query($con,"update copyright set jdate='$date' where username='$username' && crdiary='$crdiary'");
       if(isset($_POST['abstract']) AND !empty($_POST['abstract']))
            $hquery=mysqli_query($con,"update copyright set abstract='".$_POST['abstract']."' where username='$username'&& crdiary='$crdiary' ");
       if (isset($_POST['s1_name'])  AND !empty($_POST['s1_name']))
            $hquery=mysqli_query($con,"update copyright set s1_name='".$_POST['s1_name']."' where username='$username'&& crdiary='$crdiary'");
       if (isset($_POST['s1_institute'])  AND !empty($_POST['s1_institute']))
            $hquery=mysqli_query($con,"update copyright set s1_institute='".$_POST['s1_institute']."' where username='$username'&& crdiary='$crdiary'");
       if (isset($_POST['s1_contact'])  AND !empty($_POST['s1_contact']))
            $hquery=mysqli_query($con,"update copyright set s1_contact='".$_POST['s1_contact']."' where username='$username'&& crdiary='$crdiary'");
       if (isset($_POST['s1_dept'])  AND !empty($_POST['s1_dept']))
            $hquery=mysqli_query($con,"update copyright set s1_dept='".$_POST['s1_dept']."' where username='$username'&& crdiary='$crdiary'");
       if (isset($_POST['s2_name'])  AND !empty($_POST['s2_name']))
            $hquery=mysqli_query($con,"update copyright set s2_name='".$_POST['s2_name']."' where username='$username'&& crdiary='$crdiary'");
       if (isset($_POST['s2_institute'])  AND !empty($_POST['s2_institute']))
            $hquery=mysqli_query($con,"update copyright set s2_institute='".$_POST['s2_institute']."' where username='$username'&& crdiary='$crdiary'");
       if (isset($_POST['s2_contact'])  AND !empty($_POST['s2_contact']))
            $hquery=mysqli_query($con,"update copyright set s2_contact='".$_POST['s2_contact']."' where username='$username'&& crdiary='$crdiary'");
       if (isset($_POST['s2_dept'])  AND !empty($_POST['s2_dept']))
            $hquery=mysqli_query($con,"update copyright set s2_dept='".$_POST['s2_dept']."' where username='$username'&& crdiary='$crdiary'");
       if (isset($_POST['s3_name'])  AND !empty($_POST['s3_name']))
            $hquery=mysqli_query($con,"update copyright set s3_name='".$_POST['s3_name']."' where username='$username'&& crdiary='$crdiary'");
       if (isset($_POST['s3_institute'])  AND !empty($_POST['s3_institute']))
            $hquery=mysqli_query($con,"update copyright set s3_institute='".$_POST['s3_institute']."' where username='$username'&& crdiary='$crdiary'");
       if (isset($_POST['s3_contact'])  AND !empty($_POST['s3_contact']))
            $hquery=mysqli_query($con,"update copyright set s3_contact='".$_POST['s3_contact']."' where username='$username'&& crdiary='$crdiary'");
       if (isset($_POST['s3_dept'])  AND !empty($_POST['s3_dept']))
            $hquery=mysqli_query($con,"update copyright set s3_dept='".$_POST['s3_dept']."' where username='$username'&& crdiary='$crdiary'");
       if (isset($_POST['s4_name'])  AND !empty($_POST['s4_name']))
            $hquery=mysqli_query($con,"update copyright set s4_name='".$_POST['s4_name']."' where username='$username'&& crdiary='$crdiary'");
       if (isset($_POST['s4_institute'])  AND !empty($_POST['s4_institute']))
            $hquery=mysqli_query($con,"update copyright set s4_institute='".$_POST['s4_institute']."' where username='$username'&& crdiary='$crdiary'");
       if (isset($_POST['s4_contact'])  AND !empty($_POST['s4_contact']))
            $hquery=mysqli_query($con,"update copyright set s4_contact='".$_POST['s4_contact']."' where username='$username'&& crdiary='$crdiary'");
       if (isset($_POST['s4_dept'])  AND !empty($_POST['s4_dept']))
            $hquery=mysqli_query($con,"update copyright set s4_dept='".$_POST['s4_dept']."' where username='$username'&& crdiary='$crdiary'");
        
    }
    
 //header("location:pub.php");
	?>