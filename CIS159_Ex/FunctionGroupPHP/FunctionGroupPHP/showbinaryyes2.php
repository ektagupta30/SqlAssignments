<html>
<head>
<title>Binary Addition</title>
</head>
<body>
<div align=center>
<h1>Binary Addition Quest</h1>
<?php
/* foreach($_POST as $key => $value) {
    echo "Key: $key; Value: $value<br />\n";
} */
// print "start";
// phpinfo();
if (isset($_POST['myAns']))
   {
    $myAns = $_POST['myAns'];
   }
if (isset($_POST['realAns']))
   {
    $realAns = $_POST['realAns'];
   }
startCheck();
printBinary();
getAns();
function startCheck()
        { 
// echo "startCheck";
          global $myAns, $realAns;
          if ($myAns == "")
             {
               print "<h2>Figure out the binary!</h2>";
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
		 $_POST['myAns'] ="";
		 $_POST['realAns'] = "";

              }
           }

function showBinary($which)
        {
// echo "showBinary";
         print <<<HERE
           <img src = "binary$which.PNG"
                height = 100 width = 100>
HERE;
        }

function printBinary()
        {
// echo "printBinary";
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
// echo "twoCards";
         global $realAns;

         $choice1 = rand(0,1);
         $choice2 = rand(0,1);
         
         showBinary($choice1);
         showBinary($choice2);

         if ($choice1 == 1)
            {
            if ($choice2 == 1)
               {
                $realAns = 10;
               }
            else
               {
                $realAns = 1;
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
// echo "threeCards";
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
                    $realAns = 11;
                   }
                else
                   { 
                    $realAns = 10;
                   }
               }
             else
               {  
                if ($choice3 == 1)
                   {
                    $realAns = 10;
                   }
                else
                   {
                    $realAns = 1;
                   }
               }
             }
          else
            {
            if ($choice2 == 1)
               {
                if ($choice3 == 1)
                   {
                    $realAns = 10;
                   }
                else
                   { 
                    $realAns = 1;
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
// echo "fourCards";
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
              $realAns = 100;
            }
         if ($choice1 == 1 and $choice2 == 1 and $choice3 == 1 and $choice4 == 0)
            {
              $realAns = 11;
            }
         if ($choice1 == 1 and $choice2 == 1 and $choice3 == 0 and $choice4 == 1)
            {
              $realAns = 11;
            }
         if ($choice1 == 1 and $choice2 == 1 and $choice3 == 0 and $choice4 == 0)
            {
              $realAns = 10;
            }
         if ($choice1 == 1 and $choice2 == 0 and $choice3 == 1 and $choice4 == 1)
            {
              $realAns = 11;
            }
         if ($choice1 == 1 and $choice2 == 0 and $choice3 == 1 and $choice4 == 0)
            {
              $realAns = 10;
            }
         if ($choice1 == 1 and $choice2 == 0 and $choice3 == 0 and $choice4 == 1)
            {
              $realAns = 10;
            }
         if ($choice1 == 1 and $choice2 == 0 and $choice3 == 0 and $choice4 == 0)
            {
              $realAns = 1;
            }
         if ($choice1 == 0 and $choice2 == 1 and $choice3 == 1 and $choice4 == 1)
            {
              $realAns = 11;
            }
         if ($choice1 == 0 and $choice2 == 1 and $choice3 == 1 and $choice4 == 0)
            {
              $realAns = 10;
            }
         if ($choice1 == 0 and $choice2 == 1 and $choice3 == 0 and $choice4 == 1)
            {
              $realAns = 10;
            }
         if ($choice1 == 0 and $choice2 == 1 and $choice3 == 0 and $choice4 == 0)
            {
              $realAns = 1;
            }
         if ($choice1 == 0 and $choice2 == 0 and $choice3 == 1 and $choice4 == 1)
            {
              $realAns = 10;
            }
         if ($choice1 == 0 and $choice2 == 0 and $choice3 == 1 and $choice4 == 0)
            {
              $realAns = 1;
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
// echo "getAns";
    global $realAns;
    print <<<HERE
      <h3>Add the contents of the cards and enter the answer in binary:</h3>
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