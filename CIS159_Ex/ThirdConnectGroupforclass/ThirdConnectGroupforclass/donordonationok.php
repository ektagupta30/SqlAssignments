<?php
include "linkpassworddonor.php";
mysqli_select_db($link,"donor");
$result = mysqli_query($link,"SELECT donor.idno, donation.idno, name from donor, donation where donor.idno = donation.idno")
or die("Invalid query: " . mysqli_error($link));
while ($row = mysqli_fetch_array($result))
{
echo ("<p>ID= ". $row[0] . $row[1] . $row[2] . " </p>");
echo ("<p>ID= ". $row["idno"] . $row["idno"] . $row["name"] . " </p>");
}

?>