<html>
<head><title>PHP and MySQL</title></head>
<body>
<h1>Test of PHP</h1>
<?php
include "linkpassdonor.php";    
mysqli_select_db($link,"donor");
$result = mysqli_query($link,"SELECT * from donor where state = 'MA' and (city = 'Fall River' or  city = 'Seekonk')")
    or die("Invalid query: " . mysqli_error($link));
while ($row = mysqli_fetch_array($result))
{
   echo ("<br>" . $row["idno"] . " "  . $row["name"] . " " . $row["city"] . " " . $row["state"] . " " . $row["yrgoal"] . "<br>");
}
?>
</body>
</html>