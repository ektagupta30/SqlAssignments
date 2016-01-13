<html>
<head><title>LOOP QUIZ</title></head>
<body>
<h2>While</h2>
<?php
$customerName = "Susan Ash";
$amtOwed = 12000;
$amtLeft = 12000;
$ct = 1;
$monthlyPayment = $amtOwed /12;
while ($amtLeft > 0)
{
$amtLeft = $amtLeft - $monthlyPayment;
echo "$customerName <br> Payment for month $ct is $monthlyPayment<br>";
echo "Amount left to pay is $amtLeft<br><br>";

$ct = $ct + 1;
}
?>
</body>
</html>
