<html>
<head><title>PHP and MySQL</title></head>
<body>
<h1>Test of PHP</h1>
<?php
    include "passworddb.php";
    mysqli_select_db($link,"mail");
$sql = "SHOW COLUMNS FROM testemail";
$result= mysqli_query($link,$sql) or die(mysqli_error($link));
if (!$result) {
    echo 'Could not run query: ' . mysqli_error($link);
    exit;
}
if (mysqli_num_rows($result) > 0) 
    {
    while ($row = mysqli_fetch_assoc($result)) 
      {
        print ("<br>");
        print_r($row);
      }
    }
?>
</body>
</html>