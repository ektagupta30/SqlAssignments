<html>
<head><title>PHP and MySQL</title></head>
<body>
<h1>Test of PHP</h1>
<?php
    include "includepassword.php";
    mysqli_select_db($link,"donor");
$sql = "SHOW COLUMNS FROM drive";
$result= mysqli_query($link,$sql) or die(mysqli_error());
if (!$result) {
    echo 'Could not run query: ' . mysqli_error();
    exit;
}
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        print_r($row);
    }
}
?>
</body>
</html>