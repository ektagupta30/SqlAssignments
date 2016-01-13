<html>
<head><title>Form using post</title></head>
<body>
<?php
   $stuname = $_POST['stuname'];
   $grade = $_POST['grade'];
   echo ("<h3>Student Name: $stuname </h3>");
   echo ("<h3>Student Grade: $grade</h3>");
?>
</body>
</html>