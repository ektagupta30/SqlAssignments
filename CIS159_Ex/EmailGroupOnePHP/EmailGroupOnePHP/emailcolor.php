<?php
$to = 'pgrocer11@bristolcc.edu' . ',';
$to .= 'pgrocer11@mail.bristol.mass.edu';
$subject = 'Test cc again - emailcolor.php';
$message = '
<html>
<head>
<title>Testing HTML send in email</title>
</head>
<body bgcolor = "red">
<p>This is a test</p>
<ul>
<li>Item #1</li>
<li>Item #2</li>
<li>Item #3</li>
</ul>
</body>
</html>
';
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'To: Test <pgrocer11@mail.bristol.mass.edu>' . "\r\n";
$headers .= 'From: Me <Priscilla.Grocer@bristolcc.edu>' . "\r\n";
$headers .= 'Cc: Copy<Priscilla.Grocer@Bristolcc.edu>' . "\r\n";
mail($to, $subject, $message, $headers);
echo "Mail sent to $to";
?>
