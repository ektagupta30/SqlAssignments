<html>
<head><title>PHP and MySQL</title></head>
<body>
<h1>Test of PHP</h1>
<pre>
<?php
    include "linkpassword.php";
    $db = mysqli_select_db($link,"invfirst");
$sql = "SHOW COLUMNS FROM itemfirst";
$result= mysqli_query($link,$sql) or die(mysqli_error());

if (mysqli_num_rows($result) > 0) 
   {
    echo "<br>";
    while ($row = mysqli_fetch_assoc($result)) 
      {
        print_r($row);
      }
   }

?>
</pre>
</body>
</html>