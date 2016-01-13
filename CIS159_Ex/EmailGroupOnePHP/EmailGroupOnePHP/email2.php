<html>
<head><title>email</title></head>
<body>
<?php
$to = "pgrocer11@mail.bristol.mass.edu";
$subject = "PHP email - email2.php";
$message = "PHP is a great language to work with on the web!!!";
$headers = "From: Priscilla.Grocer@bristolcc.edu\n";
mail($to,$subject,$message,$headers);
echo "Mail sent to $to";
?>
</body>
</html>