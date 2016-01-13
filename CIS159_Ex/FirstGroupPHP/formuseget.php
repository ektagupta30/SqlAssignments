<html>
<head><title>Form using get</title></head>
<body>
<?php
   $stuname = $_GET['stuname'];
   $grade = $_GET['grade'];
   echo ("<h3>Student Name: $stuname </h3>");
   echo ("<h3>Student Grade: $grade</h3>");
?>
</body>
</html>