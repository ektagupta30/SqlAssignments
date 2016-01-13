<html>
<head>
<title> Images</title>
</head>
<body>
<h1>Display a random image</h1>
<?php
include "linkPass.php";
mysqli_select_db($link,"egupta11_1");

$Images = array('01','02','03');
for($indx=0; $indx < 3; $indx++){
$getimg= $Images[$indx];
echo ("<br>");
echo ($getimg);
echo ("<br>");
$result = mysqli_query($link,"SELECT imgid, imgname, imgadr from images1 where imgid = $getimg")
      or die("Invalid query: " . mysqli_error());

$row = mysqli_fetch_array($result);
$aimage = $row["imgadr"];
echo( $row["imgname"]."<br>"."<img src = $aimage>");
}
?>
</body>
</html>