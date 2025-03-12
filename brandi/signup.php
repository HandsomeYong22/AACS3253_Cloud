<!doctype html>
<html lang="en">
<?php  include_once('config/settings.php');
include_once('config/function.php');?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sign Up</title>
    <link href="img/logo.png" rel="icon">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawsom-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <link rel="stylesheet" type="text/css" href="css/main.css" />
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
                      <img src="img/headlogo9.png" alt="Gogo" id="logo">
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="" class="nav navbar-nav">
                        <li><a href="loginpage.php">Login</a></li>
                    </ul>
                </nav>
				<!-- /main nav -->	
            </div>
        </header>
<?php 

if (isset($_POST['name'])){
        $u=$_POST['userid'];
        $n=$_POST['name'];
        $usertype="U";
        $password=$_POST['password'];
        $dob=$_POST['dob'];
        $address1=$_POST['address1'];
        $address2=$_POST['address2'];
        $city=$_POST['city'];
        $postcode=$_POST['postcode'];
        $state=$_POST['state'];
        $country=$_POST['country'];
        $email=$_POST['email'];
        $avatar= $_FILES['avatar']['name'];
        $avatar_temp=$_FILES['avatar']['tmp_name'];
        $imgloc="image/".$avatar;
        $ques=$_POST['secureques'];
        $ans=$_POST['secureanswer'];
        if(move_uploaded_file($avatar_temp , "admin/image/$avatar")){	
        $sql ="INSERT INTO `tbluser` (`UserID`, `Password`, `UserType`, 
        `Name`, `Address1`, `Address2`, `City`, `PostCode`, `State`,
        `Country`, `Email`, `avatar`,  `dob`,  `securequestion`,  `secureanswer`) 
        VALUES ('".$u."','".$password."', '".$usertype."', '".$n."', '".$address1."','".$address2."', 
        '".$city."', '".$postcode."', '".$state."',  '".$country."', '".$email."', '".$imgloc."', '".$dob."', '".$ques."', '".$ans."' )"; 
        mysqli_select_db($conn,"myproject");
        $result=mysqli_query($conn,$sql);  
      goto2("loginpage.php","You have successfully signed up. Please login to the portal now.");
    }
      else{
        $sql ="INSERT INTO `tbluser` (`UserID`, `Password`, `UserType`, 
        `Name`, `Address1`, `Address2`, `City`, `PostCode`, `State`,
        `Country`, `Email`,  `dob`,  `securequestion`,  `secureanswer`) 
        VALUES ('".$u."','".$password."', '".$usertype."', '".$n."', '".$address1."','".$address2."', 
        '".$city."', '".$postcode."', '".$state."',  '".$country."', '".$email."', '".$dob."' ,'".$ques."' ,'".$ans."' )"; 
        mysqli_select_db($conn,"myproject");
        $result=mysqli_query($conn,$sql);  
        goto2("loginpage.php","You have successfully signed up. Please login to the portal now.");
      }
} else {
  
?>
<div class="container-fluid ">
<div class="container ">
<div class="row ">
<div class="admin-box">
<div class="row">
<div class="admin-det">
<h2>Sign Up</h2>
<form  method="POST" enctype="multipart/form-data">
  <label for="User ID">User ID(Email):</label>
  <input type="text"  id="userid" name="userid" required><br><br>
  <label for="Name">User name:</label>
  <input type="text" id="name" name="name" required><br><br>
  <label for="">Password:</label><br>
  <input type="password"  id="password" name="password" required><br><br>
  <label for="dob">Date of Birth:</label><br>
  <input type="date" id="dob" name="dob" required><br><br>
  <label for="Address1">Address Line 1:</label>
  <input type="text" id="address1" name="address1" required><br><br>
  <label for="Address2">Address Line 2:</label>
  <input type="text" id="address2" name="address2" required><br><br>
  <label for="City">City:</label>
  <input type="text" id="city" name="city" required><br><br>
  <label for="PostCode">Postcode:</label>
  <input type="text" id="postcode" name="postcode" required><br><br>
  <label for="State">State:</label>
  <input type="text" id="state" name="state" required><br><br>
  <label for="Country">Country:</label>
  <input type="text" id="country" name="country" required><br><br>
  <label for="Email">Email:</label>
  <input type="text" id="email" name="email" required><br><br>
  <label for="Avatar">Profile Picture:</label>
  <input type="file" id="avatar" name="avatar" required><br><br>
  <label for="UserType">Secure Question:</label><br>
  <select name="secureques" id="secureques">
  <option value="What is your favorite country?">What is your favorite country?</option>
  <option value="What is your favorite food?">What is your favorite food?</option>
  <option value="What is the city you born?">What is the city you born?</option>
  <option value="What was your first car?">What was your first car?</option>
  <option value="What was your first job?">What was your first job?</option>
  </select><br><br>
  <label for="SecureAns">Secure Answer:</label>
  <input type="text" id="secureanswer" name="secureanswer" required><br><br>
  <input type="submit" value="Save">
</form>

<?php } ?>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</body>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/script.js"></script>


</html>
