
<html>
<head><title>Arrays</title></head>
<body>


<?php
$distanceArray = array(
                   array (50, 40, 30, 20),
                   array (25, 20, 15, 10),
                   array (100, 90, 80, 70),
                   array (200, 150, 100, 50),
                   array (500, 400, 300, 200)
             );
foreach ($distanceArray as $keyOut => $valueOut)

       {

         foreach ($valueOut as $keyIn => $valueIn)
                {

                 echo $valueIn;
                 echo " ";
                }
         echo "<br>";
        }



?>


</body>
</html>
