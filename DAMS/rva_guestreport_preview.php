
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
	if($_POST['category'])
		$category=1;
	else
		$category=0;
	if($_POST['organizer'])
		$organizer=1;
	else
		$organizer=0;
	if($_POST['topic'])
		$topic=1;
	else
		$topic=0;
    if($_POST['speaker'])
		$speaker=1;
	else
		$speaker=0;

    if($_POST['affiliate'])
		$affiliate=1;
	else
		$affiliate=0;

    if($_POST['adate'])
		$adate=1;
	else
		$adate=0;
    if($_POST['expense'])
		$expense=1;
	else
		$expense=0;
    if($_POST['feedback'])
		$feedback=1;
	else
		$feedback=0;

	
	header("Location:rva_guestreport_preview2.php?submit=$submit&s2015_16=$s2015_16&s2014_15=$s2014_15&s2013_14=$s2013_14&s2012_13=$s2012_13&category=$category&organizer=$organizer&speaker=$speaker&topic=$topic&affiliate=$affiliate&adate=$adate&expense=$expense&feedback=$feedback");
	//echo $s2016_17."<br>";
	echo $s2015_16."<br>";
	echo $s2014_15."<br>";
	echo $s2013_14."<br>";
	echo $s2012_13."<br>";
    echo $category."<br>";
    echo $organizer."<br>";
	echo $speaker."<br>";
	echo $topic."<br>";
	echo $affiliate."<br>";
	echo $adate."<br>";
	echo $expense."<br>";
	echo $feedback."<br>";
	
?>