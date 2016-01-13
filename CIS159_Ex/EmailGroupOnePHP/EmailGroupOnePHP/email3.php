<?php
 $to = "pgrocer11@mail.bristol.mass.edu";
 $subject = "Hello! - email3.php";
 $body = "Checking,\n\nDid you get this email?";
 if (mail($to, $subject, $body))
   {
   echo("<p>Message successfully sent!</p>");
   } 
 else
   {
   echo("<p>Message delivery failed...</p>");
   }
?>