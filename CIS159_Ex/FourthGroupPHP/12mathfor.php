<html>
<head><title>Math</title></head>
<body>
<h2>Here are some math facts!</h2>
<?php
$ct;
$startnum=1;
$endnum=4;
for ($ct=$startnum; $ct <= $endnum; $ct=$ct + 1)
{
  $ans = $ct + $ct;
  echo ("$ct + $ct = $ans<br>");
}
?>
</body>
</html>