<html>
<head><title>Math</title></head>
<body>
<h2>Here are some math facts!</h2>
<?php
$ct;
$startnum=1;
$endnum=4;
$ct=$startnum;
while ($ct <= $endnum)
{
  $ans = $ct + $ct;
  echo '$ct + $ct = $ans<br>';
  $ct = $ct + 1;
}
$ct=$startnum;
while ($ct <= $endnum)
{
  $ans = $ct + $ct;
  echo "$ct + $ct = $ans<br>";
  $ct = $ct + 1;
}

echo 'info above used echo, info below used print<br>';
$ct=$startnum; 
while ($ct <= $endnum)
{
  $ans = $ct + $ct;
  print '$ct + $ct = $ans<br>';
  $ct = $ct + 1;
}
$ct=$startnum;
while ($ct <= $endnum)
{
  $ans = $ct + $ct;
  print "$ct + $ct = $ans<br>";
  $ct = $ct + 1;
}
?>
</body>
</html>
