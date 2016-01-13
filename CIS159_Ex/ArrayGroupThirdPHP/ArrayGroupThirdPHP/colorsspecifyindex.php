<?php
$rainbow = array(0=>'red',1=>'orange',2=>'yellow',3=>'green',4=>'blue',5=>'purple');
// This sets up an array of 6 elements where we specify the key as we create the array
echo $rainbow[0];
echo "<br>";
echo $rainbow[5];
// The for loops through each element in the array
// Note that $ct = $ct + 1 could have been written as $ct++
for ($ct=0;$ct<6;$ct=$ct+1)
 {
  echo "<h2> The ct is $ct and the color is $rainbow[$ct]</h2>";
 }
?>