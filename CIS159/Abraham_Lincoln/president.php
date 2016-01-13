<html>
<head>
<title>Abraham Lincoln</title>
<head>
<body>

<?php
$ans = $_POST['ans'];

$quesStyle = <<<SETUP
"color: blue; font-size: 16pt;"
SETUP;
$ansStyle = <<<ANSSET
"border: solid; border-width: 2pt; border-color: blue; font-size: 14pt; text-align: center; margin-left: 25%; margin-right: 25%; "
ANSSET;
if ($ans == "Mexican-American War")
   {
     print "<div style = $ansStyle> Correct answer </div>";
   }
else
   {
     print "<div style = $ansStyle>Correct answer is he spoke out against the Mexican-American War</div>";
   }
?>
<br>
<table>
<tr>
<td><img src="president.jpg">The first photographic image of the new president<br><br>
<a href="http://www.biography.com/people/abraham-lincoln-9382540">November 6, 1860, Lincoln was elected the 16th president of the United States</a><br>
</td>
<td>
<?php
$scene2 = <<<INFO
"In 1860, the future of the United States was much in doubt. The issue of slavery, which had bitterly divided the nation, had also begun to divide political parties, making the presidential election very complicated. The Democratic Party had been divided into the Northern Democratic Party and Southern Democratic Party. The Northern Democratic Party nominated Stephen Douglas for the presidency, while the Southern Democratic Party nominated John C. Breckenridge. The Constitutional Union Party nominated the former Tennessee Governor John Bell.

On November 6, 1860, Abraham Lincoln was elected president in 33 states. Of the eleven southern states that would eventually secede, only Virginia allowed Abe's named to be on their ballots. In Virginia, Abe received slightly over one percent of the popular vote. In the four slave states that would become Border States, Abe finished third or fourth. In New England, however, Abe won the popular vote in every county. The 81.8 percent voter turnout for the Election of 1860 is the second highest turnout in presidential election history. Now that Abe had been elected President, he had to appoint the members of his cabinet."

INFO;
print $scene2;
?>
</td>
</tr>
</table>
</body>
</html>
