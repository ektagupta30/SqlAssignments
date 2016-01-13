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

// The foreach loops through each element in the array and note that it ignores the specified index and gives the order declared

foreach ($rainbow as $indx=>$colors)
 {
  echo "<h2> The index is $indx and the color is $colors</h2>";
 
 }
?>