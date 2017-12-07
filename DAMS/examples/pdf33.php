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
    <br><?php 
    session_start();
 
//Check whether the session variable SESS_MEMBER_ID is present or not
if(!isset($_SESSION['username1']) || (trim($_SESSION['username1']) == '')) {
header('location: home.php');
exit();}
$username=$_SESSION['username1'];

$con=mysql_connect("localhost","root") or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db("faculty",$con) or die("Failed to connect to MySQL: " . mysql_error());
$select_query = "SELECT * FROM  faculty.organisedwork where username='$username'";
$uname= mysql_fetch_array(mysql_query("select sal,f_name,LEFT(m_name,1),l_name from faculty.profile where username='$username'"));
$usern=$uname['f_name']+$uname['LEFT(m_name,1)']+$uname['l_name'];
?>
   <img src="header12.jpg" height="70%" width="10%" /><br />
<font size="10"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Department of <?php echo "Computer Technology"; ?></b></font><br />
<br/><b>Report On Organised Workshop by <?php 

$select_querya = "SELECT sal,f_name,LEFT(m_name,1),l_name FROM  faculty.profile where username='$username'";

$sqla = mysql_query($select_querya) or die(mysql_error());
$rowa = mysql_fetch_array($sqla,MYSQL_BOTH);
echo $rowa['sal'].' '.$rowa['f_name'].' '.$rowa['LEFT(m_name,1)'].'. '.$rowa['l_name'];
 ?></b><br />    <br />

    <table style="width: 80%;border: solid 1px #000;font-size:15px;">
        <!--<thead>
            <tr>
                <th style="width: 30%; text-align: left; border: solid 1px #337722; background: #CCFFCC">Header 1</th>
                <th style="width: 30%; text-align: left; border: solid 1px #337722; background: #CCFFCC">Header 2</th>
            </tr>
        </thead>-->
        <tbody>
<?php

$sql = mysql_query($select_query) or die(mysql_error());	

?>

            <tr>
                <td style="width: 10%; text-align: left; border: solid 1px #000">
                    Sr.No.
				 </td>
                <td style="width: 40%; text-align: left; border: solid 1px #000">
                    Event Name
				 </td>
                
                <td style="width: 20%; text-align: left; border: solid 1px #000">
                    From
				 </td>
                 <td style="width: 20%; text-align: left; border: solid 1px #000">
                    To
				 </td>
                <td style="width: 30%; text-align: left; border: solid 1px #000">
                    Organising Department
                </td>
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
while($row = mysql_fetch_array($sql,MYSQL_BOTH)){    


?> 
            <tr>
                <td style="width: 10%; text-align: center; border: solid 1px #000;">
                    <?php echo $id; ?>
				 </td>
                <td style="width: 40%; text-align: left; border: solid 1px #000;">
                    <?php echo $row['name']; ?>
				 </td>
                
                <td style="width: 20%; text-align: center; border: solid 1px #000">
                    <?php echo $row['w_date']; ?>
				 </td>
                 <td style="width: 20%; text-align: center; border: solid 1px #000">
                    <?php echo $row['w_date2']; ?>
				 </td>
                <td style="width: 30%; text-align: center; border: solid 1px #000">
                    <?php echo $row['department']; ?>
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
