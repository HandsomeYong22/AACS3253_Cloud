<!DOCTYPE html>
<html lang="en" class="no-js"> 
<?php require_once('adminheader.php');?>
<?php include_once('..\config\function.php');?>
<head>
<title>Update Branch</title>
</head>
<body>
<div class="container-fluid ">
<div class="container ">
<div class="row ">
<div class="admin-box">
<div class="row">
<div class="admin-det">
<h1>Update Branch</h1>
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
        $branchimage= $_FILES['branchimage']['name'];
        $branchimage_temp=$_FILES['branchimage']['tmp_name'];
        $imgloc="image/".$branchimage;
        if(move_uploaded_file($branchimage_temp , "image/$branchimage")){	
        $sql ="UPDATE `tblbranch` SET `BranchName`='".$n."' , `ContactNo`='".$contact."' , `Email`='".$e."' , `Address1`='".$a1."' , 
        `Address2`='".$a2."', `Postcode`='".$p."', `State`='".$s."', `Country`='".$c."', `BranchImage`='".$imgloc."'
        WHERE (`BranchID`='".$bid."') LIMIT 1";  
        mysqli_select_db($conn,"myproject"); ///select database as default
        $result=mysqli_query($conn,$sql);  
        goto2("viewbranch.php?UserID=$id","Branch is successfully updated");
        }
        else{
            $sql ="UPDATE `tblbranch` SET `BranchName`='".$n."' , `ContactNo`='".$contact."' , `Email`='".$e."' , `Address1`='".$a1."' , 
        `Address2`='".$a2."', `Postcode`='".$p."', `State`='".$s."', `Country`='".$c."'
        WHERE (`BranchID`='".$bid."') LIMIT 1";  
        mysqli_select_db($conn,"myproject"); ///select database as default
        $result=mysqli_query($conn,$sql);  
        goto2("viewbranch.php?UserID=$id","Branch is successfully updated");
    }
} else {
    $bid=$_GET['BranchID'];
    $sql ="select * from tblbranch where BranchID='".$bid."'";  // sql command
    mysqli_select_db($conn,"myproject"); ///select database as default
    $result=mysqli_query($conn,$sql);  
    $row=mysqli_fetch_assoc($result); 
?>
<form action="updatebranch.php?BranchID=<?php echo $bid; ?>&UserID=<?php echo $id?>" method="POST" enctype="multipart/form-data">
<label for="BranchID">Branch ID:</label>
  <input type="text"  id="branchid" name="branchid" value="<?php echo $bid;?>" ><br><br>
  <label for="BranchName">Branch Name:</label>
  <input type="text" id="branchname" name="branchname" value="<?php echo $row['BranchName'];?>"><br><br>
  <label for="ContactNo">Contact No:</label>
  <input type="text" id="contactno" name="contactno" value="<?php echo $row['ContactNo'];?>"><br><br>
  <label for="Email">Email:</label>
  <input type="text" id="email" name="email" value="<?php echo $row['Email'];?>"><br><br>
  <label for="Address1">Address1:</label>
  <input type="text" id="address1" name="address1" value="<?php echo $row['Address1'];?>"><br><br>
  <label for="Address2">Address2:</label>
  <input type="text" id="address2" name="address2" value="<?php echo $row['Address2'];?>"><br><br>
  <label for="Postcode">Postcode:</label>
  <input type="text" id="postcode" name="postcode" value="<?php echo $row['Postcode'];?>"><br><br>
  <label for="State">State:</label>
  <input type="text" id="state" name="state" value="<?php echo $row['State'];?>"><br><br>
  <label for="Country">Country:</label>
  <input type="text" id="country" name="country" value="<?php echo $row['Country'];?>"><br><br>
  <input type="file" id="branchimage" name="branchimage" value="<?php echo $row['BranchImage'] ?>"/>
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
</html>