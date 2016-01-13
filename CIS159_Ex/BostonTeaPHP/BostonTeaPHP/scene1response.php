<html>
<head>
<title>Boston Tea Party</title>
<head>
<body>
<p style = "color: green; font-size: 16pt;">The question was, did the Sons of Liberty advise
the colonists to pay the taxes imposed by the British Parliament?</p>
<?php
$ans = $_POST['ans'];
$trueMsg = <<<TINFO
Answer True was incorrect. The Sons of Liberty knew that paying the taxes would basically be agreeing 
that Parliament had the right to tax the colonies.
TINFO;
$falseMsg = <<<FINFO
Answer False was correct. The British government had counted on the colonists love of tea, but the Sons of Liberty knew
that paying the taxes would basically be agreeing that Parliament had the right to tax the colonies.
They would advise against paying the taxes.
FINFO;
$quesStyle = <<<SETUP
"color: green; font-size: 16pt;"
SETUP;
$ansStyle = <<<ANSSET
"border: solid; border-width: 2pt; border-color: green; font-size: 14pt; text-align: center; margin-left: 15%; margin-right: 15%;"
ANSSET;
if ($ans == "true")
   {
     print "<div style = $ansStyle>$trueMsg</div>";
   }
else
   {
     print "<div style = $ansStyle>$falseMsg</div>";
   }
?>
<br>
<table>
<tr>
<td><img src="btp_pic2.jpg"><br>
<a href="http://www.boston-tea-party.org/" target="_blank">Boston Tea Party Historical Society</a><br>
</td>
<td>
<?php
$scene2 = <<<INFO
"Six vessels left for the colonies in the fall of 1773, George Hayley's ships Dartmouth (Captain James Hall) and 
Eleanor and brigs Beaver and William for Boston, and the ships London for Charleston and Polly for Philadelphia. 
News of the company's plan reached the colonies before the tea itself, and when Dartmouth arrived at Boston on 
November 28, with 114 chests of tea, Bostonians refused to allow the tea to be landed and demanded that it be 
returned to England. Above all, the patriots feared that even if the duties were not paid, the authorities would 
seize the tea and it would eventually be paid for and drunk even by those opposed to the duties, thus weakening 
their cause. Dartmouth's owner Francis Rotch was unable to get a pass to clear his ship with the tea still aboard." 
The Boston Tea Party Historical Society. www.boston-tea-party.org. 
INFO;
print $scene2;
print "<p style=$quesStyle>The colonists responded by?</p>";
?>
<form action = "scene2response.php" method = "post">
<input type = "radio" name="ans" value="sinking">Sinking the boat<br>
<input type = "radio" name="ans" value="using">Using the tea, but refusing to pay taxes<br>
<input type = "radio" name="ans" value="dumping">Disguising themselves as Mohawks and dumping the tea<br>
<input type = "submit" value = "SEND ANSWER">
</form>
</td>
</tr>
</table>
</body>
</html>
