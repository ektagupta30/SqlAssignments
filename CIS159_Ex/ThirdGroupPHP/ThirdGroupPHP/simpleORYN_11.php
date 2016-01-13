<html>
<head><title>Simple Yes/No IF</title></head>
<body>
<?php
$invcd = "B";
$amt = 2000;
$msg;
if ($invcd == "A")
  {
     $msg = "OKAY";
     echo $msg;
  }
else
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
?>
</body>
</html>
