<?php
if (isset($_COOKIE["customer"]))
    {
    echo "<h1>Welcome back " . $_COOKIE["customer"] ."!</h1>";
    }
else
    {
    echo "<h1>Welcome!</h1>";
    }
echo "<h2>We hope you enjoy your visit!</h2>";
?>

    