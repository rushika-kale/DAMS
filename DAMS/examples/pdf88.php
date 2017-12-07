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
$select_query = "SELECT name FROM  faculty.organisedfdp where username='$username'";
$uname= mysql_fetch_array(mysql_query("select sal,f_name,LEFT(m_name,1),l_name from faculty.profile where username='$username'"));
$usern=$uname['f_name']+$uname['LEFT(m_name,1)']+$uname['l_name'];
?>
    <img src="header12.jpg" height="70%" width="10%" /><br />
<font size="10"><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Department of <?php echo "Computer Technology"; ?></b></font><br />
<br/><b>General Report On Publications by <?php 

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
                <td style="width: 10%; text-align: left; border: solid 1px #000;padding-left: 5px;">
                    SR.No.
				 </td>
                
                <td style="width: 30%; text-align: left; border: solid 1px #000;padding-left: 5px;">
                    Title
				 </td>
                <td style="width: 20%; text-align: left; border: solid 1px #000;padding-left: 5px;">
                    Date
                </td>
                <td style="width: 23%; text-align: left; border: solid 1px #000;padding-left: 5px;">
                    Detail
                </td>
                <td style="width: 10%; text-align: left; border: solid 1px #000;padding-left: 5px;">
                    IJ/IC/other
                </td>
                <td style="width: 18%; text-align: left; border: solid 1px #000;padding-left: 5px;">
                    Website/DOI
                </td>
                <td style="width: 10%; text-align: left; border: solid 1px #000;padding-left: 5px;">
                    Impact Factor
                </td>
                <td style="width: 10%; text-align: left; border: solid 1px #000;padding-left: 5px;">
                    Reviewed or Not
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
    
    <?php
    $query=mysql_query("select username,sal,f_name,LEFT(m_name,1),l_name from faculty.profile")or die (mysql_error());
    $workshop=0;
    $seminar=0;
    
    $journal=0;
    $conference=0;
    $book=0;
    $thesis=0;
    $report=0;
    $copyright=0;
  

     $id=1;
$a=1;
     ?>
    <?php 
        $user=$username;
     ?>
    
    <table style="width: 80%;border: solid 1px #000;font-size:15px;">
        
        <tbody>
                <?php
                
                    
                        $query2=mysql_query("select * from journal where username='$user'") ;
                        if(mysql_num_rows($query2)>0){
                            $journal=1;
                        }
                        else
                        $journal=0;//journal
                    
                    
                        $query3=mysql_query("select * from conference where username='$user'");
                        if(mysql_num_rows($query3)>0){
                            $conference=1;
                            }
                            else
                            $conference=0;// conference
                    
     
                        $query4=mysql_query("select * from book where username='$user'");
                        if(mysql_num_rows($query4)){
                            $book=1;
                        }
                        else
                        $book=0;// book

                   $query5=mysql_query("select * from thesis where username='$user'");
                        if(mysql_num_rows($query5)){
                            $thesis=1;
                        }
                        else
                        $thesis=0; //thesis
                         
                   $query6=mysql_query("select * from report where username='$user'");
                        if(mysql_num_rows($query6)){
                            $report=1;
                        }
                        else
                        $report=0;//report

                   $query7=mysql_query("select * from bookchapter where username='$user'");
                        if(mysql_num_rows($query7)){
                            $bchapter=1;
                        }
                        else
                        $bchapter=0;//book chapter
                   $query8=mysql_query("select * from dataset where username='$user'");
                        if(mysql_num_rows($query8)){
                            $dataset=1;
                        }
                        else
                        $dataset=0;//dataset
                   $query9=mysql_query("select * from patent where username='$user'");
                        if(mysql_num_rows($query9)){
                            $patent=1;
                        }
                        else
                        $patent=0;//patent
                   $query10=mysql_query("select * from copyright where username='$user'");
                        if(mysql_num_rows($query10)){
                            $copyright=1;
                        }
                        else
                        $copyright=0;//copyright
                        
                  
                $print=0;
                $print=$report+$thesis+$journal+$conference+$book;
                
                 ?>
               <?php if($print>0){ ?>
                
                    
                   <!--Journal --> <?php 
                if($journal==1)
                    while($row2=mysql_fetch_array($query2))
                    {
                        
                  ?> <tr>
                  <td style="width: 10%; text-align: center; border: solid 1px #000;padding-left: 5px;">
                    <?php echo $id; ?>
				    </td>
                     <td style="width: 30%; text-align: left; border: solid 1px #000;padding-left: 5px;">
                   <?php echo $row2['pubname']; ?>
				 </td>
                <td style="width: 20%; text-align: left; border: solid 1px #000;padding-left: 5px;">
                    <?php echo $row2['jdate']; ?>
                </td>
                <td style="width: 23%; text-align: left; border: solid 1px #000;padding-left: 5px;">
                    <?php echo $row2['jname']; ?>
                </td>
                <td style="width: 10%; text-align: left; border: solid 1px #000; padding-left: 5px;">
                    <?php 
                    $r=strtoupper($row2['jtype']);
                    echo $r; ?>
                </td>
                <td style="width: 18%; text-align: left; border: solid 1px #000;padding-left: 5px;">
                <?php echo $row2['jdoi']; ?>
                </td>
                <td style="width: 10%; text-align: left; border: solid 1px #000;padding-left: 5px;">
                <?php echo $row2['jimpact']; ?>
                </td>
                <td style="width: 10%; text-align: left; border: solid 1px #000;padding-left: 5px;">
                    
                </td>
                    </tr>
                    <?php 
                    $id=$id+$a;}
                   ?>
                   <!--Conference --> <?php 
                if($conference==1)
                    while($row3=mysql_fetch_array($query3))
                    {
                        
                  ?> <tr>
                  <td style="width: 10%; text-align: center; border: solid 1px #000;padding-left: 5px;">
                    <?php echo $id; ?>
				    </td>
                     <td style="width: 30%; text-align: left; border: solid 1px #000;padding-left: 5px;">
                   <?php echo $row3['pubname']; ?>
				 </td>
                <td style="width: 20%; text-align: left; border: solid 1px #000;padding-left: 5px;">
                    <?php echo $row3['jdate']; ?>
                </td>
                <td style="width: 23%; text-align: left; border: solid 1px #000;padding-left: 5px;">
                    <?php echo $row3['cname']; ?>
                </td>
                <td style="width: 10%; text-align: left; border: solid 1px #000;padding-left: 5px;">
                    <?php 
                    $r1=strtoupper($row3['ctype']);
                    echo $r1; ?>
                </td>
                <td style="width: 18%; text-align: left; border: solid 1px #000;padding-left: 5px;">
                <?php echo $row3['cdoi']; ?>
                </td>
                <td style="width: 10%; text-align: left; border: solid 1px #000;padding-left: 5px;">
                
                </td>
                <td style="width: 10%; text-align: left; border: solid 1px #000;padding-left: 5px;">
                    
                </td>
                    </tr>
                    <?php 
                    $id=$id+$a;}
                   ?>
                  
                
                   
                    
                <?php } ?><!--end of user info -->
                 <tr></tr>
                
                
                 
                
                
                
                
        </tbody>
        

		</table>
    


    
</page>
