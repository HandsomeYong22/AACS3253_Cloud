<?php require_once('adminheader.php');?>
<?php include_once('..\config\function.php');?>
<head>
<title>Delete Branch</title>
</head>
<?php 

if (isset($_GET['BranchID'])){
        $bid=$_GET['BranchID'];
      
        $sql ="DELETE FROM `tblbranch` 
        WHERE (`BranchID`='".$bid."') ";  
        mysqli_select_db($conn,"myproject"); 
        $result=mysqli_query($conn,$sql); 
      goto2("viewbranch.php?UserID=$id","Branch is successfully deleted");
} 