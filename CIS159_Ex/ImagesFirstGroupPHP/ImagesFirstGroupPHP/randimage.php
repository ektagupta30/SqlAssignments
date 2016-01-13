<html>
<head>
<title>Random Image</title>
</head>
<body>
<h1>Display a random image</h1>
<?php
$dogImages = array('dog150','dog225','dog250','dog350','dog625', 'dog750');
$indx = rand(0, count($dogImages)-1);
$theImage = "images/$dogImages[$indx].JPG";
?>
<p>
<img src="<?php echo $theImage; ?>" />
</p>
</body>
</html>