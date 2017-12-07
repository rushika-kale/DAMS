<?php
?><html>
<body>
<?php
$con=mysql_connect("localhost","root","");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  $db=mysql_select_db("faculty", $con);
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }


$username=$_POST['username'];
$pass=$_POST['password'];
$ac=$_POST['access'];
if($ac=="Admin")
	$ac=1;
else
	$ac=0;
$squery= mysql_query("insert into faculty.facdb(username,password,access) values ('$username', '$pass','$ac')");

$nquery=mysql_query("insert into faculty.profile(username) values ('$username')");
$nquery=mysql_query("insert into faculty.fac_info(username) values ('$username')");
$nquery=mysql_query("insert into faculty.fac_qual(username) values ('$username')");
$nquery=mysql_query("insert into faculty.facimg(username) values ('$username')");

$nquery=mysql_query("insert into faculty.fac_session(username) values ('$username')");

header('Location:ucreated.php');
mysql_close($con);
?>
</body>
</html>