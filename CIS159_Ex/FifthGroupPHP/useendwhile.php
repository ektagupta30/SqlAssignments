<html>
<head><title>Using endif</title></head>
<body>
<h2>Whatever!</h2>
<?php
$ct1 = 1;
$ct2;
$ans;
while ($ct1 <= 4):
   $ct2 = 1;
   while ($ct2 <= 4):
      $ans = $ct1 + $ct2;
      echo ("$ct1 + $ct2 = $ans<br>");
      $ct2 = $ct2 + 1;
    endwhile;
    $ct1 = $ct1 + 1;
endwhile;
?>
</body>
</html>