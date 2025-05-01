<!DOCTYPE html>
<html lang="en" class="no-js"> 
<?php 
include_once("config/settings.php"); 
include_once('config/session.php'); 
$id = $_GET['UserID'];

$conn = new mysqli($servername, $user, $passw, "myproject");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['remove_cart'])) {
    $appointID = intval($_POST['AppointID']);
    $type = $_POST['type'];
    if ($type == 'local') {
        mysqli_query($conn, "DELETE FROM tbllocalappoint WHERE AppointID='$appointID' AND UserID='$id' AND Status='pending'");
    } else {
        mysqli_query($conn, "DELETE FROM tblinternationalappoint WHERE AppointID='$appointID' AND UserID='$id' AND Status='pending'");
    }
}

if (isset($_POST['checkout'])) {
    $card_number = trim($_POST['card_number']);
    $expiry_date = trim($_POST['expiry_date']);
    $cvv = trim($_POST['cvv']);
    $payment_date = $_POST['payment_date'];

    if (!empty($card_number) && !empty($expiry_date) && !empty($cvv)) {
        mysqli_query($conn, "UPDATE tbllocalappoint SET Status='paid', Date='$payment_date' WHERE UserID='$id' AND Status='pending'");
        mysqli_query($conn, "UPDATE tblinternationalappoint SET Status='paid', Date='$payment_date' WHERE UserID='$id' AND Status='pending'");
        
        echo "<script>alert('Payment successful!'); window.location.href='profile.php?UserID=$id';</script>";
        exit();
    } else {
        echo "<script>alert('Payment failed. Please fill all card details correctly.');</script>";
    }
}


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['checkout'])) {
    $card_number = $_POST['card_number'];
    $expiry_date = $_POST['expiry_date'];
    $cvv = $_POST['cvv'];
    $payment_date = $_POST['payment_date']; 

    $conn = new mysqli('localhost', 'username', 'password', 'database_name');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO tbllocalappoint (card_number, expiry_date, cvv, date) 
            VALUES ('$card_number', '$expiry_date', '$cvv', '$payment_date')";

    if ($conn->query($sql) === TRUE) {
        echo "Payment details saved successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}

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

		<!-- CSS -->
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
        <style>/* 按钮样式 */
button {
  background-color: #4CAF50; /* 绿色背景 */
  border: none; /* 去掉边框 */
  color: white; /* 白色文字 */
  text-align: center; /* 文本居中 */
  text-decoration: none; /* 去掉下划线 */
  display: block; /* 使按钮水平排列 */
  font-size: 16px; /* 字体大小 */
  border-radius: 12px; /* 圆角效果 */
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* 阴影效果 */
  transition: all 0.3s ease; /* 动画效果 */
}

button:hover {
  background-color: #45a049; /* 鼠标悬停时背景颜色 */
  box-shadow: 0 6px 10px rgba(0, 0, 0, 0.2); /* 鼠标悬停时的阴影效果 */
  cursor: pointer; /* 鼠标悬停时显示手形光标 */
}

/* 删除按钮样式 */
.remove-btn {
  border: 2px solid #ccc; /* 灰色边框 */
  color: #333; /* 深灰色文字 */
  font-size: 16px; /* 字体大小 */
  border-radius: 12px; /* 圆角效果 */
  text-align: center; /* 文本居中 */
  display: block; /* 保证按钮水平排列 */
  cursor: pointer; /* 鼠标悬停时显示手形光标 */
  transition: all 0.3s ease; /* 动画效果 */
  margin: 0 auto; /* 居中显示 */
  width: auto; /* 自适应宽度 */
  text-decoration: none; /* 去掉下划线 */
}

.remove-btn:hover {
  color: #f44336; /* 悬停时字体变红 */
  border-color: #f44336; /* 悬停时边框变红 */
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); /* 悬停时的阴影效果 */
}
</style>
    </head>
	
<body id="body">
<div style="background-image: url('img/login-background.png'); height:100%; overflow:scroll;">
	
    <!-- Fixed Navigation -->
    <header id="navigation" class="navbar-fixed-top navbar">
        <div class="container">
            <div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <i class="fa fa-bars fa-2x"></i>
                </button>
				<a class="navbar-brand" href="#body">
					<h1 id="logo">
						<img src="img/headlogo.png" alt="GOGO">
					</h1>
				</a>
			</div>	
			
			<!-- main nav -->
            <nav class="collapse navbar-collapse navbar-right" role="navigation">
                <ul class="nav navbar-nav">
                    <li class="current"><a href="index.php?UserID=<?php echo $id?>">Home</a></li>
                    <li><a href="index.php?UserID=<?php echo $id?>#features">Features</a></li>
                    <li><a href="index.php?UserID=<?php echo $id?>#works">Product</a></li>
                    <li><a href="index.php?UserID=<?php echo $id?>#contact">Contact</a></li>
					<li><a href="profile.php?UserID=<?php echo $id?>"><i class="fa fa-user fa-1x"></i></a></li>
					<li><a href="logout.php"><i class="fa fa-sign-out fa-1x"></i></a></li>
                </ul>
            </nav>
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
        $sql3 = "SELECT * FROM tbluser WHERE UserID='$id'";
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

    <!-- Appointment and Cart Management -->
    <h2>My Payment History and Cart</h2>
    
    <!-- Appointment Records and Cart Integration -->
    <?php 
    // Your existing cart handling logic
    if (isset($_POST['remove_cart'])) {
        $appointID = $_POST['AppointID'];
        $type = $_POST['type'];
        if ($type == 'local') {
            mysqli_query($conn, "DELETE FROM tbllocalappoint WHERE AppointID='$appointID' AND UserID='$id' AND Status='pending'");
        } else {
            mysqli_query($conn, "DELETE FROM tblinternationalappoint WHERE AppointID='$appointID' AND UserID='$id' AND Status='pending'");
        }
    }
    
    if (isset($_POST['checkout'])) {
        mysqli_query($conn, "UPDATE tbllocalappoint SET Status='paid' WHERE UserID='$id' AND Status='pending'");
        mysqli_query($conn, "UPDATE tblinternationalappoint SET Status='paid' WHERE UserID='$id' AND Status='pending'");
        $paid = true;
    }
    
    $cartLocal = mysqli_query($conn, "SELECT * FROM tbllocalappoint WHERE UserID='$id' AND Status='pending'");
    $cartInt = mysqli_query($conn, "SELECT * FROM tblinternationalappoint WHERE UserID='$id' AND Status='pending'");
    ?>

    <!-- Display Cart and Checkout -->
    <div class="admin-det">
        <h2>My Cart</h2>
        <?php
        if (mysqli_num_rows($cartLocal) == 0 && mysqli_num_rows($cartInt) == 0) {
            echo "<p>Your cart is empty.</p>";
        } else {
            while ($row = mysqli_fetch_assoc($cartLocal)) {
                ?>
                <form method="POST">
                    <table width="60%">
                        <tr><th colspan="2">Payment ID #<?= $row["AppointID"]; ?></th></tr>
                        <tr><td><b>Payment Date</b></td><td><?= $row["Date"]; ?></td></tr>
                        <tr><td><b>Product ID</b></td><td><?= $row["LocalPackageID"]; ?></td></tr>
                        <tr><td><b>Status</b></td><td><?= $row["Status"]; ?></td></tr>
                        <tr>
                            <td colspan="2">
                                <input type="hidden" name="AppointID" value="<?= $row["AppointID"]; ?>">
                                <input type="hidden" name="type" value="local">
                                <button type="submit" name="remove_cart" onclick="return confirm('Remove this item?')">Remove</button>
                            </td>
                        </tr>
                    </table><br>
                </form>
                <?php
            }
        }
        ?>

<!-- Centered Checkout Form with Card Details -->
<div style="text-align: center; margin-top: 50px;">
<form method="POST" onsubmit="return validatePayment();" style="display: inline-block; text-align: left; padding: 20px; border: 1px solid #ccc; border-radius: 10px; margin: auto;">
    <h2 style="text-align:center;">Payment Details</h2>
    
    <label>Card Number:</label><br>
    <input type="text" name="card_number" required style="width: 300px; margin-bottom: 10px;"><br>
    
    <label>Expiry Date:</label><br>
    <input type="text" name="expiry_date" required style="width: 300px; margin-bottom: 10px;"><br>
    
    <label>CVV:</label><br>
    <input type="text" name="cvv" required style="width: 300px; margin-bottom: 10px;"><br><br>
    
    <!-- Hidden field to pass the current date -->
    <input type="hidden" name="payment_date" value="<?php echo date('Y-m-d'); ?>">

    <button type="submit" name="checkout" style="background-color: #4CAF50; color: white; border: none; border-radius: 5px;" onclick="return confirm('Proceed to payment?')">
        Pay Now
    </button>
</form>

</div>

<script>

// Simple JS validation before submit
function validatePayment() {
    var card = document.getElementsByName('card_number')[0].value;
    var exp = document.getElementsByName('expiry_date')[0].value;
    var cvv = document.getElementsByName('cvv')[0].value;
    if (card == '' || exp == '' || cvv == '') {
        alert('Please fill all payment fields.');
        return false;
    }
    return true;
}
</script>


        <?php
    $no=1;
    $sql1 = "SELECT * FROM tbllocalappoint WHERE UserID='".$id."' AND Status='paid'";
    $sql2 = "SELECT * FROM tblinternationalappoint WHERE UserID='".$id."' AND Status='paid'";    
    $result = mysqli_query($conn,$sql1);
    $result2 = mysqli_query($conn,$sql2);  
    if ((mysqli_num_rows($result))||(mysqli_num_rows($result2)) != 0){
    ?>
    <h2>My paid history</h2><br>
    <?php while($row=mysqli_fetch_assoc($result)){
    ?>
    <table width="60%">
    <tr>
    <th colspan="2">Payment ID #<?php echo $row["AppointID"]; ?></th>
    </tr>
    <tr>
    <td><b>Payment Date</b></td><td><?php echo $row["Date"]; ?></td>
    </tr>
    <tr>
    <td><b>Product ID</b></td><td> <?php echo $row["LocalPackageID"]; ?></td>
    </tr>
    <tr>
    <td><b>Status</b></td><td><?php echo $row["Status"]; ?></td>
    </tr>
    </table><br>
    <?php $no++;
    }?>
    
    
    <?php $no++;
    }?>
    </div>
</div>

</body>
</html>

