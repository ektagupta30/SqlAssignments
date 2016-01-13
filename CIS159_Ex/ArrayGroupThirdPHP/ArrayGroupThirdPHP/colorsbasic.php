<?php
$rainbow = array('red','orange','yellow','green','blue','purple');
// This sets up an array of 6 elements, note that the index/subscript 0 gets the first element and 5 gets the last element
echo $rainbow[0];
echo "<br>";
echo $rainbow[5];
// The for loops through each element in the array
// Note that $ct = $ct + 1 could have been written as $ct++
for ($ct=0;$ct<6;$ct=$ct+1)
 {
  echo "<h2>The color is $rainbow[$ct]</h2>";
 }
?>