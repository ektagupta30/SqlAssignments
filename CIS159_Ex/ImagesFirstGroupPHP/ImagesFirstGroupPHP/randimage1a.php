<html>
<head>
<title>Random Image</title>
</head>
<body>
<h1>Display a random image</h1>
<?php
$dogImages = array(
    array('picdog'  => 'dog150',
          'descpic' => 'First picture'),
    array('picdog'  => 'dog225',
          'descpic' => 'Second picture'),
    array('picdog'  => 'dog250',
          'descpic' => 'Third picture'),
    array('picdog'  => 'dog350',
          'descpic' => 'Fourth picture'),
    array('picdog'  => 'dog625',
          'descpic' => 'Fifth picture'),
    array('picdog'  => 'dog750',
          'descpic' => 'Sixth picture'));
$indx = rand(0, count($dogImages)-1);
$theImage = "images/{$dogImages[$indx]['picdog']}.JPG";
$theDesc = $dogImages[$indx]['descpic'];
echo "<img src = '$theImage' />";
echo "<img src = $theImage />";
echo $theDesc;
?>
<p>$dogImages array is an array of associative arrays. Each
associative array has two elements which are retrieved by
either the key picdog or the key descpic. I am using the indx
to select the appropriate associative array and then I am
using the key picdog to get the image and the key descpic
to get the description.</p>
</body>
</html>