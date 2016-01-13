<html>
<head><title>Email</title></head>
<body>

<?php
    include "linkPass.php";
    mysqli_select_db($link,"egupta11_1");
$sql = "CREATE TABLE email (id int(3) primary key, name varchar(25), email varchar(50),major varchar(4))";
$result= mysqli_query($link,$sql) or die(mysqli_error($link));
echo $result;
?>
</body>
</html>