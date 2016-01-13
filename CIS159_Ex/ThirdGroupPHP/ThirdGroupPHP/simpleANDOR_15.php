<html>
<head><title>Simple Yes/No IF</title></head>
<body>
<?php
$invcd = "A";
$amtfst = 100;
$amtsnd = 250;
$msg;
if ($invcd == "A")
  {
     if ($amtfst > 500)
       {
          $msg = "OKAY";
          echo $msg;
       }
     else
       {
          if ($amtsnd > 200)
            {
             $msg = "OKAY";
             echo $msg;
            }
       }
   }
?>
</body>
</html>
