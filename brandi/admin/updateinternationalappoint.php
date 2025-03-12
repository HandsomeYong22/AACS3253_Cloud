<!DOCTYPE html>
<html lang="en" class="no-js"> 
<?php require_once('adminheader.php');?>
<?php include_once('..\config\function.php');?>
<head>
<title>Update Appointment</title>
</head>
<body>
<div class="container-fluid ">
<div class="container ">
<div class="row ">
<div class="admin-box">
<div class="row">
<div class="admin-det">
<h1>Update International Package Appointment</h1>
<?php 

if (isset($_POST['date'])){
 $a=$_POST['appointid'];
 $d=$_POST['date'];
 $p=$_POST['packageid'];
 $u=$_POST['userid'];
 $s=$_POST['status'];
 $sql ="UPDATE `tblinternationalappoint` SET `AppointID`= '".$a."', `Date`= '".$d."', `InternationalPackageID`= '".$p."', `UserID`= '".$u."' ,`Status`= '".$s."' 
 WHERE (`AppointID`='".$a."') LIMIT 1";  // sql command
 mysqli_select_db($conn,"myproject"); ///select database as default
 $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql
goto2("viewinternationalappoint.php?UserID=$id","Appointment successfully updated");
 
} else {
    $a=$_GET['AppointID'];
    $sql ="select * from tblinternationalappoint where AppointID='".$a."'";   // sql command
    mysqli_select_db($conn,"myproject"); ///select database as default
    $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql
    $row=mysqli_fetch_assoc($result);  
    $u=$row['UserID'];
    $sql1 ="select * from tbluser where UserID='".$u."'";  
    $p=$row['InternationalPackageID'];
    $sql2 ="select * from tblinternational where PackageID='".$p."'";  
    $result1=mysqli_query($conn,$sql1);  
    $row1=mysqli_fetch_assoc($result1); 
    $result2=mysqli_query($conn,$sql2);  
    $row2=mysqli_fetch_assoc($result2); 

?>
<form action="updateinternationalappoint.php?UserID=<?php echo $id?>" method="POST">
  <h3>Appointment Details</h3>
  <label for="AppointmentID">Appointment ID:</label>
  <input type="text"  id="appointid" name="appointid" value="<?php echo $a;?>" ><br><br>
  <label for="Date">Appointment Date:</label>
  <input type="date" id="date" name="date" value="<?php echo $row['Date'];?>"><br><br>
  <label for="Status">Status:</label>
  <input type="text" id="status" name="status" value="<?php echo $row['Status'];?>"><br><br>
  <hr>
  <h3>Package Details</h3>
  <label for="PackageID">Package ID:</label>
  <input type="text" id="packageid" name="packageid" value="<?php echo $row['InternationalPackageID'];?>"><br><br>
  <label for="PackageName">Package Name:</label>
  <input type="text" disabled id="packagename" name="packagename" value="<?php echo $row2['PackageName'];?>"><br><br>
  <label for="TravelDate">Travel Date:</label>
  <input type="text" disabled id="traveldate" name="traveldate" value="<?php echo $row2['StartDate']."-".$row2['EndDate'];?>"><br><br>
  <label for="Country">Country:</label>
  <input type="text" disabled id="country" name="country" value="<?php echo $row2['Country'];?>"><br><br>
  <label for="Price"> Price:</label>
  <input type="text" disabled id="price" name="price" value="<?php echo $row2['Price'];?>"><br><br>
  <hr>
  <h3>User Details</h3>
  <label for="User ID">User ID:</label>
  <input type="text" id="userid" name="userid" value="<?php echo $u;?>"><br><br>
  <label for="Name"> Username:</label>
  <input type="text" disabled id="name" name="name" value="<?php echo $row1['Name'];?>"><br><br>
  <label for="Address1"> Address1:</label>
  <input type="text" disabled  id="address1" name="address1" value="<?php echo $row1['Address1'];?>"><br><br>
  <label for="Address2"> Address2:</label>
  <input type="text" disabled id="address2" name="address2" value="<?php echo $row1['Address2'];?>"><br><br>
  <label for="City"> City:</label>
  <input type="text" disabled id="city" name="city" value="<?php echo $row1['City'];?>"><br><br>
  <label for="Postcode"> Postcode:</label>
  <input type="text" disabled id="postcode" name="postcode" value="<?php echo $row1['PostCode'];?>"><br><br>
  <label for="State"> State:</label>
  <input type="text" disabled id="state" name="state" value="<?php echo $row1['State'];?>"><br><br> 
  <label for="Email"> Email:</label>
  <input type="text" disabled id="email" name="email" value="<?php echo $row1['Email'];?>"><br><br>
 
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
</body>
</html>