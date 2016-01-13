<html>
<head><title>Delete</title></head>
<body>
<h1>Delete in PHP</h1>
<?php
 include "linkPass.php";
    mysqli_select_db($link,"egupta11_1");
   $idno=$_POST["inidno"];
   $sql = "DELETE FROM donor1 WHERE idno = '$idno'";
   $result= mysqli_query($link,$sql) or die(mysqli_error($link));
   $showresult = mysqli_query($link,"SELECT * from donor1")
       or die("Invalid query: " . mysqli_error($link));
   while ($row = mysqli_fetch_array($showresult))
      {
       echo ("<br> ID = ". $row[0] . "<br> NAME =  " . $row[1] . "<br>");
       echo("STREET = " . $row[3] . "<br> CITY = " . $row[4] . "<br>");
       echo("STATE = " . $row[5] . "<br> YEAR GOAL = " . $row[6] . "<br>");
   }
?>
</body>
</html>