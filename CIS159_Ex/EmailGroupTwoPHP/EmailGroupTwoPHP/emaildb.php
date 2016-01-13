<?php
include "passworddb.php";
mysql_select_db("mail");
$result = mysql_query("SELECT name, email from testemail")
or die("Invalid query: " . mysql_error());
while ( $row = mysql_fetch_array($result))
{
$thename = $row["name"];
$theemail = $row["email"];
$to = $theemail;
$subject = "Test HTML and DB in email";
$words = "
<html>
<head>
<title>Testing HTML send in email</title>
</head>
<body>
<p>This is a test using double quotes</p>
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