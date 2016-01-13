<html>
<head><title>Arrays</title></head>
<body>
<h2>Department Array</h2>
<?php
$deptName[] = "Womens";
$deptName[] = "Mens";
$deptName[] = "Girls";
$deptName[] = "Boys";
$ct;

for ($ct=0; $ct <= 3; $ct=$ct + 1)
  {
    print ("Dept #: $ct = $deptName[$ct]<br>");

  }
echo $deptName[0];
?>
</body>
</html>
