<html>
<head><title>Hello with variable</title></head>
<body>
<?php
$varFirst = "John";    // assigns John to $varFirst
$varLast = "Doe";      // assigns Doe to $varSecond
echo "#1 Hello ", $varFirst, " ", $varLast;
echo '<br>#2 Hello ' . $varFirst . ' ' . $varLast;
echo "<br>#3 Hello " . $varFirst . " " . $varLast;
echo '<br>#4 Hello ' . $varFirst . ' ' . $varLast;
echo "<br>#5 Hello $varFirst $varLast"; //variables are evaluated when enclosed in double quotes like this
echo '<br>#6 Hello $varFirst $varLast'; //with single quotes, the variables are not evaluated
?>
</body>
</html>