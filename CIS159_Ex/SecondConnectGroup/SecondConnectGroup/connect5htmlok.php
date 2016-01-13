<html>
<head><title>Testing connection</title></head>
<body>
<h1>Testing connection</h1>
<?php
include "linkpass.php";
mysqli_select_db($link,"donor");
$result = mysqli_query($link,"SELECT * from donor")
or die("Invalid query: " . mysqli_error($link));
while ($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
echo ("<p>Name = ". $row[1] . " </p>");
}
?>
</body>
</html>

