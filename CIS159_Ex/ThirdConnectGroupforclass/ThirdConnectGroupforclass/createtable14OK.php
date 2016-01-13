<html>
<head><title>PHP and MySQL</title></head>
<body>
<h1>Test of PHP</h1>
<?php
include "includepassword.php";
mysqli_select_db($link,"fortesting");
$sql = "CREATE TABLE firsttable14a (idno int(3) primary key, aname varchar(25), adr varchar(50))";
$result= mysqli_query($link,$sql) or die(mysqli_error($link));
echo $result;
$sql = "INSERT INTO firsttable14a values (150, 'John Doe', '12 Elm St')";
$result= mysqli_query($link,$sql) or die(mysqli_error($link));
echo $result;
$sql = "INSERT INTO firsttable14a values (151, 'Mary Smith', '15 Main St')";
$result= mysqli_query($link,$sql) or die(mysqli_error($link));
echo $result;
$result = mysqli_query($link,"SELECT idno, aname, adr from firsttable14a")
or die("Invalid query: " . mysqli_error($link));
while ($row = mysqli_fetch_array($result))
   {
    print ("<br>" . $row["idno"] . "<br>" . $row["aname"] . "<br>" . $row["adr"] . "<br>");
    echo ("<br>");
   }
?>
</body>
</html>