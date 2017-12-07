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
$select_query = "SELECT name FROM  faculty.organisedwork where username='$username'";
$uname= mysql_fetch_array(mysql_query("select sal,f_name,LEFT(m_name,1),l_name from faculty.profile where username='$username'"));
$work=$_GET['workname'];
$usern=$uname['f_name']+$uname['LEFT(m_name,1)']+$uname['l_name'];
$evname=mysql_fetch_array(mysql_query("select name,tech_body,sponsor,days,role,convenor,coconvenor,coordinator,cocoordinator,organiser,department,part_type,count from faculty.organisedwork where username='$username' &&name='$work'"));
$speak=mysql_fetch_array(mysql_query("select * from faculty.organisedwork where username='$username' &&name='$work'"));

?>
    <img src="header11.jpg" height="70%" width="10%" /><br />
<font size="10"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Department of <?php echo "Computer Technology"; ?></b></font><br />
<br/><b>Report On Organised Workshop by <?php 

$select_querya = "SELECT sal,f_name,LEFT(m_name,1),l_name FROM  faculty.profile where username='$username'";

$sqla = mysql_query($select_querya) or die(mysql_error());
$rowa = mysql_fetch_array($sqla,MYSQL_BOTH);
echo $rowa['sal'].' '.$rowa['f_name'].' '.$rowa['LEFT(m_name,1)'].'. '.$rowa['l_name'];
 ?></b><br />    <br />

    <table style="width: 80%;border: solid 1px #000;font-size:15px;">
        <!--<thead>
            <tr>
                <th style="width: 40%; text-align: left; border: solid 1px #337722; background: #CCFFCC">Header 1</th>
                <th style="width: 40%; text-align: left; border: solid 1px #337722; background: #CCFFCC">Header 2</th>
            </tr>
        </thead>-->
        <tbody>
<?php

$sql = mysql_query($select_query) or die(mysql_error());	

