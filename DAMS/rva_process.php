<html>
<body>
<?php
	include 'rva_common.php';


	$username=$_POST['username'];
	$pass=$_POST['password'];
	$ac=$_POST['access'];
	if($ac=="Admin")
		$ac=1;
	else
		$ac=0;
	$squery= mysqli_query($con,"insert into faculty.facdb(username,password,access) values ('$username', '$pass','$ac')");

	$nquery=mysqli_query($con,"insert into faculty.profile(username) values ('$username')");
	$nquery=mysqli_query($con,"insert into faculty.fac_info(username) values ('$username')");
	$nquery=mysqli_query($con,"insert into faculty.fac_qual(username) values ('$username')");
	$nquery=mysqli_query($con,"insert into faculty.facimg(username) values ('$username')");

	$nquery=mysqli_query($con,"insert into faculty.fac_session(username) values ('$username')");

	header('Location:rva_createuser.php?success=1');
	mysqli_close($con);
?>
</body>
</html>