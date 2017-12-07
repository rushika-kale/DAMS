 
<?php
/**********MYSQL Settings****************/
/**********MYSQL Settings****************/


 $con=mysql_connect("localhost","root") or die("Failed to connect to MySQL: " . mysql_error());


if($con)
{

$db_selected = mysql_select_db("faculty",$con) or die("Failed to connect to MySQL: " . mysql_error());
if (!$db_selected) {
    die ('Can\'t use foo : ' . mysql_error());
}
}
else
{
    die('Not connected : ' . mysql_error());
}
?>
