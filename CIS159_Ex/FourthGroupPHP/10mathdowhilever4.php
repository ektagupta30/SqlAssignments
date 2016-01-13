<html>
<head><title>Math</title></head>
<body>
<h2>Here are some math facts and there is a problem!</h2>
<?php
$ct1 = 1;
$ct2 = 1;
do 
  {
       do
           {
             $ans = $ct1 + $ct2;
             echo ("$ct1 + $ct2 = $ans<br>");
             $ct2++;
            } while ($ct2 <= 4);
        $ct1++;
   } while ($ct1 <= 4);
?>
</body>
</html>