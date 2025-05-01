<!DOCTYPE html>
<html lang="en" class="no-js"> 
<?php require_once('adminheader.php');?>
<?php include_once('..\config\function.php');?>
<head>
<title>Insert Feature</title>
</head>
<body>
<div class="container-fluid ">
<div class="container ">
<div class="row ">
<div class="admin-box">
<div class="row">
<div class="admin-det">
<h1>Insert Feature</h1>
<?php 

if (isset($_POST['featuretitle'])){
    $id=$_POST['featureid'];  
    $title=$_POST['featuretitle'];
    $content=$_POST['featurecontent'];
    $icon=$_POST['featureicon'];
    $sql ="INSERT INTO `tblfeature` (`FeatureID`, `FeatureTitle`, `FeatureContent`, `FeatureIcon`) 
    VALUES ('".$id."', '".$title."', '".$content."','".$icon."')";  
    mysqli_select_db($conn,"myproject"); 
    $result=mysqli_query($conn,$sql);  
    goto2("viewfeature.php?UserID=$id","Feature is successfully inserted");
       
} else {
  
?>
<form action="insertfeature.php?UserID=<?php echo $id?>" method="POST" enctype="multipart/form-data">
  <label for="FeatureID">Feature ID:</label>
  <input type="text" id="featureid" name="featureid" value=""><br><br>
  <label for="FeatureTitle">Feature Title:</label>
  <input type="text" id="featuretitle" name="featuretitle" value=""><br><br>
  <label for="FeatureContent">Feature Content:</label>
  <input type="text" id="featurecontent" name="featurecontent" value=""><br><br>
  <label for="FeatureIcon">Feature Icon(From Github):</label>
  <input type="text" id="featureicon" name="featureicon" value=""><br><br>
  <input type="submit" value="Save">
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

