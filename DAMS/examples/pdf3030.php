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
<br/><b>General Report On Events by <?php 

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
                    SR.No.
				 </td>
                <td style="width: 30%; text-align: left; border: solid 1px #000">
                    Name of Faculty
				 </td>
                
                <td style="width: 20%; text-align: left; border: solid 1px #000">
                    Event Type
				 </td>
                <td style="width: 30%; text-align: left; border: solid 1px #000">
                    Name of Event
                </td>
                <td style="width: 20%; text-align: left; border: solid 1px #000">
                    Place
                </td>
                <td style="width: 15%; text-align: left; border: solid 1px #000">
                    Date:
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
    
    $fdp=0;
    $sttp=0;
    $attended=0;
    $pattendedw=0;
    $pattendedt=0;
    $pattendedf=0;
    $pattendeds=0;
    $organised=0;
    $porganisedw=0;
    $porganisedf=0;
    $porganisedt=0;
    $porganiseds=0;
    $faculty=0;
    $student=0;
    $date=0;
    $a=1;
    if(isset($_POST['dateType'])&& !empty($_POST['dateType']))
    {
        $date=1;
        if($_POST['dateType']=="year")
        {
            $dateype=1;
            $val=$_POST['acyear'];
            $vale=$val+$a;
        }
        if($_POST['dateType']=="semester")
        {
            $val=$_POST['acyear'];
            if($_POST['acsem']=="even")
            {
                $dateype=2;
                $val1=$_POST['acsem'];
                $vale1=$val1+$a;
            }
            if($_POST['acsem']=="odd")
            {
                $val1=$_POST['acsem'];
                $vale1=$val1+$a;
            }
        }
        if($_POST['dateType']=="custom")
        {
            $dateype=4;
        }
    }
    if(isset($_POST['event'])&& !empty($_POST['event'])){
    foreach($_POST['event'] as $event){

       if( in_array("workshop", $_POST["event"]) )
       {
        $workshop=1;
       }
       if( in_array("seminar", $_POST["event"]) )
       {
        $seminar=1;}
       if( in_array("fdp", $_POST["event"]) )
       {
        $fdp=1;}
       if( in_array("sttp", $_POST["event"]) )
       {
        $sttp=1;
       }
        
    }
}
if(isset($_POST['eventtype'])&& !empty($_POST['eventtype'])){
    foreach($_POST['eventtype'] as $eventtype){

       if( in_array("attended", $_POST["eventtype"]) )
       {
        $attended=1;
       }
       if( in_array("organised", $_POST["eventtype"]) )
       {
        $organised=1;}
        
    }
}
if(isset($_POST['attendie'])&& !empty($_POST['attendie'])){
    foreach($_POST['attendie'] as $attendie){

       if( in_array("faculty", $_POST["attendie"]) )
       {
        $faculty=1;
       }
       if( in_array("student", $_POST["attendie"]) )
       {
        $student=1;}
        
    }
}
     $id=1;
