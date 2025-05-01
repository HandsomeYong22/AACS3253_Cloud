<!DOCTYPE html>
<html lang="en" class="no-js"> 
<?php require_once('adminheader.php');?>
<?php include_once('..\config\function.php');?>
<head>
<title>Delete User</title>
</head>
<?php 

if (isset($_GET['UID'])){
        $u=$_GET['UID'];
      
        $sql ="DELETE FROM `tbluser` 
        WHERE (`UserID`='".$u."') ";  
        mysqli_select_db($conn,"myproject"); 
        $result=mysqli_query($conn,$sql); 
      goto2("viewuser.php?UserID=$id"," User is successfully Deleted");
} 