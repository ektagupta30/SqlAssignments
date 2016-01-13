<html>
<head><title>x=a(b+6)/2</title></head>
<body>
<h2>For Loop</h2>
<?php
$a = 1;
$b = 2;
$x =0;

for ($a = 1; $a <= 10; $a = $a +1)
{
echo "x = a(b+6)/2<br>";
for ($b = 2; $b <= 10; $b = $b +2)
{
  $x =$a*($b+6)/2 ;
  echo "a= $a, ";
echo "b= $b, ";
echo "x= $x<br>";
}
}
?>
</body>
</html>
