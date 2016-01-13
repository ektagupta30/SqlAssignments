<html>
<head><title>UPDATE</title></head>
<body>
<?php
include "linkPass.php";
mysqli_select_db($link,"egupta11_1");

$itemno=$_POST["itemno"];
$code=$_POST["code"];
$quantity = $_POST["quantity"];
echo "<br>";
echo "<B>BEFORE UPDATE </B>";
$showresult = mysqli_query($link,"SELECT * from inventory")
    or die("Invalid query: " . mysqli_error($link));
    while ($row = mysqli_fetch_array($showresult))
       {
        echo ("<br> ITEMNO = ". $row[0] . "<br> ITEMNAME =  " . $row[1] . "<br>");
    	    echo("ONHAND = " . $row[2] . "<br> ONORDER = " . $row[3] . "<br>");
       }

if ($code == "S"){
echo "<br>";
echo "<B>AFTER UPDATE </B>";
$showaresult = mysqli_query($link,"SELECT onhand from inventory where itemno = '$itemno'")
    or die("Invalid query: " . mysqli_error($link));
$row = mysqli_fetch_row($showaresult);
$onhand = $row[0] - $quantity;
$sql = "UPDATE inventory SET onhand = '$onhand' WHERE itemno = '$itemno'";
$result= mysqli_query($link,$sql) or die(mysqli_error($link));
echo $result;
$showresult = mysqli_query($link,"SELECT * from inventory")
    or die("Invalid query: " . mysqli_error($link));
    while ($row = mysqli_fetch_array($showresult))
       {
        echo ("<br> ITEMNO = ". $row[0] . "<br> ITEMNAME =  " . $row[1] . "<br>");
    	    echo("ONHAND = " . $row[2] . "<br> ONORDER = " . $row[3] . "<br>");
       }
}
elseif ($code == "R"){
echo "<br>";
echo "<B>AFTER UPDATE </B>";
$showaresult = mysqli_query($link,"SELECT onhand,onorder from inventory where itemno = '$itemno'")
    or die("Invalid query: " . mysqli_error($link));
$row = mysqli_fetch_row($showaresult);
$onhand = $row[0] + $quantity;
$onorder = $row[1] - $quantity;
$sql = "UPDATE inventory SET onhand = '$onhand',onorder ='$onorder' WHERE itemno = '$itemno'";
$result= mysqli_query($link,$sql) or die(mysqli_error($link));
echo $result;
$showresult = mysqli_query($link,"SELECT * from inventory")
    or die("Invalid query: " . mysqli_error($link));
    while ($row = mysqli_fetch_array($showresult))
       {
        echo ("<br> ITEMNO = ". $row[0] . "<br> ITEMNAME =  " . $row[1] . "<br>");
    	    echo("ONHAND = " . $row[2] . "<br> ONORDER = " . $row[3] . "<br>");
       }
}

else{
echo "<br>";
echo "Please enter valid code ";
}




?>
</body>
</html>