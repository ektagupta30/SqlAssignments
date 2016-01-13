<?php
session_start();
echo "Course Code: " . $_SESSION['crscd'];
echo "<br>Seats: " . $_SESSION['seats'];
echo "<br>User/pswd: " . $_SESSION['login'][0];
echo "<br>User/pswd: " . $_SESSION['login'][1];
echo "<br>User/pswd: " . $_SESSION['login'][2];
echo "<br>";
Print_r ($_SESSION);
?>