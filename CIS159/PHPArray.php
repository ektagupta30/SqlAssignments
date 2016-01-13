<html>
<head><title>Arrays</title></head>
<body>
<h2>Three Dimension Array Array</h2>
<?php
$theArray = array(
                 array(
                       array('dog','cat','rabbit'),
                       array('elephant','tiger','monkey')
                       ),
                 array(
                       array('red','pink','orange'),
                       array('green','blue','purple')
                      ),
                );

  $item = $theArray[0][1][2];
    echo (" $item<br>");


?>
</body>
</html>
