<html>
<head><title>Function</title></head>
<body>
<h2>Simple Function</h2>
<p>This is going to illustrate the use of a simple function to say hello to someone  
multiple times.</p>
<?php
$name = "Susan";
sayhello($name);
sayhello($name);
sayhello($name);
function sayhello($name)
     {  
       echo "Hello " . $name . "<br>";
     } // end sayhello
?>
</body>
</html>
