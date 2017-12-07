
<?php
	include 'rva_common.php';
	
	if($_POST['submit1'])
		$submit=1;
	else if($_POST['submit2'])
		$submit=2;
	include 'rva_date_conversion.php';
	
	if($_POST['pfaculty'])
		$pfaculty=1;
	else
		$pfaculty=0;
	if($_POST['dfaculty'])
		$dfaculty=1;
	else
		$dfaculty=0;
	if($_POST['title'])
		$title=1;
	else
		$title=0;
	if($_POST['fdate'])
		$fdate=1;
	else
		$fdate=0;
	if($_POST['scheme'])
		$scheme=1;
	else
		$scheme=0;
	if($_POST['amount'])
		$amount=1;
	else
		$amount=0;
	if($_POST['status'])
		$status=1;
	else
		$status=0;
	if($_POST['tarea'])
		$tarea=1;
	else
		$tarea=0;
	
	header("Location:rva_funproject_preview2.php?submit=$submit&from=$from&to=$to&range=$range&pfaculty=$pfaculty&dfaculty=$dfaculty&title=$title&fdate=$fdate&scheme=$scheme&amount=$amount&status=$status&tarea=$tarea");
	/*echo $s2015_16."<br>";
	echo $s2014_15."<br>";
	echo $s2013_14."<br>";
	echo $s2012_13."<br>";*/
    echo $from."<br>";
	echo $to."<br>";
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