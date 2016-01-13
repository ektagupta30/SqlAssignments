<html>
<head><title>Email</title></head>
<body>
<?php
$to = "priscilla.grocer@bristolcc.edu";
$subject = "Week13 basic email assignment";
$message = "PHP is a great language to work with on the web";
$headers = "From: egupta11@bristolcc.edu.com\n";
mail($to,$subject,$message,$headers);
echo "Mail sent to $to";
?>
</body>
</html>