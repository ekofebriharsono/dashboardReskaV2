<?php

include 'koneksi.php';

$email = $_POST['email'];
$password = md5($_POST['password']);


$sql = "select * from admin where email = '$email' and password='$password'";
$res = mysqli_query($con,$sql);

if($res){
    $row = mysqli_num_rows($res);
    if($row > 0){
        header("Location: ../index.php");
    } else {
        header("Location: ../login.php?error=login_gagal");
    }
}

?>