<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Log In</title>
    <link href="https://gogobuckett.s3.amazonaws.com/headlogo.png" rel="icon">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/fontawsom-all.min.css">
    <link rel="stylesheet" type="text/css" href="../css/main.css" />
    <link rel="stylesheet" type="text/css" href="../css/style.css" />
</head>
<body id="body">
<div style="background-image: url('img/login-background.png'); height:100%; overflow:scroll;">
<?php
require_once('../config/function.php');
require_once('../snow.html');?> 
<header id="navigation" class="navbar-fixed-top navbar">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars fa-2x"></i>
                    </button>
					<!-- /responsive nav button -->
                      <img src="https://gogobuckett.s3.amazonaws.com/headlogo.png" alt="Gogo" id="logo">
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="" class="nav navbar-nav">
                        <li><a href="../signup.php">Register</a></li>
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
                            <h2>Login</h2><br>
                            <form method="post" name="loginform" action="cookie.php" >
                            <div class="text-box-cont">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i> User ID</span>
                                    </div>
                                    <input type="text" for="uname" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1"
                                    name="uname" value="<?php if(isset($_COOKIE['uname'])){ echo $_COOKIE['uname'];}?>" required>
                                </div><br>
                                 <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i> Password</span>
                                    </div>
                                    <input type="password" for="password" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1"
                                    name="password" value="<?php if(isset($_COOKIE['password'])){ echo $_COOKIE['password'];}?>" required>
                                </div>
                                <div class="input-group left mb-3">
                                    <p><input type="checkbox" name="remember" /> Remember me </p>
                                </div>  
                                
                                <div class="input-group left mb-3">
                                    <button class="btn btn-success btn-round">Login</button>
                                </div> 
                                <div class="input-group left">
                                <a href="../forgetpassword.php">
                                <p class="forgot-p">Forget Password ?</a> 
                                </div>  
                                <div class="input-group left">
                                <a href="../deletecookie.php">
                                <p class="forgot-p">Delete Cookie?</p></a>
                                </div> 
                            </div> 
                            </form> 
                            
                            </div>
                        <div class="col-lg-4 col-md-5 box-de">
                            <div class="ditk-inf"><br>
                                <br><h2 class="w-100">Didn't Have an Account </h2><br>
                                <p>Simply Create your account by clicking the Signup Button</p><br><br><br>
                                <a href="../signup.php">
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
<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../js/popper.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/script.js"></script>


</html>
