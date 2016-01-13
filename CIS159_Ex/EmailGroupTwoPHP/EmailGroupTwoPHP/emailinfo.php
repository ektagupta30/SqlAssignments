<html>
<head>
<title>Information</title>
</head>
<body>
<h1>Information:</h1>
<?php
$subject = 'Information';
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
    echo "<form action = 'emailinfo.php' method='post'>
<table>
<tr>
  <th>Who</th>
  <th>Email</th>
</tr>
<tr>
  <td>
    <select name = 'who'>
      <option value = 'Ann Brown'>Ann</option>
      <option value = 'Susan Ash'>Susan</option>
      <option value = 'David Costa'>David</option>
      <option value = 'Stuart Reed'>Stuart</option>
      <option value = 'Catherine Fox'>Catherine</option>
  </td>
  <td>
      <input type='text' name='email' size='50' />
  </td>
  <td>
  <textarea name='message' rows='10' cols='20'>
  </textarea><br />
</td>
</tr>
</table>
<input type = 'submit' value = 'SEND INFORMATION'>
</form>";
   }
?>
<br><br>Note that the echo after the else starts the form which was not closed until the form was complete<html>
<body>



