<?php
$rainbow = array("first"=>"red","second"=>"orange","third"=>"yellow","fourth"=>"green","fifth"=>"blue","sixth"=>"purple");
// This sets up an array of 6 elements where we specify the key as we create the array, note the change in order

foreach ($rainbow as $indx=>$colors)
 {
  echo "<h2> The index is $indx and the color is $colors</h2>";
 }
?>