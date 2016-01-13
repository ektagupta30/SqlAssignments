<html>
<head><title>PHP and MySQL</title></head>
<body>
<h1>Test of PHP</h1>
<?php
include "linkpassworddonor.php";   
mysqli_select_db($link,"donor");
$getidno = 55677;
$sql = "UPDATE donor SET stadr = '127 North St' WHERE idno = $getidno";
if (mysqli_query($link,$sql))
   {
    echo " action = " . mysqli_affected_rows($link);
      {
       if (mysqli_affected_rows($link) == 0)
          {
           echo "  no record was updated";
          }
       else
          {
           echo "   record was updated";
           $result = mysqli_query($link,"SELECT * from donor where idno = '$getidno'");
           $row = mysqli_fetch_array($result);
           echo "<br>" . $row["stadr"];
          }
      }      
   }
else
   {
    echo " problem " . mysql_error($link);
   }




?>
</body>
</html>
