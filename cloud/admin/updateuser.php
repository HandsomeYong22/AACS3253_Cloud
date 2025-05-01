<!DOCTYPE html>
<html lang="en" class="no-js"> 
<?php require_once('adminheader.php');?>
<?php include_once('..\config\function.php');?>
<head>
<title>Update User</title>
</head>
<body>
<div class="container-fluid ">
<div class="container ">
<div class="row ">
<div class="admin-box">
<div class="row">
<div class="admin-det">
<h1>Update User</h1>
<?php 

if (isset($_POST['name'])){
  $u=$_POST['userid'];
  $n=$_POST['name'];
  $usertype=$_POST['usertype'];
  $dob=$_POST['dob'];
  $address1=$_POST['address1'];
  $address2=$_POST['address2'];
  $city=$_POST['city'];
  $postcode=$_POST['postcode'];
  $state=$_POST['state'];
  $country=$_POST['country'];
  $email=$_POST['email'];
  $avatar= $_FILES['avatar']['name'];
  $avatar_temp=$_FILES['avatar']['tmp_name'];
  $imgloc="image/".$avatar;
  $secureanswer=$_POST['secureanswer'];
  if(move_uploaded_file($avatar_temp , "image/$avatar")){	
        $sql ="UPDATE `tbluser` SET UserType='".$usertype."'  ,`Name`='".$n."' ,`Address1`='".$address1."' ,
        `Address2`='".$address2."',`City`='".$city."' ,`PostCode`='".$postcode."' ,`State`='".$state."' ,`Country`='".$country."',
        `Email`='".$email."' ,`avatar`='".$imgloc."',`dob`='".$dob."'  ,`secureanswer`='".$secureanswer."'
        WHERE (`UserID`='".$u."') LIMIT 1";  
        mysqli_select_db($conn,"myproject"); ///select database as default
        $result=mysqli_query($conn,$sql);  
       goto2("viewuser.php?UserID=$id"," User is successfully updated");
  }else{
    $sql ="UPDATE `tbluser` SET UserType='".$usertype."'  ,`Name`='".$n."' ,`Address1`='".$address1."' ,
    `Address2`='".$address2."',`City`='".$city."' ,`PostCode`='".$postcode."' ,`State`='".$state."' ,`Country`='".$country."',
    `Email`='".$email."',`dob`='".$dob."' ,`secureanswer`='".$secureanswer."' 
    WHERE (`UserID`='".$u."') LIMIT 1";  
    mysqli_select_db($conn,"myproject"); ///select database as default
    $result=mysqli_query($conn,$sql);  
   goto2("viewuser.php?UserID=$id"," User is successfully updated");
  }
} else {
    $u=$_GET['UID'];
    $sql ="select * from tbluser where UserID='".$u."'";  // sql command
    mysqli_select_db($conn,"myproject"); ///select database as default
    $result=mysqli_query($conn,$sql);  
    $row=mysqli_fetch_assoc($result); 
?>
<form action="updateuser.php?UserID=<?php echo $id?>" method="POST" enctype="multipart/form-data">
  <label for="User ID">User ID:</label>
  <input type="text" id="userid" name="userid" value="<?php echo $u; ?>  "><br><br>
  <label for="Name"> Username:</label>
  <input type="text" id="name" name="name" value="<?php echo $row['Name'];?>"><br><br>
  <label for="UserType"> UserType:</label>
  <select name="usertype" id="usertype">
  <option value="0"> Select the Usertype</option>
   <?php
  $sql ="select * from tblcategory"; 
  mysqli_select_db($conn,"myproject"); 
  $result=mysqli_query($conn,$sql); 
   while( $rowcat=mysqli_fetch_assoc($result)) {   ?> 
    <option   <?php if($row['UserType']==$rowcat['UserType']){ echo "selected"; } ?>
    value="<?php echo $rowcat['UserType'];?>"><?php echo $rowcat['Description'];?></option>
   <?php }  
    ?>
    </select><br><br>
  <label for="dob">Date of Birth:</label>
  <input type="date" id="dob" name="dob" value="<?php echo $row['dob'];?>"><br><br>
  <label for="Address1">Address Line 1:</label>
  <input type="text" id="address1" name="address1" value="<?php echo $row['Address1'];?>"><br><br>
  <label for="Address2">Address Line 2:</label>
  <input type="text" id="address2" name="address2"  value="<?php echo $row['Address2'];?>"><br><br>
  <label for="City">City:</label>
  <input type="text" id="city" name="city"  value="<?php echo $row['City'];?>"><br><br>
  <label for="PostCode">Postcode:</label>
  <input type="text" id="postcode" name="postcode"  value="<?php echo $row['PostCode'];?>"><br><br>
  <label for="State">State:</label>
  <input type="text" id="state" name="state"  value="<?php echo $row['State'];?>"><br><br>
  <label for="Country">Country:</label>
  <input type="text" id="country" name="country" value="<?php echo $row['Country'];?>"><br><br>
  <label for="Email">Email:</label>
  <input type="text" id="email" name="email"  value="<?php echo $row['Email'];?>"><br><br>
  <label for="UserType">Secure Question:</label>
  <input type="text" disabled id="securequestion" name="securequestion"  value="<?php echo $row['securequestion'];?>"><br><br>
  </select>
  <label for="SecureAns">Secure Answer:</label>
  <input type="text" id="secureanswer" name="secureanswer" value="<?php echo $row['secureanswer'];?>"><br><br>
  <label for="Avatar">Profile Picture:</label>
  <input type="file" id="avatar" name="avatar"  img src=<?php echo $row['avatar'];?>><br><br>
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