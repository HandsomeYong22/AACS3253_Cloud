<!DOCTYPE html>
<html lang="en" class="no-js"> 
<?php include_once('..\config\settings.php');
include_once('..\config\session.php');
$id=$_GET['UserID'];
?>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="Blue One Page Creative HTML5 Template">
    <meta name="keywords" content="one page, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
    <meta name="author" content="Muhammad Morshed">
	<!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="..\img\logo.png" rel="icon">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="..\css\font-awesome.min.css">
    <link rel="stylesheet" href="..\css\bootstrap.min.css">
    <link rel="stylesheet" href="..\css\jquery.fancybox.css">
    <link rel="stylesheet" href="..\css\animate.css">
    <link rel="stylesheet" href="..\css\style.css">
    <link rel="stylesheet" href="..\css\main.css">
    <link rel="stylesheet" href="..\css\media-queries.css">
    <script src="..\js\modernizr-2.6.2.min.js"></script>
    
</head>

<body id="body">
<div style="background-image: url('image/admin-background.png'); height:100%; overflow:scroll;">
<header id="navigation" class="navbar-fixed-top navbar">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars fa-2x"></i>
                    </button>
					<!-- /responsive nav button -->
                    <a class="navbar-brand" href="..\index.php?UserID=<?php echo$id?>">
                    <h1 id="logo">    
                    <img src="../img/headlogo.png" alt="Gogo" id="logo">
                    </h1>
                    </a> 
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="" class="nav navbar-nav">
                        <li><a href="index.php?UserID=<?php echo$id?>">Home</a></li>
                        <li><a href="..\logout.php">Log Out</a></li>		
                    </ul>
                </nav>
				<!-- /main nav -->
				
            </div>
        </header>
</body>

		