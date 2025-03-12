<?php
if (file_exists('config/function.php')==1){
    require_once('config/function.php');
    }
    else{
      require_once('../config/function.php');
    }

if (file_exists('config/deletesession.php')==1){
    require_once('config/deletesession.php');
}
else{
    include('../config/deletesession.php');
}

goto2("loginpage.php","You have log out from the Portal");

?>