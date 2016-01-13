<html>
<head>
<title>Boston Tea Party</title>
<head>
<body>
<p style = "color: green; font-size: 16pt;">The question was, how did the colonists respond?</p>
<?php
$ans=$_POST['ans'];
$trueMsg = <<<TINFO
You are correct. "On the evening of December 16 a group of 30 to 60 unknown patriots calling 
themselves Mohawks but disguised with nothing more than a blanket, a daub of paint, or 
blackened faces, descended on the ships, broke open the tea chests aboard Dartmouth, Eleanor, 
and Beaver at Griffin's Wharf, and dumped the contents into Boston Harbor." 
The Boston Tea Party Historical Society. www.boston-tea-party.org. 
TINFO;
$falseMsg = <<<FINFO
The colonists did not sink the ship or use the tea without paying taxes.
"On the evening of December 16 a group of 30 to 60 unknown patriots calling 
themselves Mohawks but disguised with nothing more than a blanket, a daub of paint, or 
blackened faces, descended on the ships, broke open the tea chests aboard Dartmouth, Eleanor, 
and Beaver at Griffin's Wharf, and dumped the contents into Boston Harbor." 
The Boston Tea Party Historical Society. www.boston-tea-party.org.
FINFO;
$quesStyle = <<<SETUP
"color: green; font-size: 16pt;"
SETUP;
$ansStyle = <<<ANSSET
"border: solid; border-width: 2pt; border-color: green; font-size: 14pt; text-align: center; margin-left: 15%; margin-right: 15%;"
ANSSET;
if ($ans == "sinking" || $ans == "using")
   {
     print "<div style = $ansStyle>$falseMsg</div>";
   }
else
   {
     print "<div style = $ansStyle>$trueMsg</div>";
   }
?>
<br>
<table>
<tr>
<td><img src="btp_pic680.jpg" <br>
<a href="http://www.boston-tea-party.org/" target="_blank">Boston Tea Party Historical Society</a><br>
</td>
<td><img src="btp_pic1080.jpg" <br>
<a href="http://www.boston-tea-party.org/" target="_blank">Boston Tea Party Historical Society</a><br>
</td>
</tr>
</table>
</body>
</html>
