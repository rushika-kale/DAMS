<?php
// The function header by sending raw excel
header("Content-type: application/vnd-ms-excel");
 
// Defines the name of the export file "codelution-export.xls"
header("Content-Disposition: attachment; filename=Attended-combined.xls");
 
// Add data table
include 'rva_all_excel_2_A.php';
?>