<html>
<head><title>Arrays</title></head>
<body>
<h2>Product/Prices Array</h2>
<?php
/*This is setting up an associative array that contains the name of the frame which is
the key and its associatate price which is a value. Notice that there is an embedded space
in the name which is fine.*/
$price = array('Wooden Frame'=>24.99, 'Pewter Frame'=>39.99, 'Glass Frame'=>29.99,
'Silver Frame'=>34.99);
/*Now I am extracting the price by going to the array called $price and using the name of
the frame which is the key to extract the price and then display it.*/
$theprice = $price['Pewter Frame'];
echo "The price of a pewter frame is $theprice <br />";
/*Now I am using the foreach to display all of the elements in the array.*/
echo "<br> Now, I am using the foreach to display all of the elements in the array <br>";
foreach ($price as $key => $value)
  {
   echo $key.'=>'.$value.'<br />';
  }
echo "<br> Now, I am using the foreach to display all of the elements in the array a second way <br>";
foreach ($price as $type => $indprice)
  {
   echo ($type .'=>'.$indprice.'<br />');
  }
/*"The each returns the current key and value pair from the array in a for element array with
the keys 0, 1, key and value. Elements 0 and key are the elements contain the key name of the
array element and the elements with the key values of 1 and value contain the data. You can
either use 1 or value as the key, to get the key name you can use either 0 or key." Taken from 
documentation, php manual under each.
The reset must be used if you have gone through the array before. */
echo "<br>This is an example using a while loop <br>";
reset($price);
while($element = each($price))
   {
    echo $element['key'] . ' ' . $element['value'];
    echo "<br />";
   }
echo "<br>This is another example using a while loop <br>";
reset($price);
while($element = each($price))
   {
    echo $element['0'] . ' ' . $element['1'];
    echo "<br />";
   }
/*In this case I am using the function list() which can split the array out into values that 
I named $type and $indprice. I can then loop through each element in the $price array. The
advantage of list is that it allows assigning names to the variables rather than refer to them
as 0 or key. */
echo "<br>This is an example using list <br>";
reset($price);
while (list($type, $indprice) = each($price))
   {
    echo $type . ' ' . $indprice;
    echo "<br />";
   }
echo "<br>This is an example using list with $key and $value <br>";
reset($price);
while (list($key, $value) = each($price))
   {
    echo $key . ' ' . $value;
    echo "<br />";
   }

?>
</body>
</html>
 