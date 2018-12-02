-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 02 Des 2018 pada 15.59
-- Versi server: 10.1.31-MariaDB
-- Versi PHP: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sispenal`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `guru`
--

CREATE TABLE `guru` (
  `kd_guru` int(11) NOT NULL,
  `nama_guru` varchar(100) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `riwayat_pen` varchar(255) NOT NULL,
  `foto` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `guru`
--

INSERT INTO `guru` (`kd_guru`, `nama_guru`, `ttl`, `no_hp`, `alamat`, `riwayat_pen`, `foto`) VALUES
(2, 'Eko Sunanto', 'Cirebon, 14 Desember 1988', '087727481450', 'Jl. MT Haryono gg. Sukandar No 1 Ds. Dermayu', 'SDN Dermayu 1, SMP 1 Sindang, PGRI 2 Sindang, Lulus Kuliah : 2015', '02122018043813eko.jpg'),
(3, 'Sunani', 'Indramayu, 12 September 1995', '087727014203', 'Ds. Wanantara rt/rw 15/04 Kecamatan Sindang', 'SD Babadan III, SMPN 4 Sindang, SMKN 1 Sindang, Kuliah Lulus Tahun : 2017', '01122018145729sunani.jpg'),
(4, 'Khoirul Izzah', 'indramayu, 5 November 1997', '', 'BTN Cideraya Ds Karangsong', 'SDN Margadadi 5, SMP plus Assa\'adah Islamic Boarding School, Man Indramayu', '01122018150001khoirul.jpg'),
(5, 'Ghina Amaliah', 'Cirebon, 15 Juli 1998', '081586794639', 'Ds Pabean Udik Kec. Indramayu, Kab Indramayu', 'SDN Pabean Udik 3 , MTSN 2 Cirebon, MAN 2 Cirebon', '01122018150303ghina.jpg'),
(6, 'Meli Sulistiawati', 'indramayu, 18 Juli 1996', '083824182902', 'Jl. Tanggul Gumiwang Ds. Pabean Udik rt/rw 01/04 Kec/Kab Indramayu', 'SDN Pabean Udik II, SMPN 4 Sindang, SMAN 2 Indramayu , Lulus Kuliah : 2018', '01122018150645meli.jpg'),
(7, 'Bayu Saputro', 'Cilacap, 27 juni ', '089502834021', 'Jl. Pahlawan IV  RT/ RW 03/09 Lemah Mekar Indramayu', 'SDN Negeri Karangayar II, SMPN 1 Sindang, SMKN 1 Indramayu, Fakultas FKIP/ Masih Semester 7', '01122018151249bayu.jpg'),
(8, 'Linda Yuliyah Ningrum', 'Indramayu, 17 Mei 1998', '083148652909', 'Jl Pantai Song Blok Song Tegah RT/RW : 01/02 Karangsong, Indramayu', 'SDN Karangsong 2, SMPN 1 SIndang, SMAN 2 Indramayu,', '01122018151559linda.jpg'),
(9, 'Lali Maulani', 'indramayu, 07 November 1998', '083823155711', 'Ds. Cemara Kulon, Losarang', 'SD Cemara Kulon, Smp 1 Losarang,  MA Khas Kempek, Kuliah Semester 5, Fakultas FAI, Masih Menempuh S1', '02122018044245lali.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal_guru`
--

