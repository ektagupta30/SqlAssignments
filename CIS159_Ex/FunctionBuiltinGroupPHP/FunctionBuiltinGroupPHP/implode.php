<html>
<pre>
<?php
$txt = "Computer Information Systems Department";
$txtexplode = explode(" ",$txt);
print_r ($txtexplode);
$txtimplode = implode(" ", $txtexplode);
echo "<br> This is the result of the implode: $txtimplode <br>";
?>
</pre>
</html>