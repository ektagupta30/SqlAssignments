<?php
date_default_timezone_set('America/New_York');
$theDay=date('l'); 
$theDate = date("Y-m-d");
echo "Different images will show on different days: " . $theDate . "<br>";

if($theDay == "Monday")
{
 echo "It is Monday - no class - do homework <br>";
 echo "<img src='images/dog150.JPG'>";
}

elseif($theDay == "Tuesday")
{
 echo "It is Tuesday - there is a class <br>";
 echo "<img src='images/dog250.JPG'>";
}

elseif($theDay == "Wednesday")
{
 echo "It is Wednesday - no class - do homework <br>";
 echo "<img src='images/dog250.JPG'>";
}

elseif($theDay == "Thursday")
{
 echo "It is Thursday - there is a class <br>";
 echo "<img src='images/dog250.JPG'>";
}

elseif($theDay == "Friday")
{
 echo "It is Friday - there is no class <br>";
 echo "<img src='images/dog350.JPG'>";
}

elseif($theDay == "Saturday")
{
 echo "The weekend - it is Saturday <br>";
 echo "<img src='images/dog350.JPG'>";
}

elseif($theDay == "Sunday")  
{
 echo "The weekend - it is Sunday <br>";
 echo "<img src='images/dog625.JPG'>";
}

?>