<?php
$inven = array(array("stuffed bear",24.99,20),
               array("car",8.99,6),
               array("doll",15.99,12),
               array("beach ball",2.99,2)
               );
echo "For a " . $inven[0][0] . " the price is " . $inven[0][1] . " and the cost was " . $inven[0][2] . ".<br>" ;
echo "For a " . $inven[1][0] . " the price is " . $inven[1][1] . " and the cost was " . $inven[1][2] . ".<br>" ;
for ($row = 0; $row < 4; $row++)
  {
   for ($col = 0; $col < 3; $col++)
       {
        echo $inven[$row][$col] . "<br>";
       } 
  }
?>
