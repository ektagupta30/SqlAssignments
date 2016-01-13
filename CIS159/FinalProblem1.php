<html>
<head>
<title>Problem#1</title>
<style type="text/css">
body
    {
     background: #99FFFF;
     color:#000066;
     }
h1
     {
      text-align: center;
     }
</style>
</head>
<body>
<h1>Multiples of 3 and 5</h1>

<?php
for ($a=1; $a <= 100; $a=$a + 1)
if ($a%3 == 0 && $a%5 ==0){
echo ("BY 3 and 5");
echo "<br>";
}
elseif($a%3 == 0){
echo ("BY 3");
echo "<br>";
}
elseif($a%5 == 0){
echo ("BY 5");
echo "<br>";
}
else{
echo ($a);
echo "<br>";
}


?>
</body>
</html>