<!DOCTYPE html>
<html lang="en" class="no-js"> 
<?php require_once('adminheader.php');?>
<?php include_once('..\config\function.php');?>
<head>
<title>Delete Slide</title>
</head>
<?php 

if (isset($_GET['SlideID'])){
        $sid=$_GET['SlideID'];
      
        $sql ="DELETE FROM `tblslide` 
        WHERE (`SlideID`='".$sid."') ";  
        mysqli_select_db($conn,"myproject"); 
        $result=mysqli_query($conn,$sql); 
      goto2("viewslide.php?UserID=$id","Slide is successfully deleted");
} 