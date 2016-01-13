<?php
$stuname = "Ann";
$grade = "A";
$to = "pgrocer11@mail.bristol.mass.edu" . ",";
$to .= "Priscilla.Grocer@bristolcc.edu";
$subject = "Test HTML in email";
$words = "
<html>
<head>
<title>Testing HTML send in email</title>
</head>
<body>
<p>This is a test using double quotes</p>
<p>The n12br function puts an HTML break before the new line characters.</p>
<ul>
<li>Item #1</li>
<li>Item #2</li>
<li>Item #3</li>
</ul>
</body>
</html>
";
$msgPic= '<img src="http://www.pgrocer.net/Cis44/XHTML/images/CISa.gif">';
$message = $words . $msgPic;
$message .= nl2br("\nStudentName: " . $stuname);
$message .= nl2br("\nGrade: " . $grade);
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
$headers .= "To: Test <pgrocer11@mail.bristol.mass.edu>" . "\r\n";
$headers .= "From: Me <pgrocer11@mail.bristol.mass.edu>" . "\r\n";
$headers .= "Cc: Copy<pgrocer11@mail.bristol.mass.edu>" . "\r\n";
mail($to, $subject, $message, $headers);
echo "Mail sent to $to";
?>