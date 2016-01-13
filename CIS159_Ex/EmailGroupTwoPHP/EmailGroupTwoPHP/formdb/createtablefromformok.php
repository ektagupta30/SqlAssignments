<html>
<head><title>PHP and MySQL</title></head>
<body>
<h1>Test of PHP</h1>
<?php
    include "passformail.php";
    print ("Connected successfully");
    mysql_select_db("fortesting");
$sql = "CREATE TABLE infofromform1 (formid int(5) primary key, formname varchar(25), formemail varchar(50), formcomments text)";
$result= mysql_query($sql,$link) or die(mysql_error());
echo $result;
?>
</body>
</html>
