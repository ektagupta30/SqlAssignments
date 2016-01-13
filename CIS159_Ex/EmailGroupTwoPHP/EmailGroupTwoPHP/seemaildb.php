<html>
<head><title>PHP and MySQL</title></head>
<body>
<h1>Test of PHP</h1>
<?php
include "passworddb.php";
mysqli_select_db($link,"mail");
$result = mysqli_query($link,"SELECT * from testemail")
    or die("Invalid query: " . mysqli_error($link));

while ($row = mysqli_fetch_array($result))
{
   echo ("<br> ID = ". $row["idno"] . "<br> NAME =  " . $row["name"] . "<br>");
   echo("EMAIL = " . $row["email"] . "<br>");
}   
?>

</body>
</html>