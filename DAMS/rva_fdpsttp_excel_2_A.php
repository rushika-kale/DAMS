<table border="1">
    <tr>
    	<th>Sr.NO.</th>
		<th>Name</th>
		<th>Type</th>
		<th>Event Name</th>
		<th>Venue</th>
		<th>Date</th>
		
	</tr>
	<?php
	//connection to mysql
	$con=mysqli_connect("localhost","root","","faculty") or die("Failed to connect to MySQL: " . mysqli_error());
	    
	
	//query get data
	$sql=mysqli_query($con,"Select * from fdp
					union
					Select * from sttp
					order by username asc");
	$i=1;
	$flag=0;
	$fc=0;
	$count=0;
	while($data = mysqli_fetch_assoc($sql))
	{
		$un=$data['username'];
		if($fc==0)
		{
			$ress=mysqli_query($con,"Select * from fdp where username='$un'
								union
								Select * from sttp where username='$un'");
			$count=mysqli_num_rows($ress);
			//echo $count;
			$flag=1;
			$fc=1;
		}
		$res2=mysqli_query($con,"Select * FROM profile WHERE username='$un'");
		$row2=mysqli_fetch_array($res2);
		$sal=$row2['sal'];
		$fname=$row2['f_name'];
		$lname=$row2['l_name'];
		echo '<tr>';
		if($flag==1)
		{
			echo "<td rowspan=".$count." style='vertical-align:middle;'>".$i++."</td>";
			
			echo "<td rowspan=".$count." style='vertical-align:middle;'>".$sal." ".$fname." ".$lname."</td>";
		
			$flag=0;
		}
		
										
		$wname=$data['wname'];
		$w_date=$data['w_date'];
		$w_date2=$data['w_date2'];
		$choicefdp=mysqli_query($con,"Select * from fdp where w_date='$w_date' and w_date2='$w_date2' and wname='$wname'");
		//$choicesttp=mysqli_query($con,"Select * from sttp where w_date='$w_date' and w_date2='$w_date2' and wname='$wname'");
		if(mysqli_num_rows($choicefdp))
			echo "<td style='vertical-align:middle;'>FDP</td>";
		else
			echo "<td style='vertical-align:middle;'>STTP</td>";
										
										
									
		
		echo '
			<td>'.$data['wname'].'</td>
			<td>'.$data['wvenue'].'</td>
			<td>'.$data['w_date']." to ".$data['w_date2'].'</td>
		</tr>
		';
		$count--;
		if($count==0)
			$fc=0;
	}
	?>
</table>