<html>
<head><title>PHP and MySQL</title></head>
<body>
<h1>Test of PHP</h1>
<?php
include "linkpassdonor.php";
mysqli_select_db($link,"donor");
$yrgoalin=2000;
$result = mysqli_query($link,"SELECT * from donor where state = 'RI' and (yrgoal < '$yrgoalin' or yrgoal is null)")
    or die("Invalid query: " . mysqli_error());

while ($row = mysqli_fetch_array($result))
{
   echo ("<br> ID = ". $row["idno"] . "<br> NAME =  " . $row["name"] . "<br>");
   echo("STATE = " . $row["state"] . "<br> YEAR GOAL = " . $row["yrgoal"] . "<br>");
}
?>

</body>
</html>