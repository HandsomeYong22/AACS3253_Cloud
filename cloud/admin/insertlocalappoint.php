<!DOCTYPE html>
<html lang="en" class="no-js"> 
<?php require_once('adminheader.php');?>
<?php include_once('..\config\function.php');?>
<head>
<title>Insert Details</title>
</head>
<body>
<div class="container-fluid ">
<div class="container ">
<div class="row ">
<div class="admin-box">
<div class="row">
<div class="admin-det">
<h1>Insert Details</h1>
<?php 

if (isset($_POST['date'])){
    $a=$_POST['appointid'];  
    $d=$_POST['date']; 
    $p=$_POST['packageid'];
    $t=$_POST['traveldate'];
    $u=$_POST['userid'];
    $s=['status'];
    $sql ="INSERT INTO `tbllocalappoint` (`AppointID`, `Date`, `LocalPackageID`, `TravelDate`, `UserID`, `Status`) 
    VALUES ('".$a."', '".$d."', '".$p."', '".$t."', '".$u."', '".$s."')";  
    mysqli_select_db($conn,"myproject"); ///select database as default
    $result=mysqli_query($conn,$sql);// command allow sql cmd to be sent to mysql
    goto2("viewlocalappoint.php?UserID=$id","Payment or Cart is successfully inserted");
} else {
  
?>
<form action="insertlocalappoint.php?UserID=<?php echo $id?>" method="POST">
  <label for="AppointmentID">Payment ID:</label>
  <input type="text"  id="appointid" name="appointid" ><br><br>
  <label for="Date">Payment Date:</label>
  <input type="date" id="date" name="date" value=""><br><br>
  <label for="PackageID">Product ID:</label>
  <input type="text" id="packageid" name="packageid" value=""><br><br>
  <label for="UserID">User ID:</label>
  <input type="text" id="userid" name="userid" value=""><br><br>
  <label for="Status">Status:</label>
  <input type="text" id="status" name="status" value=""><br><br>
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

