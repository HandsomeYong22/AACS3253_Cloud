<!DOCTYPE html>
<html lang="en" class="no-js"> 
<?php require_once('adminheader.php');?>
<?php include_once('..\config\function.php');?>
<head>
<title>View User Category</title>
</head>
<body>
<div class="container-fluid ">
<div class="container ">
<div class="row ">
<div class="admin-box">
<div class="row">
<div class="admin-det">
<h1>View User Category</h1>
<br>
<table>
  <tr>
    <th>No</th>
    <th>Type</th>
    <th>Category</th>
    <th>Interface</th>
    <th>Update</th>
    <th>Delete</th>
  </tr>
    <?php
    $no=1;
    $sql = "select * from tblcategory";
    mysqli_select_db($conn,"myproject");
    $result = mysqli_query($conn,$sql);  //cammand allow sql cmd to be sent to mysql
    if (mysqli_num_rows($result) != 0)
        {
        //results found
                while($row=mysqli_fetch_assoc($result)){
                ?>
              <tr>
                
                <td><?php echo $no;?></td>
                <td><?php echo $row["UserType"];?></td>
                <td><?php echo $row["Description"];?></td>
                <td><?php echo $row["interface"];?></td>
                <td><p>
                <a href="categoryupdate.php?UserType=<?php echo $row["UserType"];?>&UserID=<?php echo $id?>">Update Category</a></p> </td>
               <td><p>
                <a href="categorydelete.php?UserType=<?php echo $row["UserType"];?>&UserID=<?php echo $id?>">Delete Category</a></p> </td>
               
                <!--<td><p> <a href="deleteuser.php">Delete Users</a></p> </td>
            -->
              </tr>
                <?php $no++;
            }?>
            </table>
            <br>
            <div class="insertframe">
            <a href="categoryinsert.php?UserID=<?php echo $id?>">Insert Category</a></p> </td>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>

               

<?php 

} else {
  // results not found 
  }

  ?>
