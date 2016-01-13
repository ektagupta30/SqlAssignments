<html>
<head>
<title>Math Facts</title>
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
<h1>Math Facts</h1>
<h2> Math Array Assignment</h2>
<?php
$message=array();
for ($ct=0; $ct <= 4; $ct=$ct + 1){
$message[$ct]= "Multiply by $ct";
}
  $twoD = array(array());
for ($a=0; $a <= 4; $a=$a + 1){
for ($b=0; $b <= 4; $b=$b + 1){
 $twoD[$a][$b]= $a*$b  ;

}
}
for ($ct=0; $ct <= 4; $ct=$ct + 1){
 echo ( $message[$ct]);
echo "<br>";

  for ($b=0; $b <= 4; $b=$b + 1){
    echo ( "$ct * $b=  ");
    echo($twoD[$ct][$b]);
    echo "<br>";
}
  }

?>
</body>
</html>