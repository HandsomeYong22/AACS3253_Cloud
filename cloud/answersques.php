<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Answer Secure Question</title>
    <link href="img/logo.png" rel="icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawsom-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>
<div style="background-image: url('img/login-background.png'); height:100%; overflow:scroll;">
<?php 
include_once('config/settings.php');
include_once('config/function.php');?>
<?php
if (isset($_POST['ans'])){
    $id=$_GET['UserID'];
    $ans=$_POST['ans'];
    $sql ="select * from tbluser where UserID='".$id."'";  // sql command
    mysqli_select_db($conn,"myproject"); ///select database as default
    $result=mysqli_query($conn,$sql);  
    $row=mysqli_fetch_assoc($result); 
    if($ans==$row['secureanswer']){
    goto2("updatepassword.php?UserID=$id","Answer Correct! Change your password now!");
    }
    else{
        goto2("forgetpassword.php","Answer Incorrect!");
    }
} else {
    $id=$_GET['UserID'];
    $sql ="select * from tbluser where UserID='".$id."'";  // sql command
    mysqli_select_db($conn,"myproject"); ///select database as default
    $result=mysqli_query($conn,$sql);  
    $row=mysqli_fetch_assoc($result); 
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
                      <img src="https://gogobuckett.s3.amazonaws.com/headlogo.png" alt="Gogo" id="logo">
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
                            <br><h2>Answer Secure Question</h2><br>
                            <form method="POST" name="answersecureques">
                            <div class="text-box-cont">
                                <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i> User ID</span>
                                        <input disabled type="text" for="uid" class="form-control" placeholder="UserID" aria-label="UserID" aria-describedby="basic-addon1"
                                          id="uid" name="uid" value="<?php echo $row['UserID']?>">
                                    </div><br><br>
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i> Secure Question </span>
                                        <input disabled type="text" for="SecureQuestion" class="form-control" placeholder="SecureQuestion" aria-label="SecureQuestion" aria-describedby="basic-addon1"
                                          id="securequestion" name="securequestion" value="<?php echo $row['securequestion']?>">
                                    </div><br><br>
                                    <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i> Secure Answer </span>
                                    <input type="text" for="Ans" class="form-control" placeholder="SecureAnswer" aria-label="And" aria-describedby="basic-addon1"
                                    id="ans" name="ans" value="" required>
                                </div>
                                <div class="input-group center mb-3">
                                    <br>
                                    <button class="btn btn-success btn-round">CONTINUE</a></button>
                                </div>    
                            </div>
                            </form> 
                        </div>
                        <div class="col-lg-4 col-md-5 box-de">
                            <div class="ditk-inf"><br>
                                <br><h2 class="w-100">Didn't Have an Account </h2><br>
                                <p>Simply Create your account by clicking the Signup Button</p><br><br><br><br>
                                <a href="signup.php">
                                <button type="button" class="btn btn-outline-light">SIGN UP</button><br><br><br><br><br><br><br>
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
