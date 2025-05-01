<!DOCTYPE html>
<html lang="en" class="no-js"> 
<?php require_once('adminheader.php');?>
<?php include_once('..\config\function.php');?>
<head>
<title>Insert User</title>
</head>
<body>
<div class="container-fluid ">
<div class="container ">
<div class="row ">
<div class="admin-box">
<div class="row">
<div class="admin-det">
<h1>Insert User</h1>

<?php 

if (isset($_POST['name'])){
        $u=$_POST['userid'];
        $n=$_POST['name'];
        $usertype=$_POST['usertype'];
        $password=$_POST['password'];
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
        $ques=$_POST['secureques'];
        $ans=$_POST['secureanswer'];
        if(move_uploaded_file($avatar_temp , "image/$avatar")){	
        $sql ="INSERT INTO `tbluser` (`UserID`, `Password`, `UserType`, 
        `Name`, `Address1`, `Address2`, `City`, `PostCode`, `State`,
        `Country`, `Email`, `avatar`,  `dob`,  `securequestion`,  `secureanswer`) 
        VALUES ('".$u."','".$password."', '".$usertype."', '".$n."', '".$address1."','".$address2."', 
        '".$city."', '".$postcode."', '".$state."',  '".$country."', '".$email."', '".$imgloc."', '".$dob."', '".$ques."', '".$ans."' )"; 
        mysqli_select_db($conn,"myproject");
        $result=mysqli_query($conn,$sql);  
      goto2("viewuser.php?UserID=<?php echo $id?>"," User is successfully inserted");
    }
      else{
        $sql ="INSERT INTO `tbluser` (`UserID`, `Password`, `UserType`, 
        `Name`, `Address1`, `Address2`, `City`, `PostCode`, `State`,
        `Country`, `Email`,  `dob`,  `securequestion`,  `secureanswer`) 
        VALUES ('".$u."','".$password."', '".$usertype."', '".$n."', '".$address1."','".$address2."', 
        '".$city."', '".$postcode."', '".$state."',  '".$country."', '".$email."', '".$dob."', '".$ques."', '".$ans."' )"; 
        mysqli_select_db($conn,"myproject");
        $result=mysqli_query($conn,$sql);  
      goto2("viewuser.php?UserID=$id"," User is sucessfullt inserted");
      }
} else {
  
?>
<form action="insertuser.php?UserID=<?php echo $id?>" method="POST" enctype="multipart/form-data">
  <label for="User ID">User ID:</label>
  <input type="text"  id="userid" name="userid" ><br><br>
  <label for="Name">User name:</label>
  <input type="text" id="name" name="name"><br><br>
  <label for="">Password:</label>
  <input type="password"  id="password" name="password" ><br><br>
  <label for="UserType">User Type:</label>
  <select name="usertype" id="usertype">
  <option value="0"> Select the Usertype</option>
   <?php
  $sql ="select * from tblcategory";  // sql command
  mysqli_select_db($conn,"myproject"); ///select database as default
  $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql
   while( $rowcat=mysqli_fetch_assoc($result)) {   ?> 
    <option   <?php  //if($row['UserType']==$rowcat['UserType']){ echo "selected"; } ?>
    value="<?php echo $rowcat['UserType'];?>"><?php echo $rowcat['Description'];?></option>
   <?php }  
    ?>
    </select><br><br>
  <label for="dob">Date of Birth:</label>
  <input type="date" id="dob" name="dob"><br><br>
  <label for="Address1">Address Line 1:</label>
  <input type="text" id="address1" name="address1"><br><br>
  <label for="Address2">Address Line 2:</label>
  <input type="text" id="address2" name="address2"><br><br>
  <label for="City">City:</label>
  <input type="text" id="city" name="city"><br><br>
  <label for="PostCode">Postcode:</label>
  <input type="text" id="postcode" name="postcode"><br><br>
  <label for="State">State:</label>
  <input type="text" id="state" name="state"><br><br>
  <label for="Country">Country:</label>
  <input type="text" id="country" name="country"><br><br>
  <label for="Email">Email:</label>
  <input type="text" id="email" name="email"><br><br>
  <label for="Avatar">Profile Picture:</label>
  <input type="file" id="avatar" name="avatar"><br><br>
  <label for="UserType">Secure Question:</label>
  <select name="secureques" id="secureques">
  <option value="What is your favorite country?">What is your favorite country?</option>
  <option value="What is your favorite food?">What is your favorite food?</option>
  <option value="What is the city you born?">What is the city you born?</option>
  <option value="What was your first car?">What was your first car?</option>
  <option value="What was your first job?">What was your first job?</option>
  </select><br><br>
  <label for="SecureAns">Secure Answer:</label>
  <input type="text" id="secureanswer" name="secureanswer"><br><br>
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

