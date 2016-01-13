<html>
<head><title>Simple Yes/No IF</title></head>
<body>
<?php
$invcd = "A";
$amtfst = 100;
$amtsnd = 250;
$msg = "NO MSG";
if ($invcd == "A" && ($amtfst > 500 || $amtsnd > 200))
  {
     $msg = "OKAY";
     echo $msg;
  }
?>
</body>
</html>
