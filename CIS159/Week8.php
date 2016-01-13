<html>
<head><title>SQL embedded in PHP</title></head>
<body>
<h1>SQL embedded in PHP</h1>
<?php
include "linkPass.php";
mysqli_select_db($link,"egupta11_1");
echo "<br>***Problem1***<br>";
$result = mysqli_query($link,"SELECT distinct contact from donor")
or die("<br>Invalid query: " . mysqli_error($link));

while ( $row = mysqli_fetch_assoc($result))

{
echo ("<br>" . $row["contact"] . "<br>");
}


echo "<br>***  Problem2  ***<br>";
$result = mysqli_query($link,"SELECT idno,name,yrgoal from donor order by yrgoal desc")
or die("<br>Invalid query: " . mysqli_error($link));
echo ("<br>IDNO    NAME     YRGOAL <br>" );
while ( $row = mysqli_fetch_array($result))
{
echo ("<br>". $row["idno"] . $row["name"].$row["yrgoal"]."<br>");
}


echo "<br>***  Problem3  ***<br>";
$result = mysqli_query($link,"select concat(stadr,', ', city,', ',state,' ', zip)as ADDRESS from donor")
or die("<br>Invalid query: " . mysqli_error($link));
echo ("<br>ADDRESS <br>" );
while ( $row = mysqli_fetch_row($result))
{
echo ("<br>". $row[0]."<br>");
}


echo "<br>***  Problem4  ***<br>";
$result = mysqli_query($link,"select datefst,state from donor  order by state,datefst")
or die("<br>Invalid query: " . mysqli_error($link));
echo ("<br>DATEFST   STATE <br>" );
while ( $row = mysqli_fetch_array($result))
{
echo ("<br>". $row["datefst"]."----".$row["state"]."<br>");
}


echo "<br>***  Problem5  ***<br>";
$result = mysqli_query($link,"select contact from donor where contact like '%Jo%'")
or die("<br>Invalid query: " . mysqli_error($link));
echo ("<br>CONTACT <br>" );
while ( $row = mysqli_fetch_array($result))
{
echo ("<br>". $row["contact"]."<br>");
}


echo "<br>***  Problem6  ***<br>";
$result = mysqli_query($link,"select name from donor  where name between 'J' and 'S'")
or die("<br>Invalid query: " . mysqli_error($link));
echo ("<br>NAME <br>" );
while ( $row = mysqli_fetch_array($result))
{
echo ("<br>". $row["name"]."<br>");
}

echo "<br>***  Problem7  ***<br>";
$result = mysqli_query($link,"select name,city from donor where city IN('Providence','Seekonk','Swansea')")
or die("<br>Invalid query: " . mysqli_error($link));
echo ("<br>NAME &#8195 &#8195  &#8195 CITY<br>" );
while ( $row = mysqli_fetch_array($result))
{
echo ("<br>". $row["name"]."&nbsp &nbsp".$row["city"]."<br>");
}


echo "<br>***  Problem8  ***<br>";
$result = mysqli_query($link,"select name, datefst from donor  where extract(year from datefst)= 1992")
or die("<br>Invalid query: " . mysqli_error($link));
echo ("<br>NAME &#8195 &#8195   DATEFST<br>" );
while ( $row = mysqli_fetch_array($result))
{
echo ("<br>". $row["name"]."&nbsp &nbsp".$row["datefst"]."<br>");
}


echo "<br>***  Problem9  ***<br>";
$result = mysqli_query($link,"select name,contact,city,state from donor
where contact in('Susan Jones','John Adams') order by state,city,name")
or die("<br>Invalid query: " . mysqli_error($link));
echo ("<br>NAME &#8195 CONTACT &#8195  CITY &#8195 STATE<br>" );
while ( $row = mysqli_fetch_array($result))
{
echo ("<br>". $row["name"]."&nbsp &nbsp".$row["contact"]."&nbsp &nbsp".$row["city"]."&nbsp &nbsp".$row["state"]."<br>");
}


echo "<br>***  Problem10  ***<br>";
$result = mysqli_query($link,"select concat( substr(name,instr(name,'/')+1),' ',
      substr(name,1,instr(name,'/')-1)) from employee")
or die("<br>Invalid query: " . mysqli_error($link));
echo ("<br>NAME <br>" );
while ( $row = mysqli_fetch_row($result))
{
echo ("<br>". $row[0]."<br>");
}



echo "<br>***  Problem11  ***<br>";
$result = mysqli_query($link,"select name ,title, salary,bonus from employee
    where title = 'Salesperson' and(salary > 81000 or bonus > 2800) order by title,salary
")
or die("<br>Invalid query: " . mysqli_error($link));
echo ("<br>NAME &#8195 TITLE &#8195 SALARY &#8195 BONUS <br>" );
while ( $row = mysqli_fetch_row($result))
{
echo ("<br>". $row[0]."&#8195".$row[1]."&nbsp &nbsp".$row[2]."&nbsp &nbsp".$row[3]."<br>");
}



echo "<br>***  Problem12  ***<br>";
$result = mysqli_query($link,"select name ,title, salary from employee
    where (title = 'Salesperson' and salary > 81000) or(title = 'Sales Manager' and salary > 96000) order by title,salary")

or die("<br>Invalid query: " . mysqli_error($link));
echo ("<br>NAME &#8195 &#8195 &#8195 &#8195 TITLE &#8195 &#8195 SALARY   <br>" );
while ( $row = mysqli_fetch_row($result))
{
echo ("<br>". $row[0]."&#8195".$row[1]."&nbsp &nbsp".$row[2]."<br>");
}

?>
</body>
</html>