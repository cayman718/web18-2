<?php include_once "db.php";

// $acc=$_GET['acc'];
// $User->count(['acc'=>$acc]);

$chk= $User->count($_POST);
if($chk){
    echo $chk;
    $_SESSION['user']=$_POST['acc'];
}else{
    echo 0;
}
 

/* 
if($res>0){
    echo 1;
}else{
    echo 0;
} */




?>