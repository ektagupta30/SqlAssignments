<?php
if (isset($_COOKIE["student"]))
   {
    echo "The cookie for " . $_COOKIE["student"] . " is set!<br>";
   }
else
   {
    echo "There is a problem with your registration<br>";
   }
echo "The end!"
?>

