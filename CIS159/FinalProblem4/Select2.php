<?php
include "linkPass.php";
mysqli_select_db($link,"egupta11_1");
session_start();
$variable1  = $_SESSION['variable1'];
echo $_SESSION['variable1'];
$showresult = mysqli_query($link,"SELECT * from inventory where itemno > $variable1 AND  (onhand > $variable1 or onorder > $variable1)")
    or die("Invalid query: " . mysqli_error($link));
    while ($row = mysqli_fetch_array($showresult))
       {
        echo ("<br> ITEMNO = ". $row[0] . "<br> ITEMNAME =  " . $row[1] . "<br>");
    	    echo("ONHAND = " . $row[2] . "<br> ONORDER = " . $row[3] . "<br>");
       }
       ?>