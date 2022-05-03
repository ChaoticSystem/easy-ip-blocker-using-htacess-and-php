<?php

//php function to get the ip of the visitor, it is very easy to skip, get another one
$ip = $_SERVER['REMOTE_ADDR'];
//variable that contains the text to add to the htacess file to ban access to our server
$add ="Deny from $ip/26";
//we add there in that htacess file (which we must locate in the root) the content concatenated previously
file_put_contents('.htaccess', $add.PHP_EOL, FILE_APPEND | LOCK_EX);
echo "done, you will not see this site or any other path to your server if you refresh this page";

