<html>
<head><title>Arrays</title></head>
<body>
<h2>Flight Fare Array</h2>
<?php
$fromCity = $_GET['fromCity'];
$toCity = $_GET['toCity'];
$fromName = array("Boston", "Providence", "NewYork");
$toName = array("Istanbul","Baku","Frankfort","London","Prague");
$fareArray = array(
                   array (851.00, 949.50, 659.96, 499.00, 498.99),
                   array (929.00, 1012.75, 638.99, 525.00, 550.00),
                   array (799.99, 915.89, 498.99, 425.00, 512.00)
             );
$fare = $fareArray[$fromCity][$toCity];
print ("You are flying from $fromName[$fromCity]<br>");
print ("You are flying to $toName[$toCity]<br>");
print ("The fare is $fare<br>");
?>
</body>
</html>

