<html>
<head>
<title>All images</title>
</head>
<body>
<h1>All image</h1>
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
for ($ct=0; $ct < 6; $ct++)
   { 
    $theImage = "images/{$dogImages[$ct]['picdog']}.JPG";
    $theDesc = $dogImages[$ct]['descpic'];
    echo "<img src = $theImage />";
    echo $theDesc . "<br />";
   }
?>
</body>
</html>