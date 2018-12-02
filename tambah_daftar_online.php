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
          // error_reporting(0);
          if (isset($_POST['submit'])) {
            $nama_peserta = $_POST['nama_peserta'];
            $ttl = $_POST['ttl'];
            $jk = $_POST['jk'];
            $no_hp = $_POST['no_hp'];
            $alamat = $_POST['alamat'];
            $paket = $_POST['paket'];
            $mapel_tambah = $_POST['mapel_tambah'];
            $jadwal = $_POST['jadwal'];

            if($jk == 1){
              $jk = "laki-laki";
            }else{
              $jk = "perempuan";
            }



            $add = mysqli_query($con,"INSERT into peserta_reguler (nama_peserta,ttl,jk,no_hp,alamat, paket, mapel_tambah, jadwal,status) VALUES('$nama_peserta','$ttl','$jk','$no_hp','$alamat','$paket','$mapel_tambah',$jadwal,'0')");
            if ($add) { ?>
              <div class="row about-cols">
                <div class="col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                  <div class="about-col"><br><br>
                    <h5 align="center">Data Berhasil Dikirim</h5>
                    <br><br>
                    <div class="col-md-12">
                      <table border="0" style="width: 40%">
                        <tr>
                          <th>Nama</th>
                          <td><?php echo $nama_peserta ?></td>
                        </tr>
                        <tr>
                        
                      </tr>
                    </table>
                  </div>
                  <div><br>
                    <p>Silahkan melanjutkan ke proses transaksi pembayaran</p>
                  </div>
                  <div class="col-md-12">
                    <table border="0" style="width: 40%">
                      <tr>
                        <th>BCA</th>
                        <td>1111 1111111 1</td>
                      </tr>
                      <tr>
                        <th>BRI</th>
                        <td>22222 222 2222</td>
                      </tr>
                    </table>
                  </div>
                  <div class="col-md-12"><br><br>
                    <ol start="1" type="1">
                      <li> Pembayaran dilakukan 1x24 jam setelah data diri dikirim</li>
                      <li> Pastikan Anda telah memasukkan data diri dengan benar</li>
                      <li> Transfer sejumlah biaya sesuai dengan total Bayar yang di atas</li>
                      <li> Pastikan Anda memasukan nominal sesuai dengan biaya yang tertera</li>
                      <li> Ambil dan simpan bukti transaksi pembayaran Anda, kemudian foto atau scan dan kirim ke form registrasi pembayaran dibawah ini</li>
                      <a href="registrasi.php">Registrasi</a>
                      <li> Atau registrasi bisa di lakukan di menu Daftar Online , terus klik tombol registrasi</li>
                    </ol>
                  </div>
                  <br><br>
                  <center><a href="daftar_online.php">Kembali</a></center><br>
                </div>
              </div>
            </div>
          </section>
          <?php
        }else{
          header('location:daftar_online.php?i=gagal');
        }
      }else{
        header('location:daftar_online.php');
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
                  <li><i class="ion-ios-arrow-right"></i> <a href="kontak.html">Kontak</a></li>
                </div>

                <div class="col-lg-3 col-md-6 footer-links">
                  <h4>Tentang</h4>
                  <ul>
                    <li><i class="ion-ios-arrow-right"></i> <a href="tentang.php">Catatan Sejarah</a></li>
                    <li><i class="ion-ios-arrow-right"></i> <a href="list_pengajar.php">List Pengajar</a></li>
                    <li><i class="ion-ios-arrow-right"></i> <a href="program_tambahan.php">Program Tambahan</a></li>
                  </div>

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