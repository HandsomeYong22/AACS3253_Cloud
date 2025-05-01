<!DOCTYPE html>
<html lang="en" class="no-js"> 
<?php require_once('adminheader.php');?>
<head>
<title>Delete Local Package</title>
</head>
<?php 

if (isset($_GET['PackageID'])){
        $p=$_GET['PackageID'];
      
        $sql ="DELETE FROM `tbllocal` 
        WHERE (`PackageID`='".$p."') ";  
        mysqli_select_db($conn,"myproject"); 
        $result=mysqli_query($conn,$sql); 
      goto2("viewlocal.php?UserID=$id","Product is successfully deleted");
} 