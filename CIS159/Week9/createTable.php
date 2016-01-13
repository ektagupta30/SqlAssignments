<html>
<head><title>create Table</title></head>
<body>
<h1>Create Table</h1>
<?php
include "linkPass.php";
mysqli_select_db($link,"egupta11_1");
$sql = "CREATE TABLE student (idno varchar(4) primary key, name varchar(25), adr varchar(50),course varchar(20),grades float(4,2))";
$result= mysqli_query($link,$sql) or die(mysqli_error($link));
echo $result;
?>
</body>
</html