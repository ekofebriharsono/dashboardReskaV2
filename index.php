<?php

session_start();
if($_SESSION['id'] == ''){
  header("Location: login.php?error='belum_login'");
}else{ 
  

  ?>



<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Damartana | Dashboard</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <?php include'navbar.php'; ?>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <?php include'sidebar.php'; ?>
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard v1</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->

          <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Filter</h3>
                    </div>
                    <form role="form" action="index.php" method="get">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Pilih Server</label>
                                <select  name="lokasi" class="form-control">
                                    <option value="PilihServer">Pilih Server</option>
                                    <option value="ps_turi">Pasar Turi</option>
                                    <option value="pgs">PGS</option>
                                    <option value="tuban">Tuban</option>
                                    <option value="all">All</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mulai Tanggal</label>
                                <input type="date" name="tanggal_start" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Sampai Tanggal</label>
                                <input type="date" name="tanggal_end" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                        </div>
                        <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>

            <?php
                if(isset($_GET['lokasi']) && isset($_GET['tanggal_start']) && isset($_GET['tanggal_end']) ){
                  $isAll = false;
                  $isFilter = false; 
                  if($_GET['lokasi'] == "PilihServer" && $_GET['tanggal_start'] == "" && $_GET['tanggal_end'] == ""){
                        echo "Harap Memilih Lokasi dan Tanggal";
                        $isFilter = false; 
                      } else {
                        if($_GET['lokasi'] == 'pgs'){
                            include 'proses/koneksi_pgs.php';
                        } else if($_GET['lokasi'] == 'tuban'){
                            include 'proses/koneksi_tuban.php';
                        } else if($_GET['lokasi'] == 'ps_turi'){
                            include 'proses/koneksi.php';
                        }else if($_GET['lokasi'] == 'all'){
                          $isAll = true;
                        }
                        
                        $motor = null;
                        $mobil = null;
                        $helm = null;
                        $pendapatan = null;
                        $masalah = null;
                        $member = null;
                        $kasir = null;
                        $total = null;

                        $tgl_start = null;
                        $tgl_end = null;

                        $TOTAL_TURI = 0;
                        $TOTAL_PGS = 0;
                        $TOTAL_TUBAN = 0;

                        $dateNow = date("Y-m-d");

                        $shift1 = 0;
                        $shift2 = 0;
                        $shift3 = 0;
                        $bersih = 0;

                        $m1 =0; $m2 =0; $m3 =0; $m4 =0; $m5 =0;
                        $m6 =0; $m7 =0; $m8 =0; $m9 =0; $m10 =0;
                        $m11 =0; $m12 =0; $m13 =0; $m14 =0; $m15 =0;
                        $m16 =0; $m17 =0; $m18 =0; $m19 =0; $m20 =0;
                        $m21 =0; $m22 =0; $m23 =0; $m24 =0;
                        
                        $b1 =0; $b2 =0; $b3 =0; $b4 =0; $b5 =0;
                        $b6 =0; $b7 =0; $b8 =0; $b9 =0; $b10 =0;
                        $b11 =0; $b12 =0; $b13 =0; $b14 =0; $b15 =0;
                        $b16 =0; $b17 =0; $b18 =0; $b19 =0; $b20 =0;
                        $b21 =0; $b22 =0; $b23 =0; $b24 =0;

                        $totalVolume = 0;

                        $senin = 0;
                        $selasa = 0;
                        $rabu = 0;
                        $kamis = 0;
                        $jumat = 0;
                        $sabtu = 0;
                        $minggu = 0;


                        if(!$isAll){
                          $tgl_start = $_GET['tanggal_start'];
                          $tgl_end = $_GET['tanggal_end'];
                          $sqlPendapatan = "select waktu_in, SUM(biayatotal) as biayatotal from t_parkir where waktu_in BETWEEN cast('$tgl_start' as date) and cast('$tgl_end' as date) GROUP BY waktu_in";
                          $sqlMotor = "select sum(biayatotal) as totalParkirMotor from t_parkir where status = 'S' and waktu_out BETWEEN cast('$tgl_start' as date) and cast('$tgl_end' as date)";
                          $sqlMobil = "select sum(biayatotal) as totalParkirMobil from t_parkir where status = 'B' and waktu_out BETWEEN cast('$tgl_start' as date) and cast('$tgl_end' as date)";
                          $sqlTotMotor = "select count(*) as totalParkirMotor from t_parkir where status = 'S' and waktu_out BETWEEN cast('$tgl_start' as date) and cast('$tgl_end' as date)";
                          $sqlTotMobil = "select count(*) as totalParkirMobil from t_parkir where status = 'B' and waktu_out BETWEEN cast('$tgl_start' as date) and cast('$tgl_end' as date)";
                          $sqlShift1Casual = "select sum(jumlah_casual) as casual from t_setorankasir where kode_shift = '1' and tanggal BETWEEN cast('$tgl_start' as date) and cast('$tgl_end' as date)";
                          $sqlShift1Manual = "select sum(jumlah_manualtiket) as manual from t_setorankasir where kode_shift = '1' and tanggal BETWEEN cast('$tgl_start' as date) and cast('$tgl_end' as date)";
                          $sqlShift2Casual = "select sum(jumlah_casual) as casual from t_setorankasir where kode_shift = '2' and tanggal BETWEEN cast('$tgl_start' as date) and cast('$tgl_end' as date)";
                          $sqlShift2Manual = "select sum(jumlah_manualtiket) as manual from t_setorankasir where kode_shift = '2' and tanggal BETWEEN cast('$tgl_start' as date) and cast('$tgl_end' as date)";
                          $sqlShift3Casual = "select sum(jumlah_casual) as casual from t_setorankasir where kode_shift = '3' and tanggal BETWEEN cast('$tgl_start' as date) and cast('$tgl_end' as date)";
                          $sqlShift3Manual = "select sum(jumlah_manualtiket) as manual from t_setorankasir where kode_shift = '3' and tanggal BETWEEN cast('$tgl_start' as date) and cast('$tgl_end' as date)";
                          $sqlMasalah = "select * from t_setorankasir where tanggal BETWEEN cast('$tgl_start' as date) and cast('$tgl_end' as date) GROUP BY tanggal";
                          $sqlKendaraanMasukPerjam = "select * from t_parkir where waktu_out BETWEEN cast('$tgl_start' as date) and cast('$tgl_end' as date)";

                          $sqlPendapatan1 = $sqlPendapatan;
                          $resPendapatan = mysqli_query($con,$sqlPendapatan1);
                          $rowPendapatan = mysqli_fetch_array($resPendapatan);
                          $resPendapatan1 = mysqli_query($con,$sqlPendapatan1);
                          $rowPendapatan1 = mysqli_fetch_array($resPendapatan1);

                          $sqlParkirMotor = $sqlMotor;
                          $resParkirMotor = mysqli_query($con,$sqlParkirMotor);
                          $rowParkirMotor = mysqli_fetch_array($resParkirMotor);

                          $sqlParkirTotMotor = $sqlTotMotor;
                          $resParkirTotMotor = mysqli_query($con,$sqlParkirTotMotor);
                          $rowParkirTotMotor = mysqli_fetch_array($resParkirTotMotor);

                          $sqlParkirMobil = $sqlMobil;
                          $resParkirMobil = mysqli_query($con,$sqlParkirMobil);
                          $rowParkirMobil1 = mysqli_fetch_array($resParkirMobil);

                          $sqlParkirTotMobil = $sqlTotMobil;
                          $resParkirTotMobil = mysqli_query($con,$sqlParkirTotMobil);
                          $rowParkirMobil = mysqli_fetch_array($resParkirTotMobil);

                          $sqlShift1Casual1 = $sqlShift1Casual;
                          $resShift1Casual = mysqli_query($con,$sqlShift1Casual1);
                          $rowShift1Casual = mysqli_fetch_array($resShift1Casual);

                          $sqlShift2Casual1 = $sqlShift2Casual;
                          $resShift2Casual = mysqli_query($con,$sqlShift2Casual1);
                          $rowShift2Casual = mysqli_fetch_array($resShift2Casual);

                          $sqlShift3Casual1 = $sqlShift3Casual;
                          $resShift3Casual = mysqli_query($con,$sqlShift3Casual1);
                          $rowShift3Casual = mysqli_fetch_array($resShift3Casual);

                          $sqlShift1Manual1 = $sqlShift1Manual;
                          $resShift1Manual = mysqli_query($con,$sqlShift1Manual1);
                          $rowShift1Manual = mysqli_fetch_array($resShift1Manual);

                          $sqlShift2Manual1 = $sqlShift2Manual;
                          $resShift2Manual = mysqli_query($con,$sqlShift2Manual1);
                          $rowShift2Manual = mysqli_fetch_array($resShift2Manual);

                          $sqlShift3Manual1 = $sqlShift3Manual;
                          $resShift3Manual = mysqli_query($con,$sqlShift3Manual1);
                          $rowShift3Manual = mysqli_fetch_array($resShift3Manual);

                          $sqlMasalah1 = $sqlMasalah;
                          $resMasalah = mysqli_query($con,$sqlMasalah1);
                          $resMasalah1 = mysqli_query($con,$sqlMasalah1);
                          $rowMasalah = mysqli_fetch_array($resMasalah);

                          $resKendaraanMasukPerjam = mysqli_query($con,$sqlKendaraanMasukPerjam);

                          $motor = $rowParkirMotor['totalParkirMotor'];
                          $mobil = $rowParkirMobil1['totalParkirMobil'];
                        
                          
                          @$shift1 = $rowShift1Casual['casual'] + $rowShift1Manual['manual'];
                          @$shift2 = $rowShift2Casual['casual'] + $rowShift2Manual['manual'];
                          @$shift3 = $rowShift3Casual['casual'] + $rowShift3Manual['manual'];

                          $bersih = $shift1 + $shift2 + $shift3;

                          @$motorTot = $rowParkirTotMotor['totalParkirMotor'];
                          @$mobilTot = $rowParkirTotMobil['totalParkirMobil'];

                          if($resKendaraanMasukPerjam){
                            while($row = mysqli_fetch_array($resKendaraanMasukPerjam)){
                              $date=date_create($row['waktu_out']);
                          
                              $dt = strtotime($row['waktu_in']);
                              $day = date("D", $dt);
                              
                          
                              switch ($day){
                                case "Mon":
                                  $senin = $senin + 1;
                                break;
                                case "Tue":
                                  $selasa = $selasa + 1;
                                break;
                                case "Wed":
                                  $rabu = $rabu + 1;
                                break;
                                case "Thu":
                                  $kamis = $kamis + 1;
                                break;
                                case "Fri":
                                  $jumat = $jumat + 1;
                                break;
                                case "Sat":
                                  $sabtu = $sabtu + 1;
                                break;
                                case "Sun":
                                  $minggu = $minggu + 1;
                                break;
                              }

                              $biaya = $row['biayatotal'];
                              $totalVolume = $totalVolume + 1;
                              $jam = date_format($date,"H:i:s");
                              $sub_jam = substr($jam,0,2);

                              switch ($sub_jam){
                                case 24: 
                                  $m24 = $m24 + 1;
                                  $b24 = $b24 + $biaya;
                                break;
                                case 01: 
                                  $m1 = $m1 + 1;
                                  $b1 = $b1 + $biaya;
                                break;
                                case 02: 
                                  $m2 = $m2 + 1;
                                  $b2 = $b2+ $biaya;
                                break;
                                case 03: 
                                  $m3 = $m3 + 1;
                                  $b3 = $b3 + $biaya;
                                break;
                                case 04: 
                                  $m4 = $m4 + 1;
                                  $b4 = $b4 + $biaya;
                                break;
                                case 05: 
                                  $m5 = $m5 + 1;
                                  $b5 = $b5 + $biaya;
                                break;
                                case 06: 
                                  $m6 = $m6 + 1;
                                  $b6 = $b6 + $biaya;
                                break;
                                case 07: 
                                  $m7 = $m7 + 1;
                                  $b7 = $b7 + $biaya;
                                break;
                                case "08": 
                                  $m8 = $m8 + 1;
                                  $b7 = $b7 + $biaya;
                                break;
                                case "09": 
                                  $m9 = $m9 + 1;
                                  $b9 = $b9 + $biaya;
                                break;
                                case 10: 
                                  $m10 = $m10 + 1;
                                  $b10 = $b8 + $biaya;
                                break;
                                case 11: 
                                  $m11 = $m11 + 1;
                                  $b11 = $b11 + $biaya;
                                break;
                                case 12: 
                                  $m12 = $m12 + 1;
                                  $b12 = $b12 + $biaya;
                                break;
                                case 13: 
                                  $m13 = $m13 + 1;
                                  $b13 = $b13 + $biaya;
                                break;
                                case 14: 
                                  $m14 = $m14 + 1;
                                  $b14 = $b14 + $biaya;
                                break;
                                case 15: 
                                  $m15 = $m15 + 1;
                                  $b15 = $b15 + $biaya;
                                break;
                                case 16: 
                                  $m16 = $m16 + 1;
                                  $b16 = $b16 + $biaya;
                                break;
                                case 17: 
                                  $m17 = $m17 + 1;
                                  $b17 = $b17 + $biaya;
                                break;
                                case 18: 
                                  $m18 = $m18 + 1;
                                  $b18 = $b18 + $biaya;
                                break;
                                case 19: 
                                  $m19 = $m19 + 1;
                                  $b19 = $b19 + $biaya;
                                break;
                                case 20: 
                                  $m20 = $m20 + 1;
                                  $b20 = $b21 + $biaya;
                                break;
                                case 21: 
                                  $m21 = $m21 + 1;
                                  $b21 = $b21 + $biaya;
                                break;
                                case 22: 
                                  $m22 = $m22 + 1;
                                  $b22 = $b22 + $biaya;
                                break;
                                case 23: 
                                  $m23 = $m23 + 1;
                                  $b23 = $b23 + $biaya;
                                break;
                              }
                            }
                          }

                          if($motor == null){
                            $motor = 0;
                          }
                          if($mobil == null){
                            $mobil = 0;
                          }
                          if($helm == null){
                            $helm = 0;
                          }
                          if($masalah == null){
                            $masalah = 0;
                          }
                          if($member == null){
                            $member = 0;
                          }
                          if($kasir == null){
                            $kasir = 0;
                          }
                          if($motorTot == null){
                            $motorTot = 0;
                          }
                          if($mobilTot == null){
                            $mobilTot = 0;
                          }

                          $pendapatan = $mobil + $motor + $helm;
                          $total = $pendapatan + $masalah + $member + $kasir;

                          $con->close();

                        }else{
                          for($i = 1; $i <= 3; $i++){
                            if($i == 1){
                              define('HOST1','localhost');
                              define('USER1','root');
                              define('PASS1','');
                              define('DB1','parkir_dbserver');
                              $con = mysqli_connect(HOST1,USER1,PASS1,DB1) or die('Unable to Connect');
                            }
                            if($i == 2){    
                              define('HOST2','localhost');
                              define('USER2','root');
                              define('PASS2','');
                              define('DB2','parkir_pgs');
                              $con= mysqli_connect(HOST2,USER2,PASS2,DB2) or die('Unable to Connect');
                            }
                            if($i == 3){
                              define('HOST3','localhost');
                              define('USER3','root');
                              define('PASS3','');
                              define('DB3','parkir_pgs');
                              $con = mysqli_connect(HOST3,USER3,PASS3,DB3) or die('Unable to Connect');
                            }

                            $tgl_start = $_GET['tanggal_start'];
                            $tgl_end = $_GET['tanggal_end'];
                            $sqlPendapatan = "select waktu_in, SUM(biayatotal) as biayatotal from t_parkir where waktu_out BETWEEN cast('$tgl_start' as date) and cast('$tgl_end' as date) GROUP BY waktu_in";
                            $sqlMotor = "select sum(biayatotal) as totalParkirMotor from t_parkir where status = 'S' and waktu_out BETWEEN cast('$tgl_start' as date) and cast('$tgl_end' as date)";
                            $sqlMobil = "select sum(biayatotal) as totalParkirMobil from t_parkir where status = 'B' and waktu_out BETWEEN cast('$tgl_start' as date) and cast('$tgl_end' as date)";
                            $sqlTotMotor = "select count(*) as totalParkirMotor from t_parkir where status = 'S' and waktu_out BETWEEN cast('$tgl_start' as date) and cast('$tgl_end' as date)";
                            $sqlTotMobil = "select count(*) as totalParkirMobil from t_parkir where status = 'B' and waktu_out BETWEEN cast('$tgl_start' as date) and cast('$tgl_end' as date)";
                            $sqlShift1Casual = "select sum(jumlah_casual) as casual from t_setorankasir where kode_shift = '1' and tanggal BETWEEN cast('$tgl_start' as date) and cast('$tgl_end' as date)";
                            $sqlShift1Manual = "select sum(jumlah_manualtiket) as manual from t_setorankasir where kode_shift = '1' and tanggal BETWEEN cast('$tgl_start' as date) and cast('$tgl_end' as date)";
                            $sqlShift2Casual = "select sum(jumlah_casual) as casual from t_setorankasir where kode_shift = '2' and tanggal BETWEEN cast('$tgl_start' as date) and cast('$tgl_end' as date)";
                            $sqlShift2Manual = "select sum(jumlah_manualtiket) as manual from t_setorankasir where kode_shift = '2' and tanggal BETWEEN cast('$tgl_start' as date) and cast('$tgl_end' as date)";
                            $sqlShift3Casual = "select sum(jumlah_casual) as casual from t_setorankasir where kode_shift = '3' and tanggal BETWEEN cast('$tgl_start' as date) and cast('$tgl_end' as date)";
                            $sqlShift3Manual = "select sum(jumlah_manualtiket) as manual from t_setorankasir where kode_shift = '3' and tanggal BETWEEN cast('$tgl_start' as date) and cast('$tgl_end' as date)";
                            $sqlMasalah = "select * from t_setorankasir where tanggal BETWEEN cast('$tgl_start' as date) and cast('$tgl_end' as date) GROUP BY tanggal";
                            $sqlKendaraanMasukPerjam = "select * from t_parkir where waktu_out BETWEEN cast('$tgl_start' as date) and cast('$tgl_end' as date)";

                            $sqlPendapatan1 = $sqlPendapatan;
                            $resPendapatan = mysqli_query($con,$sqlPendapatan1);
                            $rowPendapatan = mysqli_fetch_array($resPendapatan);
                            $resPendapatan1 = mysqli_query($con,$sqlPendapatan1);
                            $rowPendapatan1 = mysqli_fetch_array($resPendapatan1);

                            $sqlParkirMotor = $sqlMotor;
                            $resParkirMotor = mysqli_query($con,$sqlParkirMotor);
                            $rowParkirMotor = mysqli_fetch_array($resParkirMotor);

                            $sqlParkirTotMotor = $sqlTotMotor;
                            $resParkirTotMotor = mysqli_query($con,$sqlParkirTotMotor);
                            $rowParkirTotMotor = mysqli_fetch_array($resParkirTotMotor);

                            $sqlParkirMobil = $sqlMobil;
                            $resParkirMobil = mysqli_query($con,$sqlParkirMobil);
                            $rowParkirMobil1 = mysqli_fetch_array($resParkirMobil);

                            $sqlParkirTotMobil = $sqlTotMobil;
                            $resParkirTotMobil = mysqli_query($con,$sqlParkirTotMobil);
                            $rowParkirMobil = mysqli_fetch_array($resParkirTotMobil);

                            $sqlShift1Casual1 = $sqlShift1Casual;
                            $resShift1Casual = mysqli_query($con,$sqlShift1Casual1);
                            $rowShift1Casual = mysqli_fetch_array($resShift1Casual);

                            $sqlShift2Casual1 = $sqlShift2Casual;
                            $resShift2Casual = mysqli_query($con,$sqlShift2Casual1);
                            $rowShift2Casual = mysqli_fetch_array($resShift2Casual);

                            $sqlShift3Casual1 = $sqlShift3Casual;
                            $resShift3Casual = mysqli_query($con,$sqlShift3Casual1);
                            $rowShift3Casual = mysqli_fetch_array($resShift3Casual);

                            $sqlShift1Manual1 = $sqlShift1Manual;
                            $resShift1Manual = mysqli_query($con,$sqlShift1Manual1);
                            $rowShift1Manual = mysqli_fetch_array($resShift1Manual);

                            $sqlShift2Manual1 = $sqlShift2Manual;
                            $resShift2Manual = mysqli_query($con,$sqlShift2Manual1);
                            $rowShift2Manual = mysqli_fetch_array($resShift2Manual);

                            $sqlShift3Manual1 = $sqlShift3Manual;
                            $resShift3Manual = mysqli_query($con,$sqlShift3Manual1);
                            $rowShift3Manual = mysqli_fetch_array($resShift3Manual);

                            $sqlMasalah1 = $sqlMasalah;
                            $resMasalah = mysqli_query($con,$sqlMasalah1);
                            $resMasalah1 = mysqli_query($con,$sqlMasalah1);
                            $rowMasalah = mysqli_fetch_array($resMasalah);

                            $resKendaraanMasukPerjam = mysqli_query($con,$sqlKendaraanMasukPerjam);

                            $motor = $motor + $rowParkirMotor['totalParkirMotor'];
                            $mobil = $mobil + $rowParkirMobil1['totalParkirMobil'];

                            @$shift1 = $shift1 + $rowShift1Casual['casual'] + $rowShift1Manual['manual'];
                            @$shift2 = $shift2 + $rowShift2Casual['casual'] + $rowShift2Manual['manual'];
                            @$shift3 = $shift3 + $rowShift3Casual['casual'] + $rowShift3Manual['manual'];

                            $bersih = $shift1 + $shift2 + $shift3;

                            @$motorTot = $motorTot + $rowParkirTotMotor['totalParkirMotor'];
                            @$mobilTot = $mobilTot + $rowParkirTotMobil['totalParkirMobil'];
                            
                            if($resKendaraanMasukPerjam){
                              while($row = mysqli_fetch_array($resKendaraanMasukPerjam)){
                                $date=date_create($row['waktu_out']);
                                
                                $dt = strtotime($row['waktu_in']);
                                $day = date("D", $dt);
                              
                          
                              switch ($day){
                                case "Mon":
                                  $senin = $senin + 1;
                                break;
                                case "Tue":
                                  $selasa = $selasa + 1;
                                break;
                                case "Wed":
                                  $rabu = $rabu + 1;
                                break;
                                case "Thu":
                                  $kamis = $kamis + 1;
                                break;
                                case "Fri":
                                  $jumat = $jumat + 1;
                                break;
                                case "Sat":
                                  $sabtu = $sabtu + 1;
                                break;
                                case "Sun":
                                  $minggu = $minggu + 1;
                                break;
                              }
                                
                                $biaya = $row['biayatotal'];
                                $totalVolume = $totalVolume + 1;
                                $jam = date_format($date,"H:i:s");
                                $sub_jam = substr($jam,0,2);
                          
                                switch ($sub_jam){
                                  case 24: 
                                    $m24 = $m24 + 1;
                                    $b24 = $b24 + $biaya;
                                  break;
                                  case 01: 
                                    $m1 = $m1 + 1;
                                    $b1 = $b1 + $biaya;
                                  break;
                                  case 02: 
                                    $m2 = $m2 + 1;
                                    $b2 = $b2+ $biaya;
                                  break;
                                  case 03: 
                                    $m3 = $m3 + 1;
                                    $b3 = $b3 + $biaya;
                                  break;
                                  case 04: 
                                    $m4 = $m4 + 1;
                                    $b4 = $b4 + $biaya;
                                  break;
                                  case 05: 
                                    $m5 = $m5 + 1;
                                    $b5 = $b5 + $biaya;
                                  break;
                                  case 06: 
                                    $m6 = $m6 + 1;
                                    $b6 = $b6 + $biaya;
                                  break;
                                  case 07: 
                                    $m7 = $m7 + 1;
                                    $b7 = $b7 + $biaya;
                                  break;
                                  case "08": 
                                    $m8 = $m8 + 1;
                                    $b7 = $b7 + $biaya;
                                  break;
                                  case "09": 
                                    $m9 = $m9 + 1;
                                    $b9 = $b9 + $biaya;
                                  break;
                                  case 10: 
                                    $m10 = $m10 + 1;
                                    $b10 = $b8 + $biaya;
                                  break;
                                  case 11: 
                                    $m11 = $m11 + 1;
                                    $b11 = $b11 + $biaya;
                                  break;
                                  case 12: 
                                    $m12 = $m12 + 1;
                                    $b12 = $b12 + $biaya;
                                  break;
                                  case 13: 
                                    $m13 = $m13 + 1;
                                    $b13 = $b13 + $biaya;
                                  break;
                                  case 14: 
                                    $m14 = $m14 + 1;
                                    $b14 = $b14 + $biaya;
                                  break;
                                  case 15: 
                                    $m15 = $m15 + 1;
                                    $b15 = $b15 + $biaya;
                                  break;
                                  case 16: 
                                    $m16 = $m16 + 1;
                                    $b16 = $b16 + $biaya;
                                  break;
                                  case 17: 
                                    $m17 = $m17 + 1;
                                    $b17 = $b17 + $biaya;
                                  break;
                                  case 18: 
                                    $m18 = $m18 + 1;
                                    $b18 = $b18 + $biaya;
                                  break;
                                  case 19: 
                                    $m19 = $m19 + 1;
                                    $b19 = $b19 + $biaya;
                                  break;
                                  case 20: 
                                    $m20 = $m20 + 1;
                                    $b20 = $b21 + $biaya;
                                  break;
                                  case 21: 
                                    $m21 = $m21 + 1;
                                    $b21 = $b21 + $biaya;
                                  break;
                                  case 22: 
                                    $m22 = $m22 + 1;
                                    $b22 = $b22 + $biaya;
                                  break;
                                  case 23: 
                                    $m23 = $m23 + 1;
                                    $b23 = $b23 + $biaya;
                                  break;
                                }
                              }
                            }
                            if($motor == null){
                              $motor = 0;
                            }
                            if($mobil == null){
                              $mobil = 0;
                            }
                            if($helm == null){
                              $helm = 0;
                            }
                            if($masalah == null){
                              $masalah = 0;
                            }
                            if($member == null){
                              $member = 0;
                            }
                            if($kasir == null){
                              $kasir = 0;
                            }
                            if($motorTot == null){
                              $motorTot = 0;
                            }
                            if($mobilTot == null){
                              $mobilTot = 0;
                            }
                            
                            $pendapatan = $mobil + $motor + $helm;
                            $total = $pendapatan + $masalah + $member + $kasir;
                            
                            if($i == 1){
                              $TOTAL_TURI = $total;
                            }
                            if($i == 2){
                              $TOTAL_PGS = $total;
                            }
                            if($i == 3){
                              $TOTAL_TUBAN = $total;
                            }
                            
                            $con->close();
                          }
                          echo "all";
                        }
                        $isFilter = true;
                        echo "Filter SUkses";
                    }
                    
                }

                ?>


              <?php if(@$isFilter){ ?>

          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <!-- <h3><sup style="font-size: 20px">Rp. </sup>29,012,000</h3> -->
                  <h3><sup style="font-size: 20px">Rp. </sup><?php echo number_format($motor,0,',',','); ?></h3>
                  <p>Pendapatan Motor</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3><sup style="font-size: 20px">Rp. </sup><?php echo number_format($mobil,0,',',','); ?></h3>

                  <p>Pendapatan Mobil</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3><sup style="font-size: 20px">Rp. </sup><?php echo number_format($helm,0,',',','); ?></h3>

                  <p>Pendapatan Helm</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3><sup style="font-size: 20px">Rp. </sup><?php echo number_format($pendapatan,0,',',','); ?></h3>

                  <p>Pendapatan</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3><sup style="font-size: 20px">Rp. </sup><?php echo number_format($masalah,0,',',','); ?></h3>

                  <p>Tiket Masalah</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3><sup style="font-size: 20px">Rp. </sup><?php echo number_format($member,0,',',','); ?></h3>

                  <p>Pendapatan Member</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3><sup style="font-size: 20px">Rp. </sup><?php echo number_format($kasir,0,',',','); ?></h3>

                  <p>(+-)Setoran Kasir</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3><sup style="font-size: 20px">Rp. </sup><?php echo number_format($total,0,',',','); ?></h3>

                  <p>Total Pendapatan</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <div class="row">
            <div class="col-lg-12 col-6">
              <canvas id="pendapatan" ></canvas>
            </div>
            <div class="col-lg-6 col-6">
              <canvas id="myChart" ></canvas>
            </div>
            <div class="col-lg-6 col-6">
              <canvas id="myChart1" ></canvas>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <!-- <h3><sup style="font-size: 20px">Rp. </sup>29,012,000</h3> -->
                  <h3 style="font-size: 26px"><sup style="font-size: 20px">Rp. </sup><?php echo number_format($shift1,0,',',','); ?></h3>
                  <p>Shift 1</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3 style="font-size: 26px"><sup style="font-size: 20px">Rp. </sup><?php echo number_format($shift2,0,',',','); ?></h3>

                  <p>Shift 2</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3 style="font-size: 26px"><sup style="font-size: 20px">Rp. </sup><?php echo number_format($shift3,0,',',','); ?></h3>

                  <p>Shift 3</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3 style="font-size: 26px"><sup style="font-size: 20px">Rp. </sup><?php echo number_format($bersih,0,',',','); ?></h3>

                  <p>Pendapatan Bersih</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <div class="row">
            <div class="col-lg-12 col-6">
                <canvas id="masalah" ></canvas>
            </div>
            <div class="col-lg-12 col-6">
                <canvas id="hari" ></canvas>
            </div>
          </div>

              <?php if($isAll){ ?>
                <div class="row">
                  <div class="col-lg-12 col-6">
                      <canvas id="totalwilayah" ></canvas>
                  </div>
                </div>
              <?php } ?>

          <div class="row">
            <div class="col-lg-16 col-6">
              <canvas id="ProporsiKendaraanParkir" ></canvas>
            </div>
          </div>
            <?php } ?>
     
         
         


         
        
     
        

          


            
   

            

         
        
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2020 <a href="https://lug-surabaya.com/">LUG</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 0.0.1
      </div>
    </footer>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
  <script>

var ctxx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctxx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {// waktu
        labels: ['0', '1', '2', '3', '4', '5', '6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23'],
        datasets: [{
            label: 'kendaraan masuk',
            backgroundColor: 'rgba(0, 0, 0, 0.1)',
            borderColor: 'rgb(255, 99, 132)',
            data: [<?php echo $m24; ?>,<?php echo $m1; ?>, <?php echo $m2; ?>, <?php echo $m3; ?>, <?php echo $m4; ?>, <?php echo $m5; ?>, <?php echo $m6; ?>, <?php echo $m7; ?>,<?php echo $m8; ?>,<?php echo $m9; ?>,<?php echo $m10; ?>,<?php echo $m11; ?>,<?php echo $m12; ?>,<?php echo $m13; ?>,<?php echo $m14; ?>,<?php echo $m15; ?>,<?php echo $m16; ?>,<?php echo $m17; ?>,<?php echo $m18; ?>,<?php echo $m19; ?>,<?php echo $m20; ?>,<?php echo $m21; ?>,<?php echo $m22; ?>,<?php echo $m23; ?>]
        }]
    },

    // Configuration options go here
    options: {}
});

