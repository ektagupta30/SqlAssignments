<html>
<head><title>PHP and MySQL</title></head>
<body>
<h1>Test of PHP</h1>
<?php
include "linkPass.php";
mysqli_select_db($link,"egupta11_1");
$sql = "INSERT INTO imageadrtable1 values (150, 'dog150', 'images/dog150.JPG')";
$result= mysqli_query($link,$sql) or die(mysqli_error($link));
echo $result;
$sql = "INSERT INTO imageadrtable1 values (250, 'dog250', 'images/dog250.JPG')";
$result= mysqli_query($link,$sql) or die(mysqli_error($link));
echo $result;
$sql = "INSERT INTO imageadrtable1 values (350, 'dog350', 'images/dog350.JPG')";
$result= mysqli_query($link,$sql) or die(mysqli_error($link));
echo $result;
?>
</body>
</html>
