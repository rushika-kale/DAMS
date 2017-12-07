<?php
	//Start session
	session_start();

	//Check whether the session variable SESS_MEMBER_ID is present or not
	if(!isset($_SESSION['username1']) || (trim($_SESSION['username1']) == ''))
	{
		header('location: index.php');
		exit();
	}
	$username=$_SESSION['username1'];
	$con=mysqli_connect("localhost","root","","faculty") or die("Failed to connect to MySQL: " . mysqli_error());







	$ac=mysqli_fetch_array(mysqli_query($con,"SELECT access FROM faculty.facdb WHERE username='$username'"));
	$res=mysqli_query($con,"Select * FROM profile WHERE username='$username'");
	$row=mysqli_fetch_array($res);
	$fname=$row['f_name'];

	$aquery = mysqli_fetch_array(mysqli_query($con,"SELECT * FROM faculty.workshop ORDER BY userid DESC LIMIT 1"));
	$userid=$aquery['userid'];




	if($_SESSION['access']==1)
		$condition="";
	else
		$condition=" and username='".$username."'";
?>