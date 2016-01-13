<html>
<head><title>Simple Yes/No IF</title></head>
<body>
<?php
$invcd = "A";
$amt = 7000;
$msg;
if ($invcd == "A")
  {
   if ($amt > 5000)
     {
       $msg = "OKAY";
       echo $msg;
     }
  }
?>
</body>
</html>
