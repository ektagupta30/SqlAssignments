<?php
if (isset($_COOKIE["last"]))
   {
    $lastvisit = $_COOKIE["last"];
    echo "The last time you visited was on " . $lastvisit;
   }
else
   {
    echo "I do not know when you visited last";
   }
?>