<html>
<head><title>Arrays</title></head>
<body>
<h2>Department Array</h2>
<?php
$deptName = array("Womens","Mens","Girls","Boys");
foreach ($deptName as $theName)
     {
       print ("Dept  = $theName <br>");
     }
echo "The first entry in the array has an index of 0<br>";
echo $deptName[0];
?>
</body>
</html>

