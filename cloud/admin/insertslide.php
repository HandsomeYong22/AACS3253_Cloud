<!DOCTYPE html>
<html lang="en" class="no-js"> 
<?php require_once('adminheader.php');?>
<?php include_once('..\config\function.php');?>
<head>
<title>Insert Slideshow</title>
</head>
<body>
<div class="container-fluid ">
<div class="container ">
<div class="row ">
<div class="admin-box">
<div class="row">
<div class="admin-det">
<h1>Insert Slideshow</h1>
<?php 

if (isset($_POST['slidetopic'])){
        $id=$_POST['slideid'];  
        $topic=$_POST['slidetopic'];
        $title=$_POST['slidetitle'];
        $content=$_POST['slidecontent'];
        $slideimg= $_FILES['slideimg']['name'];
        $slideimg_temp=$_FILES['slideimg']['tmp_name'];
        $imgloc="image/".$slideimg;
        if(move_uploaded_file($slideimg_temp , "image/$slideimg")){	
            $sql ="INSERT INTO `tblslide` (`SlideID`,  `SlideTopic`, `SlideTitle`, `SlideContent`, `SlideImage`) 
            VALUES ('".$id."', '".$topic."', '".$title."', '".$content."', '".$imgloc."')";  
            mysqli_select_db($conn,"myproject"); 
            $result=mysqli_query($conn,$sql);  
            goto2("viewslide.php?UserID=$id","Slide is successfully inserted");}
        else{
            $sql ="INSERT INTO `tblslide` (`SlideID`,  `SlideTopic`, `SlideTitle`, `SlideContent`) 
            VALUES ('".$id."', '".$topic."', '".$title."', '".$content."')";  
            mysqli_select_db($conn,"myproject"); 
            $result=mysqli_query($conn,$sql);  
            goto2("viewslide.php?UserID=$id","Slide is successfully inserted");
        }
} else {
  
?>
<form action="insertslide.php?UserID=<?php echo $id?>" method="POST" enctype="multipart/form-data">
  <label for="SlideID">Slide ID:</label>
  <input type="text"  id="slideid" name="slideid" ><br><br>
  <label for="SlideTopic"> Slide Topic:</label>
  <input type="text" id="slidetopic" name="slidetopic" value=""><br><br>
  <label for="SlideTitle"> SlideTitle:</label>
  <input type="text" id="slidetitle" name="slidetitle" value=""><br><br>
  <label for="SlideContent">Slide Content:</label>
  <input type="text" id="slidecontent" name="slidecontent" value=""><br><br>
  <input type="file" id="slideimg" name="slideimg" value=""/>
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

