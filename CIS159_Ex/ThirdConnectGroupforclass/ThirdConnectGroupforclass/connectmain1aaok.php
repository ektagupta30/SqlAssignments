<html>
<head><title>PHP and MySQL</title></head>
<body>
<h1>Test of PHP</h1>
<?php
include "linkpassworddonor.php";
mysqli_select_db($link,"donor2");
$sql = "INSERT INTO donor values ('55555', 'Sarah Grove', '123 Elm St', 'Seekonk', 'MA', 
               '02345','2001-10-12',300, 'John Smith')";
echo $sql;
echo "<br>";
$result= mysqli_query($link,$sql) or die(mysqli_error($link));
echo $result;

?>
</body>
</html>