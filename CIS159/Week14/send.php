<?php
include "linkPass.php";
mysqli_select_db($link,"egupta11_1");
$result = mysqli_query($link,"SELECT id,name, email,major from email")
or die("Invalid query: " . mysqli_error($link));
while ( $row = mysqli_fetch_array($result))
{
$theid = $row["id"];
$thename = $row["name"];
$theemail = $row["email"];
$themajor = $row["major"];
$to = $theemail;
$subject = "Your ID and major";
$words = "
<html>
<head>
<title>Testing HTML send in email</title>
</head>
<body>
<p>This is a test of sending multiple</p>
<ul>
<li>Your id is $theid</li>
<li>your major is $themajor</li>
</ul>
</body>
</html>
";
$greeting = "Dear " . $thename;
$message = $greeting . $words;
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
$headers .= 'From: Ekta Gupta <egupta11@bristolcc.edu>' . "\r\n";
mail($to, $subject, $message, $headers);
echo "Mail sent to $to <br>";
}
?>