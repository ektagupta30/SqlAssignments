<html>
<head><title>Arrays</title></head>
<body>
<h2>Department Array</h2>
<?php
$deptName[1] = "Womens";
$deptName[2] = "Mens";
$deptName[3] = "Girls";
$deptName[4] = "Boys";
$deptNo = $_GET['deptNo'];
print ("Dept #: $deptNo = $deptName[$deptNo]<br>");
?>
</body>
</html>

