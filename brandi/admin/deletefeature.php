<?php require_once('adminheader.php');?>
<?php include_once('..\config\function.php');?>
<head>
<title>Delete Feature</title>
</head>
<?php 

if (isset($_GET['FeatureID'])){
        $fid=$_GET['FeatureID'];
      
        $sql ="DELETE FROM `tblfeature` 
        WHERE (`FeatureID`='".$fid."') ";  
        mysqli_select_db($conn,"myproject"); 
        $result=mysqli_query($conn,$sql); 
      goto2("viewfeature.php?UserID=$id","Feature is successfully deleted");
} 