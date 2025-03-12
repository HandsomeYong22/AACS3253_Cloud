<!DOCTYPE html>
<html lang="en" class="no-js"> 
<?php require_once('adminheader.php');?>
<?php include_once('..\config\function.php');?>
<head>
<title>View Feature</title>
</head>
<body>
<div class="container-fluid ">
<div class="container ">
<div class="row ">
<div class="admin-box">
<div class="row">
<div class="admin-det">
<h1>View Feature Details</h1>
<br>
<table>
  <tr>
    <th>No</th>
    <th>Feature ID</th>
    <th>Feature Title</th>
    <th>Feature Content</th>
    <th>Feature Icon</th>
    <th>Update</th>
    <th>Delete</th>
  </tr>
  <?php
    $no=1;
    $sql ="select * from tblfeature";  // sql command
    mysqli_select_db($conn,"myproject"); ///select database as default
    $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql
  
    while ($row=mysqli_fetch_assoc($result)){ 
    ?>
  <tr>
    <td><?php echo  $no; ?></td>
    <td><?php echo $row['FeatureID'] ; ?></td>
    <td><?php echo $row['FeatureTitle'] ; ?></td>
    <td><?php echo $row['FeatureContent'] ; ?></td>
    <td><?php echo $row['FeatureIcon'] ; ?></td>
    <td><p><a href="updatefeature.php?FeatureID=<?php echo  $row['FeatureID'] ; ?>&UserID=<?php echo $id?>">Update Feature </a> </p></td>
    <td><p><a href="deletefeature.php?FeatureID=<?php echo  $row['FeatureID'] ; ?>&UserID=<?php echo $id?>">Delete Feature </a> </p></td>
  </tr>
  <?php $no++;
 } ?>
</table>

<br>
            <div class="insertframe">
            <a href="insertfeature.php?UserID=<?php echo $id?>">Insert Feature</a></p> </td>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
</body>

