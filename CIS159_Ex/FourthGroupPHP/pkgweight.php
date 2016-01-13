<html>
<head><title>Package</title></head>
<body>
<h2>Package Weight and Cost!</h2>
<?php
$firstlb = 1.5;
$every4oz = 0.5;
$wkweight = 0;
$wkcost = 0;
$wklb = $_GET['pounds'];
$wkoz = $_GET['ounces'];
$wkweight = $wklb *16 + $wkoz;
print "The weight in ounces is: ";
print $wkweight;
print "</br>";
if ($wkweight < 17) 
  {
   $wkcost = $firstlb;
  }
else
  {
   $wkweight = $wkweight - 16;
   $wkcost = $firstlb;
   while ($wkweight > 0)
     { 
       $wkcost = $wkcost + $every4oz;
       $wkweight = $wkweight - 4;
     }
  }
print "The cost is ";
print $wkcost;
?>
</body>
</html>
