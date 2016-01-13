<html>
<head><title>Simple Yes/No IF</title></head>
<body>
<?php
$invcd = "N";
$msg;
switch ($invcd)
{
  case "A":
    $msg = "Code is A";
    break;
  case "B":
    $msg = "Code is B";
    break;
  case "C":
    $msg = "Code is C";
    break;
  default:
    $msg = "Code is not A or B or C";
  }
echo $msg;
?>
</body>
</html>
