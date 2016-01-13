<html>
<head><title>PHP and MySQL</title></head>
<body>
<h1>Test of PHP</h1>
<?php
include "includepassword.php";
mysqli_select_db($link,"donor");
$result = mysqli_query($link,"SELECT * from donor order by idno")
    or die("Invalid query: " . mysqli_error());

while ($row = mysqli_fetch_array($result))
{
   echo ("<br> ID = ". $row["idno"] . "<br> NAME =  " . $row["name"] . "<br>");
   echo("STREET = " . $row["stadr"] . "<br> CITY = " . $row["city"] . "<br>");
   echo "STATE = " . $row["state"] . "<br> YEAR GOAL = " . $row["yrgoal"] . "<br>";
   echo("ZIP = " . $row["zip"] . "<br> CONTACT = " . $row["contact"] . "<br>");
   echo "DATE FIRST = " . $row["datefst"] . "<br>";
}
?>

</body>
</html>