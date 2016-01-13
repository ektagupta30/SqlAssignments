<html>
<head><title>Echo experiment</title></head>
<body>
<?php
  $school = "BCC";
  echo "Using double quotes:<br>";
  echo "Welcome to $school!";
  echo "<br>";
  echo "Welcome to, $school!<br>";
  echo "Welcome to $school!";
  echo "<br>","Welcome to ", $school, "!";
  echo "<br>Welcome to ".$school."!!";
  echo "<br>Welcome to $school!!!";
  echo '<br><br>Using single quotes:';
  echo '<br>Welcome to $school!!!';
  echo '<br>Welcome to ' . $school . '!!!!';
  echo '<br>Welcome to ', $school , '!!!!';
?>
<br>Comment notice the difference between single and double quotes 
</body>
</html>