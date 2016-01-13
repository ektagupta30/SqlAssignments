<html>
<head><title>Simple Yes/No IF</title></head>
<body>
<?php
$invcd = "F";
$msg;
if ($invcd == "A" || $invcd == "D")
  {
    $msg = "Code is A or D";
  }
elseif ($invcd == "B" || $invcd == "E" || $invcd == "F")
  {
    $msg = "Code is B or E or F";
  }
elseif ($invcd == "C")
  {
    $msg = "Code is C";
  }
else
  {
    $msg = "Something else";
  }
echo $msg;
?>
</body>
</html>
