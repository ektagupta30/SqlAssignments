<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>See data</title>
</head>
<body>
<h1>Show collected data</h1>
<?php
echo <<<TABLESET
<table border="1">
<tr>
<td>Key</td>
<td>Value</td>
</tr>
TABLESET;
foreach ($_REQUEST as $key => $value)
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
  