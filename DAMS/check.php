<?php
function check_logged(){
     global $_SESSION;
     if (!array_key_exists($_SESSION["logged"])) {
          header('Location: index.php');
     };
}; 
?>