<html>
<head><title>Simple Yes/No IF</title></head>
<body>
<?php
$invcd = "A";
$amt = 6000;
$msg;
if ($invcd == "A" && $amt > 5000)
     {
       $msg = "OKAY";
       echo $msg;
     }
   else
     {
       $msg = "PROBLEM";
       echo $msg;
     }
?>
</body>
</html>