<?php

//Start session
session_start();
 
//Check whether the session variable SESS_MEMBER_ID is present or not
if(!isset($_SESSION['username1']) || (trim($_SESSION['username1']) == '')) {
header("location: home.php");
exit();}
$username=$_SESSION['username1'];

	 					$con=mysql_connect("localhost","root") or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db("faculty",$con) or die("Failed to connect to MySQL: " . mysql_error());
	 $username=$_SESSION['username1'];
$ac=mysql_fetch_array(mysql_query("SELECT access FROM faculty.facdb WHERE username='$username'"));

if (isset($_POST['date1xx'])  AND !empty($_POST['date1xx']))
	{
	$date1=$_POST['date1xx'];
		//$hquery=mysql_query("update workshop set w_date='".$_POST['date1xx']."' where username='$username' && wname='$wname'");
		//$query= "INSERT INTO workshop (w_date) VALUES('". $date ."') where username='$username'";
	}
if (isset($_POST['date2xx'])  AND !empty($_POST['date2xx']))
	{
	$date2=$_POST['date2xx'];
		//$hquery=mysql_query("update workshop set w_date='".$_POST['date1xx']."' where username='$username' && wname='$wname'");
		//$query= "INSERT INTO workshop (w_date) VALUES('". $date ."') where username='$username'";
	}
if (isset($_POST['sort'])  AND !empty($_POST['sort']))
{
$sort=$_POST['sort'];
}	
if (isset($_POST['format'])  AND !empty($_POST['format']))
{
$format=$_POST['format'];
}
if($format=='excel')
{
	if (isset($_POST['sort'])  AND !empty($_POST['sort']))
	{
	$sort=$_POST['sort'];
		if (isset($_POST['date1xx'])  AND !empty($_POST['date1xx']))
			{
				$date1=$_POST['date1xx'];
				if (isset($_POST['date2xx'])  AND !empty($_POST['date2xx']))
					{
						$date2=$_POST['date2xx'];
						$query = "SELECT wname as workshop_Name,wvenue as Workshop_Place,w_date as Workshop_date,days as NO_of_Days  FROM workshop WHERE username='$username' AND (w_date >= '$date1' AND w_date <= '$date2') ORDER BY '$sort' DESC";
					}
				else
					{
							$query = "SELECT wname as workshop_Name,wvenue as Workshop_Place,w_date as Workshop_date,days as NO_of_Days  FROM workshop WHERE username='$username' AND w_date >= '$date1' ORDER BY '$sort' DESC";
				
					}
			}
		elseif(isset($_POST['date2xx'])  AND !empty($_POST['date2xx']))
			{
				$date2=$_POST['date2xx'];
						$query = "SELECT wname as workshop_Name,wvenue as Workshop_Place,w_date as Workshop_date,days as NO_of_Days FROM workshop WHERE username='$username' AND w_date <= '$date2' ORDER BY '$sort' DESC";
			}
		else
			{
						$query = "SELECT wname as workshop_Name,wvenue as Workshop_Place,w_date as Workshop_date,days as NO_of_Days FROM workshop WHERE username='$username' ORDER BY '$sort' DESC";
			}
	}	

// Create your database query
// Execute the database query
$result = mysql_query($query) or die(mysql_error());
/*
// Instantiate a new PHPExcel object
require_once 'Classes/PHPExcel.php';
$objPHPExcel = new PHPExcel(); 
// Set the active Excel worksheet to sheet 0
$objPHPExcel->setActiveSheetIndex(0); 
// Initialise the Excel row number
$rowCount = 1; 
// Iterate through each result from the SQL query in turn
// We fetch each database result row into $row in turn
while($row = mysql_fetch_array($result)){ 
    // Set cell An to the "name" column from the database (assuming you have a column called name)
    //    where n is the Excel row number (ie cell A1 in the first row)
    $objPHPExcel->getActiveSheet()->SetCellValue('A'.$rowCount, $row['name']); 
    // Set cell Bn to the "age" column from the database (assuming you have a column called age)
    //    where n is the Excel row number (ie cell A1 in the first row)
    $objPHPExcel->getActiveSheet()->SetCellValue('B'.$rowCount, $row['age']); 
    // Increment the Excel row counter
    $rowCount++; 
} 

// Instantiate a Writer to create an OfficeOpenXML Excel .xlsx file
$objWriter = new PHPExcel_Writer_Excel2007($objPHPExcel); 
// Write the Excel file to filename some_excel_file.xlsx in the current directory
$objWriter->save('spandan.xlsx'); 

*/







// Instantiate a new PHPExcel object 
require_once 'Classes/PHPExcel.php';
$objPHPExcel = new PHPExcel();  
// Set the active Excel worksheet to sheet 0 
$objPHPExcel->setActiveSheetIndex(0);  
// Initialise the Excel row number 
$rowCount = 1;  

//start of printing column names as names of MySQL fields  
$column = 'A';
for ($i = 0; $i < mysql_num_fields($result); $i++)  
{
    $objPHPExcel->getActiveSheet()->setCellValue($column.$rowCount, mysql_field_name($result,$i));
    $column++;
}
//end of adding column names  

//start while loop to get data  
$rowCount = 2;  
while($row = mysql_fetch_row($result))  
{  
    $column = 'A';
    for($j=0; $j<mysql_num_fields($result);$j++)  
    {  
        if(!isset($row[$j]))  
            $value = NULL;  
        elseif ($row[$j] != "")  
            $value = strip_tags($row[$j]);  
        else  
            $value = "";  

        $objPHPExcel->getActiveSheet()->setCellValue($column.$rowCount, $value);
        $column++;
    }  
    $rowCount++;
} 


// Redirect output to a client’s web browser (Excel5) 
header('Content-Type: application/vnd.ms-excel'); 
header('Content-Disposition: attachment;filename="excel.xls"'); 
header('Cache-Control: max-age=0'); 
$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel5'); 
$objWriter->save('php://output');
mysqli_close($con);
}
elseif($format=='pdf')
{
	require('fpdf.php');
	class PDF extends FPDF
	{
		function Header()
			{
			
			}
	}
}
?>
