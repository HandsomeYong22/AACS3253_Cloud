<!DOCTYPE html>
<html lang="en" class="no-js"> 
<?php 
include_once("config/settings.php"); 
include_once('config/session.php'); 
$id=$_GET['UserID'];
?>
<head>
    	<!-- meta charec set -->
        <meta charset="utf-8">
		<!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<!-- Page Title -->
        <title>User Profile</title>		
		<!-- Meta Description -->
        <meta name="description" content="Blue One Page Creative HTML5 Template">
        <meta name="keywords" content="one page, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
        <meta name="author" content="Muhammad Morshed">
		<!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Google Font -->
		<link href="img/logo.png" rel="icon">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

		<!-- CSS
		================================================== -->
		<link rel="stylesheet" href="css/searchbar.css">
		<!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
		<!-- Twitter Bootstrap css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- jquery.fancybox  -->
        <link rel="stylesheet" href="css/jquery.fancybox.css">
		<!-- animate -->
        <link rel="stylesheet" href="css/animate.css">
		<!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/main.css">
		<!-- media-queries -->
        <link rel="stylesheet" href="css/media-queries.css">
		<!-- Modernizer Script for old Browsers -->
        <script src="js/modernizr-2.6.2.min.js"></script>

    </head>
	
<body id="body">
<header id="navigation" class="navbar-fixed-top navbar">
            <div class="container">
			
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars fa-2x"></i>
                    </button>
					<!-- /responsive nav button -->
					<a class="navbar-brand" href="#body">
						<h1 id="logo">
							<img src="img/headlogo9.png" alt="GOGO">
						</h1>
					</a>
				</div>	
				
				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="" class="nav navbar-nav">
                        <li class="current"><a href="index.php?UserID=<?php echo $id?>">Home</a></li>
                        <li><a href="index.php?UserID=<?php echo $id?>#features">Features</a></li>
                        <li><a href="index.php?UserID=<?php echo $id?>#works">Packages</a></li>
                        <li><a href="index.php?UserID=<?php echo $id?>#team">Branch</a></li>
                        <li><a href="index.php?UserID=<?php echo $id?>#contact">Contact</a></li>
						<li><a href="profile.php?UserID=<?php echo $id?>"><i class="fa fa-user fa-1x"></i></a></li>
						<li><a href="logout.php"><i class="fa fa-sign-out fa-1x"></i></a></li>
                    </ul>
                </nav>
				<!-- /main nav -->
	
            </div>
			
        </header>
<div style="background-image: url('img/login-background.png'); height:100%; overflow:scroll;">
<div class="container-fluid ">
<div class="container ">
<div class="row ">
<div class="admin-box">
<div class="row">
<div class="admin-det">
<h1>Update User</h1>
<?php 

if (isset($_POST['name'])){
  $u=$_GET['UserID'];
  $n=$_POST['name'];
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
  if(move_uploaded_file($avatar_temp , "admin/image/$avatar")){	
        $sql ="UPDATE `tbluser` SET `Name`='".$n."' ,`Address1`='".$address1."' ,
        `Address2`='".$address2."',`City`='".$city."' ,`PostCode`='".$postcode."' ,`State`='".$state."' ,`Country`='".$country."',
        `Email`='".$email."' ,`avatar`='".$imgloc."',`dob`='".$dob."'  
        WHERE (`UserID`='".$u."') LIMIT 1";  
        mysqli_select_db($conn,"myproject"); ///select database as default
        $result=mysqli_query($conn,$sql);  
       goto2("profile.php?UserID=$id"," User is successfully updated");
  }else{
    $sql ="UPDATE `tbluser` SET `Name`='".$n."' ,`Address1`='".$address1."' ,
    `Address2`='".$address2."',`City`='".$city."' ,`PostCode`='".$postcode."' ,`State`='".$state."' ,`Country`='".$country."',
    `Email`='".$email."',`dob`='".$dob."'  
    WHERE (`UserID`='".$u."') LIMIT 1";  
    mysqli_select_db($conn,"myproject"); ///select database as default
    $result=mysqli_query($conn,$sql);  
   goto2("profile.php?UserID=$id"," User is successfully updated");
  }
} else {
    $u=$_GET['UserID'];
    $sql ="select * from tbluser where UserID='".$u."'";  // sql command
    mysqli_select_db($conn,"myproject"); ///select database as default
    $result=mysqli_query($conn,$sql);  
    $row=mysqli_fetch_assoc($result); 
?>
<form action="updateprofile.php?UserID=<?php echo $id?>" method="POST" enctype="multipart/form-data">
  <label for="User ID">User ID:</label>
  <input type="text" id="userid" disabled name="userid" value="<?php echo $u; ?>  "><br><br>
  <label for="Name"> Username:</label>
  <input type="text" id="name" name="name" value="<?php echo $row['Name'];?>"><br><br>
  <label for="dob">Date of Birth:</label>
  <input type="date" id="dob" name="dob" value="<?php echo $row['dob'];?>"><br><br>
  <label for="Address1">Address Line 1:</label>
  <input type="text" id="address1" name="address1" value="<?php echo $row['Address1'];?>"><br><br>
  <label for="Address2">Address Line 2:</label>
  <input type="text" id="address2" name="address2"  value="<?php echo $row['Address2'];?>"><br><br>
  <label for="City">City:</label>
  <input type="text" id="city" name="city"  value="<?php echo $row['City'];?>"><br><br>
  <label for="PostCode">Postcode:</label>
  <input type="text" id="postcode" name="postcode"  value="<?php echo $row['PostCode'];?>"><br><br>
  <label for="State">State:</label>
  <input type="text" id="state" name="state"  value="<?php echo $row['State'];?>"><br><br>
  <label for="Country">Country:</label>
  <input type="text" id="country" name="country" value="<?php echo $row['Country'];?>"><br><br>
  <label for="Email">Email:</label>
  <input type="text" id="email" name="email"  value="<?php echo $row['Email'];?>"><br><br>
  <label for="Avatar">Profile Picture:</label>
  <input type="file" id="avatar" name="avatar"  img src=<?php echo $row['avatar'];?>><br><br>
  <p><input type="submit" value="Save"></p>
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
</html>
</body>
</html>

