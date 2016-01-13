<html>
<head><title>For loop</title></head>
<body>
<h2>Here are the numbers from 1 to 10</h2>
<?php
$ct;
for ($ct=1; $ct <= 10; $ct=$ct + 1)
{
  echo $ct;
  echo "<br>";
}
for ($ct=1; $ct <= 10; $ct++)
{
  echo $ct;
  echo "<br>";
}
?>
</body>
</html>