<!DOCTYPE html>
<html lang="en" class="no-js"> 
<?php require_once('adminheader.php');?>
<?php include_once('..\config\function.php');?>
<head>
<title>Insert Branch</title>
</head>
<body>
<div class="container-fluid ">
<div class="container ">
<div class="row ">
<div class="admin-box">
<div class="row">
<div class="admin-det">
<h1>Insert Branch</h1>
<?php 

if (isset($_POST['branchname'])){
    $bid=$_POST['branchid'];  
    $n=$_POST['branchname']; 
    $contact=$_POST['contactno'];
    $e=$_POST['email'];
    $a1=$_POST['address1'];
    $a2=$_POST['address2'];
    $p=$_POST['postcode'];
    $s=$_POST['state'];
    $c=$_POST['country'];
    $branchimg= $_FILES['branchimg']['name'];
    $branchimg_temp=$_FILES['branchimg']['tmp_name'];
    $imgloc="image/".$branchimg;
    if(move_uploaded_file($branchimg_temp , "image/$branchimg")){	
    $sql ="INSERT INTO `tblbranch` (`BranchID`, `BranchName`, `ContactNo`, `Email`, `Address1`, `Address2`, `Postcode`, `State` , `Country`, `BranchImage`) 
    VALUES ('".$bid."', '".$n."', '".$contact."', '".$e."', '".$a1."', '".$a2."', '".$p."', '".$s."', '".$c."','".$imgloc."')";  
    mysqli_select_db($conn,"myproject"); ///select database as default
    $result=mysqli_query($conn,$sql);// command allow sql cmd to be sent to mysql
    goto2("viewbranch.php?UserID=$id","Branch is successfully inserted");}
    else{
      $sql ="INSERT INTO `tblbranch` (`BranchID`, `BranchName`, `ContactNo`, `Email`, `Address1`, `Address2`, `Postcode`, `State` , `Country`) 
      VALUES ('".$bid."', '".$n."', '".$contact."', '".$e."', '".$a1."', '".$a2."', '".$p."', '".$s."', '".$c."')";  
      mysqli_select_db($conn,"myproject"); ///select database as default
      $result=mysqli_query($conn,$sql);// command allow sql cmd to be sent to mysql
      goto2("viewbranch.php?UserID=$id","Branch is successfully inserted");
    }
} else {
  
?>
<form action="insertbranch.php?UserID=<?php echo $id?>" method="POST" enctype="multipart/form-data">
  <label for="BranchID">Branch ID:</label>
  <input type="text"  id="branchid" name="branchid" ><br><br>
  <label for="BranchName">Branch Name:</label>
  <input type="text" id="branchname" name="branchname" value=""><br><br>
  <label for="ContactNo">Contact No:</label>
  <input type="text" id="contactno" name="contactno" value=""><br><br>
  <label for="Email">Email:</label>
  <input type="text" id="email" name="email" value=""><br><br>
  <label for="Address1">Address1:</label>
  <input type="text" id="address1" name="address1" value=""><br><br>
  <label for="Address2">Address2:</label>
  <input type="text" id="address2" name="address2" value=""><br><br>
  <label for="Postcode">Postcode:</label>
  <input type="text" id="postcode" name="postcode" value=""><br><br>
  <label for="State">State:</label>
  <input type="text" id="state" name="state" value=""><br><br>
  <label for="Country">Country:</label>
  <input type="text" id="country" name="country" value=""><br><br>
  <input type="file" id="branchimg" name="branchimg" value=""/>
  <p><input type="submit" value="Save">
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

