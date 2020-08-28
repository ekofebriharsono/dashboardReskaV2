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
          <?php

if(isset($_GET['lokasi'])){
  if($_GET['lokasi'] == 'pgs'){
    include 'proses/koneksi_pgs.php';
} else if($_GET['lokasi'] == 'tuban'){
    include 'proses/koneksi_tuban.php';
} else {
    include 'proses/koneksi.php';
}

}   else {
  include 'proses/koneksi.php';
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

if(isset($_GET['tanggal_start']) && isset($_GET['tanggal_end'])){

  if($_GET['tanggal_start'] !='' && $_GET['tanggal_end'] !='' ){
    $tgl_start = $_GET['tanggal_start'];
    $tgl_end = $_GET['tanggal_end'];
    $sqlMotor = "select sum(biayatotal) as totalParkirMotor from t_parkir where status = 'S' and waktu_out BETWEEN cast('$tgl_start' as date) and cast('$tgl_end' as date)";
    $sqlMobil = "select sum(biayatotal) as totalParkirMobil from t_parkir where status = 'B' and waktu_out BETWEEN cast('$tgl_start' as date) and cast('$tgl_end' as date)";
  } else {
    $sqlMotor = "select sum(biayatotal) as totalParkirMotor from t_parkir where status = 'S'";
    $sqlMobil = "select sum(biayatotal) as totalParkirMobil from t_parkir where status = 'B'";
  }
 
} else {
  $sqlMotor = "select sum(biayatotal) as totalParkirMotor from t_parkir where status = 'S'";
  $sqlMobil = "select sum(biayatotal) as totalParkirMobil from t_parkir where status = 'B'";
}


$sqlParkirMotor = $sqlMotor;
$resParkirMotor = mysqli_query($con,$sqlParkirMotor);
$rowParkirMotor = mysqli_fetch_array($resParkirMotor);

$sqlParkirMobil = $sqlMobil;
$resParkirMobil = mysqli_query($con,$sqlParkirMobil);
$rowParkirMobil = mysqli_fetch_array($resParkirMobil);

$motor = $rowParkirMotor['totalParkirMotor'];
$mobil = $rowParkirMobil['totalParkirMobil'];

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

$pendapatan = $mobil + $motor + $helm;
$total = $pendapatan + $masalah + $member + $kasir;

$con->close();


?>

          <form action="index.php" method="get">
          <label for="cars">Pilih Server:</label>

          <select name="lokasi" id="cars">
            <option value="ps_turi">Pasar Turi</option>
            <option value="pgs">PGS</option>
            <option value="tuban">Tuban</option>
          </select>
          <br>
          <label for="cars">Pilih Tanggal:</label>

          <input type="date" name="tanggal_start"/>

          <label for="cars">Sampai</label>

          <input type="date" name="tanggal_end"/>

          <input type="submit" value="filter">
          
          </form>
          <form action="index.php" method="post">
          <input type="submit" value="reset">
          </form>
          <br>
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


          <!-- /.row -->
          <!-- Main row -->
          <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6 col-6">
              <canvas id="myChart" ></canvas>
            </div>
            <div class="col-lg-6 col-6">
              <canvas id="myChart1" ></canvas>
            </div>

            <div class="col-lg-6 col-6">
              <canvas id="wilayah1" ></canvas>
            </div>
            <div class="col-lg-6 col-6">
              <canvas id="wilayah2" ></canvas>
            </div>

          </div>
        </div>
          <!-- /.row (main row) -->
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
    var ctx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [{
            label: 'Pendapatan Per Periode',
            backgroundColor: 'rgba(0, 0, 0, 0.1)',
            borderColor: 'rgb(255, 99, 132)',
            data: [10, 20.5, 15, 24, 25, 18, 20]
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
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [{
            label: 'Pendapatan Per Periode',
            backgroundColor: 'rgba(0, 0, 0, 0.1)',
            borderColor: 'rgb(255, 99, 132)',
            data: [10, 20.5, 15, 24, 25, 18, 20]
        }]
    },

    // Configuration options go here
    options: {}
});

var ctx = document.getElementById( "wilayah1" );
    ctx.height = 100;
    var myChart = new Chart( ctx, {
        type: 'bar',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [
                {
                    label: "Wilayah 1",
                    data: [10, 20.5, 15, 24, 25, 18, 20],
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

    var ctx = document.getElementById( "wilayah2" );
    ctx.height = 100;
    var myChart = new Chart( ctx, {
        type: 'bar',
        data: {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [
                {
                    label: "Wilayah 1",
                    data: [10, 20.5, 15, 24, 25, 18, 20],
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
