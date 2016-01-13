<html>
<head>
<title>Information</title>
</head>
<body>
<h1>Information:</h1>
<?php
$subject = 'Information';
//Note I have to ask the isset question so I can ask the second. By this I mean
//if the post does not exist I cannot ask about its contents.
if ((isset($_POST['email'])) and ($_POST['email'] > ''))
   {
   $to = $_POST['email'];
   $who = $_POST['who'];
   $message = $_POST['message'];
   $message = $who . ', ' . $message;
   $headers = "From: Priscilla.Grocer@bristolcc.edu\n";
   mail($to,$subject,$message,$headers);
   echo "Mail sent to $to";
   }
else
   {
    echo "Invalid email";
   }
?>
<html>
<body>



