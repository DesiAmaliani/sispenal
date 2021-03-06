<?php
include "admin/koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>tambah daftar online</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/L.jpg" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>

  <!--==========================
    Header
    ============================-->
    <header id="header" style="background-color: black; height: 110px">
      <div class="container-fluid">

        <div class="pull-left">
          <h1><a href="#intro" class="scrollto"><img src="img/ufufu.png" class="img-responsive" style="width: 350px; margin-top: -25px;"></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="#intro"><img src="img/logo.png" alt="" title="" /></a>-->
        </div>

        <nav id="nav-menu-container">
          <div>
            <ul class="nav-menu">
              <li><a href="index.html">Home</a></li>
              <li><a href="tentang.php">Tentang</a></li>
              <li><a href="list_jadwal.php">List Jadwal</a></li>
              <li><a href="galeri.html">Galeri</a></li>
              <li><a href="kontak.html">Kontak</a></li>
            </ul></div><br><br><div>
              <ul class="nav-menu">
                <li><a href="list_harga.php">List Harga</a></li>
                <li><a href="daftar_online.php">Daftar Online</a></li>
                <li><a href="daftar_privat.php">Daftar Privat</a></li>
                <li><a href="list_pengajar.php">List Pengajar</a></li>
              </ul></div>
            </nav><!-- #nav-menu-container -->
          </div>
        </header><!-- #header --><br><br><br><br>

        <main id="main">

    <!--==========================
      Featured Services Section
      ============================-->
    <!--==========================
      About Us Section
      ============================-->
      <section id="about">
        <div class="container">

          <header class="section-header">
          </header>
          <?php
          if(isset($_POST['submit'])){
//tentukan variabel file yg diupload dan tipe file
            $nama_peserta = $_POST['nama_peserta'];
            $tgl_pem = $_POST['tgl_pem'];
            $no_rek = $_POST['no_rek'];
            $total_pem = $_POST['total_pem'];
            $jenis_kelas = $_POST['jenis_kelas'];

            $nama_file = $_FILES['foto']['name'];
            $tmp=$_FILES['foto']['tmp_name'];
            $fotobaru=date('dmYHis').$nama_file;
            $path="admin/galeri/".$fotobaru;

            if (move_uploaded_file($tmp, $path)) {
    # code...
              $sql='insert into registrasi(nama_peserta,tgl_pem,no_rek, total_pem,jenis_kelas,foto) values("'.$nama_peserta.'","'.$tgl_pem.'","'.$no_rek.'","'.$total_pem.'","'.$jenis_kelas.'","'.$fotobaru.'")';
              $query= mysqli_query($con,$sql);

              if ($query) { ?>
                <div class="row about-cols">
                  <div class="col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="about-col"><br><br>
                      <h5 align="center">Registrasi Berhasil</h5>
                      <div><br>
                        <p><center>Peserta kursus reguler maupun privat baru, sudah bisa mengikuti kursus di jam kursus yang dipilih.</center></p>
                      </div>
                      <br><br>
                      <center><a href="registrasi.php">Kembali</a></center><br>
                    </div>
                  </div>
                </div>
              </section>
              </section>
              <?php
            }else{
              header('location:registrasi.php?i=gagal');
            }
            }
          }else{
            header('location:registrasi.php');
          }
          ?>

          <footer id="footer">
            <div class="footer-top">
              <div class="container">
                <div class="row">

                  <div class="col-lg-3 col-md-6 footer-info">
                    <img src="img/ufufu.png" class="img-responsive" style="width: 400px; margin-top: -16px;">
                  </div>

                  <div class="col-lg-3 col-md-6 footer-links">
                  </div>

                  <div class="col-lg-3 col-md-6 footer-links">
                    <h4>Beranda</h4>
                    <ul>
                      <li><i class="ion-ios-arrow-right"></i> <a href="daftar_online.php">Daftar Online</a></li>
                      <li><i class="ion-ios-arrow-right"></i> <a href="daftar_privat.php">Daftar Privat</a></li>
                      <li><i class="ion-ios-arrow-right"></i> <a href="kontak.html">Kontak</a></li></ul>
                    </div>

                    <div class="col-lg-3 col-md-6 footer-links">
                      <h4>Tentang</h4>
                      <ul>
                        <li><i class="ion-ios-arrow-right"></i> <a href="tentang.php">Catatan Sejarah</a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="list_pengajar.php">List Pengajar</a></li>
                        <li><i class="ion-ios-arrow-right"></i> <a href="program_tambahan.php">Program Tambahan</a></li>
                      </div></ul>

                    </div>
                  </div>
                </div>

                <div class="container">
                  <div class="copyright">
                    Copyright &copy; 2018. <strong>AL HIDAYAH |</strong> All Rights Reserved
                  </div>
                  <div class="credits">
        <!--
          All the links in the footer should remain intact.
          You can delete the links only if you purchased the pro version.
          Licensing information: https://bootstrapmade.com/license/
          Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=BizPage
        -->
      </div>
    </div>
  </footer><!-- #footer -->
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
</body>
</html>