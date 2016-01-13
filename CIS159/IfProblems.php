
<html>
<head> </head>
<body>

<?php

   echo " Problem #1,<br>";
  $dept = "HDW";
  $price = 99;
  $cost = 120;
  $msg = "-----Product found----";
  if ($dept == "HDW" && ($price >100 || $cost>75))
  {
    echo $msg, "<br><br><br>";
  }
else
{
echo $msg = " product not found,<br><br>";
}
  echo " PROBLEM #2 USING IF STATEMENTS,<br>";

    if ($dept == "HDW")
    {
      if($price >100)
      {
       echo $msg, "<br>";
       echo "price >100,<br><br>";
      }
      else{
        if($cost>75)
        {
        echo $msg ,"<br>";
        echo "cost >75, <br><br>";
        }
        else
          { $msg = "Problem";
           echo $msg,"<br><br>";
          }
      }
  }



  echo " PROBLEM #3 STUDENT MAJOR,<br>";

  $major = "CI";
    $credits = 47;
    $gpa = 3.2;
    $msg = "-----Student found----";
    if ($major == "CI" || $major == "BU")
    {
      if($credits >45 && $gpa >= 3.2)
      {
       echo $msg,"<br><br>";
      }
      else{
       echo $msg = " student not found,<br><br>";
        }
      }
      else
        {
       echo $msg = " student not found,<br><br>";
        }



  echo "Problem #4, <br>";
  $num = 6;
  $num1 = $num * 2;

  $msg = "";
  if ($num1 >0 && $num1 < 100):
    echo $msg = "Number is >0 and <100,<br><br> ";
  elseif($num1 >100 && $num1 < 200):
      echo $msg = "Number is >100 and <200,<br><br> ";
   else:
       echo $msg = "Number is less than 0 or greater than 200,<br><br> ";
  endif;




   echo "Problem #5 Case Structure, <br>";
     switch($num1)
     {
     case ($num1 >0 && $num1 < 100):
     $msg = "Number is >0 and <100";
     break;
     case ($num1 >100 && $num1 < 200):
      $msg = "Number is >100 and <200";
      break;
     default:
      $msg = "Number is less than 0 or greater than 200";
      }
      echo $msg, "<br><br><br>";

	 echo "Problem #6, <br>";
	      $work = "IN";
	      $sal = 55000;
	      $hourlyPay = 55;
	      $contractHours = 40;
	      $msg = "Mark,<br>,Susan,<br>";
	      if ($work =="IN" )
	        {
	          if ($sal>60000 || ($hourlyPay >50 && $contractHours == 40))
	          {
	           echo $msg,"<br><br>";
	          }
	        else
	          {
	         $msg = "No employees matches the salary";
	         echo $msg,"<br><br>";
	          }
	       }
			else
		   {
			 echo $msg = "No employees in IN";
	   }

    ?>
  </body>
  </html>