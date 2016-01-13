<html>
<head><title>Using print and echo</title></head>
<body>
<p>Echo and print are language constructs.  Note that print acts like a function because it returns a value.<p>
<p>With parenthesis echo and print both take one argument, but if you do not use parenthesis echo will allow
multiple arguments.</p>
<?php
  $school = "BCC";
  $msg = <<<MSG
  This is a sentence that goes
  over more than one line and
  says Welcome to
MSG;
  print "Using print Welcome to $school!";
  print "<br>Using print Welcome to, $school!";
  print ("<br>Using print Welcome to $school!");
  echo "<br>Using echo Welcome to, $school!";
  echo "<br>Using echo Welcome to $school!";
  echo ("<br>Using echo Welcome to $school!");
  echo "<br>Using echo Welcome to ","$school!";  //This does not work with a print.
  echo "<br>Using echo Welcome to ","$school","!";  //This does not work with a print.
  //print "<br>Using echo Welcome to ","$school!";  //This does not work with a print.
  //print "<br>Using echo Welcome to ","$school","!";  //This does not work with a print.
  print '<br>Using print Welcome to $school!';
  echo '<br>Using echo Welcome to $school!';
  print "<br>This is a sentence
  that goes over more than 1
  line and says Welcome to $school";
  echo "<br>This is a sentence
  that goes over more than 1
  line and says Welcome to $school";
  print "<br>$msg $school";
  echo "<br>",$msg," ",$school;
  echo "<br>$msg $school";
  print "<br>$msg . $school";
  echo "<br>$msg . $school";
  print "<br>";
  print $msg . $school;
  echo "<br>";
  echo $msg . $school;
  $theSentence = $msg . " " . $school;
  print "<br>$theSentence";
  echo "<br>$theSentence";
  print "<br>Welcome to \"BCC\"!";
  echo "<br>Welcome to \"BCC\"!";
  print "<br>";
  $ans = print "Hello";
  echo "<br>";
  echo $ans;
?>
</body>
</html>