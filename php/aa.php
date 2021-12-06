<?php

require 'init.php';


$stn = $_GET["uname"];
$gid = $_GET["gid"];
$sid = $_GET["sid"];
$cid = $_GET["cid"];

// $zero = $_POST["zero"];
// $one = $_POST["one"];

// $a1 = $_POST["a1"];

$fmarks = $_GET["fmarks"];
$amarks = (int)$fmarks;


    if($amarks <= 1){
        
        $sql = "INSERT INTO usersim(gid,uname,sid,cid,fmarks,marks,aa) VALUES('$gid','$stn','$sid','$cid','$fmarks','$fmarks','$fmarks')";
        if(mysqli_query($con, $sql)){
            echo "success";
    }
    else{
       echo "ERROR".mysqli_error($con);
    }

}
else{
         $sql1 = "UPDATE user SET marks='$atotale' WHERE uname='$stn'&&gid='$gid'&&sid='$sid'&&cid='$cid'";

    if(mysqli_query($con, $sql1)){
        echo "success";
}
else{
   echo "ERROR".mysqli_error($con);
}
}
mysqli_close($con);

?>