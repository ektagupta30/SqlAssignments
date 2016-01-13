<html>
<head><title>PHP and MySQL</title></head>
<body>
<h1>Test of PHP</h1>
<?php
 include "linkpassworddonor.php";
 mysqli_select_db($link,"donor");
$getidno='55555';
$sql = "DELETE FROM donor WHERE idno = '" . $getidno . "'";
if (mysqli_query($link,$sql))
   {
    echo " action = " . mysqli_affected_rows($link);
      {
       if (mysqli_affected_rows($link) == 0)
          {
           echo "  no record was deleted";
          }
       else
          {
           echo "  record deleted";
          }
      }      
   }
else
   {
    echo " problem " . mysqli_error($link);
   }
?>
</body>
</html>
