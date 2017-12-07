
<?php

	include 'rva_common.php';
	
	$id=$_GET['id'];

	$_SESSION['current_page'] = $_SERVER['HTTP_REFERER'];
					$request=mysqli_query($con, "update reportbug set solved='1' where id='$id'");
					header("Location: ". $_SESSION['current_page']);

?>

