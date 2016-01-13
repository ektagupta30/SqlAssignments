<html>
<head><title>Simple Yes/No IF</title></head>
<body>
<?php
$invcd = "B";
$amt = 7000;
$msg;
if ($invcd == "A")
  {
   if ($amt > 5000)
     {
       $msg = "OKAY";
       echo $msg;
     }
   else
     {
       $msg = "PROBLEM";
       echo $msg;
     }
   }
else
  {
    $msg = "BAD CODE";
    echo $msg;
  }
?>
</body>
</html>