var ctx1 = document.getElementById('myChart1').getContext('2d');
var chart = new Chart(ctx1, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
      labels: ['0', '1', '2', '3', '4', '5', '6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23'],
        datasets: [{
            label: 'Pendapatan Per Periode',
            backgroundColor: 'rgba(0, 0, 0, 0.1)',
            borderColor: 'rgb(255, 99, 132)',
            data: [<?php echo $b24; ?>,<?php echo $b1; ?>, <?php echo $b2; ?>, <?php echo $b3; ?>, <?php echo $b4; ?>, <?php echo $b5; ?>, <?php echo $b6; ?>, <?php echo $b7; ?>,<?php echo $b8; ?>,<?php echo $b9; ?>,<?php echo $b10; ?>,<?php echo $b11; ?>,<?php echo $b12; ?>,<?php echo $b13; ?>,<?php echo $b14; ?>,<?php echo $b15; ?>,<?php echo $b16; ?>,<?php echo $b17; ?>,<?php echo $b18; ?>,<?php echo $b19; ?>,<?php echo $b20; ?>,<?php echo $b21; ?>,<?php echo $b22; ?>,<?php echo $b23; ?>]
        }]
    },

    // Configuration options go here
    options: {}
});

var ctx = document.getElementById( "pendapatan" );
    ctx.height = 100;
    var myChart = new Chart( ctx, {
        type: 'line',
        data: {
            labels: [<?php while ($d = mysqli_fetch_array($resPendapatan)) { echo '"' . $d['waktu_in'] . '",';}?>],
            datasets: [
                {
                    label: "Pendapatan",
                    data: [<?php while ($s = mysqli_fetch_array($resPendapatan1)) { echo '"' . $s['biayatotal'] . '",';}?>],
                    borderColor: "rgba(0, 123, 255, 0.9)",
                    borderWidth: "0",
                    backgroundColor: "rgba(0, 123, 255, 0.5)"
                            }
                        ]
        },
        options: {
            scales: {
                yAxes: [ {
                    ticks: {
                        beginAtZero: true
                    }
                                } ]
            }
        }
    } );

    var ctx = document.getElementById( "hari" );
    ctx.height = 100;
    var myChart = new Chart( ctx, {
        type: 'line',
        data: {
            labels: ["Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu"],
            datasets: [
                {
                    label: "Volume Parkir",
                    data: [<?php echo $senin; ?>, <?php echo $selasa; ?>, <?php echo $rabu; ?>, <?php echo $kamis; ?>, <?php echo $jumat; ?>, <?php echo $sabtu; ?>, <?php echo $minggu; ?> ],
                    borderColor: "rgba(0, 123, 255, 0.9)",
                    borderWidth: "0",
                    backgroundColor: "rgba(0, 123, 255, 0.5)"
                            }
                        ]
        },
        options: {
            scales: {
                yAxes: [ {
                    ticks: {
                        beginAtZero: true
                    }
                                } ]
            }
        }
    } );

    var ctxm = document.getElementById( "masalah" );
    ctxm.height = 100;
    var myChart = new Chart( ctxm, {
        type: 'bar',
        data: {
            labels: [<?php while ($d = mysqli_fetch_array($resMasalah)) { echo '"' . $d['tanggal'] . '",';}?>],
            datasets: [
                {
                    label: "Tiket Masalah",
                    data: [<?php while ($s = mysqli_fetch_array($resMasalah1)) { echo '"' . $s['jumlah_tiketmasalah'] . '",';}?>],
                    borderColor: "rgba(0, 123, 255, 0.9)",
                    borderWidth: "0",
                    backgroundColor: "rgba(0, 123, 255, 0.5)"
                            }
                        ]
        },
        options: {
            scales: {
                yAxes: [ {
                    ticks: {
                        beginAtZero: true
                    }
                                } ]
            }
        }
    } );

    //pie chart
    var ctx = document.getElementById( "ProporsiKendaraanParkir" );
    ctx.height = 200;
    var myChart = new Chart( ctx, {
        type: 'pie',
        data: {
            datasets: [ {
                data: [ <?php echo $totalVolume;?>, <?php echo $motorTot; ?>, <?php echo $mobilTot;?> ],
                backgroundColor: [
                                    "rgba(0, 123, 255,0.9)",
                                    "rgba(0, 123, 255,0.7)",
                                
                                    "rgba(0,0,0,0.07)"
                                ],
                hoverBackgroundColor: [
                                    "rgba(0, 123, 255,0.9)",
                                    "rgba(0, 123, 255,0.7)",
                          
                                    "rgba(0,0,0,0.07)"
                                ]

                            } ],
            labels: [
                            "Vol Total Ken",
                            "R2 out",
                            "R4 out"
                            
                        ]
        },
        options: {
            responsive: true
        }
    } );

    var ctx = document.getElementById( "totalwilayah" );
    ctx.height = 100;
    var myChart = new Chart( ctx, {
        type: 'bar',
        data: {
            labels: ['TURI','PGS','TUBAN'],
            datasets: [
                {
                    label: "Total Wilayah",
                    data: [<?php echo $TOTAL_TURI; ?>, <?php echo $TOTAL_PGS; ?>, <?php echo $TOTAL_TUBAN; ?>],
                    borderColor: "rgba(0, 123, 255, 0.9)",
                    borderWidth: "0",
                    backgroundColor: "rgba(0, 123, 255, 0.5)"
                            }
                        ]
        },
        options: {
            scales: {
                yAxes: [ {
                    ticks: {
                        beginAtZero: true
                    }
                                } ]
            }
        }
    } );

    



    

  </script>
</body>
<?php 
}
?>
</html>
