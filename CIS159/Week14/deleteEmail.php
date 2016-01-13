

   <html>
   <head><title>Email</title></head>
   <body>
   <?php
   include "linkPass.php";
   mysqli_select_db($link,"egupta11_1");
   $sql = "DELETE FROM email WHERE id = '03'";
   $result= mysqli_query($link,$sql) or die(mysqli_error($link));
   echo $result;

   ?>
   </body>
</html>