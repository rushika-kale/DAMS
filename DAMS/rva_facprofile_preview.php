<?php
	include 'rva_common.php';
	
	
	if($_POST['submit1'])
		$submit=1;
	else if($_POST['submit2'])
		$submit=2;
	if($_POST['s2012_13'])
		$s2012_13=1;
	else
		$s2012_13=2;
	if($_POST['s2013_14'])
		$s2013_14=1;
	else
		$s2013_14=2;
	if($_POST['s2014_15'])
		$s2014_15=1;
	else
		$s2014_15=2;
	if($_POST['s2015_16'])
		$s2015_16=1;
	else
		$s2015_16=2;
	if($_POST['s2016_17'])
		$s2016_17=1;
	else	
		$s2016_17=2;
	
	
	header("Location:rva_facprofile_preview2.php?submit=$submit&s2016_17=$s2016_17&s2015_16=$s2015_16&s2014_15=$s2014_15&s2013_14=$s2013_14&s2012_13=$s2012_13");
	echo $s2016_17."<br>";
	echo $s2015_16."<br>";
	echo $s2014_15."<br>";
	echo $s2013_14."<br>";
	echo $s2012_13."<br>";
	
?>