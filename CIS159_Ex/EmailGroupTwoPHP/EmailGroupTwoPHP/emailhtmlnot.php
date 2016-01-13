<?php
$to = 'pgrocer11@mail.bristol.mass.edu' . ',';
$to .= 'Priscilla.Grocer@bristolcc.edu';
$subject = 'Test HTML in email emailhtmlnot.php';
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

$headers = 'To: Test <pgrocer11@mail.bristol.mass.edu>' . "\r\n";
$headers .= 'From: Me <pgrocer11@mail.bristol.mass.edu>' . "\r\n";
$headers .= 'Cc: Copy<pgrocer11@mail.bristol.mass.edu>' . "\r\n";
mail($to, $subject, $message, $headers);
echo "Mail sent to $to";
?>