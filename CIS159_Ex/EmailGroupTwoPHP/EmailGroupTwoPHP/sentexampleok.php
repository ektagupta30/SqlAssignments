<?php
$to = "pgrocer11@mail.bristol.mass.edu";
$subject = "Homework!";
$body = "Hi,\n\nThis is just a reminder to get caught up if you are not!";
if (mail($to, $subject, $body)) 
   {
    echo("<p>Gone out successfully!</p>");
   } 
else 
   {
    echo("<p>Email problem</p>");
   }
?>