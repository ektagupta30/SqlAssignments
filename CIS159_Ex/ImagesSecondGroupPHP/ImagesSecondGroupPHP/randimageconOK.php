<html>
<head>
<title>Random Image</title>
</head>
<body>
<h1>Display a random image</h1>
<?php
include "linkpass.php";
mysqli_select_db($link,"fortesting");
$result = mysqli_query($link,"SELECT imgid, imgname, imgadr from imageadrtable")
or die("Invalid query: " . mysqli_error($link));
$indx = rand(0, 2);
if ($indx == 0)
    {
      $getimg = '150';
    }
else
    if ($indx == 1)
        {
         $getimg = '250';
        }
    else
        {
         $getimg = '350';
        }
echo "<br>";
echo "This is the random image number I want to retrieve from the table " . $getimg;
echo "<br>";
$result = mysqli_query($link,"SELECT imgid, imgname, imgadr from imageadrtable where imgid = '$getimg'")
      or die("Invalid query: " . mysqli_error($link));
$row = mysqli_fetch_array($result);
print ($row['imgid'] . "<br>" . $row['imgname'] . "<br>" . $row["imgadr"] . "<br>");
echo ($row['imgid'] . "<br>" . $row["imgname"] . "<br>" . $row["imgadr"] . "<br>");
echo $row['imgid'] . "<br>" . $row['imgname'] . "<br>" . $row["imgadr"] . "<br>";
echo "<img src = $row[imgadr]>";
echo "<img src = {$row['imgadr']}>";
echo "<img src = " . $row['imgadr'] . ">";
echo "<img src = '$row[imgadr]'>";
print ("<img src = $row[imgadr]>");
print ("<img src = {$row['imgadr']}>");
echo ("<br><br>");
echo '<img src = $row[imgadr]>';
// Note that the results of the select are stored in the associative array $row.  The keys are the field names and the values are the
// data so when I say $row[imgadr] I am giving the key that goes to the associative array and retrieves the value which is the address
// of the image that is displayed using img src.  When I use single quotes around the whole img src =  the single quotes disallow substitution.
?>
</body>
</html>