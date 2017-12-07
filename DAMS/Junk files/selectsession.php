<?php
	$res=mysql_query("select * from sessions order by sid desc");
	echo '<option>Select:-</option>';
	while($row=mysql_fetch_array($res))
	{
			echo '<option>'.$row['session'].'</option>';
	}
?>