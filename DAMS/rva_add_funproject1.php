<?php
	include 'rva_common.php';
	
	
	$session=$_POST['session'];
	$pfaculty=$_POST['pfaculty'];
	$dfaculty=$_POST['dfaculty'];
	$title=$_POST['title'];
	$fdate=$_POST['fdate'];
	$scheme=$_POST['scheme'];
	$amount=$_POST['amount'];
	$status=$_POST['status'];
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
	
	mysqli_query($con,"insert into funproject (session, pfaculty, dfaculty, title, fdate, scheme, amount, tarea, status) values ('$session', '$pfaculty', '$dfaculty', '$title', '$fdate', '$scheme', '$amount', '$tarea', '$status')");
	header("Location: rva_add_funproject.php?success=1");
?>