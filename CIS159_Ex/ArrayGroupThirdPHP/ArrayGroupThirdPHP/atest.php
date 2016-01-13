<?php
$adr = array("stno" => 123, "stname" => "Main", "sttype" => "St");
echo "Street Address: ${adr['stname']}<br>";
//echo "Street Address: ${adr[stname]}<br>"; error
echo "Street Address: $adr[stname]<br>";
echo "Street Address: {$adr['stname']}<br>";
//echo "Street Address: {$adr[stname]}<br>"; error
?>