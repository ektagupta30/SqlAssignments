<html>
<head><title>Arrays</title></head>
<body>
<h2>Department Array</h2>
<?php
$deptMang = array("Womens"=>"Reynolds","Mens"=>"Johnson","Girls"=>"Adams","Boys"=>"Costa");
ksort($deptMang);
foreach ($deptMang as $name => $mang)
  {
   print ("Dept Name: $name and Dept Manager: $mang<br>");
  }
?>
</body>
</html>