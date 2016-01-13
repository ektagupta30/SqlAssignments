<html>
<head><title>Email</title></head>
<body>
<?php
include "linkPass.php";
mysqli_select_db($link,"egupta11_1");
$sql = "INSERT INTO email values (01, 'Smith', 'priscilla.grocer@bristolcc.edu ','BU')";
$result= mysqli_query($link,$sql) or die(mysqli_error($link));
echo $result;
$sql = "INSERT INTO email values (02, 'David', 'priscilla.grocer@bristolcc.edu ','CA')";
$result= mysqli_query($link,$sql) or die(mysqli_error($link));
echo $result;
$sql = "INSERT INTO email values (03, 'Ekta', 'egupta11@bristolcc.edu','BU')";
$result= mysqli_query($link,$sql) or die(mysqli_error($link));
echo $result;
?>
</body>
</html>