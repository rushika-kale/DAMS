<?php
	include 'rva_common.php';
	$session=$_POST['session'];
	$name=$_POST['name'];
	$vloc=$_POST['vloc'];
	$fdate=$_POST['fdate'];
	$todate=$_POST['todate'];
	$yearsem=$_POST['yearsem'];
	$npart=$_POST['npart'];
	$agency=$_POST['agency'];
	$fee=$_POST['fee'];
	$mode=$_POST['mode'];
	$tarea=$_POST['tarea'];
	
	/*echo $session;
	echo "<br>";
	echo $name;
	echo "<br>";
	echo $vloc;
	echo "<br>";
	echo $fdate;
	echo "<br>";
	echo $todate;
	echo "<br>";
	echo $yearsem;
	echo "<br>";
	echo $npart;
	echo "<br>";
	echo $agency;
	echo "<br>";
	echo $fee;
	echo "<br>";
	echo $mode;
	echo "<br>";
	echo $tarea;
	echo "<br>";*/
	
	mysqli_query($con,"insert into organisedindustry (session, name, vloc, fdate, todate, yearsem, npart, agency, fee, mode, tarea) values ('$session', '$name', '$vloc', '$fdate', '$todate', '$yearsem', '$npart', '$agency', '$fee', '$mode', '$tarea')");
	header("Location: rva_add_organized.php?success=1");
?>