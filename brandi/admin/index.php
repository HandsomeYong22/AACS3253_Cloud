<!DOCTYPE html>
<html lang="en" class="no-js"> 
<?php include_once('adminheader.php');?>
<?php include_once('..\config\settings.php');?>
<?php include_once('..\config\function.php');?>
<head>
<title><?php echo $admintitle; ?></title>
</head>
<body>

    <div class="container-fluid ">
        <div class="container ">
            <div class="row ">
                <div class="admin-box">
                    <div class="row">
                        <div class="admin-det">
                        <h1><?php echo $adminheader; ?></h1>
                        <h2><?php echo $admintopic; ?></h2>
                        <p><?php echo $admincontent; ?></p>
                        <a href="viewlocalappoint.php?UserID=<?php echo$id?>">
                        <button class="btn btn-success btn-round">Manage Product Payment</button>

                        <br><br> 
                        <a href="viewlocal.php?UserID=<?php echo$id?>">
                        <button class="btn btn-success btn-round">Manage Product</button>

                        <br><br>
                        <a href="viewwebcontent.php?UserID=<?php echo$id?>">
                        <button class="btn btn-success btn-round">Manage Web Details</button>

                        <br><br> 
                        <a href="viewslide.php?UserID=<?php echo$id?>">
                        <button class="btn btn-success btn-round">Manage Slideshow</button>

                        <br><br> 
                        <a href="viewfeature.php?UserID=<?php echo$id?>">
                        <button class="btn btn-success btn-round">Manage Feature</button>

                        <br><br>
                        <a href="viewuser.php?UserID=<?php echo$id?>">
                        <button class="btn btn-success btn-round">Manage User</button>
                        
                        <br><br> 
                        <a href="viewcategory.php?UserID=<?php echo$id?>">
                        <button class="btn btn-success btn-round">Manage User Category</button>
                        <br><br><br>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

</body>
</html>
