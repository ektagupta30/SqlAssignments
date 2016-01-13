<?php
include "passworddb.php";
mysqli_select_db($link,"fortesting");
$result = mysqli_query($link,"SELECT formname, formemail from infofromform")
or die("Invalid query: " . mysqli_error($link));
while ( $row = mysqli_fetch_array($result))
{
$thename = $row["formname"];
$theemail = $row["formemail"];
$to = $theemail;
$subject = "Test multiple HTML and DB in email";
$words = "
<html>
<head>
<title>Testing HTML send in email</title>
</head>
<body>
<p>This is a test of sending multiple</p>
<ul>
<li>Item #1</li>
<li>Item #2</li>
<li>Item #3</li>
</ul>
</body>
</html>
";
$greeting = "Dear " . $thename;
$message = $greeting . $words; 
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=iso-8859-1" . "\r\n";
$headers .= "From: Me <p-grocer@rcn.com>" . "\r\n";
mail($to, $subject, $message, $headers);
echo "Mail sent to $to <br>";
}
?>