<!DOCTYPE html>
<html lang="en" class="no-js"> 
<?php require_once('adminheader.php');?>
<?php include_once('..\config\function.php');?>
<head>
<title>Update Feature</title>
</head>
<body>
<div class="container-fluid ">
<div class="container ">
<div class="row ">
<div class="admin-box">
<div class="row">
<div class="admin-det">
<h1>Update Feature Details</h1>
<?php 
if (isset($_POST['featuretitle'])){
        $id=$_POST['featureid'];  
        $title=$_POST['featuretitle'];
        $content=$_POST['featurecontent'];	
        $icon=$_POST['featureicon'];		
        $sql ="UPDATE `tblfeature` SET `FeatureTitle`='".$title."' , `FeatureContent`='".$content."' , `FeatureIcon`='".$icon."' 
        WHERE (`FeatureID`='".$id."') LIMIT 1";  
        mysqli_select_db($conn,"myproject"); ///select database as default
        $result=mysqli_query($conn,$sql);  
        goto2("viewfeature.php?UserID=$id"," Feature is successfully updated");
       
} else {
    $id=$_GET['FeatureID'];
    $sql ="select * from tblfeature where FeatureID='".$id."'";  // sql command
    mysqli_select_db($conn,"myproject"); ///select database as default
    $result=mysqli_query($conn,$sql);  
    $row=mysqli_fetch_assoc($result); 
?>
<form action="updatefeature.php?FeatureID=<?php echo $id; ?>&UserID=<?php echo $id?>" method="POST">
  <label for="FeatureID">Feature ID:</label>
  <input type="text" id="featureid" name="featureid" value="<?php echo $id;?>"><br><br>
  <label for="FeatureTitle">Feature Title:</label>
  <input type="text" id="featuretitle" name="featuretitle" value="<?php echo $row['FeatureTitle'];?>"><br><br>
  <label for="FeatureContent">Feature Content:</label>
  <input type="text" id="featurecontent" name="featurecontent" value="<?php echo $row['FeatureContent'];?>"><br><br>
  <label for="FeatureIcon">Feature Icon(From Github):</label>
  <input type="text" id="featureicon" name="featureicon" value="<?php echo $row['FeatureIcon'];?>"><br><br>
  <p><input type="submit" value="Save"></p>
</form>

<?php } ?>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>