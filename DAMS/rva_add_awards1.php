<?php
	include 'rva_common.php';
	   
	
	
	$session=$_POST['session'];
	$category=$_POST['category'];
	if($category=="Faculty")
		$yearsem=null;
	else
		$yearsem=$_POST['yearsem'];
	$name=$_POST['name'];
	$atype=$_POST['atype'];
	$adetail=$_POST['adetail'];
	$adate=$_POST['adate'];
	$aby=$_POST['aby'];
	$prize=$_POST['prize'];
	
	/*echo $session;
	echo "<br>";
	echo $category;
	echo "<br>";
	echo $yearsem;
	echo "<br>";
	echo $name;
	echo "<br>";
	echo $atype;
	echo "<br>";
	echo $adetail;
	echo "<br>";
	echo $adate;
	echo "<br>";
	echo $prize;
	echo "<br>";*/
	
	mysqli_query($con,"insert into awards (session, category, yearsem, name, atype, adetail, adate, aby, prize) values ('$session', '$category', '$yearsem', '$name', '$atype', '$adetail', '$adate', '$aby', '$prize')");
	header("Location: rva_add_awards.php?success=1");
?>