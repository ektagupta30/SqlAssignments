<html>
<head><title>PHP and MySQL</title></head>
<body>
<h1>Test of PHP</h1>
<?php
include "linkPass.php";
mysqli_select_db($link,"egupta11_1");
$state="RI";
$result = mysqli_query($link,"SELECT * from donor where state = '$state'")
    or die("Invalid query: " . mysqli_error($link));

while ($row = mysqli_fetch_array($result))
{
   echo ("<br> ID = ". $row["IDNO"] . "<br> NAME =  " . $row["NAME"] . "<br>");
   echo("city = " . $row["CITY"] . "<br> STATE = " . $row["STATE"] . "<br>");
}
?>

</body>
</html>
