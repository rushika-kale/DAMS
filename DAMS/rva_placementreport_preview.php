<?php
	include 'rva_common.php';
	   
	if($_POST['submit1'])
		$submit=1;
	else if($_POST['submit2'])
		$submit=2;
	if($_POST['s2012_13'])
		$s2012_13="2012-13";
	else
		$s2012_13=2;
	if($_POST['s2013_14'])
		$s2013_14="2013-14";	
	else
		$s2013_14=2;
	if($_POST['s2014_15'])
		$s2014_15="2014-15";
	else
		$s2014_15=2;
	if($_POST['s2015_16'])
		$s2015_16="2015-16";
	else
		$s2015_16=2;
	if($_POST['ug'])
		$ug=1;
	else
		$ug=0;
	if($_POST['pg'])
		$pg=1;
	else
		$pg=0;
	if($_POST['pkg'])
		$pkg=1;
	else
		$pkg=0;
	
	header("Location:rva_placementreport_preview2.php?submit=$submit&s2015_16=$s2015_16&s2014_15=$s2014_15&s2013_14=$s2013_14&s2012_13=$s2012_13&ug=$ug&pg=$pg&pkg=$pkg");
	//echo $s2016_17."<br>";
	echo $s2015_16."<br>";
	echo $s2014_15."<br>";
	echo $s2013_14."<br>";
	echo $s2012_13."<br>";
	
?>