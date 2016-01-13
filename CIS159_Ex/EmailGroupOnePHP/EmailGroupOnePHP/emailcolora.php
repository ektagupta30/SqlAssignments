<?php
$to = 'grocerbk1011@yahoo.com' . ',';
$to .= 'Priscilla.Grocer@bristolcc.edu';
$subject = 'Test HTML in email';
$body = '
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
<li>Item #4</li>
</ul>
</body>
</html>
';
$headers = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'To: Test <pgrocer@erols.com>' . "\r\n";
$headers .= 'From: Me <pgrocerbcc@yahoo.com>' . "\r\n";
$headers .= 'Cc: PG<p-grocer@rcn.com>' . "\r\n";
mail($to, $subject, $body, $headers);
echo "Mail sent to $to";
?>