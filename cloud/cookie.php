<?php 
require_once('config/function.php');
include('config/checksession.php');
if(!empty($_POST["remember"])) {
	setcookie ("uname",$_POST["uname"],time()+(3600));
	setcookie ("password",$_POST["password"],time()+(3600));
    $uname=$_POST["uname"];
    $password=$_POST["password"];
} else {
	setcookie ("uname","");
	setcookie ("password","");
    $uname=$_POST["uname"];
    $password=$_POST["password"];
}

$status=logincheck(trim($_POST['uname']),trim($_POST['password']));
$name=checkUType(trim($_POST['uname']),3);
$usertype=checkUType(trim($_POST['uname']),1);
$interface=checkUType(trim($_POST['uname']),2);
if ($status==1){
    $_SESSION['UserID']=$_POST['uname'];
    $_SESSION['UserType']=$usertype;
    $_SESSION['interface']=$interface;
    goto2($interface."?UserID=$uname","Wecome to the Portal, ".$name);
}
else{
    goto2("loginpage.php","Login Fail");
}

?>
