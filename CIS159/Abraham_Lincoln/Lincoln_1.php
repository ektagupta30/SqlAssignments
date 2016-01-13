<html>
<head>
<title>Abraham Libcoln</title>
<style>
h1 {
    color:blue;
    font-family:verdana;
    text-align:center;

}

</style>
</head>
<body>
<h1>Abraham Lincoln</h1>
<table>
<tr>
<td><img src="Ab_Lincoln.jpg"><br>
<a href="http://www.biography.com/people/abraham-lincoln-9382540" target="_blank">Abraham Lincoln U.S. President (1809 - 1865)</a><br>
</td>
<td>
<?php
$scene1 = <<<INFO
"Abraham Lincoln was born on February 12, 1809, in Hardin County, Kentucky, to Thomas and Nancy Lincoln in their one room log cabin
on their farm known as Sinking Spring (near modern-day Hodgenville, Kentucky). Although Thomas lacked formal education, he was an excellent
farmer and carpenter, and often times served a member of the jury.  Abraham attended school on an inconsistent basis.
At times, traveling teachers may have taught at a nearby rudimentary schoolhouse, and at other times Abraham walked several miles to the nearest school.
Lincoln himself admitted that the total amount of schooling he received in his childhood was no more than twelve months; nevertheless, he became an excellent reader "
INFO;
$quesStyle = <<<SETUP
"color: blue; font-size: 16pt;"
SETUP;
print $scene1;
print "<p style=$quesStyle>Abraham Lincoln was an excellent --------?</p>";
?>
<form action = "question1response.php" method = "post">

    <select size = "3" name = "ans" maxlength = "3">
      <option value = "Doctor">Doctor </option>
      <option value = "Farmer">Farmer</option>
      <option value = "Teacher">Teacher</option>

<input type = "submit" value = "SEND INFORMATION">
</form>
</td>
</tr>
</table>
<br><br>

</body>
</html>

