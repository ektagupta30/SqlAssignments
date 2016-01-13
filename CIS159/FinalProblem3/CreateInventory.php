<html>
<head><title>create Table</title></head>
<body>
<h1>Create Table</h1>
<?php
include "linkPass.php";
mysqli_select_db($link,"egupta11_1");
$sql = "CREATE TABLE inventory (itemno varchar(4) primary key, itemname varchar(25), onhand int(5),onorder int(5))";
$result= mysqli_query($link,$sql) or die(mysqli_error($link));
echo $result;
?>
</body>
</html