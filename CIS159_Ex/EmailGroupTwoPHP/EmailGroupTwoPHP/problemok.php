<?php
$stuname = "Ann";
$grade = "A";
$to = "Priscilla.Grocer@bristolcc.edu" . ",";
$to .= "pgrocer11@mail.bristol.mass.edu";
$subject = "Test HTML in email";

$msgPic= '<img src="http://www.pgrocer.net/Cis44/XHTML/images/CISa.gif">';
$message = $msgPic;
$message .= "<br />StudentName: " . $stuname;
$message .= "<br />Grade: " . $grade;
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
$headers .= "To: Test <pgrocer11@mail.bristol.mass.edu>" . "\r\n";
$headers .= "From: Me <pgrocer11@mail.bristol.mass.edu>" . "\r\n";
$headers .= "Cc: Copy<pgrocer11@mail.bristol.mass.edu>" . "\r\n";
mail($to, $subject, $message, $headers);
echo "Mail sent to $to";
?>