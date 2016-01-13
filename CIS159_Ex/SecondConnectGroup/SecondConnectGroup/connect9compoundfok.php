<html>
<head><title>PHP and MySQL</title></head>
<body>
<h1>Test of PHP</h1>
<?php
include "linkpassdonor.php";    
mysqli_select_db($link,"donor");
$result = mysqli_query($link,"SELECT idno, name, substr(city,2,3) subcity, state, yrgoal from donor")
    or die("Invalid query: " . mysqli_error($link));
while ($row = mysqli_fetch_array($result))
{
   echo ("<br>" . $row["idno"] . " "  . $row["name"] . " " . $row["subcity"] . " " . $row["state"] . " " . $row["yrgoal"] . "<br>");
}
?>
</body>
</html>