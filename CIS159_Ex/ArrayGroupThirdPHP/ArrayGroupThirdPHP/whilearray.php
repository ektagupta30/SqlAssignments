<?php
$animalArray = array('jungle' => 'elephant', 'domestic' => 'dog', 'wild' => 'wolf');
echo $animalArray['domestic'];
echo "<br><br>Now the while:<br>";
while ($animal = current($animalArray))
   {
    echo key($animalArray);
    echo "<br>";
    echo current($animalArray);
    echo "<br>";
    next($animalArray);
   }
   
?>
