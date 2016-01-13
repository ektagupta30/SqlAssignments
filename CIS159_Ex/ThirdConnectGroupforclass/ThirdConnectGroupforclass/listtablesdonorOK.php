<html>
<head><title>PHP and MySQL</title></head>
<body>
<h1>Test of PHP</h1>

<?php
    include "linkpassword.php";
    $db = mysqli_select_db($link,"donor");

$tablelist = mysqli_query($link,"SHOW TABLES");
while ($row = mysqli_fetch_array($tablelist, MYSQL_NUM))
   {
    echo $row[0] . "<br>";
   }

?>

</body>
</html>