<!DOCTYPE html>
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
if ($ans == "Farmer")
   {
     print "<div style = $ansStyle> Yes he was an excellent farmer </div>";
   }
else
   {
     print "<div style = $ansStyle>Your answer is incorrect. He was an excellent farmer</div>";
   }
?>
<br>
<table>
<tr>
<td><img src="response1.jpg"><br>
<a href="http://www.biography.com/people/abraham-lincoln-9382540">Career before president</a><br>
</td>
<td>
<?php
$scene2 = <<<INFO


"In 1830, Abe's father moved the family to Illinois following fears of another milk sickness outbreak. After enduring several plagues and one of the worst winters on record, Abe decided to leave his father's homestead and set off on his own at the age of 22. Abe's experience, intelligence, and ingenuity would serve him well. His first job required him to steer a flatboat from Illinois to New Orleans, Louisiana. After leading the construction of the flatboat with two other boys, Abe gained notoriety from the residents of New Salem, when he figured out how to float the stuck flatboat over Rutledge's Dam, by drilling a hole in the bottom of the boat. After successfully unloading the goods in New Orleans, Abe took a steamer to St. Louis and walked home the remainder of the way. The owner of the flatboat was so impressed with Abe, he hired him to work as a clerk in his store in New Salem.

 Abe Enters Politics
 On May 7, 1833, Abe was appointed postmaster of New Salem. As the population of New Salem declined over the next few years, it became too small for a post office and Abe was out of a job. That same year, Lincoln was hired to survey new lands acquired by Sangamon County, despite the fact he had no training as a surveyor. According to legend, it took Abe only six weeks to learn the trade and from that point on was considered an excellent surveyor. In 1834, Abe would campaign again for representative in the Illinois state legislature. Now that he was well-known in a larger portion of Sangamon County, Abe traveled from village to village giving speeches, attending shooting matches, horse races and other community events. Again, there were thirteen candidates, but this time Abe won.
 Abe became an influential force of the Whig party in the Illinois legislature and was reelected in 1836, 1838, and 1840. During this time, the issue of slavery became more and more contentious in Illinois and many other states. In 1837, Lincoln first spoke publicly to the legislature concerning his views on slavery when it passed a set of resolutions against abolitionist (anti-slavery) groups. Although Illinois was a free state at the time, it had many people who supported slavery, especially in its southern portions. In addressing the legislature, Abe opposed the resolutions and asserted that he believed slavery was an evil institution. Despite his feelings against slavery, Lincoln admitted he did not think the time was right to free all of the slaves.
"

INFO;
print $scene2;
print "<p style=$quesStyle>1.Why did Abe's father move them to Illinois?</p>";
?>
<form action = "question2response.php" method = "post">
<input type = "radio" name="ans" value="friends">To meet friends<br>
<input type = "radio" name="ans" value="education">For better education for kids<br>
<input type = "radio" name="ans" value="milk sickness">He was afraid that milk sickness would strike again<br>
<input type = "submit" value = "SEND INFORMATION">
</form>
</td>
</tr>
</table>
</body>
</html>
