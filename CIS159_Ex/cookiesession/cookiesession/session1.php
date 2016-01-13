<?php
session_start();  
$_SESSION['color']='blue'; 
$_SESSION['thing']='clicker';
if(isset($_SESSION['mysession']))
  {
    $_SESSION['mysession'] = $_SESSION['mysession']+ 1;
  }
else
  {
    $_SESSION['mysession'] = 1;
  }
echo "<br>Checking sessions = ". $_SESSION['mysession']; 
echo "<pre>";
print_r ($_SESSION);
echo "</pre>"
?>


