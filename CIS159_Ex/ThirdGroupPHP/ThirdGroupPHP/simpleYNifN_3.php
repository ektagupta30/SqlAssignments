<html>
<head><title>Simple Yes/No IF</title></head>
<body>
<?php
$amt = 2000;
$ans = 0;
if ($amt > 5000)
  {
    $ans = $amt * 10;
    echo $ans;
  }
else
  {
    $ans = $amt * 5;
    echo $ans;
  }
?>
</body>
</html>
