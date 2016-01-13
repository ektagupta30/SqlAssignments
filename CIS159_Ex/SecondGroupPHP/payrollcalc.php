<?php
$employeeName = $_POST['employeeName'];
$payHr = $_POST['payHr'];
$hrsWk = $_POST['hrsWk'];
$pay = $payHr * $hrsWk;
?>
<html>
<head>
<title>Payroll Calculations</title>
<style type="text/css">
body 
     {
      background: #ffffc2;
      color: #0000bb;
     }
h1  
     {
      color: navy;
      text-align: center;
     }
div
     {
      font-size: 16pt;
     }
</style>
</head>
<body>
<h1>Payroll Calculation Results</h1>
<div> 
Employee Name:
<?php
echo $employeeName;
?>
<br><br>Pay:
<?php
echo $pay;
?>
</div>
</body>
</html>

