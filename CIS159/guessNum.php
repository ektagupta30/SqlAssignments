<html>
<head><title>Guessing game</title></head>
<body>
<h3>Guess the number between 1 and 25</h3>
<?php
if (!empty($_POST))
{
     guess($_POST['number'],$_POST['Rnumber']);
     $randNumber = $_POST['Rnumber'];
     if($_POST['number']==$_POST['Rnumber'])
     {
     $randNumber = rand(0,25);
     }
 }
else
{
	 	$randNumber = rand(0,25);
}
function guess($number,$randNumber)
{
	if($number==$randNumber){
	echo "you guesed it right";
	}
	 elseif ($number < $randNumber){
	echo "$number is low";
	}
	elseif ($number > $randNumber){
		echo "$number is high";
	}
}
?>
<form action="guessNum.php" method="post">
Number: <input type="text" name="number"><br>
<input type="hidden" name="Rnumber" value="<?= $randNumber ?>" > <br>
<input type="submit" name="Click" value="Click"></p>
</form>
</body>
</html>