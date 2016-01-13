
<?php
$alphabet = "a b c d e f g h i j k l m n o p q r s t u v w x y z";
$alphaex = explode(" ",$alphabet);
print_r ($alphaex);
echo ("<br>");
$inputword = $_POST["inputword"];
$inputwordex = explode(" ",$inputword);
print_r($inputwordex);
$ct = count($inputwordex);
if ($ct < 2 || $ct > 7){
echo "Please enter 2 to 7 letters";
echo "<br>";
}
else{
$decodeword;
$iword = 0;
while ($iword <= $ct - 1)
   {
    $alpha = array_search($inputwordex[$iword],$alphaex);
    if ($alpha==0 )
    {
    $decodeword[$iword] = $alphaex[24];
    $decodewd = $alphaex[24];
    }
   else if ( $alpha==1)
	    {
	    $decodeword[$iword] = $alphaex[25];
	    $decodewd = $alphaex[25];
    }
    else {
    $decodeword[$iword] = $alphaex[$alpha - 2];
    $decodewd = $alphaex[$alpha - 2];
    }
    echo "<br>";
    echo $decodewd;
    $iword = $iword + 1;
   }
$rslt = implode($decodeword);
echo "<br>";
echo $rslt;
}
?>

