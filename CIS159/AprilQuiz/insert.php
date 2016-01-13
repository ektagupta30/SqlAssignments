<html>
<head><title>Images</title></head>
<body>
<?php
include "linkPass.php";
mysqli_select_db($link,"egupta11_1");
$sql = "INSERT INTO images1 values (01, 'pic1', 'QuizImages/pic1.JPG')";
$result= mysqli_query($link,$sql) or die(mysqli_error($link));
echo $result;
$sql = "INSERT INTO images1 values (02, 'pic2', 'QuizImages/pic2.JPG')";
$result= mysqli_query($link,$sql) or die(mysqli_error($link));
echo $result;
$sql = "INSERT INTO images1 values (03, 'pic3', 'QuizImages/pic3.JPG')";
$result= mysqli_query($link,$sql) or die(mysqli_error($link));
echo $result;
?>
</body>
</html>