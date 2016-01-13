<html>
<head><title>Simple Yes/No IF</title></head>
<body>
<?php
$num = -2;
$msg;
switch ($num)
{
  case ($num >= 1 && $num <=100):
    $msg = "num is between 1 and 100";
    break;
  case ($num >= 101 && $num <=200):
    $msg = "num is between 101 and 200";
    break;
  case ($num >= 201 || $num <=0):
    $msg = "num is over 200 or 0 or less";
    break;
  default:
    $msg = "should not happen";
  }
echo $msg;
?>
</body>
</html>