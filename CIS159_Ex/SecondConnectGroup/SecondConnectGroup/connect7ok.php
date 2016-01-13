<html>
<head><title>PHP and MySQL</title></head>
<body>
<h1>Test of PHP</h1>
<?php
include "linkpassdonor.php";
mysqli_select_db($link,"donor");
$result = mysqli_query($link,"SELECT * from donor")
or die("Invalid query: " . mysqli_error($link));
while ($row = mysqli_fetch_assoc($result))
{
  print ("<p>ID= ". $row["idno"] . "<br /> NAME = " . $row["name"] ."<br>");
  print ("CITY = " . $row["city"] . "<br /> STATE = " . $row["state"] . "<br>");
}
?>
</body>
</html>
