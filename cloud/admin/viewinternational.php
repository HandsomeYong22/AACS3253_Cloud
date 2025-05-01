<!DOCTYPE html>
<html lang="en" class="no-js"> 
<?php require_once('adminheader.php');?>
<?php include_once('..\config\function.php');?>
<head>
<title>View International Package</title>
</head>
<body>
<div class="container-fluid ">
<div class="container ">
<div class="row ">
<div class="admin-box">
<div class="row">
<div class="admin-det">
<h1>View International Package</h1>
<br>
<table style="font-size:10px;">
  <tr>
    <th>No</th>
    <th>Package ID</th>
    <th>Package Name</th>
    <th>Country</th>
    <th>Start Date</th>
    <th>End Date</th>
    <th>Price</th>
    <th>Description 1</th>
    <th>Description 2</th>
    <th>Description 3</th>
    <th>Description 4</th>
    <th>Description 5</th>
    <th>Display Image</th>
    <th>Update</th>
    <th>Delete</th>
  </tr>
  <?php
    $no=1;
    $sql ="select * from tblinternational";  // sql command
    mysqli_select_db($conn,"myproject"); ///select database as default
    $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql
  
    while ($row=mysqli_fetch_assoc($result)){ 
    ?>
  <tr>
    <td><?php echo  $no; ?></td>
    <td><?php echo $row['PackageID'] ; ?></td>
    <td><?php echo $row['PackageName'] ; ?></td>
    <td><?php echo $row['Country'] ; ?></td>
    <td><?php echo $row['StartDate'] ; ?></td>
    <td><?php echo $row['EndDate'] ; ?></td>
    <td><?php echo "RM".$row['Price'] ; ?></td>
    <td><?php echo $row['Extra1'] ; ?></td>
    <td><?php echo $row['Extra2'] ; ?></td>
    <td><?php echo $row['Extra3'] ; ?></td>
    <td><?php echo $row['Extra4'] ; ?></td>
    <td><?php echo $row['Extra5'] ; ?></td>
    <?php $showimage = $row['PackageImg'];?>
    <td><img src="<?php echo $showimage ?>" width="50" height="50"/></td>
    <td><p><a href="updateinternational.php?PackageID=<?php echo  $row['PackageID'] ; ?>&UserID=<?php echo $id?>">Update International Package </a> </p></td>
    <td><p><a href="deleteinternational.php?PackageID=<?php echo  $row['PackageID'] ; ?>&UserID=<?php echo $id?>">Delete International Package </a> </p></td>
  </tr>
  <?php $no++;
 } ?>
</table>
<br>
            <div class="insertframe">
            <a href="insertinternational.php?UserID=<?php echo $id?>">Insert International Package</a></p> </td>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>