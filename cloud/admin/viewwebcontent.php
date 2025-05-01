<!DOCTYPE html>
<html lang="en" class="no-js"> 
<?php require_once('adminheader.php');?>
<?php include_once('..\config\function.php');?>
<head>
<title>View Web Content</title>
</head>
<body>
<div class="container-fluid ">
<div class="container ">
<div class="row ">
<div class="admin-box">
<div class="row">
<div class="admin-det">
<h1>View Web Content</h1>
<br>
<table>
  <tr>
    <th>No</th>
    <th>Web Title</th>
    <th>Web Header</th>
    <th>Web Topice</th>
    <th>Web Content</th>
    <th>Update</th>
  </tr>
  <?php
    $no=1;
    $sql ="select * from webcontents";  // sql command
    mysqli_select_db($conn,"myproject"); ///select database as default
    $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql
  
    while ($row=mysqli_fetch_assoc($result)){ 
    ?>
    <tr>
    <td><?php echo  $no; ?></td>
    <td><?php echo $row['webtitle'] ; ?></td>
    <td><?php echo $row['header'] ; ?></td>
    <td><?php echo $row['topic'] ; ?></td>
    <td><?php echo $row['content'] ; ?></td>
    <td><p><a href="updatewebcontent.php?webid=<?php echo  $row['webid'];?>&UserID=<?php echo $id?>">Update Web Content </a> </p></td>
    </tr>
  <?php $no++;
 } ?>
</table>
<br>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
