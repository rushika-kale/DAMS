<table border="1">
    <tr>
    	<th>Sr.NO.</th>
		<th>Name</th>
		<th>Contact No.</th>
		<th>Joining Date</th>
		<th>Designation</th>

		
	</tr>
	<?php
	//connection to mysql
	$con=mysqli_connect("localhost","root","","faculty") or die("Failed to connect to MySQL: " . mysqli_error());
	    
	
	//query get data
	$sql=mysqli_query($con,"Select s.username,p.sal,p.f_name,p.m_name,p.l_name,p.con from profile p, fac_session s where p.username=s.username");
	$i=1;
	$flag=0;
	$fc=0;
	$count=0;
	while($data = mysqli_fetch_assoc($sql))
	{
		$un=$data['username'];
		//if($fc==0)
		//{
			$ress=mysqli_query($con,"Select s.username,p.sal,p.f_name,p.m_name,p.l_name,p.con from profile p, fac_session s where p.username=s.username");
			//$count=mysqli_num_rows($ress);
			//echo $count;
			$flag=1;
			$fc=1;
		//}
		$res2=mysqli_query($con,"Select * FROM profile WHERE username='$un'");
		$row2=mysqli_fetch_array($res2);
		$sal=$row2['sal'];
		$fname=$row2['f_name'];
		$lname=$row2['l_name'];
		echo '<tr>';
		//if($flag==1)
		//{
			echo "<td style='vertical-align:middle;'>".$i++."</td>";
			
			echo "<td style='vertical-align:middle;'>".$sal." ".$fname." ".$lname."</td>";
		
			$flag=0;
		//}
		
										
		/*$wname=$data['wname'];
		$w_date=$data['w_date'];
		$w_date2=$data['w_date2'];
		$choicework=mysqli_query($con,"Select * from workshop where w_date='$w_date' and w_date2='$w_date2' and wname='$wname'");
		$choicesem=mysqli_query($con,"Select * from seminar where w_date='$w_date' and w_date2='$w_date2' and wname='$wname'");
		$choicefdp=mysqli_query($con,"Select * from fdp where w_date='$w_date' and w_date2='$w_date2' and wname='$wname'");
		//$choicesttp=mysqli_query($con,"Select * from sttp where w_date='$w_date' and w_date2='$w_date2' and wname='$wname'");
		if(mysqli_num_rows($choicework))
			echo "<td style='vertical-align:middle;'>Workshop</td>";
		else if(mysqli_num_rows($choicesem))
			echo "<td style='vertical-align:middle;'>Seminar</td>";
		else if(mysqli_num_rows($choicefdp))
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
		*/
	}
	?>
</table>