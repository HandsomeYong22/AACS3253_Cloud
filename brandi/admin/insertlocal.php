<!DOCTYPE html>
<html lang="en" class="no-js"> 
<?php require_once('adminheader.php');?>
<?php include_once('..\config\function.php');?>
<head>
<title>Insert Local</title>
</head>
<body>
<div class="container-fluid ">
<div class="container ">
<div class="row ">
<div class="admin-box">
<div class="row">
<div class="admin-det">
<h1>Insert Local Package</h1>
<?php 

if (isset($_POST['packagename'])){
    $p=$_POST['packageid'];  
    $pn=$_POST['packagename'];
    $location=$_POST['location'];
    $startdate=$_POST['startdate'];
    $enddate=$_POST['enddate'];
    $price=$_POST['price'];
    $extra1=$_POST['extra1'];
    $extra2=$_POST['extra2'];
    $extra3=$_POST['extra3'];
    $extra4=$_POST['extra4'];
    $extra5=$_POST['extra5'];
    $packageimg= $_FILES['packageimg']['name'];
    $packageimg_temp=$_FILES['packageimg']['tmp_name'];
    $imgloc="image/".$packageimg;
    if(move_uploaded_file($packageimg_temp , "image/$packageimg")){	
    $sql ="INSERT INTO `tbllocal` (`PackageID`, `PackageName`, `Location`, `StartDate`, `EndDate`, `Price`, `Extra1`, `Extra2`, `Extra3`, `Extra4`, `Extra5`, `PackageImg`) 
    VALUES ('".$p."','".$pn."','".$location."', '".$startdate."', '".$enddate."', '".$price."', '".$extra1."', '".$extra2."','".$extra3."','".$extra4."','".$extra5."','".$imgloc."')";  // sql insert command
    mysqli_select_db($conn,"myproject"); 
    $result=mysqli_query($conn,$sql);  
    goto2("viewlocal.php?UserID=$id","Local package is successfully inserted");
    }
    else{
    $sql ="INSERT INTO `tbllocal` (`PackageID`, `PackageName`, `Location`, `StartDate`, `EndDate`, `Price`, `Extra1`, `Extra2`, `Extra3`, `Extra4`, `Extra5`) 
    VALUES ('".$p."','".$pn."','".$location."', '".$startdate."', '".$enddate."', '".$price."', '".$extra1."', '".$extra2."','".$extra3."','".$extra4."','".$extra5."',)";  // sql insert command
    mysqli_select_db($conn,"myproject"); 
    $result=mysqli_query($conn,$sql);  
    goto2("viewlocal.php?UserID=$id","Local package is successfully inserted");
    }
} else {
  
?>
<form action="insertlocal.php?UserID=<?php echo $id?>" method="POST" enctype="multipart/form-data">
<label for="PackageID">Package ID:</label>
  <input type="text" id="packageid" name="packageid" value=""><br><br>
  <label for="PackageName">Package Name:</label>
  <input type="text" id="packagename" name="packagename" value=""><br><br>
  <label for="Location"> Location:</label>
  <input type="text" id="location" name="location" value=""><br><br>
  <label for="StartDate"> Start Date:</label>
  <input type="date" id="startdate" name="startdate" value=""><br><br>
  <label for="EndDate"> End Date:</label>
  <input type="date" id="enddate" name="enddate" value=""><br><br>
  <label for="Price"> Price:</label>
  <input type="text" id="price" name="price" value=""><br><br>
  <label for="Extra1"> Description 1:</label>
  <input type="text" id="extra1" name="extra1" value=""><br><br>
  <label for="Extra2"> Description 2:</label>
  <input type="text" id="extra2" name="extra2" value=""><br><br>
  <label for="Extra3"> Description 3:</label>
  <input type="text" id="extra3" name="extra3" value=""><br><br>
  <label for="Extra4"> Description 4:</label>
  <input type="text" id="extra4" name="extra4" value=""><br><br>
  <label for="Extra5"> Description 5:</label>
  <input type="text" id="extra5" name="extra5" value=""><br><br>
  <input type="file" id="packageimg" name="packageimg" value=""/>
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
</body>

