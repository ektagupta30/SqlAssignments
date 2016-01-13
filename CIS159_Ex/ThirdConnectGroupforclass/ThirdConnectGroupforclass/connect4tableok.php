<html>
<head><title>Testing connection</title></head>
<body>
<h1>Testing connection</h1>
<?php
include "linkpass.php";
mysqli_select_db($link,"invfirst");
$result = mysqli_query($link,"SELECT * from itemfirst where itemno = '12121'");
echo mysqli_num_rows($result);
if (mysqli_num_rows($result) == 0)
    {
      print ("<br>Problem with query: " . mysqli_error($link));
      exit;
    }
$row = mysqli_fetch_row($result);
echo "<br>";
echo "<table>";
echo "<tr>";
echo "<td> $row[0] </td>";
echo "<td> $row[1] </td>";
echo "<td> $row[2] </td>";
echo "<td> $row[3] </td>";
echo "</tr>";
echo "</table>";
?>
<table>
<tr>
<td><?php echo $row[0]; ?></td>
<td><?php echo $row[1]; ?></td>
<td><?php echo $row[2]; ?></td>
<td><?php echo $row[3]; ?></td>
</tr>
</table>

</body>
</html>

