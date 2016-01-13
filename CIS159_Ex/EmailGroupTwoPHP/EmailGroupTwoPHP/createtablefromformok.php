<html>
<head><title>PHP and MySQL</title></head>
<body>
<h1>Test of PHP</h1>
<?php
    include "passformail.php";
    print ("Connected successfully");
    mysqli_select_db($link,"fortesting");
$sql = "CREATE TABLE infofromform2 (formid int(5) primary key, formname varchar(25), formemail varchar(50), formcomments text)";
$result= mysqli_query($link,$sql) or die(mysqli_error($link));
echo $result;
?>
</body>
</html>
