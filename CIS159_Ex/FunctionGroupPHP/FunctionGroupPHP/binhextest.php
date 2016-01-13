<html>
<head>
<title>Binary to Hex conversion</title>
</head>
<body bgcolor="beige">
<div align=center>
<h1>Binary to Hexadecimal Conversion Quest</h1>
<?php
if (array_key_exists('myAns', $_POST))
   {
    $myAns = $_POST['myAns'];
   }
if (array_key_exists('realAns', $_POST))
   {
    $realAns = $_POST['realAns'];
   }
startCheck();
printBinary();
getAns();

function startCheck()
        { 
          global $myAns, $realAns;
          if ($myAns == "")
             {
               print "<h2>Figure out the hexadecimal for these binary numbers!</h2>";
             }
           else
             {
               if ($myAns == $realAns)
                  {
                   print "<h3>Yes - You Got It!</h3>";
                  }
               else
                  {
                   print "<h3>Maybe next time!</h3>";
                  }
              }
           }

function showBinary($which)
        {
         print <<<HERE
           <img src = "binary$which.PNG"
                height = 100 width = 100>
HERE;
        }

function printBinary()
        {
         $cards = rand(2,4);
         if ($cards == 2)
            {
             twoCards();
            }
         else
            {
             if ($cards == 3)
                 {
                  threeCards();
                 }
             else
                 { 
                 if ($cards == 4)
                    {
                     fourCards();
                    }
                  }
            }
         }

function twoCards()

       {
         global $realAns;

         $choice1 = rand(0,1);
         $choice2 = rand(0,1);
         
         showBinary($choice1);
         showBinary($choice2);

         if ($choice1 == 1)
            {
            if ($choice2 == 1)
               {
                $realAns = 3;
               }
            else
               {
                $realAns = 2;
                }
            }
         else

            {
             if ($choice2 == 1)
                {
                  $realAns = 1;
                }
             else
                {
                  $realAns = 0;
                }
             }
         }


function threeCards()
       {
         global $realAns;

         $choice1 = rand(0,1);
         $choice2 = rand(0,1);
         $choice3 = rand(0,1);

         showBinary($choice1);
         showBinary($choice2);
         showBinary($choice3);

         if ($choice1 == 1)
            {
            if ($choice2 == 1)
               {
                if ($choice3 == 1)
                   {
                    $realAns = 7;
                   }
                else
                   { 
                    $realAns = 6;
                   }
               }
             else
               {  
                if ($choice3 == 1)
                   {
                    $realAns = 5;
                   }
                else
                   {
                    $realAns = 4;
                   }
               }
             }
          else
            {
            if ($choice2 == 1)
               {
                if ($choice3 == 1)
                   {
                    $realAns = 3;
                   }
                else
                   { 
                    $realAns = 2;
                   }
               }
             else
               {  
                if ($choice3 == 1)
                   {
                    $realAns = 1;
                   }
                else
                   {
                    $realAns = 0;               
                   }
               }
 
             }
 
         }

function fourCards()
      {
         global $realAns;

         $choice1 = rand(0,1);
         $choice2 = rand(0,1);
         $choice3 = rand(0,1);
         $choice4 = rand(0,1);

         showBinary($choice1);
         showBinary($choice2);
         showBinary($choice3);
         showBinary($choice4);

         if ($choice1 == 1 and $choice2 == 1 and $choice3 == 1 and $choice4 == 1)
            {
              $realAns = "F";
            }
         if ($choice1 == 1 and $choice2 == 1 and $choice3 == 1 and $choice4 == 0)
            {
              $realAns = "E";
            }
         if ($choice1 == 1 and $choice2 == 1 and $choice3 == 0 and $choice4 == 1)
            {
              $realAns = "D";
            }
         if ($choice1 == 1 and $choice2 == 1 and $choice3 == 0 and $choice4 == 0)
            {
              $realAns = "C";
            }
         if ($choice1 == 1 and $choice2 == 0 and $choice3 == 1 and $choice4 == 1)
            {
              $realAns = "B";
            }
         if ($choice1 == 1 and $choice2 == 0 and $choice3 == 1 and $choice4 == 0)
            {
              $realAns = "A";
            }
         if ($choice1 == 1 and $choice2 == 0 and $choice3 == 0 and $choice4 == 1)
            {
              $realAns = 9;
            }
         if ($choice1 == 1 and $choice2 == 0 and $choice3 == 0 and $choice4 == 0)
            {
              $realAns = 8;
            }
         if ($choice1 == 0 and $choice2 == 1 and $choice3 == 1 and $choice4 == 1)
            {
              $realAns = 7;
            }
         if ($choice1 == 0 and $choice2 == 1 and $choice3 == 1 and $choice4 == 0)
            {
              $realAns = 6;
            }
         if ($choice1 == 0 and $choice2 == 1 and $choice3 == 0 and $choice4 == 1)
            {
              $realAns = 5;
            }
         if ($choice1 == 0 and $choice2 == 1 and $choice3 == 0 and $choice4 == 0)
            {
              $realAns = 4;
            }
         if ($choice1 == 0 and $choice2 == 0 and $choice3 == 1 and $choice4 == 1)
            {
              $realAns = 3;
            }
         if ($choice1 == 0 and $choice2 == 0 and $choice3 == 1 and $choice4 == 0)
            {
              $realAns = 2;
            }
         if ($choice1 == 0 and $choice2 == 0 and $choice3 == 0 and $choice4 == 1)
            {
              $realAns = 1;
            }
         if ($choice1 == 0 and $choice2 == 0 and $choice3 == 0 and $choice4 == 0)
            {
              $realAns = 0;
            }


       }
           

function getAns()
  {
    global $realAns;
    print <<<HERE
      <h3>Convert the binary to hexadecimal:</h3>
      <form method = "post">
      <input type = "text" name = "myAns" value = "">
      <input type = "hidden" name ="realAns" value = "$realAns">
      <br><br><br><br><br>
      <input type = "submit" value = "Submit Answer">
    </form>
HERE;
}
?>
</div>
</body>
</html>