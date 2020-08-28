<?php

include 'koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$password = md5($_POST['password']);


$sql = "INSERT INTO admin (nama, email, password) values ('$nama','$email','$password')";
$res = mysqli_query($con,$sql);

if($res){

    header("Location: ../login.php");

} else {
    header("Location: ../register.php?info=register_gagal");
}

?>