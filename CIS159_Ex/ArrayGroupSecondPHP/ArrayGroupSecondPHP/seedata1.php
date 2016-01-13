<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>See data</title>
</head>
<body>
<h1>Show collected data</h1>
<?php
echo "<table border='1'>";
echo "<tr> <td>Key</td> <td>Value</td> </tr>";

foreach ($_GET as $key => $value)
  {
   echo <<<TABLEINFO
   <tr>
   <td>$key</td>
   <td>$value</td>
   </tr>
TABLEINFO;
   }
echo "</table>";
?>
</body>
</html>