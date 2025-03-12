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
<div style="background-image: url('img/login-background.png'); height:100%; overflow:scroll;">
	
        <!-- 
        Fixed Navigation
        ==================================== -->
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

<div class="container-fluid ">
<div class="container ">
<div class="row ">
<div class="admin-box">
<div class="row">
<div class="admin-det">
<h2>My Profile</h2>
<?php
    $sql3 = "select * from tbluser where UserID='".$id."'";
    mysqli_select_db($conn,"myproject");
    $result3= mysqli_query($conn,$sql3);
    $row3=mysqli_fetch_assoc($result3);
?>
    <?php $showimage = $row3['avatar'];?>
    <p><img src="<?php echo "admin/".$showimage ?>" width="150" height="150" style="display:block; margin:auto";/></p>
    <table width="60%" >
    <tr>
    <th colspan="2">User Details</th>
    </tr>
    <tr>
    <td ><b>User ID</b></td><td><?php echo $row3['UserID'] ; ?></td>
    </tr>
    <tr>
    <td><b>User Name</b></td><td><?php echo $row3['Name'] ; ?></td>
    </tr>
    <tr>
    <td><b>Address</b></td><td><?php echo $row3['Address1'].", ";?><br>
    <?php echo $row3['Address2'].", ";?><br>
    <?php echo $row3['PostCode']." ".$row3['City'].", ";?><br>
    <?php echo $row3['State'].", ". $row3['Country']."."; ?></td>
    </tr>
    <tr>
    <td><b>Email</b></td><td><?php echo $row3["Email"]; ?></td>
    </tr>
    <tr>
    <td><b>Date of Birth</b></td><td><?php echo $row3["dob"]; ?></td>
    </tr>
    </table><br>
    <div class="insertframe">
    <a href="updateprofile.php?UserID=<?php echo $id?>">Update Profile</a></p>
    </div>
<br><hr><br>
    <?php
    $no=1;
    $sql1 = "select * from tbllocalappoint where UserID='".$id."'";
    $sql2 = "select * from tblinternationalappoint where UserID='".$id."'";
    $result = mysqli_query($conn,$sql1);
    $result2 = mysqli_query($conn,$sql2);  
    if ((mysqli_num_rows($result))||(mysqli_num_rows($result2)) != 0){
    ?>
    <h2>My Appointment</h2><br>
    <?php while($row=mysqli_fetch_assoc($result)){
    ?>
    <table width="60%">
    <tr>
    <th colspan="2">Appointment ID #<?php echo $row["AppointID"]; ?></th>
    </tr>
    <tr>
    <td><b>Appointment Date</b></td><td><?php echo $row["Date"]; ?></td>
    </tr>
    <tr>
    <td><b>Travel Package Type</b></td><td>Local Travel Package</td>
    </tr>
    <tr>
    <td><b>Travel Package ID</b></td><td> <?php echo $row["LocalPackageID"]; ?></td>
    </tr>
    <tr>
    <td><b>Travel Date</b></td><td> <?php echo $row["TravelDate"]; ?></td>
    </tr>
    <tr>
    <td><b>Status</b></td><td><?php echo $row["Status"]; ?></td>
    </tr>
    </table><br>
    <?php $no++;
    }?>
    <?php while($row2=mysqli_fetch_assoc($result2)){?>
    <table width="60%">
    <tr>
    <th colspan="2">Appointment ID #<?php echo $row2["AppointID"]; ?></th>
    </tr>
    <tr>
    <td><b>Appointment Date</b></td><td><?php echo $row2["Date"]; ?></td>
    </tr>
    <tr>
    <td><b>Travel Package Type </b></td><td>International Travel Package</td>
    </tr>
    <tr>
    <td><b>Travel Package ID</b></td><td> <?php echo $row2["InternationalPackageID"]; ?></td>
    </tr>
    <tr>
    <td><b>Travel Date</b></td><td> <?php echo $row2["TravelDate"]; ?></td>
    </tr>
    <tr>
    <td><b>Status</b></td><td><?php echo $row2["Status"]; ?></td>
    </tr>
    </table><br>
    <?php $no++;
    }
    }else {}?>
    
    <br>


    </div>
    </div>
    </div>
    </div>
    </div>
    </div>
</body>
</html>

