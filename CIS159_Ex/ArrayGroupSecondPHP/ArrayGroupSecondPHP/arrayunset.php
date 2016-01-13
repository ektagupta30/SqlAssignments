<html>
<head><title>Arrays</title></head>
<body>
<h2>Department Array</h2>
<?php
$deptName[0] = "Womens";
$deptName[1] = "Mens";
$deptName[2] = "Girls";
$deptName[3] = "Boys";

foreach ($deptName as $theName)
  {
   print ("<br>Dept Name: $theName ");
  }
unset($deptName[2]);
foreach ($deptName as $theName)
  {
   print ("<br>Dept Name: $theName ");
  }
print ("<br>Show Dept Name: $deptName[2]");
$deptName[2] = "Girls";
foreach ($deptName as $theName)
  {
   print ("<br>Dept Name: $theName ");
  }
print ("<br>Show Dept Name: $deptName[2]");
?>
</body>
</html>