?>

            <tr>
               
                <td style="width: 40%; text-align: left;padding-left: 10px; border: solid 1px #000;">
                    Event Name:
				 </td>
                
                <td style="width: 80%; text-align: left;padding-left: 20px; border: solid 1px #000;">
                    <?php echo $evname['name']; ?>
				 </td>
               </tr>
               <tr>
               
                <td style="width: 40%; text-align: left;padding-left: 10px; border: solid 1px #000;">
                    Name of Technical Body:
				 </td>
                
                <td style="width: 80%; text-align: left;padding-left: 20px; border: solid 1px #000;">
                    <?php echo $evname['tech_body']; ?>
				 </td>
               </tr><tr>
               
                <td style="width: 40%; text-align: left;padding-left: 10px; border: solid 1px #000;">
                    Sponsorship:
				 </td>
                
                <td style="width: 80%; text-align: left;padding-left: 20px; border: solid 1px #000;">
                    <?php echo $evname['sponsor']; ?>
				 </td>
               </tr>
               <tr>
               
                <td style="width: 40%; text-align: left;padding-left: 10px; border: solid 1px #000;">
                   Role in Workshop:
				 </td>
                
                <td style="width: 80%; text-align: left;padding-left: 20px; border: solid 1px #000;">
                    <?php echo $evname['role']; ?>
				 </td>
               </tr>
               <tr>
               
                <td style="width: 40%; text-align: left;padding-left: 10px; border: solid 1px #000;">
                    Workshop for:
				 </td>
                
                <td style="width: 80%; text-align: left;padding-left: 20px; border: solid 1px #000;">
                    <?php echo $evname['part_type']; ?>
				 </td>
               </tr>
               <tr>
               
                <td style="width: 40%; text-align: left;padding-left: 10px; border: solid 1px #000;">
                    No. of Participants:
				 </td>
                
                <td style="width: 80%; text-align: left;padding-left: 20px; border: solid 1px #000;">
                    <?php echo $evname['count']; ?>
				 </td>
               </tr>
               <tr>
               
                <td style="width: 40%; text-align: left;padding-left: 10px; border: solid 1px #000;">
                    Name of Convenor:
				 </td>
                
                <td style="width: 80%; text-align: left;padding-left: 20px; border: solid 1px #000;">
                    <?php echo $evname['convenor']; ?>
				 </td>
               </tr>
               <tr>
               
                <td style="width: 40%; text-align: left;padding-left: 10px; border: solid 1px #000;">
                    Name of Co-convenor:
				 </td>
                
                <td style="width: 80%; text-align: left;padding-left: 20px; border: solid 1px #000;">
                    <?php echo $evname['coconvenor']; ?>
				 </td>
               </tr>
               <tr>
               
                <td style="width: 40%; text-align: left;padding-left: 10px; border: solid 1px #000;">
                    Name of Co-Ordinator:
				 </td>
                
                <td style="width: 80%; text-align: left;padding-left: 20px; border: solid 1px #000;">
                    <?php echo $evname['coordinator']; ?>
				 </td>
               </tr>
               <tr>
               
                <td style="width: 40%; text-align: left;padding-left: 10px; border: solid 1px #000;">
                    Name of Co-coordinator:
				 </td>
                
                <td style="width: 80%; text-align: left;padding-left: 20px;border: solid 1px #000; ">
                    <?php echo $evname['cocoordinator']; ?>
				 </td>
               </tr>
               
               <tr>
               
                <td style="width: 40%; text-align: left;padding-left: 10px; border: solid 1px #000;">
                    Name of Organisers:
				 </td>
                
                <td style="width: 80%; text-align: left;padding-left: 20px; border: solid 1px #000;">
                    <?php echo $evname['organiser']; ?>
				 </td>
               </tr>
               <tr>
               
                <td style="width: 40%; text-align: left;padding-left: 10px;border: solid 1px #000; ">
                    Organising Department:
				 </td>
                
                <td style="width: 80%; text-align: left;padding-left: 20px; border: solid 1px #000;">
                    <?php echo $evname['department']; ?>
				 </td></tr>
                 <?php 
                 if(isset($speak['s1_name'])AND !empty($speak['s1_name']))
                 {
                    ?>
                    <tr>
                    <td style="width: 40%; text-align: left;padding-left: 10px;border: solid 1px #000; ">
                    Speaker 1 Name:
				 </td>
                
                <td style="width: 80%; text-align: left;padding-left: 20px; border: solid 1px #000;">
                    <?php echo $speak['s1_name']; ?>
				 </td></tr>
                 <tr>
                    <td style="width: 40%; text-align: left;padding-left: 10px;border: solid 1px #000; ">
                    Institute:
				 </td>
                
                <td style="width: 80%; text-align: left;padding-left: 20px; border: solid 1px #000;">
                    <?php echo $speak['s1_institute']; ?>
				 </td></tr>
                 <tr>
                    <td style="width: 40%; text-align: left;padding-left: 10px;border: solid 1px #000; ">
                    Email_ID:
				 </td>
                
                <td style="width: 80%; text-align: left;padding-left: 20px; border: solid 1px #000;">
                    <?php echo $speak['s1_email']; ?>
				 </td></tr><tr>
                    <td style="width: 40%; text-align: left;padding-left: 10px;border: solid 1px #000; ">
                    Contact No.:
				 </td>
                
                <td style="width: 80%; text-align: left;padding-left: 20px; border: solid 1px #000;">
                    <?php echo $speak['s1_contact']; ?>
				 </td></tr>
                    <?php
                 }
                 ?>
               
<?php

?>
        </tbody>
        <!--<tfoot>
            <tr>
                <th style="width: 40%; text-align: left; border: solid 1px #337722; background: #CCFFCC">Footer 1</th>
                <th style="width: 40%; text-align: left; border: solid 1px #337722; background: #CCFFCC">Footer 2</th>
            </tr>
        </tfoot>-->

		</table>
    
        <br>


    
</page>
