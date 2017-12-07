
<?php
	include 'rva_common.php';
	
	if($_POST['submit1'])
		$submit=1;
	else if($_POST['submit2'])
		$submit=2;
	
	if($_POST['range'])
		$range=$_POST['range'];
	else
		$range=0;

	if( $range==1)
	{
		$from_date=$_POST['from_session'];//from date create
		list($year1, $year2) = split('[-]', $from_date);
		$from = date_create('01-06-'.$year1);
		$from = $from->format('Y/m/d');

		
		$to_date=$_POST['to_session'];  // to date create
		list($year1, $year2) = split('[-]', $to_date);
		$year2=$year1+1;
		$to = date_create('31-05-'.$year2);
		$to = $to->format('Y/m/d');
	

	
		
	}
	if( $range==2)
	{
		$from=$_POST['from'];

		$to=$_POST['to'];
	}
	
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
	header("Location:rva_fdpsttp_preview2.php?submit=$submit&from=$from&to=$to&name=$name&tevent=$tevent&nevent=$nevent&nspeaker=$nspeaker&date=$date&days=$days&npart=$npart&agency=$agency&tarea=$tarea");
	//header("Location:rva_fdpsttp_preview2.php?submit=$submit&s2015_16=$s2015_16&s2014_15=$s2014_15&s2013_14=$s2013_14&s2012_13=$s2012_13&name=$name&tevent=$tevent&nevent=$nevent&nspeaker=$nspeaker&date=$date&days=$days&npart=$npart&agency=$agency&tarea=$tarea");
/*	echo $s2015_16."<br>";
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
	echo $tarea."<br>";*/
?>