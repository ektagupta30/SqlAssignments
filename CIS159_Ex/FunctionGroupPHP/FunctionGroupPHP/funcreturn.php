<?php
function calcfunc($first, $second, $oper)
    {
     if ($oper == "+")
       {
        $ans = $first + $second;
       }
     elseif ($oper == "-")
       {
        $ans = $first - $second;
       }
     elseif ($oper == "*")
       {
        $ans = $first * $second;
       }
     else
       {
        $ans = $first / $second;
       }
     return $ans; 
    }
$firstIn = 12;
$secondIn = 2;
$operIn = "/";
echo $firstIn . " " . $operIn . " " . $secondIn . " = " .calcfunc($firstIn, $secondIn, $operIn);
?>