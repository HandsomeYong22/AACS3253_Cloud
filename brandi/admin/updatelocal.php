<!DOCTYPE html>
<html lang="en" class="no-js"> 
<?php require_once('adminheader.php');?>
<?php include_once('..\config\function.php');?>
<head>
<title>Update Product</title>
</head>
<body>
<div class="container-fluid ">
<div class="container ">
<div class="row ">
<div class="admin-box">
<div class="row">
<div class="admin-det">
<h1>Update Product</h1>

<?php 
if (isset($_POST['packagename'])){
        $p=$_POST['packageid'];  
        $pn=$_POST['packagename'];
        $price=$_POST['price'];
        $extra1=$_POST['extra1'];
        $packageimg= $_FILES['packageimg']['name'];
        $packageimg_temp=$_FILES['packageimg']['tmp_name'];
        $imgloc="image/".$packageimg;
        if(move_uploaded_file($packageimg_temp , "image/$packageimg")){		
        $sql ="UPDATE `tbllocal` SET `PackageName`='".$pn."'  ,`Price`='".$price."' , `Extra1`='".$extra1."' , `PackageImg`='".$imgloc."' 
        WHERE (`PackageID`='".$p."') LIMIT 1";  
        mysqli_select_db($conn,"myproject"); ///select database as default
        $result=mysqli_query($conn,$sql);  
        goto2("viewlocal.php?UserID=$id"," Product and image is successfully updated");
        }
        else{
          $sql ="UPDATE `tbllocal` SET `PackageName`='".$pn."' ,`Price`='".$price."' , `Extra1`='".$extra1."' 
          WHERE (`PackageID`='".$p."') LIMIT 1";  
            mysqli_select_db($conn,"myproject"); ///select database as default
            $result=mysqli_query($conn,$sql);  
            goto2("viewlocal.php?UserID=$id"," Product is successfully updated");
        }
} else {
    $p=$_GET['PackageID'];
    $sql ="select * from tbllocal where PackageID='".$p."'";  // sql command
    mysqli_select_db($conn,"myproject"); ///select database as default
    $result=mysqli_query($conn,$sql);  
    $row=mysqli_fetch_assoc($result); 
?>
<form action="updatelocal.php?PackageID=<?php echo $p; ?>&UserID=<?php echo $id?>" method="POST" enctype="multipart/form-data">
  <label for="PackageID">Product ID:</label>
  <input type="text" id="packageid" name="packageid" value="<?php echo $p; ?>  "><br><br>
  <label for="PackageName">Product Name:</label>
  <input type="text" id="packagename" name="packagename" value="<?php echo $row['PackageName'];?>"><br><br>
  <label for="Price"> Price:</label>
  <input type="text" id="price" name="price" value="<?php echo $row['Price'];?>"><br><br>
  <label for="Extra1"> Description:</label>
  <input type="text" id="extra1" name="extra1" value="<?php echo $row['Extra1'];?>"><br><br>
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