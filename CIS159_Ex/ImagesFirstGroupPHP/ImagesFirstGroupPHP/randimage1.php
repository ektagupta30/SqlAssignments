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
echo $theDesc;
?>
<p>
<img src="<?php echo $theImage; ?>" />
<?php echo $theDesc; ?>
</p>
</body>
</html>