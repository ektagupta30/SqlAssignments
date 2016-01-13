<html>
<head><title>Images</title></head>
<body>

<?php
    include "linkPass.php";
    mysqli_select_db($link,"egupta11_1");
$sql = "CREATE TABLE images1 (imgid int(3) primary key, imgname varchar(25), imgadr varchar(50))";
$result= mysqli_query($link,$sql) or die(mysqli_error($link));
echo $result;
?>
</body>
</html>