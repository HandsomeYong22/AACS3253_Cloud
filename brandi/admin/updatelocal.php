<!DOCTYPE html>
<html lang="en" class="no-js"> 
<?php require_once('adminheader.php');?>
<?php include_once('..\config\function.php');?>
<head>
<title>Update Local Package</title>
</head>
<body>
<div class="container-fluid ">
<div class="container ">
<div class="row ">
<div class="admin-box">
<div class="row">
<div class="admin-det">
<h1>Update Local Package</h1>

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
        $sql ="UPDATE `tbllocal` SET `PackageName`='".$pn."' , `Location`='".$location."' , `StartDate`='".$startdate."' ,
        `EndDate`='".$enddate."' ,`Price`='".$price."' , `Extra1`='".$extra1."' , `Extra2`='".$extra2."' ,`Extra3`='".$extra3."' ,`Extra4`='".$extra4."' ,`Extra5`='".$extra5."' ,`PackageImg`='".$imgloc."' 
        WHERE (`PackageID`='".$p."') LIMIT 1";  
        mysqli_select_db($conn,"myproject"); ///select database as default
        $result=mysqli_query($conn,$sql);  
        goto2("viewlocal.php?UserID=$id"," Local package and image is successfully updated");
        }
        else{
          $sql ="UPDATE `tbllocal` SET `PackageName`='".$pn."' , `Location`='".$location."' , `StartDate`='".$startdate."' ,
          `EndDate`='".$enddate."' ,`Price`='".$price."' , `Extra1`='".$extra1."' , `Extra2`='".$extra2."' ,`Extra3`='".$extra3."' ,`Extra4`='".$extra4."' ,`Extra5`='".$extra5."' 
          WHERE (`PackageID`='".$p."') LIMIT 1";  
            mysqli_select_db($conn,"myproject"); ///select database as default
            $result=mysqli_query($conn,$sql);  
            goto2("viewlocal.php?UserID=$id"," Local package is successfully updated");
        }
} else {
    $p=$_GET['PackageID'];
    $sql ="select * from tbllocal where PackageID='".$p."'";  // sql command
    mysqli_select_db($conn,"myproject"); ///select database as default
    $result=mysqli_query($conn,$sql);  
    $row=mysqli_fetch_assoc($result); 
?>
<form action="updatelocal.php?PackageID=<?php echo $p; ?>&UserID=<?php echo $id?>" method="POST" enctype="multipart/form-data">
  <label for="PackageID">Package ID:</label>
  <input type="text" id="packageid" name="packageid" value="<?php echo $p; ?>  "><br><br>
  <label for="PackageName">Package Name:</label>
  <input type="text" id="packagename" name="packagename" value="<?php echo $row['PackageName'];?>"><br><br>
  <label for="Location"> Location:</label>
  <input type="text" id="location" name="location" value="<?php echo $row['Location'];?>"><br><br>
  <label for="StartDate"> Start Date:</label>
  <input type="date" id="startdate" name="startdate" value="<?php echo $row['StartDate'];?>"><br><br>
  <label for="EndDate"> End Date:</label>
  <input type="date" id="enddate" name="enddate" value="<?php echo $row['EndDate'];?>"><br><br>
  <label for="Price"> Price:</label>
  <input type="text" id="price" name="price" value="<?php echo $row['Price'];?>"><br><br>
  <label for="Extra1"> Description 1:</label>
  <input type="text" id="extra1" name="extra1" value="<?php echo $row['Extra1'];?>"><br><br>
  <label for="Extra2"> Description 2:</label>
  <input type="text" id="extra2" name="extra2" value="<?php echo $row['Extra2'];?>"><br><br>
  <label for="Extra3"> Description 3:</label>
  <input type="text" id="extra3" name="extra3" value="<?php echo $row['Extra3'];?>"><br><br>
  <label for="Extra4"> Description 4:</label>
  <input type="text" id="extra4" name="extra4" value="<?php echo $row['Extra4'];?>"><br><br>
  <label for="Extra5"> Description 5:</label>
  <input type="text" id="extra5" name="extra5" value="<?php echo $row['Extra5'];?>"><br><br>
  <input type="file" id="packageimg" name="packageimg" value="<?php echo $row['PackageImg'] ?>"/>
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
</html>