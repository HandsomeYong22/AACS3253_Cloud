<?php


function createDB()
{
    include('variable.php');
    $result=mysqli_query($conn,"show databases;");
    $i=1;
    echo 'List of database<br>';
    while ($row=mysqli_fetch_row($result)){
        echo $i.".".$row[0]."<br>";
        $i++;
    }
    
    $sql="CREATE DATABASE ".$database;
    if (mysqli_select_db($conn,"mydatabase") ) {
        $sqldelete="DROP DATABASE ".$database;
        mysqli_query($conn,$sqldelete);
        echo "database is deleted successfully<br>";
        mysqli_query($conn,$sql);
        echo "database is created successfully<br>";
    }
    else{
        if (mysqli_query($conn,$sql)){
            echo "database is created successfully<br>";
        }else
        {
            echo " Error on creation<br>" .mysqli_error($conn);
        }
    }

}

function goto2 ($to,$Message){
	echo "<script language=\"JavaScript\">alert(\"".$Message."\") \n window.location = \"".$to."\"</script>";
}

function alert1 ($str){
	print "<script>alert(\"".$str."\")</script>";
}

function calculate($x,$y){
    return $x+$y;
}


function show()
{

   echo '<br>this is a function';
}

function cal($x,$y){
    $z = $x+$y;
    return $z;
    //local $z
    //function parameter $x and $y
}

function getdate1($date){
    $dob=$date;
$dob_year=date("Y",strtotime($dob));
$currentyear=date("Y");
$age=$currentyear-$dob_year;
return $age;
}
function checkUType($u,$type=1){
    include('variable.php');
        $conn=new mysqli($servername,$user,$passw);
        mysqli_select_db($conn,"myproject");
        $sql=" SELECT
        tblcategory.interface,tblcategory.UserType,tbluser.Name
        FROM
        tblcategory
        INNER JOIN tbluser ON tbluser.UserType = tblcategory.UserType
         where UserID='".$u."' ";
         $result=mysqli_query($conn,$sql);
        $rowtype=mysqli_fetch_assoc($result);
        //echo $sql;
        if ($type==1){
            return $rowtype['UserType'];
        }else if ($type==2)
        {
            return $rowtype['interface'];
         }
         else      if ($type==3){
        return $rowtype['Name'];
        }
};


function retrieveWebSetting($id,$type=1){
    include('variable.php');
    $conn=new mysqli($servername,$user,$passw);
    mysqli_select_db($conn,"myproject");
    $sql=" SELECT *    FROM     webcontents
     where webid=".$id;
     $result=mysqli_query($conn,$sql);
    $rowtype=mysqli_fetch_assoc($result);
    //echo $sql;
    if ($type==1){
        return $rowtype['webtitle'];
    }else if ($type==2)
    {
        return $rowtype['header'];
     }
     else      if ($type==3){
    return $rowtype['topic'];
    }
    else      if ($type==4){
        return $rowtype['content'];
    }
};

function retrievelocalapp(){
    include('variable.php');
    include('db.php');
    $conn=new mysqli($servername,$user,$passw);
    $sql ="select * from tbllocalappoint"; 
    mysqli_select_db($conn,"myproject"); 
    $localapp=mysqli_query($conn,$sql); 
    return $localapp;
};

function retrieveinternationalapp(){
    include('variable.php');
    include('db.php');
    $conn=new mysqli($servername,$user,$passw);
    $sql ="select * from tblinternationalappoint"; 
    mysqli_select_db($conn,"myproject"); 
    $internationalapp=mysqli_query($conn,$sql); 
    return $internationalapp;
};

function retrieveBranch(){
    include('variable.php');
    include('db.php');
    $conn=new mysqli($servername,$user,$passw);
    $sql ="select * from tblbranch"; 
    mysqli_select_db($conn,"myproject"); 
    $branch=mysqli_query($conn,$sql); 
    return $branch;
};

function retrieveLocal(){
    include('variable.php');
    include('db.php');
    $conn=new mysqli($servername,$user,$passw);
    $sql ="select * from tbllocal"; 
    mysqli_select_db($conn,"myproject"); 
    $local=mysqli_query($conn,$sql); 
    return $local;
};

function retrieveInternational(){
    include('variable.php');
    include('db.php');
    $conn=new mysqli($servername,$user,$passw);
    $sql ="select * from tblInternational"; 
    mysqli_select_db($conn,"myproject"); 
    $international=mysqli_query($conn,$sql); 
    return $international;
};

function retrieveSlide(){
    include('variable.php');
    include('db.php');
    $conn=new mysqli($servername,$user,$passw);
    $sql ="select * from tblSlide"; 
    mysqli_select_db($conn,"myproject"); 
    $slide=mysqli_query($conn,$sql); 
    return $slide;
};

function retrieveFeature(){
    include('variable.php');
    include('db.php');
    $conn=new mysqli($servername,$user,$passw);
    $sql ="select * from tblfeature"; 
    mysqli_select_db($conn,"myproject"); 
    $feature=mysqli_query($conn,$sql); 
    return $feature;
};

function logincheck($u,$p){
    include('variable.php');
    $conn=new mysqli($servername,$user,$passw);
    mysqli_select_db($conn,"myproject");
    $sql=" SELECT count(UserID) as L FROM `tblUser`  where UserID='".$u."'  and Password='".$p."'";
    //echo $sql;
    $stmt = mysqli_query($conn,$sql);
    if ($stmt===false){
       // return 0;
    }
    $row=mysqli_fetch_assoc($stmt); //i can call L or i can call using mysqli_fetch_row ,
    // when call $row[0]x 
    //echo $row[0];
    if ($row['L']==1){
        return 1;
    } 
    else {
        return 0;
    }
}


function retrieveUser(){
    include('variable.php');
    include('db.php');
    $conn=new mysqli($servername,$user,$passw);
    $sql ="select * from tbluser"; 
    mysqli_select_db($conn,"myproject"); 
    $user=mysqli_query($conn,$sql); 
    return $user;
}

function findSecureAnswer($user,$ans){
    while ($row=mysqli_fetch_assoc($user)){ 
        if($row['secureanswer']==$ans){
            return 1;
        }
    }
    return 0;
}

function findUser($user,$u){
    while ($row=mysqli_fetch_assoc($user)){ 
        if($row['UserID']==$u){
            return 1;
        }
    }
    return 0;
}


function retrieveForgot(){
    include('variable.php');
    include('db.php');
    $conn=new mysqli($servername,$user,$passw);
    $sql ="select * from tbluser"; 
    mysqli_select_db($conn,"myproject"); 
    $forgot=mysqli_query($conn,$sql); 
    return $forgot;
}

function combineword($r,$t){
    $c=$r." ".$t;

    return $c;

}

function div1($r,$t){
    $c=$r/$t;
    return $c;

}

?>