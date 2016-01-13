<html>
<head><title>Function</title></head>
<body>
<h2>Simple Function</h2>
<p>This is going to illustrate the use of a simple function to say hello to someone  
multiple times.</p>
<?php
function sayhello($name)
     {  
       print "Hello ";
       print $name;
       print "<br>";
     } // end sayhello
$name = "Susan";
sayhello($name);
sayhello($name);
sayhello($name);
?>
</body>
</html>
