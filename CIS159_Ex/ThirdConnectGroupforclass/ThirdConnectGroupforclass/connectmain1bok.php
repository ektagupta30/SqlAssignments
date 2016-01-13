<html>
<head><title>PHP and MySQL</title></head>
<body>
<h1>Test of PHP</h1>
<?php
include "linkpassworddonor.php";
mysqli_select_db($link,"donor2");
$sql = "INSERT INTO donor values ('45654', 'Teagan Daniels', '123 Elm St', 'Swansea', 'MA', '02345',
                   '2001-10-12',300, 'John Smith')";
if (mysqli_query($link,$sql))
   {
    echo "<b>Record added";
   }
else
   {
    echo "<br>Must have been a duplicate";
   }
?>
</body>
</html>