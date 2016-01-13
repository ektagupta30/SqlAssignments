<?php
$animalArray = array('jungle' => 'elephant', 'domestic' => 'dog', 'wild' => 'wolf');
echo $animalArray['domestic'];
echo "<br><br>While:<br>";
while ($animal = current($animalArray))
   {
    echo key($animalArray);
    echo "<br>";
    next($animalArray);
   }
   
?>