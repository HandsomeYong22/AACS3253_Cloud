<!DOCTYPE html>
<html lang="en" class="no-js"> 
<head>
<title>Delete International Package</title>
</head>
<?php require_once('adminheader.php');?>
<?php include_once('..\config\function.php');?>

<?php 

if (isset($_GET['PackageID'])){
        $p=$_GET['PackageID'];
      
        $sql ="DELETE FROM `tblinternational` 
        WHERE (`PackageID`='".$p."') ";  
        mysqli_select_db($conn,"myproject"); 
        $result=mysqli_query($conn,$sql); 
      goto2("viewinternational.php?UserID=$id","International package is successfully deleted");
} 
?>