<page backtop="10mm" backbottom="10mm" backleft="10mm" backright="20mm">
    <page_header>
        <!--<table style="width: 100%; border: solid 1px black;">
            <tr>
                <td style="text-align: left;    width: 33%">html2pdf</td>
                <td style="text-align: center;    width: 34%">Test d'header</td>
                <td style="text-align: right;    width: 33%"><?php echo date('d/m/Y'); ?></td>
            </tr>
        </table>-->
    </page_header>
    <page_footer>
        <!--<table style="width: 100%; border: solid 1px black;">
            <tr>
                <td style="text-align: left;    width: 50%">html2pdf.fr</td>
                <td style="text-align: right;    width: 50%">page [[page_cu]]/[[page_nb]]</td>
            </tr>
        </table>-->
    </page_footer>
    <!--<span style="font-size: 20px; font-weight: bold">Démonstration des retour à la ligne automatique, ainsi que des sauts de page automatique</span><br>-->
    <br>
    <br>
    <table style="width: 80%;border: solid 1px #000;font-size:15px;">
        <!--<thead>
            <tr>
                <th style="width: 30%; text-align: left; border: solid 1px #337722; background: #CCFFCC">Header 1</th>
                <th style="width: 30%; text-align: left; border: solid 1px #337722; background: #CCFFCC">Header 2</th>
            </tr>
        </thead>-->
        <tbody>
<?php
$con=mysql_connect("localhost","root") or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db("faculty",$con) or die("Failed to connect to MySQL: " . mysql_error());

$res1=mysql_query("select username,sal,f_name,LEFT(m_name,1),l_name,con from faculty.profile")or die (mysql_error());
$res2=mysql_query("select username,des,j_date,j_month,j_year from faculty.fac_info")or die (mysql_error());



?>
            <tr ALIGN="CENTER">
                <th style="width: 10%; text-align: center; border: solid 1px #000">
                    Sr. No.
				 </th>
                <th style="width: 35%; text-align: center; border: solid 1px #000">
                    Name
				 </th>
                <th style="width: 45%; text-align: center; border: solid 1px #000">
                    Contact No.
				 </th>
                <th style="width: 20%; text-align: center; border: solid 1px #000">
                    Joining Date
				 </th>
                <th style="width: 30%; text-align: center; border: solid 1px #000">
                    Designation
                </th>
            </tr>
<?php

?>
        </tbody>
        <!--<tfoot>
            <tr>
                <th style="width: 30%; text-align: left; border: solid 1px #337722; background: #CCFFCC">Footer 1</th>
                <th style="width: 30%; text-align: left; border: solid 1px #337722; background: #CCFFCC">Footer 2</th>
            </tr>
        </tfoot>-->

		</table>
    
    <table style="width: 80%;border: solid 1px #000;font-size:15px;">
        <!--<thead>
            <tr>
                <th style="width: 30%; text-align: left; border: solid 1px #337722; background: #CCFFCC">Header 1</th>
                <th style="width: 30%; text-align: left; border: solid 1px #337722; background: #CCFFCC">Header 2</th>
            </tr>
        </thead>-->
        <tbody>
<?php
$id=1;
$a=1;
while(($row = mysql_fetch_array($res1,MYSQL_BOTH))&&($row1=mysql_fetch_array($res2,MYSQL_BOTH))){
 
$user=$row['username'];


?>
            <tr>
                <td style="width: 10%; text-align: center; border: solid 1px #000;">
                    <?php echo $id; ?>
				 </td>
                <td style="width: 35%; text-align: left; border: solid 1px #000;">
                    <?php echo $row['sal'].' '.$row['f_name'].' '.$row['LEFT(m_name,1)'].'. '.$row['l_name']; ?>
				 </td>
                <td style="width: 45%; text-align: center; border: solid 1px #000">
                    <?php echo $row['con']; ?>
				 </td>
                <td style="width: 20%; text-align: center; border: solid 1px #000">
                    <?php echo $row1['j_date'].'/'.$row1['j_month'].'/'.$row1['j_year']; ?>
				 </td>
                <td style="width: 30%; text-align: center; border: solid 1px #000">
                    <?php echo $row1['des']; ?>
                </td>
            </tr>
<?php
$id=$id+$a;
}

?>
        </tbody>
        <!--<tfoot>
            <tr>
                <th style="width: 30%; text-align: left; border: solid 1px #337722; background: #CCFFCC">Footer 1</th>
                <th style="width: 30%; text-align: left; border: solid 1px #337722; background: #CCFFCC">Footer 2</th>
            </tr>
        </tfoot>-->

		</table>
    <br>


    
</page>
