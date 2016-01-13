<html>
<head><title>Receive data from href</title></head>
<body>
<?php
  $school = $_GET['school'];  //Note the use of the get because the data was passed without a form using the URL
  echo "Welcome to $school!";
?>
</body>
</html>