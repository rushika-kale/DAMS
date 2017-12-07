<html>
<body>
<?php
include 'rva_common.php';


$sessi=$_POST['session'];

$squery= mysqli_query($con,"insert into faculty.sessions(session) values ('$sessi')");

header('Location:rva_addsession.php?success=1');
mysqli_close($con);
?>
</body>
</html>