<html>
<head><title>Arrays</title></head>
<body>
<h2>Flight Fare Array</h2>
<?php
$fromCity = $_GET['fromCity'];
$toCity = $_GET['toCity'];
$fareArray = array(
                   array (851.00, 949.50, 659.96, 499.00, 498.99),
                   array (929.00, 1012.75, 638.99, 525.00, 550.00),
                   array (799.99, 915.89, 498.99, 425.00, 512.00)
             );
$fare = $fareArray[$fromCity][$toCity];
print ("The fare is $fare<br>");
?>
</body>
</html>

