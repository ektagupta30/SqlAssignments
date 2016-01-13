<html>
<head><title>Simple Yes/No IF</title></head>
<body>
<?php
$invcd = "B";
$amt = 7000;
$msg;
if ($invcd == "A")
  {
     $msg = "CODE - OKAY";
     echo $msg;
  }
else
  {
     if ($amt > 5000)
       {
          $msg = "AMT - OKAY";
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
