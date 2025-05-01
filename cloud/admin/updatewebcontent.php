<!DOCTYPE html>
<html lang="en" class="no-js"> 
<?php require_once('adminheader.php');?>
<?php include_once('..\config\function.php');?>
<head>
<title>Update Web Content</title>
</head>
<body>
<div class="container-fluid ">
<div class="container ">
<div class="row ">
<div class="admin-box">
<div class="row">
<div class="admin-det">
<h1>Update Web Content</h1>
<?php 

if (isset($_POST['webtitle'])){
        $id=$_POST['wid'];  
        $title=$_POST['webtitle'];
        $header=$_POST['header'];
        $topic=$_POST['topic'];
        $content=$_POST['content'];
        $sql ="UPDATE `webcontents` SET `webtitle`='".$title."' , `header`='".$header."' , `topic`='".$topic."' , `content`='".$content."' 
        WHERE (`webid`='".$id."') LIMIT 1";  
        mysqli_select_db($conn,"myproject"); ///select database as default
        $result=mysqli_query($conn,$sql);  
       goto2("viewwebcontent.php?UserID=$id","Web content is successfully updated");
} else {
    $wid=$_GET['webid'];
    $sql ="select * from webcontents where webid='".$wid."'";  // sql command
    mysqli_select_db($conn,"myproject"); ///select database as default
    $result=mysqli_query($conn,$sql);  
    $row=mysqli_fetch_assoc($result); 
?>
<form action="updatewebcontent.php?UserID=<?php echo $id; ?>" method="POST">
  <label for="Web ID">Web ID:</label>
  <input type="text" id="wid" name="wid" value="<?php echo $wid; ?>  "><br><br>
  <label for="webtitle">Web Title:</label>
  <input type="text" id="webtitle" name="webtitle" value="<?php echo $row['webtitle'];?>"><br><br>
  <label for="header">Web Header:</label>
  <input type="text" id="header" name="header" value="<?php echo $row['header'];?>"><br><br>
  <label for="topic">Web Topic:</label>
  <input type="text" id="topic" name="topic" value="<?php echo $row['topic'];?>"><br><br>
  <label for="content">Web Content:</label>
  <input type="text" id="content" name="content" value="<?php echo $row['content'];?>"><br><br>
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