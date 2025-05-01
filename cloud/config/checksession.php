<?php

session_start();
if (isset($_SESSION['interface'])&&(isset($_SESSION['UserID']))){
    $interface=$_SESSION['interface'];
    $userid=$_SESSION['UserID'];
    goto2($interface."?UserID=$uname","Welcome back to the Portal");

}



?>