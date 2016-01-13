<html>
<head>
<title>Random Image</title>
</head>
<body>
<h1>Display a random image</h1>
<?php
include "linkpass.php";
mysqli_select_db($link,"fortesting");
$result = mysqli_query($link,"SELECT imgid, imgname, imgadr from imageadrtable")
or die("Invalid query: " . mysqli_error($link));
$indx = rand(0, 2);
if ($indx == 0)
    {
      $getimg = '150';
    }
else
    if ($indx == 1)
        {
         $getimg = '250';
        }
    else
        {
         $getimg = '350';
        }
echo ("<br>");
echo ($getimg);
echo ("<br>");
$result = mysqli_query($link,"SELECT imgid, imgname, imgadr from imageadrtable1 where imgid = $getimg")
      or die("Invalid query: " . mysqli_error());

$row = mysqli_fetch_array($result);
$aimage = $row["imgadr"];
echo "<img src = $aimage>";
?>
</body>
</html>