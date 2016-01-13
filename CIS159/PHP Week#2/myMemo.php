<html>
<head>
<title>Memo</title>
</head>
<body style = "background-color: beige">
<h1 style = "color: purple">MEMO:</h1>
<?php
$name = $_POST['name'];
$day = $_POST['day'];
$Subject = $_POST['Subject'];
$fontcolor = $_POST['fontcolor'];
$myStyle = <<<INFO
"color: $fontcolor;
 font-size: 15pt;"
INFO;
print "<div style = $myStyle>";

print "TO: $name <br>";
print "Day: $day <br>";
print "Subject: $Subject<br>";


print "<p>Please see me tomorrow to discuss: $Subject</P>";
  "</div>" ;
?>
</body>
</html>
