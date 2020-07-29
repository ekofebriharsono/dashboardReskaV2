<?php

include 'koneksi.php';
session_start();

$email = $_POST['email'];
$password = md5($_POST['password']);


$sql = "select * from admin where email = '$email' and password='$password'";
$res = mysqli_query($con,$sql);

if($res){
    $row = mysqli_num_rows($res);
    if($row > 0){
        $data = mysqli_fetch_array($res);

        $_SESSION['id']= $data['id_admin'];
        $_SESSION['nama']= $data['nama'];
        header("Location: ../index.php");
    } else {
        header("Location: ../login.php?error=login_gagal");
    }
}

?>