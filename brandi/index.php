<!DOCTYPE html>
<html lang="en" class="no-js"> 
<?php include_once("config/settings.php");
include_once('config/session.php'); 
$id=$_GET['UserID'];
?>
<!-- testing -->
<head>
    	<!-- meta charec set -->
        <meta charset="utf-8">
		<!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<!-- Page Title -->
        <title><?php echo $webtitle; ?></title>		
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
					<a class="navbar-brand" href="#body">
						<h1 id="logo">
							<img src="img/headlogo.png" alt="GOGO">
						</h1>
					</a>
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
						</div>
						</div></li>
                        <li class="current"><a href="#body">Home</a></li>
                        <li><a href="#features">Features</a></li>
                        <li><a href="#works">Product</a></li>
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
					<?php for($i=0;$i<$slidecount;$i++){
						if($i==0){
							$cl="active";
						}else{
							$cl="";
						}?>
					<li data-target="#carousel-example-generic" data-slide-to="<?php echo $i?>" class="<?php echo $cl ?>"></li>
					<?php } ?>
				</ol>
				<!-- End Indicators bullet -->				
				
				<!-- Wrapper for slides -->
				<div class="carousel-inner" role="listbox">
				<?php $count=0;
				 while ($sliderow=mysqli_fetch_assoc($slide)){ 
					if($count==0){
						$c="item active";
					}
					else{
						$c="item";
					} ?>
					<!-- single slide -->
					<div class="<?php echo$c?>" style="background-image: url(<?php echo "admin/".$sliderow['SlideImage']?>); filter:contrast(120%);">
						<div class="carousel-caption">
							<h2 data-wow-duration="500ms" data-wow-delay="500ms" class="wow bounceInDown animated"><?php echo $sliderow['SlideTopic']?></h2>
							<h3 data-wow-duration="500ms" class="wow slideInLeft animated"><span class="color"><b><?php echo $sliderow['SlideTitle']?></b></h3>
							<p data-wow-duration="500ms" class="wow slideInRight animated"><b><?php echo $sliderow['SlideContent']?></b></p>
							<ul class="social-links text-center">
								<li><a href="https://twitter.com/GOGOTravelWeb"><i class="fa fa-twitter fa-lg"></i></a></li>
								<li><a href="https://www.facebook.com/Gogotravel-102258424578661/"><i class="fa fa-facebook fa-lg"></i></a></li>
								<li><a href="https://www.instagram.com/_gogotravel_/"><i class="fa fa-instagram fa-lg"></i></a></li>
							</ul>
						</div>
					</div>
					<!-- end single slide -->
				<?php $count++; } ?>
				
			</div>
		</section>
		
        <!--
        End Home SliderEnd
        ==================================== -->
		
        <!--
        Features
        ==================================== -->
		
		<section id="features" class="features">
			<div class="container">
				<div class="row">
				
					<div class="sec-title text-center mb50 wow bounceInDown animated" data-wow-duration="500ms">
						<h2>Company Features</h2>
						<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
					</div>

					<!-- service item -->
					<?php $featurecount=0;
					while ($featurerow=mysqli_fetch_assoc($feature)){  ?>
					<div class="col-md-4 wow fadeInLeft" data-wow-duration="500ms">
						<div class="service-item">
							<div class="service-icon">
								<i class="<?php echo $featurerow['FeatureIcon']?>"></i>
							</div>
							
							<div class="service-desc">
								<h3><?php echo $featurerow['FeatureTitle']?></h3>
								<h5><?php echo $featurerow['FeatureContent']?></h5><br><br>
							</div>
						</div>
					</div>
					<!-- end service item -->
					<?php $featurecount++; }?>
						
				</div>
			</div>
		</section>
		
		
		
        <!--
        Our Works
        ==================================== -->
		
		<section id="works" class="works clearfix">
			<div class="container">
				<div class="row">
				
					<div class="sec-title text-center">
						<h2>Product</h2>
						<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
					</div>
					
					<div class="sec-sub-title text-center">
						<p>Our promoting Product</p>
					</div>
					
					<div class="work-filter wow fadeInRight animated" data-wow-duration="500ms">
						<ul class="text-center">
							<li><a href="javascript:;" data-filter="all" class="active filter">All</a></li>
						</ul>
					</div>
					
				</div>
			</div>
			
			<div class="project-wrapper">
			<?php while ($localrow=mysqli_fetch_assoc($local)){  ?>
				<figure class="mix work-item local">
					<img src="<?php echo "admin/".$localrow['PackageImg']; ?>" alt="" >
					<figcaption class="overlay">
					<p>&nbsp; &nbsp;<a class="fancybox" rel="works" title="<?php echo $localrow['PackageName'];?>" href="viewlocal.php?PackageID=<?php echo  $localrow['PackageID'];?>&UserID=<?php echo $id?>"><i class="fa fa-eye fa-lg"></i></a></p>
						<h4>&nbsp; &nbsp;<?php echo $localrow['PackageName'] ; ?>&nbsp;<i class="fa fa-flag-o fa-lg"></i></h4>
						<p>&nbsp; &nbsp;<i class="fa fa-location-arrow fa-lg"></i><b> &nbsp; Product ID: </b><?php echo $localrow['Location'] ; ?></p>
						<p>&nbsp; &nbsp;<i class="fa fa-dollar fa-lg"></i><b>&nbsp; &nbsp; Price   : RM </b><?php echo $localrow['Price'] ; ?></p>
					</figcaption>
				</figure>
				<?php } ?>
			</div>
		

		</section>
		
        <!--
        End Our Works
        ==================================== -->
		
		
		<!--
        Some fun facts
        ==================================== -->		
		
		<section id="facts" class="facts">
			<div class="parallax-overlay">
				<div class="container">
					<div class="row number-counters">
						
						<div class="sec-title text-center mb50 wow rubberBand animated" data-wow-duration="1000ms">
							<h2>Some Fun Facts</h2>
							<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
						</div>
						
				
						<div class="col-md-4 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="300ms">
							<div class="counters-item">
								<i class="fa fa-users fa-3x"></i>
								<strong data-to="2069">0</strong>
								<!-- Set Your Number here. i,e. data-to="56" -->
								<p>Satisfied Clients</p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="600ms">
							<div class="counters-item">
								<i class="fa fa-rocket fa-3x"></i>
								<strong data-to="3897">0</strong>
								<!-- Set Your Number here. i,e. data-to="56" -->
								<p> Packages Dealed </p>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12 text-center wow fadeInUp animated" data-wow-duration="500ms" data-wow-delay="900ms">
							<div class="counters-item">
								<i class="fa fa-trophy fa-3x"></i>
								<strong data-to="288">0</strong>
								<!-- Set Your Number here. i,e. data-to="56" -->
								<p>Awards Won</p>
							</div>
						</div>
						<!-- end first count item -->
				
					</div>
				</div>
			</div>
		</section>
		
        <!--
        End Some fun facts
        ==================================== -->
		
		
		<!--
        Contact Us
        ==================================== -->		
		
		<section id="contact" class="contact">
			<div class="container">
				<div class="row mb50">
				
					<div class="sec-title text-center mb50 wow fadeInDown animated" data-wow-duration="500ms">
						<h2>Please Contact Us</h2>
						<div class="devider"><i class="fa fa-heart-o fa-lg"></i></div>
					</div>
					
					<div class="sec-sub-title text-center wow rubberBand animated" data-wow-duration="1000ms">
						<p>How was your experience? </p>
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
			
			<!-- Google map -->
			<!--
			<div id="map_canvas" class="wow bounceInDown animated" data-wow-duration="500ms"></div> -->
			<iframe id="map_canvas" class="wow bounceInDown animated" data-wow-duration="500ms" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.7609845281377!2d100.28229957474423!3d5.453205194526306!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x304ac2c0305a5483%3A0xfeb1c7560c785259!2sTAR%20University%20College!5e0!3m2!1szh-CN!2smy!4v1745851884871!5m2!1szh-CN!2smy"
				 width="520" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
			<!-- End Google map -->
			
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
							<img src="img/headlogo.png" alt=""  href="#body"></a>
							<h3><b><br>About Us</b></h3>
							<p><br>At GOGO Graduate, we specialize in providing beautiful graduation bouquets and gifts to celebrate your big achievement. 
							We help you easily select and book the perfect flowers to make your graduation day even more memorable.<br>
							We are committed to offering the best in quality and value, and strive to become "Your Choice for Graduation Gifts and Bouquets."</p>

							
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
							Copyright © 2025 GOGOGraduate. All rights reserved.</a>
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
