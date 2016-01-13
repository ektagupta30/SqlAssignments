<html>
<head><title>Arrays</title></head>
<body>
<h2>Department Array</h2>
<?php
$deptName[0] = "Womens";
$deptName[1] = "Mens";
$deptName[2] = "Girls";
$deptName[3] = "Boys";
$ct;

for ($ct=0; $ct <= 3; $ct++)
  {
    echo ("Dept #: $ct = $deptName[$ct]<br>");

  }
?>
</body>
</html>

