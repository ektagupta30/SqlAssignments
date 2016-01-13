<html>
<head><title>Inventory</title></head>
<body>
<?php
include "linkPass.php";
mysqli_select_db($link,"egupta11_1");
$sql = "INSERT INTO inventory values ('1111', 'books', 15,5)";
$result= mysqli_query($link,$sql) or die(mysqli_error($link));
echo $result;
$sql = "INSERT INTO inventory values ('2222', 'DVD',20,10)";
$result= mysqli_query($link,$sql) or die(mysqli_error($link));
echo $result;
$sql = "INSERT INTO inventory values ('3333', 'bags',25,20)";
$result= mysqli_query($link,$sql) or die(mysqli_error($link));
echo $result;
?>
</body>
</html>