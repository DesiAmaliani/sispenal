<?php
  session_start();
  include "koneksi.php";

  if (empty($_SESSION['username']) and empty($_SESSION['password'])) {

  echo "<center>Untuk mengakses halaman ini, anda harus login terlebih dahulu <br>";

  echo "<a href=index.php><b>LOGIN</b></a></center>"; }

else {
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">
  <title>Jadwal Guru</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- full calendar css-->
  <link href="assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
  <link href="assets/fullcalendar/fullcalendar/fullcalendar.css" rel="stylesheet" />
  <!-- easy pie chart-->
  <link href="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.css" rel="stylesheet" type="text/css" media="screen" />
  <!-- owl carousel -->
  <link rel="stylesheet" href="css/owl.carousel.css" type="text/css">
  <link href="css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
  <!-- Custom styles -->
  <link rel="stylesheet" href="css/fullcalendar.css">
  <link href="css/widgets.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />
  <link href="css/xcharts.min.css" rel=" stylesheet">
  <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">

  <!-- =======================================================
    Theme Name: NiceAdmin
    Theme URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
    Author: BootstrapMade
    Author URL: https://bootstrapmade.com
  ======================================================= -->
</head>

<body>
  <!-- container section start -->
  <section id="container" class="">


    <header class="header dark-bg">
      <div class="toggle-nav">
      </div>

      <!--logo start-->
      <a href="home.php" class="logo"><img src="img/ufufu.png" style="width: 170px; margin-top: -10px;"></a>
      <!--logo end-->

      <div class="nav search-row" id="top_menu">
        <!--  search form start -->
        <ul class="nav top-menu">
        </ul>
        <!--  search form end -->
      </div>

      <div class="top-nav notification-row">
        <!-- notificatoin dropdown start-->
          <!-- alert notification end-->
          <!-- user login dropdown start-->
          <li class="dropdown">
            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="" src="img/avatar1_small.jpg">
                            </span>
                            <span class="username"><?php echo $_SESSION['username'];?></span>
                            <b class="caret"></b>
                        </a>
            <ul class="dropdown-menu extended logout">
              <div class="log-arrow-up"></div>
              <li class="eborder-top">
              <li>
                <a href="log_out.php"><i class="icon_key_alt"></i>Log Out</a>
              </li>
            </ul>
          </li>
          <!-- user login dropdown end -->
        </ul>
        <!-- notificatoin dropdown end-->
      </div>
    </header>
    <!--header end-->

    <!--sidebar start-->
    <?php
      if(isset($_GET['ni'])){
          $ni=$_GET['ni'];
          $query=mysqli_query($con,'SELECT jadwal,jadwal_tempat,mapel,jenis_kelas,kd_guru from jadwal_guru where kd_jg="'.$ni.'"');
          $data=mysqli_fetch_array($query);
          $jadwal=$data['jadwal'];
          $jadwal_tempat=$data['jadwal_tempat'];
          $mapel=$data['mapel'];
          $jenis_kelas=$data['jenis_kelas'];
          $kd_guru=$data['kd_guru'];

        }else{
          $jadwal='';
          $jadwal_tempat='';
          $mapel='';
          $jenis_kelas='';
          $kd_guru='';
        }
    ?>
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Edit Mata Pelajaran</h3>
          </div>
        </div>
         <div class="row">
          <div class="col-lg-6">
            <section class="panel">
              <header class="panel-heading">
                Form Edit Mata Pelajaran
              </header>
              <form method="post" action="aksi_edit_jadwal_guru.php">
              <div class="panel-body">
                <form role="form">
                  <div class="form-group">
                    <label for="exampleInputEmail1">ID Jadwal Guru</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="kd Jadwal" name="kd_jg" value="<?php echo $_GET['ni'];?>" readonly="readonly">
                  </div>
                  <div class="form-group">
                    <label class="exampleInputEmail1">Jenis Kelas</label>
                      <select class="form-control" name="jenis_kelas" required>
                                              <option hidden="" value="<?php echo $jenis_kelas;?>"><?php echo $jenis_kelas;?></option>
                                              <option value="Regular">Regular</option>
                                              <option value="Privat">Privat</option>
                                          </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jadwal</label><br>
                    <select class="form-control" name="jadwal">
                      <?php
                      $d = mysqli_query($con,"SELECT *from jadwal_guru inner join list_jadwal on jadwal_guru.jadwal=list_jadwal.id_jadwal inner join paket on list_jadwal.paket=paket.id_paket");
                        while($data_paket = mysqli_fetch_array($d)){?>
                      <option hidden="" value="<?php echo $jadwal;?>"><?php echo $data_paket['jenis_kelas'].' , '.$data_paket['tingkat'].' , '.$data_paket['hari'].' , '.$data_paket['jam'].' - '.$data_paket['sampai']?></option><?php
                    }?>
                      <option>---Pilih---</option>
                    <?php
                        $d = mysqli_query($con,"SELECT *from list_jadwal inner join paket on list_jadwal.paket=paket.id_paket");
                        while($data = mysqli_fetch_array($d)){ 
                            echo '<option value="'.$data['id_jadwal'].'">'.$data['jenis_kelas'].' , '.$data['tingkat'].' , '.$data['hari'].', '.$data['jam'].' - '.$data['sampai'].'</option>';
                        }?>
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jadwal Tempat</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Jadwal Tempat" name="jadwal_tempat"  value="<?php echo $jadwal_tempat;?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Mata Pelajaran</label>
                    <select class="form-control" name="mapel" required>
                      <?php
                      $d = mysqli_query($con,"SELECT *from jadwal_guru inner join mapel on jadwal_guru.mapel=mapel.id_mapel");
                        while($data_paket = mysqli_fetch_array($d)){?>
                      <option hidden="" value="<?php echo $mapel;?>"><?php echo $data_paket['mapel'];?></option><?php }?>
                      <option>---Pilih---</option>
                    <?php
                        $d = mysqli_query($con,"SELECT *from mapel");
                        while($data = mysqli_fetch_array($d)){ 
                            echo '<option value="'.$data['id_mapel'].'">'.$data['mapel'].'</option>';
                        }?>
                      </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Guru</label>
                    <select class="form-control" name="kd_guru" required>
                      <?php
                      $d = mysqli_query($con,"SELECT *from jadwal_guru inner join guru on jadwal_guru.kd_guru=guru.kd_guru");
                        while($data_paket = mysqli_fetch_array($d)){?>
                      <option hidden="" value="<?php echo $kd_guru;?>"><?php echo $data_paket['nama_guru'];?></option><?php }?>
                      <option>---Pilih---</option>
                    <?php
                        $d = mysqli_query($con,"SELECT *from guru");
                        while($data = mysqli_fetch_array($d)){ 
                            echo '<option value="'.$data['kd_guru'].'">'.$data['nama_guru'].'</option>';
                        }?>
                      </select>
                  </div>
                  <button type="submit" class="btn btn-primary" name="submit">Edit</button></form>
                  <a button type="submit" class="btn btn-danger" href="jadwal_guru.php">Batal</button></a>
                

              </div>
            </section>
          </div>
    </section>
    <!--main content end-->
  </section>
  <!-- container section start -->

  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/jquery-ui-1.10.4.min.js"></script>
  <script src="js/jquery-1.8.3.min.js"></script>
  <script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>
  <!-- bootstrap -->
  <script src="js/bootstrap.min.js"></script>
  <!-- nice scroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!-- charts scripts -->
  <script src="assets/jquery-knob/js/jquery.knob.js"></script>
  <script src="js/jquery.sparkline.js" type="text/javascript"></script>
  <script src="assets/jquery-easy-pie-chart/jquery.easy-pie-chart.js"></script>
  <script src="js/owl.carousel.js"></script>
  <!-- jQuery full calendar -->
  <<script src="js/fullcalendar.min.js"></script>
    <!-- Full Google Calendar - Calendar -->
    <script src="assets/fullcalendar/fullcalendar/fullcalendar.js"></script>
    <!--script for this page only-->
    <script src="js/calendar-custom.js"></script>
    <script src="js/jquery.rateit.min.js"></script>
    <!-- custom select -->
    <script src="js/jquery.customSelect.min.js"></script>
    <script src="assets/chart-master/Chart.js"></script>

    <!--custome script for all page-->
    <script src="js/scripts.js"></script>
    <!-- custom script for this page-->
    <script src="js/sparkline-chart.js"></script>
    <script src="js/easy-pie-chart.js"></script>
    <script src="js/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="js/jquery-jvectormap-world-mill-en.js"></script>
    <script src="js/xcharts.min.js"></script>
    <script src="js/jquery.autosize.min.js"></script>
    <script src="js/jquery.placeholder.min.js"></script>
    <script src="js/gdp-data.js"></script>
    <script src="js/morris.min.js"></script>
    <script src="js/sparklines.js"></script>
    <script src="js/charts.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>
    <script>
      //knob
      $(function() {
        $(".knob").knob({
          'draw': function() {
            $(this.i).val(this.cv + '%')
          }
        })
      });

      //carousel
      $(document).ready(function() {
        $("#owl-slider").owlCarousel({
          navigation: true,
          slideSpeed: 300,
          paginationSpeed: 400,
          singleItem: true

        });
      });

      //custom select box

      $(function() {
        $('select.styled').customSelect();
      });

      /* ---------- Map ---------- */
      $(function() {
        $('#map').vectorMap({
          map: 'world_mill_en',
          series: {
            regions: [{
              values: gdpData,
              scale: ['#000', '#000'],
              normalizeFunction: 'polynomial'
            }]
          },
          backgroundColor: '#eef3f7',
          onLabelShow: function(e, el, code) {
            el.html(el.html() + ' (GDP - ' + gdpData[code] + ')');
          }
        });
      });
    </script>

</body>

</html>
<?php
}
?>