
<?php
	include 'rva_common.php';
	
	if($_POST['submit1'])
		$submit=1;
	else if($_POST['submit2'])
		$submit=2;
	
	include 'rva_date_conversion.php';
	
	
	if($_POST['name'])
		$name=1;
	else
		$name=0;
	if($_POST['tevent'])
		$tevent=1;
	else
		$tevent=0;
	if($_POST['nevent'])
		$nevent=1;
	else
		$nevent=0;
	if($_POST['nspeaker'])
		$nspeaker=1;
	else
		$nspeaker=0;
	if($_POST['date'])
		$date=1;
	else
		$date=0;
	if($_POST['days'])
		$days=1;
	else
		$days=0;
	if($_POST['npart'])
		$npart=1;
	else
		$npart=0;
	if($_POST['agency'])
		$agency=1;
	else
		$agency=0;
	if($_POST['tarea'])
		$tarea=1;
	else
		$tarea=0;
	
	header("Location:rva_seminar_preview2.php?submit=$submit&from=$from&to=$to&range=$range&name=$name&tevent=$tevent&nevent=$nevent&nspeaker=$nspeaker&date=$date&days=$days&npart=$npart&agency=$agency&tarea=$tarea");
	echo $s2015_16."<br>";
	echo $s2014_15."<br>";
	echo $s2013_14."<br>";
	echo $s2012_13."<br>";
	echo $name."<br>";
	echo $tevent."<br>";
	echo $nevent."<br>";
	echo $npart."<br>";
	echo $nspeaker."<br>";
	echo $date."<br>";
	echo $days."<br>";
	echo $agency."<br>";
	echo $tarea."<br>";
?>