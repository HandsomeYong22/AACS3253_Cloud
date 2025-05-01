<!DOCTYPE html>
<html lang="en" class="no-js"> 
<?php require_once('adminheader.php');?>
<?php include_once('..\config\function.php');?>
<head>
<title>Update Slideshow</title>
</head>
<div class="container-fluid ">
<div class="container ">
<div class="row ">
<div class="admin-box">
<div class="row">
<div class="admin-det">
<h1>Update Slideshow</h1>

<?php 
if (isset($_POST['slidetopic'])){
        $sid=$_POST['slideid'];  
        $topic=$_POST['slidetopic'];
        $title=$_POST['slidetitle'];
        $content=$_POST['slidecontent'];
        $slideimg= $_FILES['slideimg']['name'];
        $slideimg_temp=$_FILES['slideimg']['tmp_name'];
        $imgloc="image/".$slideimg;
        if(move_uploaded_file($slideimg_temp , "image/$slideimg")){		
        $sql ="UPDATE `tblslide` SET `SlideTopic`='".$topic."' , `SlideTitle`='".$title."' , `SlideContent`='".$content."' , `SlideImage`='".$imgloc."' 
        WHERE (`SlideID`='".$sid."') LIMIT 1";  
        mysqli_select_db($conn,"myproject"); ///select database as default
        $result=mysqli_query($conn,$sql);  
        goto2("viewslide.php?UserID=$id"," Slide is successfully updated");
        }
        else{
            $sql ="UPDATE `tblslide` SET `SlideTopic`='".$topic."' , `SlideTitle`='".$title."' , `SlideContent`='".$content."' 
            WHERE (`SlideID`='".$sid."') LIMIT 1";  
            mysqli_select_db($conn,"myproject"); ///select database as default
            $result=mysqli_query($conn,$sql);  
            goto2("viewslide.php?UserID=$id"," Slide is successfully updated");
        }
} else {
    $sid=$_GET['SlideID'];
    $sql ="select * from tblslide where SlideID='".$sid."'";  // sql command
    mysqli_select_db($conn,"myproject"); ///select database as default
    $result=mysqli_query($conn,$sql);  
    $row=mysqli_fetch_assoc($result); 
?>
<form action="updateslide.php?SlideID=<?php echo $id; ?>&UserID=<?php echo $id?>" method="POST" enctype="multipart/form-data">
  <label for="SlideID">Slide ID:</label>
  <input type="text" id="slideid" name="slideid" value="<?php echo $sid;?>"><br><br>
  <label for="SlideTopic"> Slide Topic:</label>
  <input type="text" id="slidetopic" name="slidetopic" value="<?php echo $row['SlideTopic'];?>"><br><br>
  <label for="SlideTitle"> Slide Title:</label>
  <input type="text" id="slidetitle" name="slidetitle" value="<?php echo $row['SlideTitle'];?>"><br><br>
  <label for="SlideContent"> Slide Content:</label>
  <input type="text" id="slidecontent" name="slidecontent" value="<?php echo $row['SlideContent'];?>"><br><br>
  <input type="file" id="slideimg" name="slideimg" value="<?php echo $row['SlideImage'] ?>"/>
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