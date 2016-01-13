<?php
setcookie("last","Thursday",time()+60);
//setcookie(name,value,expire);
//Note that the first these arguments are required (there is also an optional path, domain)
//Name is simply the name of your cookie and the name is what you use to retrieve it
//Value is the value stored in your cook like a username or a date of the last visit
//Expiration is the date the cookie will expire and be deleted
//An hour would be +3600
//Note that if you do not set an expiration date the default is that it will be a session cookie
//which means that when the browser is restarted, it will be deleted
//Note that the setcookie()function has to come before the html tag if you are using one
?>
<html>
<head><title>Setting a cookie</title></head>
<body>
<h1>Setting a cookie to expire in one minute</h1>
</body>
</html>