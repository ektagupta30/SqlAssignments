<html>
<head><title>PHP and MySQL</title></head>
<body>
<h1>Test of PHP</h1>
<pre>
<?php
    include "linkpassworddonor.php";
    mysqli_select_db($link,"donor");
$sql = "desc donor";
$result= mysqli_query($link,$sql) or die(mysqli_error($link));

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        var_dump ($row);
    }
}
?>
</pre>
</body>
</html>