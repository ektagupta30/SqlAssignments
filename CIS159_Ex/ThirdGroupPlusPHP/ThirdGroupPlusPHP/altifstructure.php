<html>
<head><title>Simple Yes/No IF</title></head>
<body>
<?php
$invcd = "C";
$msg;
if ($invcd == "A"):
    $msg = "Code is A";
elseif ($invcd == "B"):
    $msg = "Code is B";
elseif ($invcd == "C"):
    $msg = "Code is C";
else:
    $msg = "Code is not A, B or C"; 
endif;     
echo $msg;
?>
</body>
</html>
