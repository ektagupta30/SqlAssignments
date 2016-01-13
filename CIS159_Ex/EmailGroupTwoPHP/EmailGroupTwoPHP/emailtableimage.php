<?php
$to = "Priscilla.Grocer@bristolcc.edu" . ",";
$to .= "pgrocer11@mail.bristol.mass.edu";
$subject = "Test email using HTML tableimage.php";
$words = "
<html>
<head>
<title>Testing HTML send in email</title>
</head>
<body>
<p>This is a test of to etc</p>
<table border = 1>
<tr><td>This is the first cell</td>
<td>This is the second cell</td></tr>
<tr><td>Next line, first cell</td>
<td><img src='http://www.pgrocer.net/Cis44/XHTML/images/CISa.gif'></td></tr>
</table>    
<ul>
<li>Item #1</li>
<li>Item #2</li>
<li>Item #3</li>
</ul>
</body>
</html>
";
$msgPic= '<img src="http://www.pgrocer.net/Cis44/XHTML/images/CISa.gif">';
$message = $msgPic . $words;
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
$headers .= "To: Test <Priscilla.Grocer@bristolcc.edu>" . "\r\n";
$headers .= "From: Me <pgrocer11@mail.bristol.mass.edu>" . "\r\n";
$headers .= "Cc: pgrocer11@mail.bristol.mass.edu" . "\r\n";
mail($to, $subject, $message, $headers);
echo "Mail sent to $to";
?>