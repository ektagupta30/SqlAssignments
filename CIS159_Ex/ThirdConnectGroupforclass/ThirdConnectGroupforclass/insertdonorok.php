<html>
<head><title>PHP and MySQL</title></head>
<body>
<h1>Test of PHP</h1>
<?php
include "linkPass.php";
mysqli_select_db($link,"egupta11_1");
$idno=$_POST["inidno"];
$name=$_POST["inname"];
$stadr=$_POST["instadr"];
$city=$_POST["incity"];
$state=$_POST["instate"];
$zip=$_POST["inzip"];
$datefst=$_POST["indatefst"];
$yrgoal=$_POST["inyrgoal"];
$contact=$_POST["incontact"];
$sql = "INSERT INTO donor1 values ('$idno', '$name', '$stadr', '$city', '$state', '$zip', '$datefst', '$yrgoal', '$contact')";
$result = mysqli_query($link,$sql) or die(mysqli_error($link));
echo $result;
$showaresult = mysqli_query($link,"SELECT * from donor1 where idno = '$idno'")
    or die("Invalid query: " . mysqli_error($link));
$row = mysqli_fetch_array($showaresult);
    echo ("<br> ID = ". $row[0] . "<br> NAME =  " . $row[1] . "<br>");
    echo("STREET = " . $row[2] . "<br> CITY = " . $row[3] . "<br>");
    echo("STATE = " . $row[4] . "<br> ZIP = " . $row[5] . "<br>");
    echo("Datefst = " . $row[6] . "<br> yrgoal = " . $row[7] . "<br>".$row[8]. "<br>");
$showresult = mysqli_query($link,"SELECT * from donor1")
    or die("Invalid query: " . mysqli_error($link));

while ($row = mysqli_fetch_array($showresult))
   {
    echo ("<br> ID = ". $row["idno"] . "<br> NAME =  " . $row["name"] . "<br>");
    echo("STREET = " . $row["stadr"] . "<br> CITY = " . $row["city"] . "<br>");
    echo("STATE = " . $row["state"] . "<br> YEAR GOAL = " . $row["yrgoal"] . "<br>");
   }
?>
</body>
</html>
