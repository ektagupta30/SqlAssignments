<html>
<head><title>Testing connection</title></head>
<body>
<h1>Testing connection</h1>
<?php
include "linkpass.php";
mysqli_select_db($link,"invfirst");
echo "<br>Using mysql_fetch_row";
$result = mysqli_query($link,"SELECT itemno, itemname from itemfirst where itemno = '12121'");
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
$result = mysqli_query($link,"SELECT itemno, itemname from itemfirst where itemno = '12121'");
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
$result = mysqli_query($link,"SELECT itemno, itemname from itemfirst where itemno = '12121'");
if (!$result)
    {
      die ("Problem with query: " . mysqli_error($link));
      exit;
    }
$row = mysqli_fetch_array($result);
echo "<br>";
echo $row["itemno"];
echo "<br>";
echo $row[1];
$result = mysqli_query($link,"SELECT itemno, itemname from itemfirst where itemno = '12121'");
if (!$result)
    {
      die ("Problem with query: " . mysqli_error($link));
      exit;
    }
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
$row = mysqli_fetch_array($result, MYSQLI_NUM);
echo "<br />";
echo $row[0];
echo "<br />";
echo $row[1];
?>
</body>
</html>