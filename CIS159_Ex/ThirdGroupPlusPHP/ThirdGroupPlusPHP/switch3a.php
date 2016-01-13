<html>
<head><title>Simple Yes/No IF</title></head>
<body>
<?php
$num = 555;
$msg;
switch ($num)
{
  case ($num >= 1 && $num <=100):
    $msg = "num is between 1 and 100";
    break;
  case ($num >= 101 && $num <=200):
    $msg = "num is between 101 and 200";
    break;
  case ($num >= 201 && $num <=300):
    $msg = "num is between 201 and 300";
    break;
  default:
    $msg = "num is > 300";
  }
echo $msg;
?>
</body>
</html>
