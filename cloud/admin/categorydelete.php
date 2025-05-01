<!DOCTYPE html>
<html lang="en" class="no-js"> 
<?php require_once('adminheader.php');?>
<?php include_once('..\config\function.php');?>
<head>
<title>Delete Category</title>
</head>
<?php 

if (isset($_GET['UserType'])){
        $u=$_GET['UserType'];
      
        $sql ="DELETE FROM `tblcategory` 
        WHERE (`UserType`='".$u."') ";  
        mysqli_select_db($conn,"myproject"); 
        $result=mysqli_query($conn,$sql);  
      goto2("viewcategory.php?UserID=$id"," User Type is successfully Deleted");
} 