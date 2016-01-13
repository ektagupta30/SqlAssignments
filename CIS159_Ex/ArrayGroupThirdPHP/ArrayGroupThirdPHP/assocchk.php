<?php
$CIS159 = array("credits" => 3, "semester" => "S", "namez" => "PHP and MySQL");
foreach ($CIS159 as $myKey => $myValue)
   {
    echo $myKey . " is " . $myValue . "<br>";
   }
echo $CIS159["namez"] . " " . $CIS159["credits"];
echo "<br><br>";
$CIS150 = array("credits" => 3, "semester" => "F", "namez" => "Oracle");
foreach ($CIS150 as $myKey => $myValue)
   {
    echo $myKey . " is " . $myValue . "<br>";
   }
echo $CIS150["namez"] . " " . $CIS150["credits"];
?>  