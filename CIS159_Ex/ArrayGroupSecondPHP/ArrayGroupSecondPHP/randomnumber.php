<!DOCTYPE html>
<html>
<head>
<title>From text file to array</title>
</head>
<body>
<h1>Random  Number Use</h1>
<?php
$crsArray = array("CIS120","CIS122","CIS150","CIS159","CIS250","CIS258");
$randNum = array_rand($crsArray);
echo $crsArray[$randNum];
echo "<br>Now returning two random numbers<br>";
$randNum = array_rand($crsArray,2);
echo $crsArray[$randNum[0]] . "<br>";
echo $crsArray[$randNum[1]];
?>
</body>
</html>