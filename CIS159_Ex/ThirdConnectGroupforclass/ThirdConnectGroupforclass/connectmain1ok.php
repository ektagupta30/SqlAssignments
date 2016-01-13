<html>
<head><title>PHP and MySQL</title></head>
<body>
<h1>Test of PHP</h1>
<?php
include "linkpassworddonor.php";
mysqli_select_db($link,"donor");
$sql = "INSERT INTO donor values ('44441', 'Al Richards', '111 South St', 'Braintree', 'MA', 
                     '02184','2002-10-10',300, 'John Smith')";
$result= mysqli_query($link,$sql) or die(mysqli_error($link));
echo $result;

?>


</body>
</html>
