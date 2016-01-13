<html>
<head><title>Hello with variable</title></head>
<body>
<h3>This is the form</h3>

<form action="getproc1.php" method="post">

Name: <input type="text" name="stuname"><br>
Grade: <input type="text" name="grade"><br><br>
<input type="submit" name="Click" value="Click"></p>

</form>
<pre>
<?php print_r($_POST); ?>
</pre>
<?php
if (!empty($_POST) and !($_POST['stuname'] == ""))
   {
    $stuname = $_POST['stuname'];
    $grade = $_POST['grade'];

    echo ("Hello");
    echo ("<h3>Student Name: $stuname </h3>");
    echo ("<h3>Student Grade: $grade</h3>");
    $_POST['stuname'] = "";
    $_POST['grade'] = "";
  }
?>

</body>
</html>