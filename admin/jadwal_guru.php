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
      <title>jadwal guru</title>

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
          <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
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
      <aside>
        <div id="sidebar" class="nav-collapse ">
          <!-- sidebar menu start-->
          <ul class="sidebar-menu">
            <li class="active">
              <a class="" href="home.php">
                <i class="icon_house_alt"></i>
                <span>Home</span>
              </a>
            </li>
            <li class="sub-menu">
              <a href="javascript:;" class="">
                <i class="icon_documents_alt"></i>
                <span>Tambahan</span>
                <span class="menu-arrow arrow_carrot-right"></span>
              </a>
              <ul class="sub">
                <li><a class="" href="paket.php">Paket</a></li>
                <li><a class="" href="mapel.php"><span>Mapel</span></a></li>
                <li><a class="" href="list_harga.php"><span>list_harga</span></a></li>
                <li><a class="" href="list_jadwal.php">list_jadwal</a></li>
                <li><a class="" href="jadwal_guru.php">jadwal_guru</a></li>
              </ul>
            </li>
            <li class="sub-menu">
              <a href="pengajar.php" class="">
                <i class="icon_genius"></i>
                <span>Pengajar</span>
              </a>
            </li>
            <li class="sub-menu">
              <a href="pendaftar_reguler.php" class="">
                <i class="icon_document_alt"></i>
                <span>Pendaftar Reguler</span>
              </a>
            </li>
            <li>
              <a class="" href="pendaftar_privat.php">
                <i class="icon_document_alt"></i>
                <span>Pendaftar Privat</span>
              </a>
            </li>
            <li>
              <a class="" href="regis_pembayaran.php">
                <i class="icon_piechart"></i>
                <span>Regis Pembayaran</span>
              </a>
            </li>
            <li class="sub-menu">
              <a href="peserta_privat.php" class="">
                <i class="icon_documents_alt"></i>
                <span>Peserta Privat</span>
              </a>
            </li>

            <li class="sub-menu">
              <a href="peserta_reguler.php" class="">
                <i class="icon_documents_alt"></i>
                <span>Peserta Reguler</span>
              </a>
            </li>

          </ul>
          <!-- sidebar menu end-->
        </div>
      </aside>
      <!--sidebar end-->

      <!--main content start-->
      <section id="main-content">
        <section class="wrapper">
          <!--overview start-->
          <div class="row">
            <div class="col-lg-12">
              <h3 class="page-header"><i class="fa fa-laptop"></i> Jadwal Guru</h3>
              <ol class="breadcrumb">
                <li><i class="fa fa-home"></i><a href="home.php">Home</a></li>
                <li><i class="fa fa-laptop"></i><a href="#">Tambahan</a></li>
                <li><i class="fa fa-table"></i><a href="jadwal_guru.php">Jadwal Guru</a></li>
              </ol>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-12">
              <section class="panel">
                <header class="panel-heading">
                  Advanced Table<br>
                  <!--  search form start -->
                  <!--  search form end -->
                </header>
                <table class="table table-striped table-advance table-hover">
                  <tbody>
                    <tr>
                      <th>No</th>
                      <th> ID Jadwal Guru</th>
                      <th><i class="icon_mobile"></i> Jadwal</th>
                      <th><i class="icon_profile"></i> Jadwal Tempat</th>
                      <th><i class="icon_calendar"></i> Mata Pelajaran</th>
                      <th><i class="icon_cogs"></i> Jenis Kelas</th>
                      <th><i class="icon_cogs"></i> Guru</th>
                      <th><i class="icon_cogs"></i> Action</th>
                      <th><a class="btn btn-success" href="tambah_jadwal_guru.php"><i class="icon_plus_alt2"></i></a></th>
                    </tr>
                    <?php
                    error_reporting(0);
                    $sql = mysqli_query($con,"SELECT * from jadwal_guru INNER JOIN list_jadwal ON jadwal_guru.jadwal=list_jadwal.id_jadwal INNER JOIN mapel ON jadwal_guru.mapel=mapel.id_mapel INNER JOIN guru On jadwal_guru.kd_guru=guru.kd_guru");
                    $a=1;
                    while ($row = mysqli_fetch_array($sql)) {
                      echo "
                      <tr>
                      <td>$a</td>
                      <td>$row[kd_jg]</td>
                      <td>$row[hari], $row[jam] - $row[sampai]</td>
                      <td>$row[jadwal_tempat]</td>
                      <td>$row[mapel]</td>
                      <td><span class=\"badge badge-success\">$row[jenis_kelas]</span></td>
                      <td>$row[nama_guru]</td>
                      <td>
                      <div class=\"btn-group\">
                      <a class=\"btn btn-primary\" href=\"edit_jadwal_guru.php?ni=$row[kd_jg];\"><i class=\"icon_document_alt\"></i></a>
                      <a class=\"btn btn-danger\" href=\"hapus_jadwal_guru.php?ni=$row[kd_jg];\" onclick=\"return confirm('yakin mau di hapus ?');\"><i class=\"icon_close_alt2\"></i></a>
                      </td>";
                      $a++;
                    }
                    ?>
                  </tbody>
                </table>
                
              </section>
            </div>
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
