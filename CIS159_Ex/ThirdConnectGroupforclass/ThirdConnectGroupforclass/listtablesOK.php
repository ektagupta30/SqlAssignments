<html>
<head><title>PHP and MySQL</title></head>
<body>
<h1>Test of PHP</h1>
<pre>
<?php
    include "includepassword.php";
    $db = mysqli_select_db($link,"fortesting");

$tablelist = mysqli_query($link,"SHOW TABLES");
echo "<br>";
while ($row = mysqli_fetch_array($tablelist, MYSQL_NUM))
   {
    echo $row[0] . "<br>";
   }

?>
</pre>
</body>
</html>
