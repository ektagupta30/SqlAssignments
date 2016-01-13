<html>
<head><title>PHP and MySQL</title></head>
<body>
<h1>Test of PHP</h1>
<?php
include "includepassword.php";
mysqli_select_db($link,"donor");
$idno=$_POST["inidno"];
$contact=$_POST["contact"];
echo "before";
echo "<br />";
$test = mysqli_query($link,"SELECT * from donor");
while($row = mysqli_fetch_array($test))
  {
  echo $row['idno'] . " " . $row['name'] . " " . $row['contact'];
  echo "<br />";
  }
mysqli_free_result($test);
$sql = "UPDATE donor SET contact = '$contact' WHERE idno = '$idno'";
echo $sql;
echo "<br>";

$result= mysqli_query($link,$sql) or die(mysql_error($link));
echo $result;
echo "<br>";
echo mysqli_affected_rows($link);
echo "<br>";
echo "after";
  echo "<br>";
$test = mysqli_query($link,"SELECT * from donor");
while($row = mysqli_fetch_array($test))
  {
  echo $row['idno'] . " " . $row['name'] . " " . $row['contact'];
  echo "<br />";
  }

?>
</body>
</html>
