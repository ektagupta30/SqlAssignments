<html>
<head><title>PHP and MySQL</title></head>
<body>
<h1>Test of PHP</h1>
<?php
include "linkpassdonor.php";
    mysqli_select_db($link,"donor");
$idno='23456';
$result = mysqli_query($link,"SELECT * from donor where idno = '$idno'")
    or die("Invalid query: " . mysqli_error($link));
$row = mysqli_fetch_array($result);
   echo ("<br> ID = ". $row[0] . "<br> NAME =  " . $row["name"] . "<br>");
   echo("CITY = " . $row["city"] . "<br> STATE = " . $row["state"] . "<br>");
$result = mysqli_query($link,"SELECT * from donor where idno = $idno")
    or die("Invalid query: " . mysqli_error());
$row = mysqli_fetch_array($result);
   echo ("<br> ID = ". $row[0] . "<br> NAME =  " . $row["name"] . "<br>");
   echo("CITY = " . $row["city"] . "<br> STATE = " . $row["state"] . "<br>");
$idno=23456;
$result = mysqli_query($link,"SELECT * from donor where idno = '$idno'")
    or die("Invalid query: " . mysqli_error());
$row = mysqli_fetch_array($result);
   echo ("<br> ID = ". $row[0] . "<br> NAME =  " . $row["name"] . "<br>");
   echo("CITY = " . $row["city"] . "<br> STATE = " . $row["state"] . "<br>");
$result = mysqli_query($link,"SELECT * from donor where idno = $idno")
    or die("Invalid query: " . mysqli_error());
$row = mysqli_fetch_array($result);
   echo ("<br> ID = ". $row[0] . "<br> NAME =  " . $row["name"] . "<br>");
   echo("CITY = " . $row["city"] . "<br> STATE = " . $row["state"] . "<br>");
?>


</body>
</html>
