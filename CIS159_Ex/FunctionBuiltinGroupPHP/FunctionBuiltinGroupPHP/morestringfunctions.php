<html>
<pre>
<?php
$txt = "Computer Information Systems Department";
$txtexplode = explode(" ",$txt);
print_r ($txtexplode);
$txtimplode = implode(" ", $txtexplode);
echo "<br> This is the result of the implode: $txtimplode <br>";
$alphabet = "a b c d e f g h i j k l m n o p q r s t u v w x y z";
$alphaex = explode(" ",$alphabet);
print_r ($alphaex);
?>
</pre>
</html>