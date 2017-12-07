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
<br/><b>General Report On Publications by Faculty</b><br />    <br />
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
            
              <td style="width: 4%; text-align: left; border: solid 1px #000;padding-left: 5px;">
                    SN.
				 </td>
             <td style="width: 16%; text-align: left; border: solid 1px #000;padding-left: 5px;">
                    Name
				 </td>    
                 <td style="width: 25%; text-align: left; border: solid 1px #000;padding-left: 5px;">
                    Publication Title
				 </td>
                <td style="width: 16%; text-align: left; border: solid 1px #000;padding-left: 5px;">
                    Publication Date
                </td>
                <td style="width: 22%; text-align: left; border: solid 1px #000;padding-left: 5px;">
                    Publication Detail
                </td>
                <td style="width: 5%; text-align: left; border: solid 1px #000;padding-left: 5px;">
                    Type
                </td>
                <td style="width: 17%; text-align: left; border: solid 1px #000;padding-left: 5px;">
                    Website/DOI
                </td>
                <td style="width: 11%; text-align: left; border: solid 1px #000;padding-left: 5px;">
                    Impact Factor
                </td>
                <td style="width: 11%; text-align: left; border: solid 1px #000;padding-left: 5px;">
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
    $journal=0;
    $conference=0;
    $jn=0;
    $ji=0;
    $ci=0;
    $cn=0;
    $national=0;
    $international=0;;
  
    if(isset($_POST['pub'])&& !empty($_POST['pub'])){
    foreach($_POST['pub'] as $pub){

       if( in_array("journal", $_POST["pub"]) )
       {
        $journal=1;
    
       }
       if( in_array("conference", $_POST["pub"]) )
       {
        $conference=1;
        }
        
    }
}
if(isset($_POST['pubtype'])&& !empty($_POST['pubtype'])){
    foreach($_POST['pubtype'] as $pubtype){

       if( in_array("international", $_POST["pubtype"]) )
       {
        $international=1;
       }
       if( in_array("national", $_POST["pubtype"]) )
       {
        $national=1;}
        
    }
}

     $id=1;
