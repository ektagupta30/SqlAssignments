<html>
<head><title>Arrays</title></head>
<body>
<h2>Department Array</h2>
<?php
$deptName = array("Invalid","Womens","Mens","Girls","Boys");
print "<ul>";
foreach ($deptName as $theName)
     {
       print ("<li>Dept  = $theName</li>");
     }
print "</ul>";

?>
</body>
</html>

