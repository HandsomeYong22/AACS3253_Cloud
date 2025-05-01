<?php include 'config\settings.php'; ?>
<?php 
require_once('config\db.php');
require_once('config\function.php');
?>
<?php
if (isset($_POST['password'])){
    $u=$_GET['UserID'];  
    $p=$_POST['password'];
    $sql ="UPDATE `tbluser` SET `Password`='".$p."' WHERE (`UserID`='".$u."') LIMIT 1";  
    mysqli_select_db($conn,"myproject"); ///select database as default
    $result=mysqli_query($conn,$sql);  
    goto2("loginpage.php"," Password is successfully changed");
} else {
    $u=$_GET['UserID'];
    $sql ="SELECT * FROM tbluser where UserID='".$u."'";  // sql command
    mysqli_select_db($conn,"myproject"); ///select database as default
    $result=mysqli_query($conn,$sql);  
    $row=mysqli_fetch_assoc($result); 
   
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Update Password</title>
    <link href="img/logo.png" rel="icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawsom-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/main.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
</head>  
<body>
<div style="background-image: url('img/login-background.png'); height:100%; overflow:scroll;">
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
                <div class="col-sm-5 login-box">
                    <div class="row">
                        <div class="col-lg-12 col-md-7 log-det">
                            <h2>Password Reset</h2>
                            <p>Enter the new password that you want to change.</p>
                            <form action="updatepassword.php?UserID=<?php echo $u; ?>" method="POST">
                            <div class="text-box-cont"> 
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span>
                                    </div>
                                    <input type="text" disabled for="uname" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1"
                                    name="userid" value="<?php echo $u; ?>" required>
                                </div><br>
                                 <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="basic-addon1"><i class="fas fa-lock"></i></span>
                                    </div>
                                    <input type="password" for="password" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1"
                                    name="password" value="" required>
                                </div>
                                
                                <div class="input-group center mb-3">
                                    <br>
                                    <button class="btn btn-success btn-round">SUBMIT</button>
                                </div>    
                            </div>
                            </form> 
                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<div>
</body>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>


</html>
