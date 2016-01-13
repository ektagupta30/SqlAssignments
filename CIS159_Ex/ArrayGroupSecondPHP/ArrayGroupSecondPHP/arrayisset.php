<html>
<head><title>Arrays</title></head>
<body>
<h2>Department Array</h2>
<?php
$deptName[0] = "Womens";
$deptName[1] = "Mens";
$deptName[2] = "Girls";
$deptName[3] = "Boys";

foreach ($deptName as $theName)
  {
   echo ("<br>Dept Name: $theName ");
  }
echo "<br><br>Now I will use unset<br>";
unset($deptName[2]);
foreach ($deptName as $theName)
  {
   print ("<br>Dept Name: $theName ");
  }
echo "<br><br>Now I will ask if isset<br>";
if (isset($deptName[2]))
   {
    echo ("<br>Girls is there");
   }
else
   {
    print ("<br>Girls is not there");
   }
echo "<br><br><br>Now I will attempt to display element that is not there<br>";
print ("<br>Show Dept Name: $deptName[2]");
echo "<br><br>Now I will use put an element back in the array<br>";
$deptName[2] = "Girls";
foreach ($deptName as $theName)
  {
   echo ("<br>Dept Name: $theName ");
  }
echo "<br><br>Now I will ask if isset<br>";
if (isset($deptName[2]))
   {
    echo ("<br> Girls is there");
   }
echo ("<br>Show Dept Name: $deptName[2]");
?>
</body>
</html>