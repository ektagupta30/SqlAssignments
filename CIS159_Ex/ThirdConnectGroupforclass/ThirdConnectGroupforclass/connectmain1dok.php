<html>
<head><title>PHP and MySQL</title></head>
<body>
<h1>Test of PHP</h1>
<?php
include "linkpassworddonor.php";
mysqli_select_db($link,"donor");
$sql = "INSERT INTO donor values ('55555', 'Sarah Grove', '123 Elm St', 'Seekonk', 'MA', 
               '02345','2001-10-12',300, 'John Smith')";

$result= mysqli_query($link,$sql);
echo $result;
if ($result == 1)
   {
    echo "<br>record added<br>";
   }
else
   {
    echo "<br>would have been a duplicate<br>";
   }
?>
</body>
</html>