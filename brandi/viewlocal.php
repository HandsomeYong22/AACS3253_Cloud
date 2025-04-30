<!DOCTYPE html>
<html lang="en" class="no-js"> 
<?php include_once("config/settings.php"); 
include_once('config/session.php'); 
    $p=$_GET['PackageID'];
    $sql ="select * from tbllocal where PackageID='".$p."'";  // sql command
    mysqli_select_db($conn,"myproject"); ///select database as default
    $result=mysqli_query($conn,$sql);  
    $row=mysqli_fetch_assoc($result); 
    $id=$_GET['UserID'];
?>
<head>
    	<!-- meta charec set -->
        <meta charset="utf-8">
		<!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<!-- Page Title -->
        <title><?php echo $row['PackageName']?></title>	
        <link href="img/logo.png" rel="icon">
		<!-- Meta Description -->
        <meta name="description" content="Blue One Page Creative HTML5 Template">
        <meta name="keywords" content="one page, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
        <meta name="author" content="Muhammad Morshed">
		<!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<!-- Google Font -->
		
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
        <link rel="stylesheet" href="css/main.css">
		<!-- media-queries -->
        <link rel="stylesheet" href="css/media-queries.css">

		<!-- Modernizer Script for old Browsers -->
        <script src="js/modernizr-2.6.2.min.js"></script>
        
    </head>
    
    
    <body id="body">
	
    <!-- preloader -->
    <div id="preloader">
        <img src="img/preloader.gif" alt="Preloader">
    </div>
    <!-- end preloader -->

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
                
                <!-- logo -->
                <a class="navbar-brand" href="index.php?UserID=<?php echo $id?>">
                    <h1 id="logo">
                        <img src="img/headlogo.png" alt="Gogo">
                    </h1>
                </a>
                <!-- /logo -->
            </div>

            <!-- main nav -->
            <nav class="collapse navbar-collapse navbar-right" role="navigation">
                <ul id="" class="nav navbar-nav">
                    <li><div class="dropdown"> 
						<button onclick="myFunction()" class="dropbtn"><i class="fa fa-search fa-1x"></i></button>
						<div id="myDropdown" class="dropdown-content">
						<input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
									<?php while ($slocal=mysqli_fetch_assoc($searchlocal)){  ?>
									<a href="viewlocal.php?PackageID=<?php echo  $slocal['PackageID'];?>&UserID=<?php echo $id?>"><?php echo  $slocal['PackageName'];?></a>
									<?php } ?>
									<?php while ($sinter=mysqli_fetch_assoc($searchinter)){  ?>
									<a href="viewinternational.php?PackageID=<?php echo  $sinter['PackageID'];?>&UserID=<?php echo $id?>"><?php echo  $sinter['PackageName'];?></a>
									<?php } ?>
						</div>
					    </div>
                    </li>
                    <li class="current"><a href="index.php?UserID=<?php echo $id?>">Home</a></li>
                    <li><a href="#team">Book</a></li>
                    <li><a href="#contact">Contact</a></li>
                    <li><a href="profile.php?UserID=<?php echo $id?>"><i class="fa fa-user fa-1x"></i></a></li>
					<li><a href="logout.php"><i class="fa fa-sign-out fa-1x"></i></a></li>
                </ul>
            </nav>
            <!-- /main nav -->
            
        </div>
    </header>
    <!--
    End Fixed Navigation
    ==================================== -->
    
    
    
    <!--
        Home Slider
        ==================================== -->
		
		<section id="slider">
			<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
			
				<!-- Indicators bullet -->
				<ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
				</ol>
				<!-- End Indicators bullet -->				
				
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
					
					<!-- single slide -->
					<div class="item active" style="background-image: url(<?php echo "admin/".$row['PackageImg'] ?>); filter:contrast(105%)">>
						<div class="carousel-caption">
							<h2 data-wow-duration="700ms" data-wow-delay="500ms" class="wow bounceInDown animated" style="text-shadow: 2px 2px gray;"><?php echo $row['PackageName'] ?></h2>
							<h3 data-wow-duration="1000ms" class="wow slideInLeft animated"><span class="color">From <?php echo $row['StartDate'] ?></h3>
							<h3 data-wow-duration="1000ms" class="wow slideInLeft animated"><span class="color">To <?php echo $row['EndDate'] ?></h3>
						</div>
					</div>
					<!-- end single slide -->
					
					
				</div>
				<!-- End Wrapper for slides -->
				
			</div>
		</section>
    
    <!--
    Features
    ==================================== -->
    
    <section id="features" class="features">
        <div class="container">
            <div class="row">
            
                <div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
                    <h2>Package Description</h2>
                    <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
                </div>

                <!-- service item -->
                <div class="col-md-4 wow fadeInLeft" data-wow-duration="500ms">
						<div class="service-item">
							<div class="service-icon">
								<i class="fa fa-home fa-2x"></i>
							</div>
							
							<div class="service-desc">
								<h3>Accomodation</h3>
								<p><?php echo $row['Extra1']?></p>
							</div>
						</div>
					</div>

                    <div class="col-md-4 wow fadeInLeft" data-wow-duration="500ms">
						<div class="service-item">
							<div class="service-icon">
								<i class="fa fa-globe fa-2x"></i>
							</div>
							
							<div class="service-desc">
								<h3>Including </h3>
								<p><?php echo $row['Extra2']?></p>
							</div>
						</div>
					</div>

                    <div class="col-md-4 wow fadeInLeft" data-wow-duration="500ms">
						<div class="service-item">
							<div class="service-icon">
								<i class="fa fa-check fa-2x"></i>
							</div>
							
							<div class="service-desc">
								<h3>Ticket </h3>
								<p><?php echo $row['Extra3']?></p>
							</div>
						</div>
					</div>
                    
            </div>
        </div>
    </section>
    
    <section id="features" class="features">
        <div class="container">
            <div class="row">
            
                <!-- service item -->
                <div class="col-md-4 wow fadeInLeft" data-wow-duration="500ms">
						<div class="service-item">
							<div class="service-icon">
								<i class="fa fa-users fa-2x"></i>
							</div>
							
							<div class="service-desc">
								<h3>Guide </h3>
								<p><?php echo $row['Extra4']?></p>
							</div>
						</div>
					</div>

                    <div class="col-md-4 wow fadeInLeft" data-wow-duration="500ms">
						<div class="service-item">
							<div class="service-icon">
								<i class="fa fa-plus-circle fa-2x"></i>
							</div>
							
							<div class="service-desc">
								<h3>Extra !</h3>
								<p><?php echo $row['Extra5']?></p>
							</div>
						</div>
					</div>

                    <div class="col-md-4 wow fadeInLeft" data-wow-duration="500ms">
						<div class="service-item">
							<div class="service-icon">
								<i class="fa fa-location-arrow fa-2x"></i>
							</div>
							
							<div class="service-desc">
								<h3>Location</h3>
								<p><?php echo $row['Location']?></p>
							</div>
						</div>
					</div>
                    
            </div>
        </div>
    </section>
  
    <section id="team" class="team">
        <div class="container">
            <div class="row">
    
                <div class="sec-title text-center wow fadeInUp animated" data-wow-duration="700ms">
                    <h2>Only RM <?php echo $row['Price']?>  For Now</h2>
                    <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
                </div>
                
                <div class="sec-sub-title text-center wow fadeInRight animated" data-wow-duration="500ms">
                    <p>Faster book your trip now!</p>
                </div>
                <div class="appointmentform">
                <?php 

                if (isset($_POST['date'])){
                    $lid=$localappid;
                    $d=$_POST['date']; 
                    $p=$_POST['packageid'];
                    $t=$_POST['traveldate'];
                    $u=$_POST['userid'];
                    $s="Pending";
                    $sql ="INSERT INTO `tbllocalappoint` ( `AppointID`,`Date`, `LocalPackageID`, `TravelDate`, `UserID`, `Status`) 
                    VALUES ('".$lid."','".$d."', '".$p."', '".$t."', '".$u."', '".$s."')";  
                    mysqli_select_db($conn,"myproject"); ///select database as default
                    $result=mysqli_query($conn,$sql);// command allow sql cmd to be sent to mysql
                    goto2("index.php?UserID=$id","Your appointment is successfully booked.Your appointment id is $lid");
                } else {
                
                ?>
                <form action="viewlocal.php?PackageID=<?php echo  $row['PackageID'];?>&UserID=<?php echo $id?>" method="POST">
                <label for="Date">Appointment Date:</label>
                <input type="date" id="date" name="date" value=""><br><br>
                <label for="PackageID">Package ID:</label>
                <input type="text" id="packageid" name="packageid" value="<?php echo $row['PackageID'] ?>"><br><br>
                <label for="TravelDate">Travel Date:</label>
                <input type="date" id="traveldate" name="traveldate" value="<?php echo $row['StartDate'] ?>"><br><br>
                <label for="UserID">User ID:</label>
                <input type="text" id="userid" name="userid" value="<?php echo $id?>"><br><br>
                <input type="submit" value="Book">
                </form>

                <?php } ?>
                </div>


            </div>
        </div>
    </section>
    
  
    
    <!--
    Contact Us
    ==================================== -->		
    
    <section id="contact" class="contact">
        <div class="container">
            <div class="row mb50">
            
                <div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
                    <h2>Still have some question?</h2>
                    <div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
                </div>
                
                <div class="sec-sub-title text-center wow rubberBand animated" data-wow-duration="1000ms">
                    <p>How do you think about the trip</p>
                </div>
                
                <!-- contact address-->
                <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 wow fadeInLeft animated" data-wow-duration="500ms">
                    <div class="contact-address">
                        <h3>Have a question?<br> Let us help you !</h3>
							<p>Need help? We're right here, always.</p>
							<p>Get quick answers, contact info, and <br>more with our interactive help feature.</p>
							<p id="hotline"> Hotline:<a href="tel:071234567" style="color:black;" >+ 07-1234567 <i class="fa fa-phone fa-lg"></i></a></p>
                    </div>
                </div> 
                <!-- end contact address -->
                
                <!-- contact form -->
                <div class="col-lg-8 col-md-8 col-sm-7 col-xs-12 wow fadeInDown animated" data-wow-duration="500ms" data-wow-delay="300ms">
                    <div class="contact-form">
                        <h3>Kindly leave us a feedback message</h3>
                        <form action="#" id="contact-form">
                            <div class="input-group name-email">
                                <div class="input-field">
                                    <input type="text" name="name" id="name" placeholder="Name" class="form-control">
                                </div>
                                <div class="input-field">
                                    <input type="email" name="email" id="email" placeholder="Email" class="form-control">
                                </div>
                            </div>
                            <div class="input-group">
                                <textarea name="message" id="message" placeholder="Message" class="form-control"></textarea>
                            </div>
                            <div class="input-group">
                                <input type="submit" id="form-submit" class="pull-right" value="Send message">
                            </div>
                        </form>
                    </div>
                </div>
                <!-- end contact form -->
                
                <!-- footer social links -->
                <div class="col-lg-1 col-md-1 col-sm-1 col-xs-12 wow fadeInRight animated" data-wow-duration="500ms" data-wow-delay="600ms">
                    <ul class="footer-social">
                        <li><a href="https://twitter.com/GOGOTravelWeb"><i class="fa fa-twitter fa-2x"></i></a></li>
                        <li><a href="https://www.instagram.com/_gogotravel_/"><i class="fa fa-instagram fa-2x"></i></a></li>
                        <li><a href="https://www.facebook.com/Gogotravel-102258424578661/"><i class="fa fa-facebook fa-2x"></i></a></li>
                    </ul>
                </div>
                <!-- end footer social links -->
                
            </div>
        </div>
        
    </section>
    
    <!--
    End Contact Us
    ==================================== -->
    
    
    <footer id="footer" class="footer">
			<div class="container">
				<div class="row">
				
					<div class="col-md-5 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms">
						<div class="footer-single">
						<a href="#body">
							<img src="img/footlogo8.png" alt=""  href="#body"></a>
							<h3><b><br>About Us</b></h3>
							<p><br>At GOGOTravel, we offer the best way to discover activities, attractions and things to do wherever you travel.
							We help you to discover and book in-destination services at the best prices. With a few taps or clicks, 
							you can be ready to travel wherever you want.<br>
							We are committed to bringing out you the best in value and quality travel arrangement, 
							and strive to become "Your Choice of A Truly Vacation."</p>
							
						</div>
					</div>
			
					<div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
						<div class="footer-single">
						<br><br><br><br><h3><b>Subscribe Us</b></h3><br>
							<form action="#" class="subscribe">
								<input type="text" name="subscribe" id="subscribe" placeholder="Enter your email">
								<input type="submit" value="&#8594;" id="subs">
							</form>
							<p>Get discount worth up to 60% sent straight to your inbox ! </p>
						</div>
					</div>
				
					<div class="col-md-3 col-sm-6 col-xs-12 wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
						<div class="footer-single">
						<br><br><br><br><h3><b>Support Us</b></h3><br>
							<ul>
								<li><a href="https://twitter.com/GOGOTravelWeb"><i class="fa fa-twitter fa-3x"></i> &nbsp; Twitter</a></li>
								<li><a href="https://www.instagram.com/_gogotravel_/"><i class="fa fa-instagram fa-3x"></i> &nbsp; Instagram</a></li>
								<li><a href="https://www.facebook.com/Gogotravel-102258424578661/"><i class="fa fa-facebook fa-3x"></i> &nbsp; &nbsp; &nbsp;  Facebook</a></li>
							</ul>
						</div>
					</div>
			
					
				</div>
				<div class="row">
					<div class="col-md-12">
						<p class="copyright text-center">
							Copyright © 2021 GOGOTravel. All rights reserved. Designed & developed by Group 6.</a>
						</p>
					</div>
				</div>
			</div>
		</footer>
		<a href="javascript:void(0);" id="back-top"><i class="fa fa-angle-up fa-3x"></i></a>

    <!-- Essential jQuery Plugins
    ================================================== -->
    <!-- Main jQuery -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <!-- Single Page Nav -->
    <script src="js/jquery.singlePageNav.min.js"></script>
    <!-- Twitter Bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- jquery.fancybox.pack -->
    <script src="js/jquery.fancybox.pack.js"></script>
    <!-- jquery.mixitup.min -->
    <script src="js/jquery.mixitup.min.js"></script>
    <!-- jquery.parallax -->
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <!-- jquery.countTo -->
    <script src="js/jquery-countTo.js"></script>
    <!-- jquery.appear -->
    <script src="js/jquery.appear.js"></script>
    <!-- Contact form validation -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
    <!-- Google Map -->
    <!--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>-->
    <script type='text/javascript' src='https://embedmaps.com/google-maps-authorization/script.js?id=1d1f61644f1123d41ffd9269440398865e8d5ddf'></script>
    <!-- jquery easing -->
    <script src="js/jquery.easing.min.js"></script>
    <!-- jquery easing -->
    <script src="js/wow.min.js"></script>
    <script>
        var wow = new WOW ({
            boxClass:     'wow',      // animated element css class (default is wow)
            animateClass: 'animated', // animation css class (default is animated)
            offset:       120,          // distance to the element when triggering the animation (default is 0)
            mobile:       false,       // trigger animations on mobile devices (default is true)
            live:         true        // act on asynchronously loaded content (default is true)
          }
        );
        wow.init();
    </script> 
    <!-- Custom Functions -->
    <script src="js/custom.js"></script>
    
    <script type="text/javascript">
    
  // Initialize and add the map
        function initMap() {
            // The location of Uluru
            const uluru = { lat: -25.344, lng: 131.036 };
            // The map, centered at Uluru
            const map = new google.maps.Map(document.getElementById("map_canvas"), {
            zoom: 4,
            center: uluru,
            });
            // The marker, positioned at Uluru
            const marker = new google.maps.Marker({
            position: uluru,
            map: map,
            });
        }

        $(function(){
            /* ========================================================================= */
            /*	Contact Form
            /* ========================================================================= */
            
            $('#contact-form').validate({
                rules: {
                    name: {
                        required: true,
                        minlength: 2
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    message: {
                        required: true
                    }
                },
                messages: {
                    name: {
                        required: "come on, you have a name don't you?",
                        minlength: "your name must consist of at least 2 characters"
                    },
                    email: {
                        required: "no email, no message"
                    },
                    message: {
                        required: "um...yea, you have to write something to send this form.",
                        minlength: "thats all? really?"
                    }
                },
                submitHandler: function(form) {
                    $(form).ajaxSubmit({
                        type:"POST",
                        data: $(form).serialize(),
                        url:"process.php",
                        success: function() {
                            $('#contact-form :input').attr('disabled', 'disabled');
                            $('#contact-form').fadeTo( "slow", 0.15, function() {
                                $(this).find(':input').attr('disabled', 'disabled');
                                $(this).find('label').css('cursor','default');
                                $('#success').fadeIn();
                            });
                        },
                        error: function() {
                            $('#contact-form').fadeTo( "slow", 0.15, function() {
                                $('#error').fadeIn();
                            });
                        }
                    });
                }
            });
        });
        function myFunction() {
				document.getElementById("myDropdown").classList.toggle("show");
			}

		function filterFunction() {
				var input, filter, ul, li, a, i;
				input = document.getElementById("myInput");
				filter = input.value.toUpperCase();
				div = document.getElementById("myDropdown");
				a = div.getElementsByTagName("a");
				for (i = 0; i < a.length; i++) {
					txtValue = a[i].textContent || a[i].innerText;
					if (txtValue.toUpperCase().indexOf(filter) > -1) {
					a[i].style.display = "";
					} else {
					a[i].style.display = "none";
					}
				}	
			}
    </script>
</body>
</html>
