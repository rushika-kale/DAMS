<?php
	include 'rva_common.php';
	
	
	if($_POST['submit1'])
		$submit=1;
	else if($_POST['submit2'])
		$submit=2;
		
	include ('rva_date_conversion.php') ;
	
	if($_POST['faculty'])
		$faculty=1;
	else
		$faculty=0;
	if($_POST['student'])
		$student=1;
	else
		$student=0;
	
	header("Location:rva_awardsreport_preview2.php?submit=$submit&range=$range&from=$from&to=$to&faculty=$faculty&student=$student");
	echo $s2016_17."<br>";
	echo $s2015_16."<br>";
	echo $s2014_15."<br>";
	echo $s2013_14."<br>";
	echo $s2012_13."<br>";
	
?>