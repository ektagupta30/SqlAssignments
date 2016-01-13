<?php
session_start();
$_SESSION['info'] = "CIS";
echo "Department is " , $_SESSION['info'];
?>