<html>
<head><title>PHP and MySQL</title></head>
<body>
<h1>Test of PHP</h1>
<?php
include "linkpassworddonor.php";
mysqli_select_db($link,"donor");
$sql = "INSERT INTO donor values ('55677', 'Jennifer Grove', '5 Hope St', 'Providence', 'RI', 
               '02111','2001-10-12',250, 'John Smith')";

$result= mysqli_query($link,$sql) or die(mysqli_error($link));
echo $result;

?>
</body>
</html>