$a=1;
     ?>
    <?php while($row=mysql_fetch_array($query,MYSQL_BOTH))
    {
        $user=$row['username'];
     ?>
    
    <table style="width: 90%;border: solid 1px #000;font-size:15px;">
        
        <tbody>
                <?php
                if($journal==1)
                {
                    if($international==1)
                    {
                        $tp="ij";
                        $query2=mysql_query("select * from journal where username='$user' && jtype='$tp'") ;
                        if(mysql_num_rows($query2)>0){
                            $ji=1;
                        }
                        else
                        $ji=0;//attended
                    }
                    if($national==1)
                    {
                        $tp1="nj";
                        $query3=mysql_query("select * from journal where username='$user' && jtype='$tp1'");//oganised workshop
                        if(mysql_num_rows($query3)>0){
                            $jn=1;
                            }
                            else
                            $jn=0;
                    }
                }
                if($conference==1)
                {
                    if($international==1)
                    {
                        $tp2="ic";
                        $query4=mysql_query("select * from conference where username='$user'&& ctype='$tp2'");
                        if(mysql_num_rows($query4)>0){
                            $ci=1;
                        }
                        else
                        $ci=0;
                    }
                    if($national==1)
                    {
                        $tp3="nc";
                        $query5=mysql_query("select * from conference where username='$user'&& ctype='$tp3'");
                        if(mysql_num_rows($query5)>0){
                            $cn=1;
                        }
                        else
                        $cn=0;
                    }
                }
                
                $print=0;
                $print=$ji+$jn+$ci+$cn;
                
                 ?>
               <?php if($print>0){ ?>
                <tr ><td style="width: 3%; text-align: center; border: solid 1px #000;">
                    <?php echo $id; ?>
				    </td>
                     <td style="width: 15%; text-align: center; border: solid 1px #000;">
                    <?php echo $row['sal'].' '.$row['f_name'].' '.$row['LEFT(m_name,1)'].'. '.$row['l_name']; ?>
				    </td>
                    <td style="width: 95%; text-align: center; border: solid 1px #000;padding-left: 5px;">
                     <table style="width: 100%;">
                     <tbody>
                    <?php 
                if($ji==1)
                    while($row2=mysql_fetch_array($query2))
                    {
                        
                  ?> <tr>
                     <td style="width: 23%; text-align: left; border: solid 1px #000;padding-left: 5px;">
                    <?php echo $row2['pubname']; ?>
				 </td>
                <td style="width: 15%; text-align: left; border: solid 1px #000'padding-left: 5px;">
                    <?php $dat = date("d-m-Y", strtotime($row2['jdate'])); 
                    echo $dat; ?>
                </td>
                <td style="width: 21%; text-align: left; border: solid 1px #000;padding-left: 5px;">
                    <?php echo $row2['jname']; ?>
                </td>
                <td style="width: 5%; text-align: left; border: solid 1px #000;padding-left: 5px;">
                    <?php $top=strtoupper($row2['jtype']);
                     echo $top; ?>
                </td>
                <td style="width: 16%; text-align: left; border: solid 1px #000;padding-left: 5px;">
                    <?php echo $row2['jdoi']; ?>
                </td>
                <td style="width: 10%; text-align: left; border: solid 1px #000;padding-left: 5px;">
                    <?php echo $row2['jimpact']; ?>
                </td>
                <td style="width: 10%; text-align: left; border: solid 1px #000;padding-left: 5px;">
                    
                </td>
                    </tr>
                    <?php 
                    }
                   ?>
                   <?php 
                if($jn==1)
                    while($row3=mysql_fetch_array($query3))
                    {
                        
                  ?> <tr>
                    <td style="width: 23%; text-align: left; border: solid 1px #000;padding-left: 5px;">
                    <?php echo $row3['pubname']; ?>
				 </td>
                <td style="width: 15%; text-align: left; border: solid 1px #000;padding-left: 5px;">
                    <?php $dat = date("d-m-Y", strtotime($row3['jdate'])); 
                    echo $dat; ?>
                </td>
                <td style="width: 21%; text-align: left; border: solid 1px #000;padding-left: 5px;">
                    <?php echo $row3['jname']; ?>
                </td>
                <td style="width: 5%; text-align: left; border: solid 1px #000;padding-left: 5px;">
                   <?php $top=strtoupper($row3['jtype']);
                     echo $top; ?>
                </td>
                <td style="width: 16%; text-align: left; border: solid 1px #000;padding-left: 5px;">
                    <?php echo $row3['jdoi']; ?>
                </td>
                <td style="width: 10%; text-align: left; border: solid 1px #000;padding-left: 5px;">
                    <?php echo $row3['jimpact']; ?>
                </td>
                <td style="width: 10%; text-align: left; border: solid 1px #000;padding-left: 5px;">
                    
                </td>
                    </tr>
                    <?php 
                    }
                   ?>
                   <!--Seminar -->
                    <?php 
                if($ci==1)
                    while($row4=mysql_fetch_array($query4))
                    {
                        
                  ?> <tr>
                    <td style="width: 23%; text-align: left; border: solid 1px #000">
                    <?php echo $row4['pubname']; ?>
				 </td>
                <td style="width: 15%; text-align: left; border: solid 1px #000;padding-left: 5px;">
                  <?php $dat = date("d-m-Y", strtotime($row4['jdate'])); 
                    echo $dat; ?>
                </td>
                <td style="width: 21%; text-align: left; border: solid 1px #000;padding-left: 5px;">
                    <?php echo $row4['cname']; ?>
                </td>
                <td style="width: 5%; text-align: left; border: solid 1px #000;padding-left: 5px;">
                    <?php $top=strtoupper($row4['ctype']);
                     echo $top; ?>
                </td>
                <td style="width: 16%; text-align: left; border: solid 1px #000;padding-left: 5px;">
                    <?php echo $row4['cdoi']; ?>
                </td>
                <td style="width: 10%; text-align: left; border: solid 1px #000;padding-left: 5px;">
                    
                </td>
                <td style="width: 10%; text-align: left; border: solid 1px #000;padding-left: 5px;">
                    
                </td>
                    </tr>
                    <?php 
                    }
                   ?>
                   <?php 
                if($cn==1)
                    while($row5=mysql_fetch_array($query5))
                    {
                        
                  ?> <tr>
                    <td style="width: 23%; text-align: left; border: solid 1px #000;padding-left: 5px;">
                    <?php echo $row5['pubname']; ?>
				 </td>
                <td style="width: 15%; text-align: left; border: solid 1px #000;padding-left: 5px;">
                    <?php $dat = date("d-m-Y", strtotime($row5['jdate'])); 
                    echo $dat; ?>
                </td>
                <td style="width: 21%; text-align: left; border: solid 1px #000;padding-left: 5px;">
                    <?php echo $row5['cname']; ?>
                </td>
                <td style="width: 5%; text-align: left; border: solid 1px #000;padding-left: 5px;">
                    <?php $top=strtoupper($row5['ctype']);
                     echo $top; ?>
                </td>
                <td style="width: 16%; text-align: left; border: solid 1px #000;padding-left: 5px;">
                    <?php echo $row5['cdoi']; ?>
                </td>
                <td style="width: 10%; text-align: left; border: solid 1px #000;padding-left: 5px;">
                    
                </td>
                <td style="width: 10%; text-align: left; border: solid 1px #000;padding-left: 5px;">
                    
                </td>
                    </tr>
                    <?php 
                    }
                   ?>
                   
                    </tbody>                    
                    </table>
                    </td>
                </tr><?php $id=$id+$a; } ?><!--end of user info -->
                 <tr></tr>
                
                
                 
                
                
                
                
        </tbody>
        

		</table><?php } ?>
    


    
</page>
