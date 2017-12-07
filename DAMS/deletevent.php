
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
        
        if($table=="workshop"){
            $request=mysql_query( "DELETE  from $table where username='$username'&& wname='$title'");
        header('location: atworkshop.php');}
        if($table=="organisedwork"){
            $request=mysql_query( "DELETE  from $table where username='$username'&& name='$title'");
        header('location: orworkshop.php');}
        if($table=="seminar"){
            $request=mysql_query( "DELETE  from $table where username='$username'&& wname='$title'");
        header('location: atseminar.php');}
        if($table=="organisedsem"){
            $request=mysql_query( "DELETE  from $table where username='$username'&& name='$title'");
        header('location: orseminar.php');}
        if($table=="fdp"){
            $request=mysql_query( "DELETE  from $table where username='$username'&& wname='$title'");
        header('location: atfdp.php');}
        if($table=="organisedfdp"){
            $request=mysql_query( "DELETE  from $table where username='$username'&& name='$title'");
        
        header('location: orfdp.php');}
        if($table=="sttp"){
            $request=mysql_query( "DELETE  from $table where username='$username'&& wname='$title'");
        header('location: atsttp.php');}
        if($table=="organisedsttp"){
            $request=mysql_query( "DELETE  from $table where username='$username'&& name='$title'");
        header('location: orsttp.php');}
    }
    
    else
    header('location: error.php');
}



?>

