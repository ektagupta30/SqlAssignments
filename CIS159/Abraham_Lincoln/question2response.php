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
if ($ans == "milk sickness")
   {
     print "<div style = $ansStyle> Correct answer </div>";
   }
else
   {
     print "<div style = $ansStyle>Your answer is incorrect. He was afraid that milk sickness would strike again </div>";
   }
?>
<br>
<table>
<tr>
<td><img src="war1.jpg">The Mexican_American War<br>
<a href="http://www.biography.com/people/abraham-lincoln-9382540">Career before president</a><br>
</td>
<td>
<?php
$scene2 = <<<INFO
"In December of 1839, Abe met Mary Todd, a  woman from a wealthy, slave owning family from Lexington, Kentucky. Abe had been involved in two romances prior to Mary; one with Ann Rutledge, who died of typhoid, and another with Mary Owens, which ended abruptly. By 1840, however, Abe and Mary Todd became engaged. Unfortunately, their mutual affections failed to last and by 1841, the engagement was broken, plunging Abe into a deep depression that rendered him unable to attend to his business or his job. Mired in sadness, Lincoln went back to his boyhood home in Kentucky with his friend Joshua Speed, where he apparently recovered sufficiently to return to his life in Springfield. To this day, there is no historical record of why the pair decided to call off their engagement. In 1842, however, Abe and Mary had re-established relations and were married on November 4th of that year. Abe and Mary would have four children, two of which died in childhood. In 1844, Abe and Mary Todd bought their first house on the corner of Eighth and Jackson Streets in Springfield.


Abe as Congressman

Following his marriage, Abe's interest in politics continued to influence the course he would take in life. Despite entering a law partnership with Judge Stephen Logan, Abe made several unsuccessful attempts to gain the Whig nomination for congressman in the 30th District of Illinois. In 1846, however, Abe was finally nominated and elected in August of that year. Abe served one two-year term in Washington and was the only Whig representative in the Democrat-dominated Illinois delegation. During his time as congressman, Abe spoke out against the Mexican-American War, attributing its cause to president James K. Polk's desire for  military glory-that attractive rainbow, that rises in showers of blood. Lincoln believed the United States was waging an unprovoked war for the purposes of expanding its boundaries. This stance made him particularly unpopular and Lincoln lost much of the political support he once enjoyed, and hence, was not re-elected to Congress."


INFO;
print $scene2;
print "<p style=$quesStyle>Why did Abraham Lincoln lose political support as congressman?</p>";
?>
<form action = "president.php" method = "post">
<input type = "radio" name="ans" value="a">He supported president James K. Polk<br>
<input type = "radio" name="ans" value="b">He spoke out against slavery<br>
<input type = "radio" name="ans" value="Mexican-American War">He spoke out against the Mexican-American War<br>
<input type = "submit" value = "SEND INFORMATION">
</form>
</td>
</tr>
</table>
</body>
</html>
