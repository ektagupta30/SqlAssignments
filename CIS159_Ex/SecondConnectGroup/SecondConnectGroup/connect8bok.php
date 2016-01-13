<html>
<head><title>PHP and MySQL</title></head>
<body>
<h1>Test of PHP</h1>
<?php
include "linkpassdonor.php";
mysqli_select_db($link,"donor");
$yrgoal=2000;
$result = mysqli_query($link,"SELECT * from donor where yrgoal < $yrgoal")
    or die("Invalid query: " . mysqli_error($link));

while ($row = mysqli_fetch_array($result))
{
   echo ("<br> ID = ". $row["idno"] . "<br> NAME =  " . $row["name"] . "<br>");
   echo("CITY = " . $row["city"] . "<br> YEAR GOAL = " . $row["yrgoal"] . "<br>");
}
echo "<br>Next select: <br>";
$result = mysqli_query($link,"SELECT * from donor where yrgoal < '$yrgoal'")
    or die("Invalid query: " . mysqli_error());

while ($row = mysqli_fetch_array($result))
{
   echo ("<br> ID = ". $row["idno"] . "<br> NAME =  " . $row["name"] . "<br>");
   echo("CITY = " . $row["city"] . "<br> YEAR GOAL = " . $row["yrgoal"] . "<br>");
}
?>

</body>
</html>