<html>
<head><title>Arrays</title></head>
<body>
<h2>Department Array</h2>
<?php
$deptName = array("Womens","Mens","Girls","Boys");
$deptNo = $_GET['deptNo'];
echo ("Dept #: $deptNo = $deptName[$deptNo]<br>");
?>
</body>
</html>

