<html>
<body>
<?php
include 'rva_common.php';

	//echo '11111111111111111111111';
	if(isset($_POST['upload']))
		$check = $_POST['upload'];
	else 
		$check=2;
	
	
	
	if(isset($_POST['tech']))
		$tech=1;
	else
		$tech=0;
	if(isset($_POST['graph']))
		$graph=1;
	else
		$graph=0;
	if(isset($_POST['fetchb']))
		$fetchb=1;
	else
		$fetchb=0;
	//echo '2222222222222222222222';
	$detail=$_POST['detail'];
	$critical=$_POST['cbug'];
	//if($_POST['cbug'])
	//	$critical=1;
	//else
	//	$critical=0;


	$uploadOk = 1;


//echo '33333333333333333333333';
if($check==1)
{
		$target_dir = "reportbug/";
		$target_file = $target_dir . basename($_FILES["file"]["name"]);
		$finalfile=$_FILES['file']['name']; 


		if ($uploadOk == 0)
		{
			echo "Sorry, your file was not uploaded.";
		header('Location:rva_bug.php?success=0');
		// if everything is ok, try to upload file
		} 
		else 
		{
			if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file))
				{
				echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
				$hquery=mysqli_query($con,"INSERT INTO faculty.reportbug (username, tech, graph, fetchb, detail, critical, filename) values ('$username','$tech', '$graph', '$fetchb', '$detail','$critical','$finalfile')");
				header('Location:rva_bug.php?success=1');
				} 
			else 
				{

					header('Location:rva_bug.php?success=0');
				}
		}

}
//echo '44444444444444444444444';
if($check==2)
{
	$hquery=mysqli_query($con,"INSERT INTO faculty.reportbug (username, tech, graph, fetchb, detail, critical) values ('$username','$tech', '$graph', '$fetchb', '$detail','$critical')");
	header('Location:rva_bug.php?success=1');
}



mysqli_close($con);
?>
</body>
</html>