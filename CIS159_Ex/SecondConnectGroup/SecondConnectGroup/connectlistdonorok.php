<html>
<head><title>PHP and MySQL</title></head>
<body>
<h1>Test of PHP</h1>
<?php
include "linkpassdonor.php";
mysqli_select_db($link,"donor");

$result = mysqli_query($link,"SELECT * from donor")
    or die("Invalid query: " . mysqli_error($link));
echo "fields: idno, name, stadr, city, state, zip, datefst, yrgoal, contact <br>";
while ($row = mysqli_fetch_array($result))
{
   echo ($row["idno"] . " " . $row["name"] . " " .  $row["city"] . " " .  $row["state"] . " " .  $row["zip"] . " ");
   echo ($row["datefst"] . " " . $row["yrgoal"] . " " . $row["contact"] . "<br>");
}
?>

</body>
</html>