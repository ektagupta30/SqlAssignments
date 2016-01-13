<?php
$link = mysqli_connect("localhost", "username", "password", "db")
or die("Could not connect: " . mysqli_error($link));
print ("Connected successfully");
?>