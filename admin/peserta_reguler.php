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

  <title>pendaftar reguler</title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />

</head>

<body>
  <!-- container section start -->
  <section id="container" class="">
    <!--header start-->
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
    <section id="main-content">
      <section class="wrapper">
        <!--overview start-->
        <div class="row">
          <div class="col-lg-12">
            <h3 class="page-header"><i class="fa fa-laptop"></i>Pendaftar Reguler</h3>
            <ol class="breadcrumb">
              <li><i class="fa fa-home"></i><a href="home.php">Home</a></li>
              <li><i class="fa fa-table"></i><a href="pengajar.php">Pendaftar Reguler</a></li>
            </ol>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <section class="panel">
              <header class="panel-heading">
                Advanced Table
              </header>

              <table class="table table-striped table-advance table-hover">
                <tbody>
                  <tr>
                    <th>No</th>
                    <th><i class="icon_profile"></i> Nama Peserta</th>
                    <th><i class="icon_calendar"></i> Tempat Tanggal Lahir</th>
                    <th><i class="icon_profile"></i> Jenis Kelamin</th>
                    <th><i class="icon_mobile"></i> No HP</th>
                    <th><i class="icon_pin_alt"></i> Alamat</th>
                    <th><i class="icon_mail_alt"></i> Paket</th>
                    <th><i class="icon_mail_alt"></i> Mapel Tambahan</th>
                    <th><i class="icon_calendar"></i> Jadwal</th>
                    <th><i class="icon_calendar"></i> Kelas</th>
                    <th><i class="icon_cogs"></i> Status</th>
                    <th><i class="icon_cogs"></i> Action</th>
                  </tr>
                  <?php
                  error_reporting(0);
                  $sql = mysqli_query($con,"SELECT nama_peserta,ttl,jk,no_hp,alamat,paket,mapel,jadwal,kelas FROM peserta_reguler WHERE status='1' ORDER BY nama_peserta ASC");
                  while ($row = mysqli_fetch_array($sql)) {
                    echo "
                    <tr>
                    $a=1;
                      <td>a++</td>
                      <td>$row[nama_peserta]</td>
                      <td>$row[ttl]</td>
                      <td>$row[jk]</td>
                      <td>$row[no_hp]</td>
                      <td>$row[alamat]</td>
                      <td>$row[paket]</td>
                      <td>$row[mapel]</td>
                      <td>$row[jadwal]</td>
                      <td>$row[kelas]</td>
                      <td><span class=\"badge badge-success\">Peserta</span></td>
                      <td>
                      <button type=\"button\" class=\"btn btn-success\")'><i class=\"icon_pencil_alt2\"></i></button>
                      <button type=\"button\" class=\"btn btn-danger\" href=\"hapus_reguler.php?ni=<?php a++;?>\" onclick=\"return confirm('yakin mau di hapus ?');\"\")'><i class=\"icon_close_alt2\"></i></button></td>";
                  }
                  ?>
                </tbody>
              </table>
            </section>
          </div>
        </div>
        <!-- page end-->
      </section>
    </section>
    <!--main content end-->
    <div class="text-right">
      <div class="credits">
          
        </div>
    </div>
  </section>
  <!-- container section end -->
  <!-- javascripts -->
  <script src="js/jquery.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <!-- nicescroll -->
  <script src="js/jquery.scrollTo.min.js"></script>
  <script src="js/jquery.nicescroll.js" type="text/javascript"></script>
  <!--custome script for all page-->
  <script src="js/scripts.js"></script>
</body>

</html>
<?php
}
?>