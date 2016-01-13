<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>hello</title>
<style type="text/css">
h2  
{
	text-align: center;
}
div
{
	border-color: green;
	border-style: groove;
	border-width: 2px;
	font-weight: bold;
	font-size: 16pt;
	color: green;
	text-align: center;
}
</style>
</head>
<body>
<h2>Hello outside div</h2>
<div>
<h2>Hello inside div</h2>
<?php
$varFirst = "Ann ";    // assigns Ann to $varFirst
$varLast = "Smith";      // assigns Smith to $varSecond
echo "Hello ", $varFirst, $varLast;
?>
</div>
</body>
</html>