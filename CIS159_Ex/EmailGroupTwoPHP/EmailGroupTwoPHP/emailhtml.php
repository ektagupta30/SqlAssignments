<?php
$to = 'Priscilla.Grocer@bristolcc.edu' . ',';
$to .= 'pgrocer11@bristolcc.edu';
$subject = 'Test HTML in email';
$message = '
<html>
<head>
<title>Testing HTML send in email</title>
</head>
<body>
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
$headers .= 'To: Test <pgrocer@bristol.mass.edu>' . "\r\n";
$headers .= 'From: Me <p-grocer@rcn.com>' . "\r\n";
$headers .= 'Cc: Copy<pgrocer11@bristolcc.edu>' . "\r\n";
mail($to, $subject, $message, $headers);
echo "Mail sent to $to";
?>