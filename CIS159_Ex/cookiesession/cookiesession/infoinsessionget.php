<?php
session_start();
echo "We have set course to ". $_SESSION['course'] . " days to " . $_SESSION['days'] . " time to " . $_SESSION['time'];
echo "<br>";
print_r ($_SESSION);
echo "<br>";
echo "<pre>";
print_r ($_SESSION);
echo "</pre>";
?>