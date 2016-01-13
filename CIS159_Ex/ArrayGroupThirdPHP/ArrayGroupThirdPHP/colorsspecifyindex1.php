<?php
$rainbow = array(0=>'red',3=>'orange',5=>'yellow',6=>'green',4=>'blue',2=>'purple',1=>'');
// This sets up an array of 6 elements where we specify the key as we create the array, note the change in order
echo $rainbow[0];
echo "<br>";
echo $rainbow[5];
echo "<br>";
echo $rainbow[1];
echo "<br>";
echo $rainbow[2];

// The for loops through each element in the array
// Note that $ct = $ct + 1 could have been written as $ct++
for ($ct=0;$ct<7;$ct=$ct+1)
 {
  echo "<h2> The ct is $ct and the color is $rainbow[$ct]</h2>";
 }
?>