<?php
$first = "HELLO WORLD";
$second = "Hello World";
$third = "Bristol Community College";
$fourth = "bristol community college";
$fifth = "abc@def.ghi";
$sixth;
$uppersecond = strtoupper($second);
echo "Converting $second to upper case gives $uppersecond <br>";
$lowerfirst = strtolower($first);
echo "Converting $first to lower case gives $lowerfirst <br>";
$convertletters = ucwords($fourth);
echo "Converting $fourth to have upper case letters on each word gives $convertletters <br>";
$convertletter = ucfirst($fourth);
echo "Converting $fourth to have an upper case first letter gives $convertletter <br>";
$getworld = substr($second,6);
echo "Extracting world from $second gives $getworld <br>";
$getcommunity = substr($third,8,9);
echo "Extracting Community from $third gives $getcommunity <br>";
$lengthstr = strlen("Community");
$getcomm = substr($third,8,$lengthstr);
echo "Extracting Community from $third using length gives $getcomm <br>";
$findchar = strpos($fifth,'@');
echo "Location of the @ in $fifth gives $findchar <br>";
$test1 = (int)isset($fourth);
$test2 = (int)isset($sixth);
echo "Isset checks to see if the variable is set, $test1 for is set, $test2 nothing if not set <br>";
unset($fourth);
$test3 = isset($fourth);
echo "Now it is unset, so $test3 <br>";
?>