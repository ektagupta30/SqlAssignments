<html>
<head><title>email</title></head>
<body>
<?php
$to = "Priscilla.Grocerbristolcc.net";
$subject = "PHP email problem";
$message = "PHP is a great language to work with on the web - mostly";
$headers = "From: Priscilla.Grocer@bristolcc.edu\n";
mail($to,$subject,$message,$headers);
if (mail($to, $subject, $message))
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