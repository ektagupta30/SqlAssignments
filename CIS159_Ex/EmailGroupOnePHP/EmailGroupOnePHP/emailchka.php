<html>
<head><title>email</title></head>
<body>
<?php
$to = "pgrocer11@mail.bristol.mass.edu";
$subject = "PHP email from emailchka";
$body = "PHP is a great language to work with on the web!!";
$headers = "From: Priscilla.Grocer@bristolcc.edu\n";
$message = "This is a message.";
mail($to,$subject,$message,$headers);
echo "Mail should be sent to $to";
if (mail($to, $subject, $body, $headers))
    {
     echo ("<p>Mail sent to $to</p>");
    }
else
    {
     echo ("<p>Problem - mail not sent</p>");
    }

?>
</body>
</html