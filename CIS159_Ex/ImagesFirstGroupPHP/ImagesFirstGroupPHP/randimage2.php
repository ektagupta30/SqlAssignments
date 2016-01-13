<html>
<head>
<title>All images</title>
</head>
<body>
<h1>All images</h1>
<?php
$dogImages = array('dog150','dog225','dog250','dog350','dog625', 'dog750');
foreach ($dogImages as $theImage)
  {
    $theDog = "images/$theImage.JPG";
    echo "<img src = $theDog />";
    echo "<img src = 'images/$theImage.JPG' />";
    echo "<br />";
  }
?>
</body>
</html>
