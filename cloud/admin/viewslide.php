<!DOCTYPE html>
<html lang="en" class="no-js"> 
<?php require_once('adminheader.php');?>
<?php include_once('..\config\function.php');?>
<head>
<title>View Slideshow</title>
</head>
<body>
<div class="container-fluid ">
<div class="container ">
<div class="row ">
<div class="admin-box">
<div class="row">
<div class="admin-det">
<h1>View Slide Info</h1>
<br>
<table>
  <tr>
    <th>No</th>
    <th>SlideID</th>
    <th>Slide Topic</th>
    <th>Slide Title</th>
    <th>Slide Content</th>
    <th>Slide Image</th>
    <th>Update</th>
    <th>Delete</th>
  </tr>
  <?php
    $no=1;
    $sql ="select * from tblslide";  // sql command
    mysqli_select_db($conn,"myproject"); ///select database as default
    $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql
  
    while ($row=mysqli_fetch_assoc($result)){ 
    ?>
  <tr>
    <td><?php echo  $no; ?></td>
    <td><?php echo $row['SlideID'] ; ?></td>
    <td><?php echo $row['SlideTopic'] ; ?></td>
    <td><?php echo $row['SlideTitle'] ; ?></td>
    <td><?php echo $row['SlideContent'] ; ?></td>
    <?php $showimage = $row['SlideImage'];?>
    <td><img src="<?php echo $showimage ?>" width="80" height="80"/></td>
    <td><p><a href="updateslide.php?SlideID=<?php echo  $row['SlideID'] ; ?>&UserID=<?php echo $id?>">Update Slide </a> </p></td>
    <td><p><a href="deleteslide.php?SlideID=<?php echo  $row['SlideID'] ; ?>&UserID=<?php echo $id?>">Delete Slide </a> </p></td>
  </tr>
  <?php $no++;
 } ?>
</table>
<br>
<div class="insertframe">
<a href="insertslide.php?UserID=<?php echo $id?>">Insert Slide </a>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</body>

