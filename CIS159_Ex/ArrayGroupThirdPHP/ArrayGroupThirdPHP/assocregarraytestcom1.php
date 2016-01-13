<html>
<head><title>Arrays</title></head>
<body>
<h2>Department Array</h2>
<?php
$deptNo="CIS122";
// I can either lay out each element individually or lay out the associative array in one line.
//$deptNameArray["CIS120"] = "Womens";
//$deptNameArray["CIS121"] = "Mens";
//$deptNameArray["CIS122"] = "Girls";
//$deptNameArray["CIS145"] = "Boys";
$deptNameArray = array("CIS120" => "Womens", "CIS121" => "Mens", "CIS122" => "Girls", "CIS145" => "Mens");
//$deptMang["Womens"] = "Reynolds";
//$deptMang["Mens"] = "Johnson";
//$deptMang["Girls"] = "Adams";
//$deptMang["Boys"] = "Costa";
$deptMang = array("Womens" => "Reynolds", "Mens" => "Johnson", "Girls" => "Adams", "Boys" => "Costa");
//If I leave the { } out of the line below, it cannot handle it - the { } braces is one solution. Another
//solution is to simply handle things individually and then combine them in an echo or print.
echo "Dept Name: $deptNameArray[$deptNo] and Dept Manager: {$deptMang[$deptNameArray[$deptNo]]}<br>";
$holdDeptName = $deptNameArray[$deptNo];
$holdDeptMang = $deptMang[$deptNameArray[$deptNo]];
echo "Dept Name: $holdDeptName & Dept Manager: $holdDeptMang";
?>
</body>
</html>