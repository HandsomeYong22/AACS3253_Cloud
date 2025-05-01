<?php
include_once("config/function.php");

setcookie("uname","",time()-(3600));
setcookie("password","",time()-(3600));

goto2("loginpage.php","You have successfully delete the cookie")

?>

