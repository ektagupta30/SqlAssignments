<html>
<head><title>PHP and MySQL</title></head>
<body>
<h1>Test of PHP</h1>
<?php
include "linkpassdonor.php";
mysqli_select_db($link,"donor");
$state="RI";
$result = mysqli_query($link,"SELECT * from donor where state = 'RI'")
    or die("Invalid query: " . mysqli_error($link));
while ($row = mysqli_fetch_array($result))
{
   echo ("<br> ID = ". $row["idno"] . "<br> NAME =  " . $row["name"] . "<br>");
   echo("CITY = " . $row["city"] . "<br> STATE = " . $row["state"] . "<br>");
}
?>

</body>
</html>