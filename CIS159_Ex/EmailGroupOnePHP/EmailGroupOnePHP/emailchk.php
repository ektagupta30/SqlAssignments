<html>
<head><title>email</title></head>
<body>
<?php
$to = "pgrocer11@mail.bristol.mass.edu";
$subject = "PHP email from emailchk.php";
$body = "PHP is a great language for you to work with on the web!";
$headers = "From: Priscilla.Grocer@bristolcc.edu\n";
mail($to,$subject,$body,$headers);
echo "Mail should be sent to $to";
if (mail($to, $subject,$body))
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