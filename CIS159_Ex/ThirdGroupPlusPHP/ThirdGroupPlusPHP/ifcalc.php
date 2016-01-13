<html>
<?php
ini_set('display_errors',1);
// if display_errors is not on, then this will override for this script and turn it on (1 for on)
$first = $_GET['firstNum'];
$second = $_GET['secondNum'];
$todo = $_GET['whatToDo'];
$ans = 0;
echo "The problem is: $first $todo $second and the answer is ";
if ($todo == '+')
  {
   $ans = $first + $second;
  }
else
  {
   if ($todo == '-')
     {
      $ans = $first - $second;
     }
   else
     {
      if ($todo == '*')
        {
         $ans = $first * $second;
        }
      else
        {
         $ans = $first / $second;
        }
      }
   }
// experiment with the { } and try eliminating the ones that encompass the entire else
echo $ans;
?> 
</html>   