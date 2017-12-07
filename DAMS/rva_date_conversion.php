<?php
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
	?>