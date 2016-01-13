<html>
<head><title>Math</title></head>
<body>
<h2>Here are some math facts!</h2>
<?php
$ct;
$startnum=4;
$endnum=1;
for ($ct=$startnum; $ct >= $endnum; $ct--)
{
  $ans = $ct + $ct;
  echo ("$ct + $ct = $ans<br>");
}
?>
</body>
</html>