<html>
<head><title>Math</title></head>
<body>
<h2>Here are some math facts!</h2>
<?php
$ct;
$startnum=5;
$endnum=4;
$ct=$startnum;
do 
{
  $ans = $ct + $ct;
  echo ("$ct + $ct = $ans<br>");
  $ct++;
} while ($ct <= $endnum);
?>
</body>
</html>

