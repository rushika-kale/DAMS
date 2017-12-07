<html>
<body>
<?php
include 'rva_common.php';

if(isset($_POST['upload']))
	$check = $_POST['upload'];
else
	$check=2;

$title = $_POST['title'];
$content = $_POST['content'];
$uploadOk = 1;



if($check==1)
{
		$target_dir = "notifiles/";
		$target_file = $target_dir . basename($_FILES["file"]["name"]);
		$finalfile=$_FILES['file']['name']; 
		if (file_exists($target_file))
			{
				echo "Sorry, file already exists.";
				header('Location:rva_notification.php?success=0');
				$uploadOk = 0;
			} 


		if ($uploadOk == 0)
		{
			echo "Sorry, your file was not uploaded.";
		header('Location:rva_notification.php?success=0');
		// if everything is ok, try to upload file
		} 
		else 
		{
			if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file))
				{
				echo "The file ". basename( $_FILES["file"]["name"]). " has been uploaded.";
				$hquery=mysqli_query($con,"INSERT INTO faculty.notifier (username,title, text, filename) values ('$username','$title','$content','$finalfile')");
				header('Location:rva_notification.php?success=1');
				} 
			else 
				{

					header('Location:rva_notification.php?success=0');
				}
		}

}
if($check==2)
{
	$hquery=mysqli_query($con,"INSERT INTO faculty.notifier (username,title, text) values ('$username','$title','$content')");
	header('Location:rva_notification.php?success=1');
}



mysqli_close($con);
?>
</body>
</html>