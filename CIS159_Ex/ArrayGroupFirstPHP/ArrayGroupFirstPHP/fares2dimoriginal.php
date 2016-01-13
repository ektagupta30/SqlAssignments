<html>
<head><title>Arrays</title></head>
<body>
<h2>Flight Fare Array</h2>
<?php
$fromCity=1;
$toCity=3;
$fareArray[0][0] = 851.00;
$fareArray[0][1] = 949.50;
$fareArray[0][2] = 659.96;
$fareArray[0][3] = 499.00;
$fareArray[0][4] = 498.99;
$fareArray[1][0] = 929.00;
$fareArray[1][1] = 1012.75;
$fareArray[1][2] = 638.99;
$fareArray[1][3] = 525.00;
$fareArray[1][4] = 550.00;
$fareArray[2][0] = 799.99;
$fareArray[2][1] = 915.89;
$fareArray[2][2] = 498.99;
$fareArray[2][3] = 425.00;
$fareArray[2][4] = 512.00;
$fare = $fareArray[$fromCity][$toCity];
echo ("The fare is $fare<br>");
$fare = $fareArray[1][3];

echo ("The fare is $fare<br>");
?>
</body>
</html>