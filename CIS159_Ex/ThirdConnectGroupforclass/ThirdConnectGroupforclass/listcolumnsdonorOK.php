<html>
<head><title>PHP and MySQL</title></head>
<body>
<h1>Test of PHP</h1>
<pre>
<?php
    include "includepassword.php";
    mysqli_select_db($link,"donor");
$sql = "SHOW COLUMNS FROM donor";
$result= mysqli_query($link,$sql) or die(mysqli_error());

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        print_r($row);
    }
}
?>
</pre>
</body>
</html>