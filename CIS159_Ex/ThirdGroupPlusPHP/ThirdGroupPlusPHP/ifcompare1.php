<html>
<head><title>Simple Yes/No IF</title></head>
<body>
<?php
$invcd = "B";
$msg;
if ($invcd == "A")
 
    $msg = "Code is A";

else
 
    if ($invcd == "B")
   
        $msg = "Code is B";
    
    else
    
        if ($invcd == "C")
    
            $msg = "Code is C";
   
    
  
echo $msg;
?>
</body>
</html>
