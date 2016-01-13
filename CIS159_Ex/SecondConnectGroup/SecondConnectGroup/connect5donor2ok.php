<?php
include "linkpass.php";
mysqli_select_db($link,"donor");
$result = mysqli_query($link,"SELECT idno, name from donor")
or die("<br>Invalid query: " . mysqli_error($link));
//This is called a front based function
while ($row = fbsql_fetch_array($result))
{
echo ("<p>ID = ". $row["idno"] . ", NAME = " . $row["name"] . "<br>");
echo ("ID = ". $row[0] . ", NAME = " . $row[1] . "</p>");
}

?>

