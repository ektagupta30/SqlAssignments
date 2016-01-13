<html>
<head>
<title>Boston Tea Party</title>
</head>
<body>
<h1>Boston Tea Party</h1>
<table>
<tr>
<td><img src="btp_pic11.jpg"><br>
<a href="http://www.boston-tea-party.org/" target="_blank">Boston Tea Party Historical Society</a><br>
</td>
<td>
<?php
$scene1 = <<<INFO
"The colonies refused to pay the levies required by the Townsend Acts claiming they had no 
obligation to pay taxes imposed by a Parliament in which they had no representation. In 
response, Parliament retracted the taxes with the exception of a duty on tea - a demonstration 
of Parliament's ability and right to tax the colonies. In May of 1773 Parliament concocted a 
clever plan. They gave the struggling East India Company a monopoly on the importation of tea 
to America. Additionally, Parliament reduced the duty the colonies would have to pay for the 
imported tea. The Americans would now get their tea at a cheaper price than ever before."
The Boston Tea Party, 1773, EyeWitness to History, www.eyewitnesstohistory.com (2002).
INFO;
$quesStyle = <<<SETUP
"color: green; font-size: 16pt;"
SETUP;
print $scene1;
print "<p style=$quesStyle>The Sons of Liberty advised the colonists to pay the taxes?</p>";
?>
<form action = "scene1response.php" method = "post">
<input type = "radio" name="ans" value="true">True<br>
<input type = "radio" name="ans" value="false">False<br>
<input type = "submit" value = "SEND ANSWER">
</form>
</td>
</tr>
</table>
<br><br>
References:<br>
One source for information to the Boston Tea Party is: The Boston Tea Party Historical Society. www.boston-tea-party.org. 
Images at the site came from the Boston Tea Party Historical Society. 
Other information was gathered from: "The Boston Tea Party, 1773," EyeWitness to History, www.eyewitnesstohistory.com (2002).<br>
</body>
</html>
