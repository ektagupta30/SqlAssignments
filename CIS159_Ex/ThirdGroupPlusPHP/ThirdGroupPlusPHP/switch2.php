<html>
<head><title>Simple Yes/No IF</title></head>
<body>
<?php
$num = 200;
$msg;
switch ($num)
{
  case 100:
    $msg = "num is 100";
    break;
  case 200:
    $msg = "num is 200";
    break;
  case 300:
    $msg = "num is 300";
    break;
  default:
    $msg = "num is > 300";
  }
echo $msg;
?>
</body>
</html>
