<html>
<head><title>Simple Yes/No IF</title></head>
<body>
<?php
$invcd = "B";
$amt = 7000;
$msg;
if ($invcd == "A" || $amt > 5000)
       {
          $msg = "OKAY";
          echo $msg;
       }
?>
</body>
</html>