$a=1;
     ?>
    <?php while($row=mysql_fetch_array($query,MYSQL_BOTH))
    {
        $user=$row['username'];
     ?>
    
    <table style="width: 80%;border: solid 1px #000;font-size:15px;">
        
        <tbody>
                <?php
               // if($date==1)
                //{
                  //  if($dateype==1)
                    //{
                if($workshop==1)
                {
                    if($attended==1)
                    {
                        $query2=mysql_query("select * from workshop where username='$user'") ;
                        if(mysql_num_rows($query2)>0){
                            $pattendedw=1;
                        }
                        else
                        $pattendedw=0;//attended
                    }
                    if($organised==1)
                    {
                        $query3=mysql_query("select * from organisedwork where username='$user'");//oganised workshop
                        if(mysql_num_rows($query3)>0){
                            $porganisedw=1;
                            }
                            else
                            $porganisedw=0;
                    }
                }
                if($seminar==1)
                {
                    if($attended==1)
                    {
                        $query4=mysql_query("select * from seminar where username='$user'");
                        if(mysql_num_rows($query4)){
                            $pattendeds=1;
                        }
                        else
                        $pattendeds=0;
                    }
                    if($organised==1)
                    {
                        $query5=mysql_query("select * from organisedsem where username='$user'");
                        if(mysql_num_rows($query5)){
                            $porganiseds=1;
                        }
                        else
                        $porganiseds=0;
                    }
                }
                //fdp
                if($fdp==1)
                {
                    if($attended==1)
                    {
                        $query6=mysql_query("select * from fdp where username='$user'");
                        if(mysql_num_rows($query6)){
                            $pattendedf=1;
                        }
                        else
                        $pattendedf=0;
                    }
                    if($organised==1)
                    {
                        $query7=mysql_query("select * from organisedfdp where username='$user'");
                        if(mysql_num_rows($query7)){
                            $porganisedf=1;
                        }
                        else
                        $porganisedf=0;
                    }
                }
                //sttp
                if($sttp==1)
                {
                    if($attended==1)
                    {
                        $query8=mysql_query("select * from sttp where username='$user'");
                        if(mysql_num_rows($query8)){
                            $pattendedt=1;
                        }
                        else
                        $pattendedt=0;
                    }
                    if($organised==1)
                    {
                        $query9=mysql_query("select * from organisedsttp where username='$user'");
                        if(mysql_num_rows($query9)){
                            $porganisedt=1;
                        }
                        else 
                        $porganisedt=0;
                    }
                }
                //}}
                $print=0;
                $print=$porganisedw+$pattendedw+$porganiseds+$pattendeds+$porganisedf+$pattendedf+$porganisedt+$pattendedt;
                
                 ?>
               <?php if($print>0){ ?>
                <tr ><td style="width: 10%; text-align: center; border: solid 1px #000;">
                    <?php echo $id; ?>
				    </td>
                     <td style="width: 30%; text-align: center; border: solid 1px #000;">
                    <?php echo $row['sal'].' '.$row['f_name'].' '.$row['LEFT(m_name,1)'].'. '.$row['l_name']; ?>
				    </td>
                    <td style="width: 85%; text-align: center; border: solid 1px #000;">
                     <table style="width: 100%;">
                     <tbody>
                    <?php 
                if($porganisedw==1)
                    while($row3=mysql_fetch_array($query3))
                    {
                        
                  ?> <tr>
                    <td style="width: 23%;border: solid 1px #000;font-size:15px;" ><?php echo "Organised Workshop"; ?></td>
                    <td style="width: 36%;border: solid 1px #000;font-size:15px;" ><?php echo $row3['name']; ?></td>
                    <td style="width: 24%;border: solid 1px #000;font-size:15px;" ><?php echo $row3['department']; ?></td>
                    <?php $dat = date("d-m-Y", strtotime($row3['w_date'])); ?>
                    <td style="width: 17%;border: solid 1px #000;font-size:15px;" ><?php echo $dat; ?></td>
                    </tr>
                    <?php 
                    }
                   ?>
                   <?php 
                if($pattendedw==1)
                    while($row2=mysql_fetch_array($query2))
                    {
                        
                  ?> <tr>
                    <td style="width: 23%;border: solid 1px #000;font-size:15px;" ><?php echo "Attended Workshop"; ?></td>
                    <td style="width: 36%;border: solid 1px #000;font-size:15px;" ><?php echo $row2['wname']; ?></td>
                    <td style="width: 24%;border: solid 1px #000;font-size:15px;" ><?php echo $row2['wvenue']; ?></td>
                    <?php $dat = date("d-m-Y", strtotime($row2['w_date'])); ?>
                    <td style="width: 17%;border: solid 1px #000;font-size:15px;" ><?php echo $dat; ?></td>
                    </tr>
                    <?php 
                    }
                   ?>
                   <!--Seminar -->
                    <?php 
                if($porganiseds==1)
                    while($row5=mysql_fetch_array($query5))
                    {
                        
                  ?> <tr>
                    <td style="width: 23%;border: solid 1px #000;font-size:15px;" ><?php echo "Organised Seminar"; ?></td>
                    <td style="width: 36%;border: solid 1px #000;font-size:15px;" ><?php echo $row5['name']; ?></td>
                    <td style="width: 24%;border: solid 1px #000;font-size:15px;" ><?php echo $row5['department']; ?></td>
                    <?php $dat = date("d-m-Y", strtotime($row5['w_date'])); ?>
                    <td style="width: 17%;border: solid 1px #000;font-size:15px;" ><?php echo $dat; ?></td>
                    </tr>
                    <?php 
                    }
                   ?>
                   <?php 
                if($pattendeds==1)
                    while($row4=mysql_fetch_array($query4))
                    {
                        
                  ?> <tr>
                    <td style="width: 23%;border: solid 1px #000;font-size:15px;" ><?php echo "Attended Seminar"; ?></td>
                    <td style="width: 36%;border: solid 1px #000;font-size:15px;" ><?php echo $row4['wname']; ?></td>
                    <td style="width: 24%;border: solid 1px #000;font-size:15px;" ><?php echo $row4['wvenue']; ?></td>
                    <?php $dat = date("d-m-Y", strtotime($row4['w_date'])); ?>
                    <td style="width: 17%;border: solid 1px #000;font-size:15px;" ><?php echo $dat; ?></td>
                    </tr>
                    <?php 
                    }
                   ?>
                   <!--fdp -->
                    <?php 
                if($porganisedf==1)
                    while($row7=mysql_fetch_array($query7))
                    {
                        
                  ?> <tr>
                    <td style="width: 23%;border: solid 1px #000;font-size:15px;" ><?php echo "Organised FDP"; ?></td>
                    <td style="width: 36%;border: solid 1px #000;font-size:15px;" ><?php echo $row7['name']; ?></td>
                    <td style="width: 24%;border: solid 1px #000;font-size:15px;" ><?php echo $row7['department']; ?></td>
                    <?php $dat = date("d-m-Y", strtotime($row7['w_date'])); ?>
                    <td style="width: 17%;border: solid 1px #000;font-size:15px;" ><?php echo $dat; ?></td>
                    </tr>
                    <?php 
                    }
                   ?>
                   <?php 
                if($pattendedf==1)
                    while($row6=mysql_fetch_array($query6))
                    {
                        
                  ?> <tr>
                    <td style="width: 23%;border: solid 1px #000;font-size:15px;" ><?php echo "Attended FDP"; ?></td>
                    <td style="width: 36%;border: solid 1px #000;font-size:15px;" ><?php echo $row6['wname']; ?></td>
                    <td style="width: 24%;border: solid 1px #000;font-size:15px;" ><?php echo $row6['wvenue']; ?></td>
                    <?php $dat = date("d-m-Y", strtotime($row6['w_date'])); ?>
                    <td style="width: 17%;border: solid 1px #000;font-size:15px;" ><?php echo $dat; ?></td>
                    </tr>
                    <?php 
                    }
                   ?>
                   <!-- sttp-->
                    <?php 
                if($porganisedt==1)
                    while($row9=mysql_fetch_array($query9))
                    {
                        
                  ?> <tr>
                    <td style="width: 23%;border: solid 1px #000;font-size:15px;" ><?php echo "Organised STTP"; ?></td>
                    <td style="width: 36%;border: solid 1px #000;font-size:15px;" ><?php echo $row9['name']; ?></td>
                    <td style="width: 24%;border: solid 1px #000;font-size:15px;" ><?php echo $row9['department']; ?></td>
                    <?php $dat = date("d-m-Y", strtotime($row9['w_date'])); ?>
                    <td style="width: 17%;border: solid 1px #000;font-size:15px;" ><?php echo $dat; ?></td>
                    </tr>
                    <?php 
                    }
                   ?>
                   <?php 
                if($pattendedt==1)
                    while($row8=mysql_fetch_array($query8))
                    {
                        
                  ?> <tr>
                    <td style="width: 23%;border: solid 1px #000;font-size:15px;" ><?php echo "Attended STTP"; ?></td>
                    <td style="width: 36%;border: solid 1px #000;font-size:15px;" ><?php echo $row8['wname']; ?></td>
                    <td style="width: 24%;border: solid 1px #000;font-size:15px;" ><?php echo $row8['wvenue']; ?></td>
                    <?php $dat = date("d-m-Y", strtotime($row8['w_date'])); ?>
                    <td style="width: 17%;border: solid 1px #000;font-size:15px;" ><?php echo $dat; ?></td>
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
