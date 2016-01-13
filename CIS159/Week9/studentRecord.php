<html>
<head><title>Week9</title></head>
<body>
<h1>Week9 assignment</h1>
<?php
include "linkPass.php";
mysqli_select_db($link,"egupta11_1");
$Function = $_POST['Function'];

$idno=$_POST["inidno"];
$name=$_POST["inname"];
$adr=$_POST["instadr"];
$course=$_POST["incourse"];
$grades=$_POST["ingrades"];
if ($Function == "A"){
$sql = "INSERT INTO student values ('$idno', '$name', '$adr', '$course', '$grades')";
$result = mysqli_query($link,$sql) or die(mysqli_error($link));
echo $result;
$showaresult = mysqli_query($link,"SELECT * from student where idno = '$idno'")
    or die("Invalid query: " . mysqli_error($link));
$row = mysqli_fetch_array($showaresult);
    echo ("<br> ID = ". $row[0] . "<br> NAME =  " . $row[1] . "<br>");
    echo("ADDRESS = " . $row[2] . "<br> COURSE = " . $row[3] . "<br>");
    echo("GRADES = " . $row[4] . "<br>");

$showresult = mysqli_query($link,"SELECT * from student")
    or die("Invalid query: " . mysqli_error($link));

while ($row = mysqli_fetch_array($showresult))
   {
    echo ("<br> ID = ". $row[0] . "<br> NAME =  " . $row[1] . "<br>");
	    echo("ADDRESS = " . $row[2] . "<br> COURSE = " . $row[3] . "<br>");
    echo("GRADES = " . $row[4] . "<br>");
   }
}
elseif ($Function == "D"){
$sql = "DELETE FROM student WHERE idno = '$idno'";
   $result= mysqli_query($link,$sql) or die(mysqli_error($link));
   $showresult = mysqli_query($link,"SELECT * from student")
       or die("Invalid query: " . mysqli_error($link));
   while ($row = mysqli_fetch_array($showresult))
      {
       echo ("<br> ID = ". $row[0] . "<br> NAME =  " . $row[1] . "<br>");
	   	    echo("ADDRESS = " . $row[2] . "<br> COURSE = " . $row[3] . "<br>");
    echo("GRADES = " . $row[4] . "<br>");
   }
   }

elseif ($Function == "U"){
if ($name == null){
$showaresult = mysqli_query($link,"SELECT name from student where idno = '$idno'")
    or die("Invalid query: " . mysqli_error($link));
$row = mysqli_fetch_row($showaresult);
$name = $row[0];
}
if ($adr == null){
$showaresult = mysqli_query($link,"SELECT adr from student where idno = '$idno'")
    or die("Invalid query: " . mysqli_error($link));
$row = mysqli_fetch_row($showaresult);
$adr = $row[0];
}
if ($course == null){
$showaresult = mysqli_query($link,"SELECT course from student where idno = '$idno'")
    or die("Invalid query: " . mysqli_error($link));
$row = mysqli_fetch_row($showaresult);
$course = $row[0];
}
if ($grades == null){
$showaresult = mysqli_query($link,"SELECT grades from student where idno = '$idno'")
    or die("Invalid query: " . mysqli_error($link));
$row = mysqli_fetch_row($showaresult);
$grades = $row[0];
}
$sql = "UPDATE student SET name = '$name',adr = '$adr', course ='$course',grades ='$grades' WHERE idno = '$idno'";
$result= mysqli_query($link,$sql) or die(mysqli_error($link));
echo $result;
$showresult = mysqli_query($link,"SELECT * from student")
    or die("Invalid query: " . mysqli_error($link));

while ($row = mysqli_fetch_array($showresult))
   {
    echo ("<br> ID = ". $row[0] . "<br> NAME =  " . $row[1] . "<br>");
	    echo("ADDRESS = " . $row[2] . "<br> COURSE = " . $row[3] . "<br>");
    echo("GRADES = " . $row[4] . "<br>");
   }

}

?>
</body>
</html>