<html>
<head><title>PHP and MySQL</title></head>
<body>
<h1>Test of PHP</h1>
<?php
    include "includepassword.php";
    mysqli_select_db($link,"fortesting");
    $sqldrop = "drop table firsttable14a";
    $trydrop = mysqli_query($link,$sqldrop);
    if(! $trydrop)
       {
        die('Table could not be deleted: ' . mysql_error());
       }
    echo "Table was deleted successfully\n"; 
    mysqli_close($link);
?>
</body>
</html>