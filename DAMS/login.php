
<?php
function is_session_started()
{
    if ( php_sapi_name() !== 'cli' ) {
        if ( version_compare(phpversion(), '5.4.0', '>=') ) {
            return session_status() === PHP_SESSION_ACTIVE ? TRUE : FALSE;
        } else {
            return session_id() === '' ? FALSE : TRUE;
        }
    }
    return FALSE;
}

// Example
if ( is_session_started() === FALSE ) echo'session failed';
ob_start();
session_start();
if ( is_session_started() === FALSE ) echo'session failed';
else
echo'session started';

include 'rva_dbconnection.php';
   

    
//starting the session for user profile page
if(!empty($_POST['username']))   //checking the 'user' name which is from Sign-In.html, is it empty or have some text
{
	$query = mysqli_query($con,"SELECT *  FROM facdb WHERE username = '$_POST[username]' AND password = '$_POST[password]'") or die(mysqli_error());
		$username=$_POST['username'];

	$row = mysqli_fetch_array($query) ;
	if(!empty($row['username']) AND !empty($row['password']))
	{
if ( is_session_started() === FALSE ) session_start();

	session_regenerate_id();
		$_SESSION['user1'] = $row['password'];
		$_SESSION['username1']= $row['username'];
		$_SESSION['user'] = $userData['username'];
		$_SESSION['password'] = $userData['password'];
		$_SESSION['access']=$row['access'];
		
		
		session_write_close();
		header('Location: index.php');
		
		
		
		
//			session_regenerate_id();
//$_SESSION['sess_user_id'] = $userData['id'];
//$_SESSION['sess_username'] = $userData['username'];
//session_write_close();
//header('Location: home.php');
		
		
		

	}
	else
	{
		echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";
		header('Location:home.php');
	}
}
else{
header('Location:home.php');}
function check_logged(){
     global $_SESSION,$username;
     if (!array_key_exists($_SESSION["logged"],$username)) {
          header('Location: index.php');
     };
};

  ?>
