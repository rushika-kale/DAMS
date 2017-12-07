<?php
	include 'rva_common.php';
	
	include 'rva_date_conversion.php';
	
	
	if($_POST['seminar'])
		$seminar=1;
	else
		$seminar=0;
	if($_POST['name'])
		$name=1;
	else
		$name=0;
	if($_POST['place'])
		$place=1;
	else	
		$place=0;
	if($_POST['date'])
		$date=1;
	else	
		$date=0;
	if($_POST['days'])
		$days=1;
	else	
		$days=0;
	
	header("Location:rva_atten_seminar_preview2.php?seminar=$seminar&from=$from&to=$to&range=$range&name=$name&place=$place&date=$date&days=$days");
	echo $from."<br>";
	echo $to."<br>";
	echo $seminar."<br>";
	echo $name."<br>";
	echo $place."<br>";
	echo $date."<br>";
	echo $days."<br>";
	
?>