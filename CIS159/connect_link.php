<html>
<head><title>Testing connection</title></head>
<body>
<h1>Testing connection</h1>
<?php
include "linkPass.php";
echo "<br>";
echo "Problem#1";
mysqli_select_db($link,"egupta11_1");
$result = mysqli_query($link,"SELECT * from donor")
or die("<br>Invalid query: " . mysqli_error($link));
echo "<br>linked to database";
echo "<br>";
echo "<br>";
echo "Problem#2";
$result = mysqli_query($link,"SELECT name from donor")
or die("<br>Invalid query: " . mysqli_error($link));
while ( $row = mysqli_fetch_row($result))
{
echo ("<p>" . $row[0] . "</p>");
}
echo "<br>";
echo "<br>";
echo "Problem#3";
$result = mysqli_query($link,"SELECT * from donor")
or die("<br>Invalid query: " . mysqli_error($link));
while ( $row = mysqli_fetch_row($result))
{
echo ("<p>" . $row[0] . $row[1] . $row[5] . "</p>");
}

?>
</body>
</html>