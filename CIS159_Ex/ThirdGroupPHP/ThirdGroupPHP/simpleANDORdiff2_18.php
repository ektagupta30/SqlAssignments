<html>
<head><title>Simple Yes/No IF</title></head>
<body>
<?php
$invcd = "B";
$amtfst = 100;
$amtsnd = 250;
$msg;
if ($invcd == "A")
  {
     if ($amtfst > 500)
       {
          $msg = "500 - OKAY";
          echo $msg;
       }
     else
       {
          if ($amtsnd > 200)
            {
             $msg = "200 - OKAY";
             echo $msg;
            }
          else
            {
             $msg = "PROBLEM";
             echo $msg;
            }
       }
   }
else
   {
      $msg = "CODE PROBLEM";
      echo $msg;
   }
?>
</body>
</html>
