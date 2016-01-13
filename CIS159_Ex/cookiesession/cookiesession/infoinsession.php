<?php
session_start();
$_SESSION['course']="CIS159";
$_SESSION['time']="9:30AM";
$_SESSION['days']="TR";
echo "We have set course to ". $_SESSION['course'] . " days to " . $_SESSION['days'] . " time to " . $_SESSION['time'];
?> 