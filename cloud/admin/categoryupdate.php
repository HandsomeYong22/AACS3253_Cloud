<!DOCTYPE html>
<html lang="en" class="no-js"> 
<?php require_once('adminheader.php');?>
<?php include_once('..\config\function.php');?>
<head>
<title>Update Category</title>
</head>
<body>
<div class="container-fluid ">
<div class="container ">
<div class="row ">
<div class="admin-box">
<div class="row">
<div class="admin-det">
<h1>Update User Category</h1>
<?php 

if (isset($_POST['description'])){
 $u=$_POST['usertype'];
 $n=$_POST['description'];
 $i=$_POST['interface'];
 $sql ="UPDATE `tblcategory` SET `DESCRIPTION`= '".$n."', `INTERFACE`= '".$i."' 
 WHERE (`UserType`='".$u."') LIMIT 1";  // sql command
 mysqli_select_db($conn,"myproject"); ///select database as default
 $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql
 goto2("viewcategory.php?UserID=$id","Category successfully updated");

} else {
    $u=$_GET['UserType'];
    $sql ="select * from tblcategory where UserType='".$u."'";  // sql command
    mysqli_select_db($conn,"myproject"); ///select database as default
    $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql
    $row=mysqli_fetch_assoc($result);  
//echo $u;
?>
<form action="categoryupdate.php?UserID=<?php echo $id?>" method="POST">
  <label for="User Type">User Type:</label>
  <input type="text" id="usertype" name="usertype" value="<?php echo $u; ?>  "><br><br>
  <label for="Description"> Description:</label>
  <input type="text" id="description" name="description" value="<?php echo $row['Description'];?>"><br><br>
  <label for="Interface"> Interface:</label>
  <input type="text" id="interface" name="interface" value="<?php echo $row['interface'];?>"><br><br>
 
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