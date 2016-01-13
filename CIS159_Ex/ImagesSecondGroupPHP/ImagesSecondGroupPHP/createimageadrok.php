<html>
<head><title>PHP and MySQL</title></head>
<body>
<h1>Test of PHP</h1>
<?php
    include "linkPass.php";
    mysqli_select_db($link,"egupta11_1");
$sql = "CREATE TABLE imageadrtable1 (imgid int(3) primary key, imgname varchar(25), imgadr varchar(50))";
$result= mysqli_query($link,$sql) or die(mysqli_error($link));
echo $result;
?>
</body>
</html>
