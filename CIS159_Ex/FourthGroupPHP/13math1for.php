<html>
<head><title>Math</title></head>
<body>
<h2>Here are some math facts!</h2>
<?php
$ct;
$ct1;
$startnum=1;
$endnum=4;
for ($ct=$startnum; $ct <= $endnum; $ct=$ct + 1)
{
  for ($ct1=$startnum; $ct1 <= $endnum; $ct1 = $ct1 + 1)
  {
    $ans = $ct + $ct1;
    echo ("$ct + $ct1 = $ans<br>");
  }
}
?>
</body>
</html>
