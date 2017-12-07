<?php

	include 'rva_common.php'; 


	$ugnumstud= $_POST['ugnumstud'];
	$session = $_POST['session'];
	$hquery=mysqli_query($con,"insert into placement(session,ugnumstud) values ('$session','$ugnumstud')");


	if (isset($_POST['ugnumeligi'])  AND !empty($_POST['ugnumeligi']))
	$hquery=mysqli_query($con,"update placement set ugnumeligi='".$_POST['ugnumeligi']."' where session='$session'&& ugnumstud='$ugnumstud'");

	if (isset($_POST['ugnumplace'])  AND !empty($_POST['ugnumplace']))
	$hquery=mysqli_query($con,"update placement set ugnumplace='".$_POST['ugnumplace']."' where session='$session'&& ugnumstud='$ugnumstud'");

	if (isset($_POST['ugnumoff'])  AND !empty($_POST['ugnumoff']))
	$hquery=mysqli_query($con,"update placement set ugnumoff='".$_POST['ugnumoff']."' where session='$session'&& ugnumstud='$ugnumstud'");

	if (isset($_POST['ugnumhigh'])  AND !empty($_POST['ugnumhigh']))
	$hquery=mysqli_query($con,"update placement set ugnumhigh='".$_POST['ugnumhigh']."' where session='$session'&& ugnumstud='$ugnumstud'");

	if (isset($_POST['ugnumentre'])  AND !empty($_POST['ugnumentre']))
	$hquery=mysqli_query($con,"update placement set ugnumentre='".$_POST['ugnumentre']."' where session='$session'&& ugnumstud='$ugnumstud'");

	if (isset($_POST['ugemploy'])  AND !empty($_POST['ugemploy']))
	$hquery=mysqli_query($con,"update placement set ugemploy='".$_POST['ugemploy']."' where session='$session'&& ugnumstud='$ugnumstud'");

	if (isset($_POST['pgnumstud'])  AND !empty($_POST['pgnumstud']))
	$hquery=mysqli_query($con,"update placement set pgnumstud='".$_POST['pgnumstud']."' where session='$session'&& ugnumstud='$ugnumstud'");

	if (isset($_POST['pgnumplace'])  AND !empty($_POST['pgnumplace']))
	$hquery=mysqli_query($con,"update placement set pgnumplace='".$_POST['pgnumplace']."' where session='$session'&& ugnumstud='$ugnumstud'");

	if (isset($_POST['pgnumoff'])  AND !empty($_POST['pgnumoff']))
	$hquery=mysqli_query($con,"update placement set pgnumoff='".$_POST['pgnumoff']."' where session='$session'&& ugnumstud='$ugnumstud'");

	if (isset($_POST['pgemploy'])  AND !empty($_POST['pgemploy']))
	$hquery=mysqli_query($con,"update placement set pgemploy='".$_POST['pgemploy']."' where session='$session'&& ugnumstud='$ugnumstud'");

	if (isset($_POST['maxsal'])  AND !empty($_POST['maxsal']))
	$hquery=mysqli_query($con,"update placement set maxsal='".$_POST['maxsal']."' where session='$session'&& ugnumstud='$ugnumstud'");

	if (isset($_POST['maxsalcom'])  AND !empty($_POST['maxsalcom']))
	$hquery=mysqli_query($con,"update placement set maxsalcom='".$_POST['maxsalcom']."' where session='$session'&& ugnumstud='$ugnumstud'");

	if (isset($_POST['minsal'])  AND !empty($_POST['minsal']))
	$hquery=mysqli_query($con,"update placement set minsal='".$_POST['minsal']."' where session='$session'&& ugnumstud='$ugnumstud'");

	if (isset($_POST['minsalcom'])  AND !empty($_POST['minsalcom']))
	$hquery=mysqli_query($con,"update placement set minsalcom='".$_POST['minsalcom']."' where session='$session'&& ugnumstud='$ugnumstud'");




	mysqli_close($con);

	header("Location: rva_placement.php?success=1");

?>