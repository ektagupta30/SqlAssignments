<html>
<head><title>Arrays</title></head>
<body>
<h2>Department Array</h2>
<?php
$deptName[1] = "Womens";
$deptName[2] = "Mens";
$deptName[3] = "Girls";
$deptName[4] = "Boys";
$ct;
    echo ("Dept #: 4 = $deptName[4]<br>");
    echo ("Dept #: 5 = $deptName[5]<br>");
    echo "This is a problem since I am using ct past the array<br>";
for ($ct=1; $ct <= 4; $ct=$ct + 1)
  {
    echo ("Dept #: $ct = $deptName[$ct]<br>");

  }
?>
</body>
</html>
