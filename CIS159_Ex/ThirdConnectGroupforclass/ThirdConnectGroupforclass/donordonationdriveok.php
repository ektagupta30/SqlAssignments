<?php
include "includepassword.php";
mysqli_select_db($link,"donor");
$result = mysqli_query($link,"SELECT donor.idno, name, drive.driveno, drivename from donor, donation, drive where donor.idno = donation.idno and drive.driveno = donation.driveno")
or die("Invalid query: " . mysqli_error($link));
while ($row = mysqli_fetch_array($result))
{
echo ("<p>ID= ". $row[0] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $row[1] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $row[2] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $row[3] . " </p>");
echo ("<p>ID= ". $row["idno"] .  "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $row["name"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $row["driveno"] . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" . $row["drivename"] . " </p>");
}

?>