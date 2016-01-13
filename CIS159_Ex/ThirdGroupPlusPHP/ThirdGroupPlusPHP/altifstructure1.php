<html>
<head><title>Simple Yes/No IF</title></head>
<body>
<?php
$invcd = "D";
$msg;
if ($invcd == "A"):
    $msg = "Code is A";
else:
  if ($invcd == "B"):
    $msg = "Code is B";
  else:
    if ($invcd == "C"):
      $msg = "Code is C";
    else:
      $msg = "Code is not A or B or C"; 
    endif;
  endif;
endif;
echo $msg;
?>
</body>
</html>
