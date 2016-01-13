<?php
$to = "pgrocer11@mail.bristol.mass.edu" . ",";
$to .= "Priscilla.Grocer@bristolcc.edu";
$subject = "Test email using HTML emailtableimage2.php";
$words = <<<MSG
<html>
<head>
<title>Testing HTML send in email</title>
</head>
<body>
<p>This is a test of images and...</p>
<table border = 1 width = 100%>
<tr><td>This is the first cell</td>
<td>This is the second cell</td></tr>
<tr><td>Next line, first cell</td>
<td><img src='http://cisweb.bristolcc.edu/~pgrocer/CIT32S10/email/dog150.JPG'></td></tr>
</table>    
<ul>
<li>Item #1</li>
<li>Item #2</li>
<li>Item #3</li>
</ul>
</body>
</html>
MSG;
$msgPic= "<img src='http://cisweb.bristolcc.edu/~pgrocer/CIT32S10/email/dog150.JPG'>";
$message = $msgPic . $words;
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
$headers .= "To: Test <pgrocer11@bristolcc.edu>" . "\r\n";
$headers .= "From: Me <Priscilla.Grocer@bristolcc.edu>" . "\r\n";
$headers .= "Cc: Priscilla.Grocer@bristolcc.edu" . "\r\n";
mail($to, $subject, $message, $headers);
echo "Mail sent to $to";
?>