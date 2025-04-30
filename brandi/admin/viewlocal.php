<!DOCTYPE html>
<html lang="en" class="no-js"> 
<?php require_once('adminheader.php');?>
<?php include_once('..\config\function.php');?>
<head>
<title>View Product</title>
</head>
<body>
<div class="container-fluid ">
<div class="container ">
<div class="row ">
<div class="admin-box">
<div class="row">
<div class="admin-det">
<h1>View Product</h1>
<br>
<table style="font-size: 10px;">
  <tr>
    <th>No</th>
    <th>Product ID</th>
    <th>Product Name</th>
    <th>Price</th>
    <th>Description </th>
    <th>Display Image</th>
    <th>Update</th>
    <th>Delete</th>
  </tr>
  <?php
    $no=1;
    $sql ="select * from tbllocal";  // sql command
    mysqli_select_db($conn,"myproject"); ///select database as default
    $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql
  
    while ($row=mysqli_fetch_assoc($result)){ 
    ?>
  <tr>
    <td><?php echo  $no; ?></td>
    <td><?php echo $row['PackageID'] ; ?></td>
    <td><?php echo $row['PackageName'] ; ?></td>
    <td><?php echo "RM".$row['Price'] ; ?></td>
    <td><?php echo $row['Extra1'] ; ?></td>
    <?php $showimage = $row['PackageImg'];?>
    <td><img src="<?php echo $showimage ?>" width="80" height="80"/></td>
    <td><p><a href="updatelocal.php?PackageID=<?php echo  $row['PackageID'] ; ?>&UserID=<?php echo $id?>">Update Product </a> </p></td>
    <td><p><a href="deletelocal.php?PackageID=<?php echo  $row['PackageID'] ; ?>&UserID=<?php echo $id?>">Delete Product </a> </p></td>
  </tr>
  <?php $no++;
 } ?>
</table>
<br>
<div class="insertframe">
<a href="insertlocal.php?UserID=<?php echo $id?>">Insert Product </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
