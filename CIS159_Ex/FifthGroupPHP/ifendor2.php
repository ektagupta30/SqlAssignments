<html>
<head><title>Math</title></head>
<body>
<h2>Whatever!</h2>
<?php
$dept = 22;
$budget = 120000;
if ($dept == 20 || $budget > 100000):
      $msg = "OK";
else:
      $msg = "Problem";
endif;
echo $msg;      
?>
</body>
</html>