<!DOCTYPE html>
<html>
<head>
<title>Explode</title>
</head>
<body>
<h1>Explode</h1>
<?php
$BCC = "Bristol Community College";
$result = explode(" ",$BCC);
print_r($result);
echo "<br>";
echo $result[2];
?>
</body>
</html>