<?php
session_start();
if(isset($_SESSION['info']))
   {
    echo "Department is " . $_SESSION['info'];
   }
else
   {
    echo "Department not set";
   }
?>