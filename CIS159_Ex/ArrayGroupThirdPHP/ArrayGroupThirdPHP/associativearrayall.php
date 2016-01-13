<html>
<head><title>Arrays</title></head>
<body>
<h2>Department Array</h2>
<?php
$deptName="Girls";
$deptMang['Womens'] = "Reynolds";
$deptMang["Mens"] = "Johnson";
$deptMang['Girls'] = "Adams";
$deptMang['Boys'] = "Costa";
echo ("Dept Name: $deptName and Dept Manager: $deptMang[$deptName]<br><br>");
foreach ($deptMang as $name => $mang)
  {
   echo ("Dept Name: $name and Dept Manager: $mang<br>");
  }
?>
</body>
</html>
