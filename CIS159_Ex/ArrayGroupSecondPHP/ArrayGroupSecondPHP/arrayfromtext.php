<!DOCTYPE html>
<html>
<head>
<title>From text file to array</title>
</head>
<body>
<h1>Random Access to an array</h1>
<?php
$myTextFile = file_get_contents('courses.txt');
$crsArray = explode("\n", $myTextFile);
$randNum = array_rand($crsArray);
$randCrs = $crsArray[$randNum];
$crsNum = substr($randCrs,0,strpos($randCrs,","));
$crsName = substr($randCrs,strpos($randCrs,',')+1);
echo $crsNum;
echo "<br>";
echo $crsName;
?>
</body>
</html>