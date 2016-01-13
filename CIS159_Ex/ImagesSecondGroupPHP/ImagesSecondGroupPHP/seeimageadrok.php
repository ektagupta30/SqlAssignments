<html>
<head>
<title>Image</title>
</head>
<body>
<h1>Display image address</h1>
<?php
    include "linkpass.php";
    mysqli_select_db($link,"fortesting");
$result = mysqli_query($link,"SELECT imgid, imgname, imgadr from imageadrtable1")
or die("Invalid query: " . mysqli_error(Slink));
while ($row = mysqli_fetch_array($result))
   {
    print ($row["imgid"] . "<br />" . $row["imgname"] . "<br />" . $row["imgadr"] . "<br>");
    echo "<img src = {$row["imgadr"]}>";
    echo ("<br>");
   }
?>

</body>
</html>