<html>
<head><title>Simple Yes/No IF</title></head>
<body>
<?php
$num = 2;
$msg;
switch ($num)
{
  case 0:
    $msg = "num is 0";
    break;
  case 1:
    $msg = "num is 1";
    break;
  case 2:
    $msg = "num is 2";
    break;
  default:
    $msg = "num is > 2";
  }
echo $msg;
?>
</body>
</html>
