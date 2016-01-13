<html>
<head><title>PHP and MySQL</title></head>
<body>
<h1>Test of PHP</h1>
<?php
    include "linkpass.php";
    mysqli_select_db($link,"fortesting");
$sql = "CREATE TABLE imageintable1 (imgid int(3) primary key, imgname varchar(25), img longblob)";
$result= mysqli_query($link,$sql) or die(mysqli_error($link));
echo $result;
?>
</body>
</html>
