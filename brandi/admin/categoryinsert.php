<?php require_once('adminheader.php');?>
<?php include_once('..\config\function.php');?>
<head>
<title>Insert Category</title>
</head>
<body>
<div class="container-fluid ">
<div class="container ">
<div class="row ">
<div class="admin-box">
<div class="row">
<div class="admin-det">
<h1>Insert User Category</h1>
<?php 

if (isset($_POST['usertype'])){

        $u=$_POST['usertype'];
        $n=$_POST['description'];
        $a=$_POST['interface'];
        $sql ="INSERT INTO `tblcategory` (`UserType`, `Description`,`Interface`) 
        VALUES ('".$u."', '".$n."','".$a."')";  
        mysqli_select_db($conn,"myproject"); 
        $result=mysqli_query($conn,$sql);  
       goto2("viewcategory.php?UserID=$id"," Category is successfully inserted");
} else {
?>
<form action="categoryinsert.php?UserID=<?php echo $id?>" method="POST">
  <label for="User Type">User Type:</label>
  <input type="text" id="usertype" name="usertype"?><br><br>
  <label for="Description"> Description:</label>
  <input type="text" id="description" name="description"?><br><br>
  <label for="Interface"> Interface:</label>
  <input type="text" id="interface" name="interface"?><br><br>
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