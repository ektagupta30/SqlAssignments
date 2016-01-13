<html>
<head>
<title>Random Image</title>
</head>
<body>
<h1>Display a random image</h1>
<p>
<?php
$dogImages = array('dog150','dog225','dog250','dog350','dog625', 'dog750');
$indx = rand(0, count($dogImages)-1);
$theImage = "images/$dogImages[$indx].JPG";
echo '<img src="' . $theImage . '"/>';
echo "<img src='" . $theImage . "'/>";
echo "<img src='$theImage'>";
echo '<img src="$theImage">';
?>
</p>
<p>Single quotes don't allow for substituting a variables value and double quotes do.
In the last example, it sees double quotes and says everything in here is an absolute
string and is to be rendered exactly.  If you look at the source you will see 
<img src="$theImage"></p>
<p>On the first one and second one, I have a variable concatenated between two literal strings. 
On the third, I have double quoted literal with variable embedded in the literal so I have substitution to get the value.
On the fourth, I have a single quoted literal so no variable substitution.</p>

</body>
</html>