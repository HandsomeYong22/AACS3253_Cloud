<!DOCTYPE html>
<html lang="en" class="no-js"> 
<?php require_once('adminheader.php');?>
<?php include_once('..\config\function.php');?>
<head>
<title>View Local Package Appointments</title>
</head>
<body>
<div class="container-fluid ">
<div class="container ">
<div class="row ">
<div class="admin-box">
<div class="row">
<div class="admin-det">
<h1>View Local Package Appointment</h1>
<br>
<table>
  <tr>
    <th>No</th>
    <th>Appointment ID</th>
    <th>Appointment Date</th>
    <th>Package ID</th>
    <th>Travel Date</th>
    <th>User ID</th>
    <th>Status</th>
    <th>Update</th>
    <th>Delete</th>
  </tr>
    <?php
    $no=1;
    $sql = "select * from tbllocalappoint";
    mysqli_select_db($conn,"myproject");
    $result = mysqli_query($conn,$sql);  //cammand allow sql cmd to be sent to mysql
    if (mysqli_num_rows($result) != 0)
        {
        //results found
                while($row=mysqli_fetch_assoc($result)){
                ?>
              <tr>
                
                <td><?php echo $no;?></td>
                <td><?php echo $row["AppointID"];?></td>
                <td><?php echo $row["Date"];?></td>
                <td><?php echo $row["LocalPackageID"];?></td>
                <td><?php echo $row["TravelDate"];?></td>
                <td><?php echo $row["UserID"];?></td>
                <td><?php echo $row["Status"];?></td>
                <td>
                <p><a href="updatelocalappoint.php?AppointID=<?php echo $row["AppointID"];?>&UserID=<?php echo $id?>">Update Appointment</a></p> </td>
               <td>
               <p><a href="deletelocalappoint.php?AppointID=<?php echo $row["AppointID"];?>&UserID=<?php echo $id?>">Delete Appointment</a></p> </td>
              
              </tr>
                <?php $no++;
            }?>
            </table>
            <br>
            <div class="insertframe">
            <a href="insertlocalappoint.php?UserID=<?php echo $id?>">Insert Appointment</a></p> </td>
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
