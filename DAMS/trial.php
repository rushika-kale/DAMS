<?php

/**
 * @author lolkittens
 * @copyright 2015
 */
$con=mysql_connect("localhost","root") or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db("faculty",$con) or die("Failed to connect to MySQL: " . mysql_error());
$date = mysql_real_escape_string($_POST['cities']);
$new_date = date('Y-m-d',strtotime($date));
 echo $new_date;

$u=11;
$ac=mysql_fetch_array(mysql_query("SELECT date1 FROM faculty.dated WHERE na='$u'"));
$dd=date('d-m-Y',strtotime($ac['date1']));
echo $dd;
?>