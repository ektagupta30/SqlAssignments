<html>
<head><title>email</title></head>
<body>
<?php
$to = "pgrocer11@mail.bristol.mass.edu";
$subject = "PHP email from emailchkm";
$message = "Yes, PHP is a great language to work with on the web!!!";
$headers = "From: Priscilla.Grocer@bristolcc.edu\n";
mail($to,$subject,$message,$headers);
echo "Mail should be sent to $to";
if (mail($to, $subject,$message))
    {
     echo ("<p>Mail sent to $to</p>");
    }
else
    {
     echo ("<p>Problem - mail not sent</p>");
    }

?>
</body>
</html>