CREATE TABLE `jadwal_guru` (
  `kd_jg` int(11) NOT NULL,
  `jadwal` int(11) DEFAULT NULL,
  `jadwal_tempat` varchar(255) NOT NULL,
  `mapel` int(11) NOT NULL,
  `jenis_kelas` varchar(50) NOT NULL,
  `kd_guru` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `list_harga`
--

CREATE TABLE `list_harga` (
  `id_harga` int(11) NOT NULL,
  `paket` int(100) NOT NULL,
  `harga` int(100) NOT NULL,
  `jenis_kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `list_harga`
--

INSERT INTO `list_harga` (`id_harga`, `paket`, `harga`, `jenis_kelas`) VALUES
(2, 0, 250000, 'Regular'),
(3, 1, 250000, 'Regular'),
(4, 2, 350000, 'Regular'),
(5, 0, 350000, 'Privat'),
(6, 1, 350000, 'Privat'),
(7, 2, 450000, 'Privat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `list_jadwal`
--

CREATE TABLE `list_jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `hari2` varchar(255) NOT NULL,
  `jam` time NOT NULL,
  `sampai` time NOT NULL,
  `paket` int(30) NOT NULL,
  `jenis_kelas` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `list_jadwal`
--

INSERT INTO `list_jadwal` (`id_jadwal`, `hari`, `hari2`, `jam`, `sampai`, `paket`, `jenis_kelas`) VALUES
(2, 'Senin', '', '12:00:00', '14:00:00', 0, 'Regular'),
(3, 'Senin', '', '15:00:00', '17:00:00', 0, 'Regular'),
(4, 'Kamis', '', '12:00:00', '14:00:00', 0, 'Regular'),
(5, 'Kamis', '', '15:00:00', '17:00:00', 0, 'Regular'),
(6, 'Senin', '', '12:00:00', '14:00:00', 1, 'Regular'),
(7, 'Senin', '', '15:00:00', '17:00:00', 1, 'Regular'),
(8, 'Kamis', '', '12:00:00', '14:00:00', 1, 'Regular'),
(9, 'Kamis', '', '15:00:00', '17:00:00', 1, 'Regular'),
(10, 'Senin', '', '12:00:00', '14:00:00', 2, 'Regular'),
(11, 'Senin', '', '15:00:00', '17:00:00', 2, 'Regular'),
(12, 'Kamis', '', '15:00:00', '17:00:00', 2, 'Regular'),
(15, 'Senin', 'Rabu', '11:00:00', '12:30:00', 0, 'Privat'),
(16, 'Selasa', 'Kamis', '11:00:00', '12:30:00', 0, 'Privat'),
(17, 'Jumat', 'Sabtu', '11:00:00', '12:30:00', 0, 'Privat'),
(18, 'Senin', 'Rabu', '13:30:00', '15:00:00', 1, 'Privat'),
(19, 'Senin', 'Rabu', '15:00:00', '16:30:00', 1, 'Privat'),
(20, 'Selasa', 'Kamis', '13:30:00', '15:00:00', 1, 'Privat'),
(21, 'Selasa', 'Kamis', '15:00:00', '16:30:00', 1, 'Privat'),
(22, 'Jumat', 'Sabtu', '13:30:00', '15:00:00', 1, 'Privat'),
(23, 'Jumat', 'Sabtu', '15:00:00', '16:30:00', 1, 'Privat'),
(24, 'Senin', 'Rabu', '16:30:00', '18:00:00', 2, 'Privat'),
(25, 'Selasa', 'Kamis', '16:30:00', '18:00:00', 2, 'Privat');

-- --------------------------------------------------------

--
-- Struktur dari tabel `login`
--

CREATE TABLE `login` (
  `id_login` int(5) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `login`
--

INSERT INTO `login` (`id_login`, `nama`, `username`, `password`) VALUES
(1, 'Admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mapel`
--

CREATE TABLE `mapel` (
  `id_mapel` int(11) NOT NULL,
  `mapel` varchar(100) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `biaya` int(100) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mapel`
--

INSERT INTO `mapel` (`id_mapel`, `mapel`, `deskripsi`, `biaya`, `status`) VALUES
(1, 'Matematika SD', '', 0, 'Paket'),
(3, 'Bahasa Indonesia SD', '', 0, 'Paket'),
(6, 'IPA SD', '', 0, 'Paket'),
(7, 'IPS SD', '', 0, 'Paket'),
(8, 'PPKN SD', '', 0, 'Paket'),
(9, 'Bahasa Inggris SD', '', 0, 'Paket'),
(10, 'Matematika SMP', '', 0, 'Paket'),
(11, 'Bahasa Inggris SMP', '', 0, 'Paket'),
(12, 'KIMIA SMP', '', 0, 'Paket'),
(13, 'FISIKA SMP', '', 0, 'Paket'),
(14, 'Matematika SMA', '', 0, 'Paket'),
(15, 'Bahasa Inggris SMA', '', 0, 'Paket'),
(16, 'KIMIA SMA', '', 0, 'Paket'),
(17, 'FISIKA SMA', '', 0, 'Paket'),
(18, 'Speaking Class', 'Metode pembelajaran bahasa Inggris dengan mengimplementasikan bahasa Inggris dalam kehidupan sehari - hari', 200000, 'Non Paket'),
(19, 'Arabia', 'Metode pembelajaran bahasa Arab dengan mengimplementasikan Arab dalam kehidupan sehari - hari', 200000, 'Non Paket'),
(20, 'Master', 'Metode menghafal Al - Quran dengan gerakan tubuh agar lebih mudah dan lebih memahami arti dari setiap ayat Al - Quran', 200000, 'Non Paket'),
(21, 'Tidak Memilih Pelajaran Tambahan', '', 0, 'Non Paket');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL,
  `tingkat` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`id_paket`, `tingkat`) VALUES
(0, 'SD'),
(1, 'SMP'),
(2, 'SMA');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket_mapel`
--

CREATE TABLE `paket_mapel` (
  `id` int(11) NOT NULL,
  `id_paket` int(100) NOT NULL,
  `id_mapel` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `paket_mapel`
--

INSERT INTO `paket_mapel` (`id`, `id_paket`, `id_mapel`) VALUES
(64531, 0, 1),
(64532, 0, 3),
(64533, 0, 6),
(64534, 0, 7),
(64535, 0, 8),
(64536, 0, 9),
(64537, 1, 10),
(64538, 1, 11),
(64539, 1, 12),
(64540, 1, 13),
(64541, 2, 14),
(64542, 2, 15),
(64543, 2, 16),
(64544, 2, 17);

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta_privat`
--

CREATE TABLE `peserta_privat` (
  `kd_pp` int(11) NOT NULL,
  `nama_peserta` varchar(100) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `jk` varchar(14) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `paket` int(11) NOT NULL,
  `mapel_tambah` int(11) NOT NULL,
  `jadwal` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `peserta_reguler`
--

CREATE TABLE `peserta_reguler` (
  `kd_pr` int(11) NOT NULL,
  `nama_peserta` varchar(100) NOT NULL,
  `ttl` varchar(100) NOT NULL,
  `jk` varchar(14) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `paket` int(11) NOT NULL,
  `mapel_tambah` int(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `jadwal` int(11) NOT NULL,
  `status` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `peserta_reguler`
--

INSERT INTO `peserta_reguler` (`kd_pr`, `nama_peserta`, `ttl`, `jk`, `no_hp`, `alamat`, `paket`, `mapel_tambah`, `kelas`, `jadwal`, `status`) VALUES
(36, 'mila', 'indramayu, 3 Maret 2018', 'perempuan', '083823155711', 'Pabean udik', 2, 21, '', 4, 0),
(53, 'Desi Amaliani', 'indramayu, 3 Maret 2018', 'perempuan', '089638655945', 'Pabean udik', 2, 21, '', 5, 0),
(57, 'Desi Amaliani', 'indramayu, 3 Maret 2018', 'perempuan', '083823155711', 'Pabean udik', 2, 21, '', 5, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `registrasi`
--

CREATE TABLE `registrasi` (
  `kd_regis` int(11) NOT NULL,
  `nama_peserta` varchar(100) NOT NULL,
  `tgl_pem` varchar(100) NOT NULL,
  `no_rek` varchar(100) NOT NULL,
  `total_pem` varchar(50) NOT NULL,
  `jenis_kelas` varchar(30) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`kd_guru`);

--
-- Indeks untuk tabel `jadwal_guru`
--
ALTER TABLE `jadwal_guru`
  ADD PRIMARY KEY (`kd_jg`),
  ADD KEY `kd_guru` (`kd_guru`),
  ADD KEY `jadwal` (`jadwal`),
  ADD KEY `mapel` (`mapel`);

--
-- Indeks untuk tabel `list_harga`
--
ALTER TABLE `list_harga`
  ADD PRIMARY KEY (`id_harga`),
  ADD KEY `paket` (`paket`);

--
-- Indeks untuk tabel `list_jadwal`
--
ALTER TABLE `list_jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `paket` (`paket`);

--
-- Indeks untuk tabel `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_login`);

--
-- Indeks untuk tabel `mapel`
--
ALTER TABLE `mapel`
  ADD PRIMARY KEY (`id_mapel`);

--
-- Indeks untuk tabel `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indeks untuk tabel `paket_mapel`
--
ALTER TABLE `paket_mapel`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_mapel` (`id_mapel`),
  ADD KEY `id_paket` (`id_paket`);

--
-- Indeks untuk tabel `peserta_privat`
--
ALTER TABLE `peserta_privat`
  ADD PRIMARY KEY (`kd_pp`),
  ADD KEY `paket` (`paket`,`mapel_tambah`,`jadwal`),
  ADD KEY `mapel_tambah` (`mapel_tambah`),
  ADD KEY `jadwal` (`jadwal`);

--
-- Indeks untuk tabel `peserta_reguler`
--
ALTER TABLE `peserta_reguler`
  ADD PRIMARY KEY (`kd_pr`),
  ADD KEY `paket` (`paket`,`jadwal`),
  ADD KEY `jadwal` (`jadwal`),
  ADD KEY `mapel_tambah` (`mapel_tambah`);

--
-- Indeks untuk tabel `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`kd_regis`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `guru`
--
ALTER TABLE `guru`
  MODIFY `kd_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `jadwal_guru`
--
ALTER TABLE `jadwal_guru`
  MODIFY `kd_jg` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `list_harga`
--
ALTER TABLE `list_harga`
  MODIFY `id_harga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `list_jadwal`
--
ALTER TABLE `list_jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT untuk tabel `login`
--
ALTER TABLE `login`
  MODIFY `id_login` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `mapel`
--
ALTER TABLE `mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `paket_mapel`
--
ALTER TABLE `paket_mapel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64545;

--
-- AUTO_INCREMENT untuk tabel `peserta_privat`
--
ALTER TABLE `peserta_privat`
  MODIFY `kd_pp` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `peserta_reguler`
--
ALTER TABLE `peserta_reguler`
  MODIFY `kd_pr` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT untuk tabel `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `kd_regis` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `jadwal_guru`
--
ALTER TABLE `jadwal_guru`
  ADD CONSTRAINT `jadwal_guru_ibfk_1` FOREIGN KEY (`kd_guru`) REFERENCES `guru` (`kd_guru`),
  ADD CONSTRAINT `jadwal_guru_ibfk_2` FOREIGN KEY (`jadwal`) REFERENCES `list_jadwal` (`id_jadwal`),
  ADD CONSTRAINT `jadwal_guru_ibfk_3` FOREIGN KEY (`mapel`) REFERENCES `mapel` (`id_mapel`);

--
-- Ketidakleluasaan untuk tabel `list_harga`
--
ALTER TABLE `list_harga`
  ADD CONSTRAINT `list_harga_ibfk_1` FOREIGN KEY (`paket`) REFERENCES `paket` (`id_paket`);

--
-- Ketidakleluasaan untuk tabel `list_jadwal`
--
ALTER TABLE `list_jadwal`
  ADD CONSTRAINT `list_jadwal_ibfk_1` FOREIGN KEY (`paket`) REFERENCES `paket` (`id_paket`);

--
-- Ketidakleluasaan untuk tabel `paket_mapel`
--
ALTER TABLE `paket_mapel`
  ADD CONSTRAINT `paket_mapel_ibfk_2` FOREIGN KEY (`id_mapel`) REFERENCES `mapel` (`id_mapel`),
  ADD CONSTRAINT `paket_mapel_ibfk_3` FOREIGN KEY (`id_paket`) REFERENCES `paket` (`id_paket`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `peserta_privat`
--
ALTER TABLE `peserta_privat`
  ADD CONSTRAINT `peserta_privat_ibfk_1` FOREIGN KEY (`mapel_tambah`) REFERENCES `mapel` (`id_mapel`),
  ADD CONSTRAINT `peserta_privat_ibfk_2` FOREIGN KEY (`paket`) REFERENCES `paket` (`id_paket`),
  ADD CONSTRAINT `peserta_privat_ibfk_3` FOREIGN KEY (`jadwal`) REFERENCES `list_jadwal` (`id_jadwal`);

--
-- Ketidakleluasaan untuk tabel `peserta_reguler`
--
ALTER TABLE `peserta_reguler`
  ADD CONSTRAINT `peserta_reguler_ibfk_1` FOREIGN KEY (`paket`) REFERENCES `list_harga` (`paket`),
  ADD CONSTRAINT `peserta_reguler_ibfk_3` FOREIGN KEY (`jadwal`) REFERENCES `list_jadwal` (`id_jadwal`),
  ADD CONSTRAINT `peserta_reguler_ibfk_4` FOREIGN KEY (`mapel_tambah`) REFERENCES `mapel` (`id_mapel`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
