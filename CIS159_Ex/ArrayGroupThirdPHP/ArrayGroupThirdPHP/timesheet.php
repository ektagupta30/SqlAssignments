<?php
// the sort algorithm with use the 0, -1 and 1 to do the sort - returning to usort which is a user defined sort
function proj_srt($var1, $var2) {
        if ($var1["projno"] == $var2["projno"]) {
            return 0;
        } elseif ($var1["projno"] < $var2["projno"]) {
            return -1;
        } else {
            return 1;
        }
}
function empdata_filter($param) {
        return ($param["empno"] == "11122");
}
function projdata_filter($param) {
        return ($param["projno"] == "99833");
}
function hrsdata_filter($param) {
        return ($param["hrs"] > "2.0");
}
$timedata = array(
        array("empno"=>"11111", "projno"=>"99887", "dte"=>"01/02/2011", "hrs"=>"2.5"),
        array("empno"=>"11122", "projno"=>"99887", "dte"=>"01/02/2011", "hrs"=>"5.0"),
        array("empno"=>"11111", "projno"=>"99833", "dte"=>"01/02/2011", "hrs"=>"2.5"),
        array("empno"=>"11122", "projno"=>"99833", "dte"=>"01/02/2011", "hrs"=>"2.0"),
        array("empno"=>"11111", "projno"=>"99835", "dte"=>"01/02/2011", "hrs"=>"3.0"),
        array("empno"=>"11122", "projno"=>"99835", "dte"=>"01/02/2011", "hrs"=>"1.0")
        );
echo "<br>Display time sheet data using keys<br>";
foreach ($timedata as $key => $value)
	{
		 echo $key . " " . $value["empno"] . " " . $value["projno"] . " " . $value["dte"] . " " . $value["hrs"] . " " . "<br>";
	}

echo "<br>";
echo "<br>Display time sheet data using variables<br>";
foreach ($timedata as $key => $value)
	{
               extract($value);  
//extract will take array and create variables for each key/value pair using key for basis of variable name and the value as the value
		 echo $empno . " " . $projno . " " . $dte . " " . $hrs . " " . "<br>";
	}
echo "<br>";
echo "<br>Display time sheet data sorted by employee no.<br>";
sort($timedata);
foreach ($timedata as $key => $value)
	{
		 echo $key . " " . $value["empno"] . " " . $value["projno"] . " " . $value["dte"] . " " . $value["hrs"] . " " . "<br>";
	}
echo "<br>";
echo "<br>Display time sheet data sorted by project no.<br>";
usort($timedata, "proj_srt");
foreach ($timedata as $key => $value)
	{
		 echo $key . " " . $value["empno"] . " " . $value["projno"] . " " . $value["dte"] . " " . $value["hrs"] . " " . "<br>";
	}
echo "<br>";
echo "<br>Display time sheet data only for employee no. '11122'<br>";
$empdata = array_filter($timedata, "empdata_filter");
foreach ($empdata as $key => $value)
	{
		 echo $value["empno"] . " " . $value["projno"] . " " . $value["dte"] . " " . $value["hrs"] . " " . "<br>";
	}

echo "<br>";
echo "<br>Display time sheet data only for project no. '99833'<br>";
$projdata = array_filter($timedata, "projdata_filter");
foreach ($projdata as $key => $value)
	{
		 echo $value["empno"] . " " . $value["projno"] . " " . $value["dte"] . " " . $value["hrs"] . " " . "<br>";
	}
echo "<br>";
echo "<br>Display time sheet data only for those employees who worked more than 2.0 hrs on a project<br>";
$hrsdata = array_filter($timedata, "hrsdata_filter");
foreach ($hrsdata as $key => $value)
	{
		 echo $value["empno"] . " " . $value["projno"] . " " . $value["dte"] . " " . $value["hrs"] . " " . "<br>";
	}
echo "<br>";
/* foreach ($timedata as $key => $value)
	{
	 foreach ($value as $key1 => $value1)
		{
		 echo $value1 . "<br>";
		}
	}
*/
?>
