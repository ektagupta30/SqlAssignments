<html>
<head><title>Arrays</title></head>
<body>
<h2>Department Array</h2>
<?php
$deptNo=1;
$deptNameArray[1] = "Womens";
$deptNameArray[2] = "Mens";
$deptNameArray[3] = "Girls";
$deptNameArray[4] = "Boys";
$deptMang["Womens"] = "Reynolds";
$deptMang["Mens"] = "Johnson";
$deptMang["Girls"] = "Adams";
$deptMang["Boys"] = "Costa";
//If I leave the { } out of the line below, it cannot handle it - the { } braces is one solution. Another
//solution is to simply handle things individually and then combine them in an echo or print.
echo "Dept Name: $deptNameArray[$deptNo] and Dept Manager: {$deptMang[$deptNameArray[$deptNo]]}<br>";
$holdDeptName = $deptNameArray[$deptNo];
$holdDeptMang = $deptMang[$deptNameArray[$deptNo]];
echo "Dept Name: $holdDeptName & Dept Manager: $holdDeptMang";
?>
</body>
</html>