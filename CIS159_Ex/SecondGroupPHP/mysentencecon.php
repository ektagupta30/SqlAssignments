<html>
<head>
<title>My sentence</title>
</head>
<body>
<h1>My sentence:</h1>
<?php
$noun = $_POST['noun'];
$verb = $_POST['verb'];
$clause = $_POST['clause'];
$fontcolor = $_POST['fontcolor'];
$myStyle = <<<INFO
"color: $fontcolor;
 font-size: 16pt;"
INFO;
print "<div style = $myStyle>";
print $noun . $verb . $clause;
print "</div>";
?>
</body>
</html>
