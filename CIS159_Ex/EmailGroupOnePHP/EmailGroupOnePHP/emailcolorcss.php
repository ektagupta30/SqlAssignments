<?php
$to = 'Priscilla.Grocer@bristolcc.edu' . ',';
$to .= 'pgrocer11@bristol.mass.edu';
$subject = 'Test HTML in email emailcolorcss.php';
$message = '
<html>
<head>
<title>Testing HTML send in email</title>
<style type="text/css">
body {
      background-color: pink;
      color: green;
     }
</style>
</head>
<body>
<p>This is a test</font></p>
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
$headers .= 'To: Test <Priscilla.Grocer@bristolcc.edu>' . "\r\n";
$headers .= 'From: Me <Priscilla.Grocer@bristolcc.edu>' . "\r\n";
$headers .= 'Cc: PG<pgrocer11@mail.bristol.mass.edu>' . "\r\n";
mail($to, $subject, $message, $headers);
echo "Mail sent to $to";
?>
