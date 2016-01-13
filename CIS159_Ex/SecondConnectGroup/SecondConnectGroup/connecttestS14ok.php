<html>
<head><title>PHP and MySQL</title></head>
<body>
<h1>Test of PHP</h1>
<?php
include "linkpassdonor.php";
    mysqli_select_db($link,"donor");
$idno='12121';
$result = mysqli_query($link,"SELECT * from donor where idno = '$idno'")
    or die("Invalid query: " . mysqli_error());
$row = mysqli_fetch_array($result);
   echo "<br> This is row";
   echo ("<br> ID = ". $row["0"] . "<br> NAME =  " . $row["name"] . "<br>");
   echo("CITY = " . $row["city"] . "<br> STATE = " . $row[4] . "<br>");
$result = mysqli_query($link,"SELECT * from donor where idno = '$idno'")
    or die("Invalid query: " . mysqli_error());
$rowa = mysqli_fetch_array($result, MYSQLI_ASSOC);
    echo"<br> This is rowa";
   echo ("<br> ID = ". $rowa["idno"] . "<br> NAME =  " . $rowa["name"] . "<br>");
   echo("CITY = " . $rowa["city"] . "<br> STATE = " . $rowa["state"] . "<br>");
$result = mysqli_query($link,"SELECT * from donor where idno = '$idno'")
    or die("Invalid query: " . mysqli_error());
$rowb = mysqli_fetch_array($result, MYSQLI_NUM);
   echo "<br> This is rowb";
   echo ("<br> ID = ". $rowb[0] . "<br> NAME =  " . $rowb[1] . "<br>");
   echo("CITY = " . $rowb[3] . "<br> STATE = " . $rowb[4] . "<br>");
$result = mysqli_query($link,"SELECT * from donor where idno = '$idno'")
    or die("Invalid query: " . mysqli_error());
$rowc = mysqli_fetch_assoc($result);
   echo "<br> This is rowc";
   echo ("<br> ID = ". $rowc['idno'] . "<br> NAME =  " . $rowc["name"] . "<br>");
   echo("CITY = " . $rowc["city"] . "<br> STATE = " . $rowc["state"] . "<br>");
$result = mysqli_query($link,"SELECT * from donor where idno = '$idno'")
    or die("Invalid query: " . mysqli_error());
$rowd = mysqli_fetch_array($result, MYSQLI_ASSOC);
   echo "<br> This is rowd";
   echo ("<br> ID = ". $rowd["idno"] . "<br> NAME =  " . $rowd["name"] . "<br>");
   echo("CITY = " . $rowd["city"] . "<br> STATE = " . $rowd["state"] . "<br>");
$result = mysqli_query($link,"SELECT * from donor where idno = '$idno'")
    or die("Invalid query: " . mysqli_error());
$rowe = mysqli_fetch_array($result, MYSQLI_NUM);
   echo "<br> This is rowe";
   echo ("<br> ID = ". $rowe[0] . "<br> NAME =  " . $rowe[1] . "<br>");
   echo("CITY = " . $rowe[3] . "<br> STATE = " . $rowe[4] . "<br>");
$result = mysqli_query($link,"SELECT * from donor where idno = '$idno'")
    or die("Invalid query: " . mysqli_error());
$rowf = mysqli_fetch_row($result);
   echo "<br> This is rowf";
   echo ("<br> ID = ". $rowf[0] . "<br> NAME =  " . $rowf[1] . "<br>");
   echo("CITY = " . $rowf[3] . "<br> STATE = " . $rowf[4] . "<br>");
$rowg = mysqli_fetch_array($result, MYSQLI_ASSOC);
   echo "<br> This is rowg";
   echo ("<br> ID = ". $rowg["idno"] . "<br> NAME =  " . $rowg["name"] . "<br>");
   echo("CITY = " . $rowg["city"] . "<br> STATE = " . $rowg["state"] . "<br>");
$rowh = mysqli_fetch_array($result, MYSQLI_NUM);
   echo "<br> This is rowh";
   echo ("<br> ID = ". $rowh[0] . "<br> NAME =  " . $rowh[1] . "<br>");
   echo("CITY = " . $rowh[3] . "<br> STATE = " . $rowh[4] . "<br>");
?>


</body>
</html>