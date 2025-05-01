<!DOCTYPE html>
<html lang="en" class="no-js"> 
<?php require_once('adminheader.php');?>
<?php include_once('..\config\function.php');?>
<head>
<title>View Branch</title>
</head>
<body>
<div class="container-fluid ">
<div class="container ">
<div class="row ">
<div class="admin-box">
<div class="row">
<div class="admin-det">
<h1>View Branch</h1>
<br>
<table>
  <tr>
    <th>No</th>
    <th>Branch ID</th>
    <th>Branch Name</th>
    <th>Contact No</th>
    <th>Email</th>
    <th>Address</th>
    <th>Image</th>
    <th>Update</th>
    <th>Delete</th>
  </tr>
    <?php
    $no=1;
    $sql = "select * from tblbranch";
    mysqli_select_db($conn,"myproject");
    $result = mysqli_query($conn,$sql);  //cammand allow sql cmd to be sent to mysql
    if (mysqli_num_rows($result) != 0)
        {
        //results found
        while($row=mysqli_fetch_assoc($result)){?>
              <tr>
                
                <td><?php echo $no;?></td>
                <td><?php echo $row["BranchID"];?></td>
                <td><?php echo $row["BranchName"];?></td>
                <td><?php echo $row["ContactNo"];?></td>
                <td><?php echo $row["Email"];?></td>
                <td><?php echo $row["Address1"];?>
                </td><?php $showimage = $row['BranchImage'];?>
                <td><img src="<?php echo $showimage ?>" width="80" height="80"/></td>
                <td>
                <a href="updatebranch.php?BranchID=<?php echo $row["BranchID"];?>&UserID=<?php echo $id?>">Update Branch</a></p> </td>
               <td>
                <a href="deletebranch.php?BranchID=<?php echo $row["BranchID"];?>&UserID=<?php echo $id?>">Delete Branch</a></p> </td>
              </tr>
                <?php $no++;
            }?>
            </table>
            <br>
            <div class="insertframe">
            <a href="insertbranch.php?UserID=<?php echo $id?>">Insert Branch</a></p> </td>
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
</body>
