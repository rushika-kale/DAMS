<?php
	$res=mysqli_query($con,"select * from sessions order by sid desc");
	echo '<option>Select:-</option>';
	while($row=mysqli_fetch_array($res))
	{
			echo '<option>'.$row['session'].'</option>';
	}
?>