<html>
<head><title>Math</title></head>
<body>
<h2>Here are some math facts!</h2>
<?php
$ct1;
$ct2;
$ans=0;
$ct1=1;
while ($ct1 <= 4)
  { 
    $ct2=1;
    while ($ct2 <= 4)
      {
       $ans = $ct1 + $ct2;
       echo ("$ct1 + $ct2 = $ans<br>");
       $ct2 = $ct2 + 1;
      }
    $ct1 = $ct1 + 1;
  }
?>
</body>
</html>
