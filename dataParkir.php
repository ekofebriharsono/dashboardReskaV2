<?php

$date = date_create("2020-02-12 23:23:23");
echo date_format($date ,"Y-m-d");

// if(isset($_GET['lokasi'])){

//     if($_GET['lokasi'] == 'pgs'){
//         include 'proses/koneksi_pgs.php';
//     } else {
//         include 'proses/koneksi.php';
//     }
    
// }  

// $sqlParkirMotor = "select sum(biayatotal) as totalParkir from t_parkir";
// $resParkirMotor = mysqli_query($con,$sqlParkirMotor);
// $rowParkirMotor = mysqli_fetch_array($resParkirMotor);

// echo $rowParkirMotor['totalParkir'];
// $con->close();

?>