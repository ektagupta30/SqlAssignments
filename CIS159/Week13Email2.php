<?php
$to = 'egupta11@bristolcc.edu' . ',';
$to .= 'priscilla.grocer@bristolcc.edu ';
$subject = 'Test HTML in email emailcolorcss1.php';
$message = '
<html>
<head>
<title>Week13 HTML send in email</title>
<style type="text/css">
body {
      background-color: pink;
      color: blue;
     }
</style>
</head>
<body>
<p style="color: red; font-weight: bold; font-size: 2em;">Email with HTML</font></p>
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
$headers .= 'To: Test <egupta11@bristolcc.edu>' . "\r\n";
$headers .= 'From: Ekta Gupta <egupta11@bristolcc.edu>' . "\r\n";
$headers .= 'Cc: EG<ektagupta30@yahoo.com>' . "\r\n";
mail($to, $subject, $message, $headers);
echo "Mail sent to $to";
?>