<?php
	include 'rva_common.php';
	
	if($_POST['submit1'])
		$submit=1;
	else if($_POST['submit2'])
		$submit=2;
	if($_POST['workshop'])
		$workshop=1;
	else
		$workshop=0;
	if($_POST['fdpsttp'])
		$fdpsttp=1;
	else
		$fdpsttp=0;
	/*if($_POST['conference'])
		$conference=1;
	else
		$conference=0;*/
	if($_POST['seminar'])
		$seminar=1;
	else
		$seminar=0;
	if($_POST['indus'])
		$indus=1;
	else
		$indus=0;
	
	header("Location:rva_count_preview2.php?submit=$submit&workshop=$workshop&fdpsttp=$fdpsttp&seminar=$seminar&indus=$indus");
	
?>