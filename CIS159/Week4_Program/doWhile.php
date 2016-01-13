<html>
<head><title>x=a(b+6)/2</title></head>
<body>
<h2> Do While Loop</h2>
<?php
$a = 1;
$b;
$x =0;

do
{
echo "x = a(b+6)/2<br>";

$b = 2;
do
{
  $x =$a*($b+6)/2 ;
  echo "a= $a, ";
echo "b= $b, ";
echo "x= $x<br>";
$b = $b + 2;
}while ($b <= 10);
$a = $a + 1;
}while ( $a <= 10);
?>
</body>
</html>
