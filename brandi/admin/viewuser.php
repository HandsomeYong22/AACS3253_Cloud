<!DOCTYPE html>
<html lang="en" class="no-js"> 
<?php require_once('adminheader.php');?>
<?php include_once('..\config\function.php');?>
<head>
<title>View User</title>
</head>
<body>
<div class="container-fluid ">
<div class="container ">
<div class="row ">
<div class="admin-box">
<div class="row">
<div class="admin-det">
<h1>View User</h1>
<br>
<table style="font-size:8px">
  <tr>
    <th>No</th>
    <th>User Type</th>
    <th>Profile Pic</th>
    <th>User ID</th>
    <th>User Name</th>
    <th>Address Line1</th>
    <th>Address Line2</th>
    <th>City</th>
    <th>Postcode</th>
    <th>State</th>
    <th>Country</th>
    <th>Email</th>
    <th>DOB</th>
    <th>Secure Question</th>
    <th>Secure Answer</th>
    <th>Update</th>
    <th>Delete</th>
  </tr>
  <?php
    $no=1;
    $sql ="select * from tbluser";  // sql command
    mysqli_select_db($conn,"myproject"); ///select database as default
    $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql
  
    while ($row=mysqli_fetch_assoc($result)){ 
    ?>
  <tr>
    <td><?php echo  $no; ?></td>
    <td><?php echo $row['UserType'] ; ?></td>
    <?php $showimage = $row['avatar'];?>
    <td><img src="<?php echo $showimage ?>" width="50" height="50"/></td>
    <td><?php echo $row['UserID'] ; ?></td>
    <td><?php echo $row['Name'] ; ?></td>
    <td><?php echo $row['Address1'] ; ?></td>
    <td><?php echo $row['Address2'] ; ?></td>
    <td><?php echo $row['City'] ; ?></td>
    <td><?php echo $row['PostCode'] ; ?></td>
    <td><?php echo $row['State'] ; ?></td>
    <td><?php echo $row['Country'] ; ?></td>
    <td><?php echo $row['Email'] ; ?></td>
    <td><?php echo $row['dob'] ; ?></td>
    <td><?php echo $row['securequestion'] ; ?></td>
    <td><?php echo $row['secureanswer'] ; ?></td>
    <td><p><a href="updateuser.php?UID=<?php echo$row['UserID'] ; ?>&UserID=<?php echo$id;?>">Update Users </a> </p></td>
    <td><p><a href="deleteuser.php?UID=<?php echo$row['UserID'] ; ?>&UserID=<?php echo$id;?>">Delete Users </a> </p></td>
  </tr>
  <?php $no++;
 } ?>
</table>

<br>
            <div class="insertframe">
            <a href="insertuser.php?UserID=<?php echo $id?>">Insert User</a></p> </td>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
</body
