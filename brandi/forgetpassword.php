<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Forget Password</title>
    <link href="img/logo.png" rel="icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawsom-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<body>
<div style="background-image: url('img/login-background.png'); height:100%; overflow:scroll;">
<?php
require_once('config/function.php');
if (isset($_GET['uid'])) {
    $user=retrieveUser();
    $uid=$_GET['uid'];
    $flag=findUser($user,$uid);
    if($flag==1){
        goto2("answersques.php?UserID=$uid","Answer the secure question");
    }
    else{
        goto2("forgetpassword.php","User ID not found");
    }
} else{
?>  
<header id="navigation" class="navbar-fixed-top navbar">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars fa-2x"></i>
                    </button>
					<!-- /responsive nav button -->
                      <img src="img/headlogo.png" alt="Gogo" id="logo">
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="" class="nav navbar-nav">
                    <li><a href="loginpage.php">Login</a></li>
                        <li><a href="signup.php">Register</a></li>
                    </ul>
                </nav>
				<!-- /main nav -->	
            </div>
        </header>
    <div class="container-fluid ">
        <div class="container ">
            <div class="row ">
                <div class="col-sm-10 login-box">
                    <div class="row">
                        <div class="col-lg-8 col-md-7 log-det">
                            <br><h2>Password Reset</h2><br><br><br>
                            <form method="get" name="forgetpass">
                            <div class="text-box-cont">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i> User ID </span>
                                    </div>
                                    <input type="text" for="uid" class="form-control" placeholder="UserID" aria-label="Username" aria-describedby="basic-addon1"
                                    id="uid" name="uid" value="" required>
                                </div>
                                <div class="input-group center mb-3">
                                    <br><br><br><br>
                                    <button class="btn btn-success btn-round">CONTINUE</a></button>
                                </div>    
                            </div>
                            </form> 
                        </div>
                        <div class="col-lg-4 col-md-5 box-de">
                            <div class="ditk-inf"><br>
                                <br><h2 class="w-100">Didn't Have an Account </h2><br>
                                <p>Simply Create your account by clicking the Signup Button</p><br><br><br>
                                <a href="signup.php">
                                <button type="button" class="btn btn-outline-light">SIGN UP</button><br><br><br><br><br><br><br><br>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>   
</body>
<?php } ?>
<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>


</html>
