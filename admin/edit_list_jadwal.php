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
  <title>List Jadwal</title>

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
          $query=mysqli_query($con,'SELECT * from list_jadwal where id_jadwal="'.$ni.'"');
          $data=mysqli_fetch_array($query);
          $hari=$data['hari'];
          $hari2=$data['hari2'];
          $jam=$data['jam'];
          $sampai=$data['sampai'];
          $paket=$data['paket'];
          $jenis_kelas=$data['jenis_kelas'];
        }else{
          $hari='';
          $hari2='';
          $jam='';
          $sampai='';
          $paket='';
          $jenis_kelas='';
        }
    ?>
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i> Edit List Jadwal</h3>
          </div>
        </div>
         <div class="row">
          <div class="col-lg-6">
            <section class="panel">
              <header class="panel-heading">
                Form Edit List Jadwal
              </header>
              <form method="post" action="aksi_edit_list_jadwal.php">
              <div class="panel-body">
                <form role="form">
                  <div class="form-group">
                    <label for="exampleInputEmail1">ID Jadwal</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="ID Jadwal" name="id_jadwal" value="<?php echo $_GET['ni'];?>" readonly="readonly">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Hari</label>
                    <select class="form-control" name="hari">
                                              <option hidden="" value="<?php echo $hari;?>"><?php echo $hari;?></option>
                                              <option value="Senin">Senin</option>
                                              <option value="Selasa">Selasa</option>
                                              <option value="Rabu">Rabu</option>
                                              <option value="Kamis">Kamis</option>
                                              <option value="Jumat">Jumat</option>
                                              <option value="Sabtu">Sabtu</option>
                                              <option value="Minggu">Minggu</option>
                                          </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Hari tambahan</label>
                    <select class="form-control" name="hari2">
                                              <option hidden="" value="<?php echo $hari2;?>"><?php echo $hari2;?></option>
                                              <option value="Senin">Senin</option>
                                              <option value="Selasa">Selasa</option>
                                              <option value="Rabu">Rabu</option>
                                              <option value="Kamis">Kamis</option>
                                              <option value="Jumat">Jumat</option>
                                              <option value="Sabtu">Sabtu</option>
                                              <option value="Minggu">Minggu</option>
                                          </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jam</label>
                    <input type="time" class="form-control" id="exampleInputEmail1" placeholder="Jam" name="jam"  value="<?php echo $jam;?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Sampai</label>
                    <input type="time" class="form-control" id="exampleInputEmail1" placeholder="sampai" name="sampai" value="<?php echo $sampai;?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Paket</label>
                    <select class="form-control" name="paket" required>
                      <?php
                      $d_paket = mysqli_query($con,"SELECT *from list_jadwal inner join paket on list_jadwal.paket=paket.id_paket");
                        while($data_paket = mysqli_fetch_array($d_paket)){?>
                      <option hidden="" value="<?php echo $paket;?>"><?php echo $data_paket['tingkat'];?></option><?php }?>
                    <?php
                        $d = mysqli_query($con,"SELECT *from paket");
                        while($data = mysqli_fetch_array($d)){ 
                            echo '<option value="'.$data['id_paket'].'">'.$data['tingkat'].'</option>';
                        }?>
                      </select>
                  </div>
                  <div class="form-group">
                    <label class="exampleInputEmail1">Jenis Kelas</label>
                      <select class="form-control" name="jenis_kelas">
                                              <option hidden="" value="<?php echo $jenis_kelas;?>"><?php echo $jenis_kelas;?></option>
                                              <option value="Regular">Regular</option>
                                              <option value="Privat">Privat</option>
                                          </select>
                  </div>
                  <button type="submit" class="btn btn-primary" name="submit">Edit</button></form>
                  <a button type="submit" class="btn btn-danger" href="list_jadwal.php">Batal</button></a>
                

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