<html>
<head><title>Arrays</title></head>
<body>
<h2>Department Array</h2>
<?php
$deptName = "Girls";
$deptMang = array("Womens"=>"Reynolds","mens"=>"Johnson","Girls"=>"Adams","Boys"=>"Costa");
echo "Dept Manager: $deptMang[$deptName]<br>";
foreach ($deptMang as $name => $mang)
  {
   echo "Dept Name: $name and Dept Manager: $mang<br>";
  }
?>
</body>
</html>