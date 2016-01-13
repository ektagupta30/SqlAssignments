<html>
<head><title>Testing connection</title></head>
<body>
<h1>Testing connection</h1>
<?php
include "linkpass.php";
mysqli_select_db($link,"invfirst");
echo "<br>Using mysql_fetch_row";
$result = mysqli_query($link,"SELECT itemno, itemname from itemfirst where itemno = 12121");
if (!$result)
    {
      die ("Problem with query: " . mysqli_error($link));
      exit;
    }
$row = mysqli_fetch_row($result);
echo "<br>";
echo $row[0];
echo "<br>";
echo $row[1];
echo "<br> Using mysql_fetch_assoc";
$result = mysqli_query($link,"SELECT itemno, itemname from itemfirst where itemname = 'mouse'");
if (!$result)
    {
      die ("Problem with query: " . mysqli_error($link));
      exit;
    }
$row = mysqli_fetch_assoc($result);
echo "<br>";
echo $row["itemno"];
echo "<br>";
echo $row["itemname"];
echo "<br> Using mysql_fetch_array";
// try eliminating the quotes around mouse
$result = mysqli_query($link,"SELECT itemno, itemname from itemfirst where itemname = 'mouse'");
if (!$result)
    {
      die ("Problem with query - specifically itemname: " . mysqli_error($link));
      exit;
    }
$row = mysqli_fetch_array($result);
echo "<br>";
echo $row["itemno"];
echo "<br>";
echo $row[1];
// try misspelling itemno - I did itemnno
$result = mysqli_query($link,"SELECT itemno, itemname from itemfirst where itemno = '12121'");
if (!$result)
    {
      die ("Problem with query - specifically field name: " . mysqli_error($link));
      exit;
    }
//try using a 0 or 1 inside $row[]
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
echo "<br>";
echo $row["itemno"];
echo "<br>";
echo $row["itemname"];
$result = mysqli_query($link,"SELECT itemno, itemname from itemfirst where itemno = '12121'");
if (!$result)
    {
      die ("Problem with query: " . mysqli_error($link));
      exit;
    }
// try using the name of the field in quotes inside $row[]
$row = mysqli_fetch_array($result, MYSQLI_NUM);
echo "<br />";
echo $row[0];
echo "<br />";
echo $row[1];
?>
</body>
</html>