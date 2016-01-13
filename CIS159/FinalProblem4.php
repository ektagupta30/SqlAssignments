<?php
include "linkPass.php";
mysqli_select_db($link,"egupta11_1");

$variable1 = 10;
$variable2=  20;
echo "<br>";
$showresult = mysqli_query($link,"SELECT * from inventory where onhand > $variable1 and onhand < $variable2")
    or die("Invalid query: " . mysqli_error($link));
    while ($row = mysqli_fetch_array($showresult))
       {
        echo ("<br> ITEMNO = ". $row[0] . "<br> ITEMNAME =  " . $row[1] . "<br>");
    	    echo("ONHAND = " . $row[2] . "<br> ONORDER = " . $row[3] . "<br>");
       }
       ?>