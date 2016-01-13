<?php
$stuname = "Susan";
$grade = "B";
$to = "Priscilla.Grocer@bristolcc.edu" . ",";
$to .= "pgrocer11@mail.bristol.mass.edu";
$subject = "Test HTML in email";

$msgPic= '<img src="http://www.pgrocer.net/Cis44/XHTML/images/CISa.gif">';
$message = $msgPic;
$message .= "<br />StudentName: " . $stuname;
$message .= "<br />Grade: " . $grade;
$headers = "To: Test <pgrocer11@mail.bristol.mass.edu>" . "\r\n";
$headers .= "From: Me <pgrocer11@mail.bristol.mass.edu>" . "\r\n";
$headers .= "Cc: Copy<pgrocer11@mail.bristol.mass.edu>" . "\r\n";
mail($to, $subject, $message, $headers);
echo "Mail sent to $to";
?>