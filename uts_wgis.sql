-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 16 Nov 2020 pada 14.46
-- Versi server: 10.1.32-MariaDB
-- Versi PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts_wgis`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `usernam` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `fasilitas_kesehatan`
--

CREATE TABLE `fasilitas_kesehatan` (
  `id` int(11) NOT NULL,
  `lng` float NOT NULL,
  `lat` float NOT NULL,
  `nama` varchar(26) DEFAULT NULL,
  `alamat` varchar(66) DEFAULT NULL,
  `kecamatan` varchar(14) DEFAULT NULL,
  `kota` varchar(6) DEFAULT 'Malang',
  `fasilitas` varchar(18) DEFAULT NULL,
  `jenis` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `fasilitas_kesehatan`
--

INSERT INTO `fasilitas_kesehatan` (`id`, `lng`, `lat`, `nama`, `alamat`, `kecamatan`, `kota`, `fasilitas`, `jenis`) VALUES
(2, 112.646, -7.99311, 'Puskesmas Kedungkandang', 'Jl. Ki Ageng Gribig No.142 (0341) 710112', 'Kedung Kandang', 'Malang', 'Puskesmas', 'Rawat Inap'),
(3, 112.663, -7.98069, 'Puskesmas Gribig', 'Jl. Ki Ageng Gribig No.97 (0341) 718165', 'Kedung Kandang', 'Malang', 'Puskesmas', 'Non Rawat Inap'),
(4, 112.64, -8.03862, 'Puskesmas Arjowinangun', 'Jl. Raya Arjowinangun No. 2 (0341) 751398', 'Kedung Kandang', 'Malang', 'Puskesmas', 'Non Rawat Inap'),
(5, 112.628, -8.00204, 'Puskesmas Ciptomulyo', 'Jl. Kol. Sugiyono VIII No.54, Sukun (0341) 329918', 'Sukun', 'Malang', 'Puskesmas', 'Non Rawat Inap'),
(6, 112.595, -7.9879, 'Puskesmas Mulyorejo', ' Jl. Budi Utomo No.18A, Sukun (0341) 580955', 'Sukun', 'Malang', 'Puskesmas', 'Non Rawat Inap'),
(7, 112.624, -7.97814, 'Puskesmas Arjuno', 'Jl. Arjuno No.17, Klojen (0341) 396339', 'Klojen', 'Malang', 'Puskesmas', 'Non Rawat Inap'),
(8, 112.621, -7.97852, 'Puskesmas Bareng', 'Jl. Bareng Tebes No.10A, Klojen (0341) 322280', 'Klojen', 'Malang', 'Puskesmas', 'Non Rawat Inap'),
(9, 112.629, -7.9643, 'Puskesmas Rampal Celaket', 'Jl. Simpang Kasembon No.5, Klojen Telp. 0341-356380', 'Klojen', 'Malang', 'Puskesmas', 'Non Rawat Inap'),
(10, 112.649, -7.96123, 'Puskesmas Kendalkerep', 'Jl. Sulfat No.100, Blimbing (0341) 484477', 'Blimbing', 'Malang', 'Puskesmas', 'Rawat Inap'),
(11, 112.641, -7.95544, 'Puskesmas Cisadea', 'Jl. Cisadea No.19, Blimbing (0341) 489540', 'Blimbing', 'Malang', 'Puskesmas', 'Non Rawat Inap'),
(12, 112.653, -7.94734, 'Puskesmas Pandanwangi', 'Jl. LA. Sucipto No.315, Blimbing (0341) 484472', 'Blimbing', 'Malang', 'Puskesmas', 'Non Rawat Inap'),
(13, 112.609, -7.94329, 'Puskesmas Dinoyo', 'Jl. Keramik No.2, Lowokwaru (0341) 581442', 'Lowokwaru', 'Malang', 'Puskesmas', 'Rawat Inap'),
(14, 112.635, -7.9647, 'Puskesmas Kendalsari', ' Jl. Cengger Ayam No.8, Lowokwaru (0341) 478215', 'Lowokwaru', 'Malang', 'Puskesmas', 'Rawat Inap'),
(15, 112.63, -7.9384, 'Puskesmas Mojolangu', ' Jl. Sudimoro No.17A, Lowokwaru (0341) 482905', 'Lowokwaru', 'Malang', 'Puskesmas', 'Non Rawat Inap'),
(16, 112.648, -7.93222, 'Puskesmas Polowijen', 'Jl. Panji Suroso No. 9 Malang (0341)491320 ? 08113777455', 'Blimbing', 'Malang', 'Puskesmas', 'Rawat Inap'),
(17, 112.629, -7.9725, 'RSU. Dr. Saiful Anwar', 'Jl. Jaksa Agung Suprapto No. 2, Malang', 'Klojen', 'Malang', 'rumah sakit umum', 'Rawat Inap'),
(18, 112.619, -7.99067, 'RST. Dr. Soepraoen', 'Jl. S. Supriadi No. 22, Malang', 'Sukun', 'Malang', 'rumah sakit umum ', 'Rawat Inap'),
(19, 112.623, -7.98601, 'RS. Panti Waluya', 'Jl. Nusakambangan No. 56, Malang', 'Klojen', 'Malang', 'rumah sakit umum', 'Rawat Inap'),
(20, 112.632, -7.99431, 'RS. Panti Nirmala', 'Jl. Kebalen Wetan No. 2-8, Malang', 'Kedung Kandang', 'Malang', 'rumah sakit umum', 'Rawat Inap'),
(21, 112.636, -7.96575, 'RS. Lavalette', 'Jl. WR. Supratman No. 10, Malang', 'Klojen', 'Malang', 'rumah sakit umum', 'Rawat Inap'),
(22, 112.607, -7.9403, 'RSI. MALANG', 'Jl. MT. Haryono No. 139, Malang', 'Lowokwaru', 'Malang', 'rumah sakit umum', 'Rawat Inap'),
(23, 112.623, -7.98868, 'RSI. Aisyiyah', 'Jl. Sulawesi No.16, Malang', 'Klojen', 'Malang', 'rumah sakit umum', 'Rawat Inap'),
(24, 112.623, -7.93856, 'RS. Permata Bunda', 'Jl. Soekarno Hatta No. 75, Malang', 'Lowokwaru', 'Malang', 'rumah sakit umum', 'Rawat Inap'),
(25, 112.622, -7.97807, 'RS. Hermina Tangkubanprahu', 'Jl. Tangkubanprahu No. 33, Malang', 'Klojen', 'Malang', 'rumah sakit umum', 'Rawat Inap'),
(26, 112.648, -7.93499, 'Persada Hospital', 'Jl. Panji Suroso, Kompleks Araya Business Centre Kav. II-IV Malang', 'Blimbing', 'Malang', 'rumah sakit umum', 'Rawat Inap'),
(27, 112.637, -8.02635, 'RSUD Kota Malang', 'Jl. Rajasa No.27 Kel. Bumiayu Kec. Kedungkandang', 'Kedung Kandang', 'Malang', 'rumah sakit umum', 'Rawat Inap'),
(28, 112.619, -7.94123, 'RS Universitas Brawijaya', 'Jl. Soekarno Hatta Jatimulyo Lowokwaru Malang', 'Lowokwaru', 'Malang', 'rumah sakit umum', 'Rawat Inap'),
(29, 112.627, -7.98418, 'RSAB. Muhammadiyah', 'Jalan KH. Wakhid Hasyim No. 12 B, Malang', 'Klojen', 'Malang', 'rumah sakit khusus', 'Rawat Inap'),
(30, 112.621, -7.96831, 'RSIA. Husada Bunda', 'Jalan Pahlawan Trip No. 2, Malang', 'Klojen', 'Malang', 'rumah sakit khusus', 'Rawat Inap'),
(31, 112.633, -7.9649, 'RSIA. Mardi Waloeja', 'Jalan Kauman No.23 , Malang', 'Klojen', 'Malang', 'rumah sakit khusus', 'Rawat Inap'),
(32, 112.639, -7.95337, 'RSIA. Mutiara Bunda', 'Jalan Ciujung No. 19, Malang', 'Blimbing', 'Malang', 'rumah sakit khusus', 'Rawat Inap'),
(33, 112.659, -7.98012, 'RSB. Permata Hati', 'Jalan Danau Toba E-VI/16-18, Malang', 'Kedung Kandang', 'Malang', 'rumah sakit khusus', 'Rawat Inap'),
(34, 112.619, -7.97585, 'RSIA. Melati Husada', 'Jl. Kawi No. 32, Malang', 'Klojen', 'Malang', 'rumah sakit khusus', 'Rawat Inap'),
(35, 112.653, -7.95876, 'RSIA. Puri Bunda', 'Jalan Simpang Sulfat Utara No. 60A, Malang', 'Blimbing', 'Malang', 'rumah sakit khusus', 'Rawat Inap'),
(36, 112.62, -7.97421, 'RSIA. Puri', 'Jalan Taman Slamet No. 20, Malang', 'Klojen', 'Malang', 'rumah sakit khusus', 'Rawat Inap'),
(37, 112.64, -8.03572, 'RSIA Refa Husada', 'Jalan Mayjend Sungkono No. 9, Malang', 'Kedung Kandang', 'Malang', 'rumah sakit khusus', 'Rawat Inap'),
(38, 112.617, -7.94795, 'RSIA Galeri Candra', 'Jalan Bunga Andong No. 3, Malang', 'Lowokwaru', 'Malang', 'rumah sakit khusus', 'Rawat Inap');

-- --------------------------------------------------------

--
-- Struktur dari tabel `medis`
--

CREATE TABLE `medis` (
  `id` int(11) NOT NULL,
  `provinsi` varchar(50) NOT NULL DEFAULT 'Jawa Timur',
  `kota` varchar(50) NOT NULL DEFAULT 'kota Malang',
  `kecamatan` varchar(50) NOT NULL,
  `dokter` int(11) NOT NULL,
  `perawat` int(11) NOT NULL,
  `bidan` int(11) NOT NULL,
  `farmasi` int(11) NOT NULL,
  `lainnya` int(11) NOT NULL,
  `total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `medis`
--

INSERT INTO `medis` (`id`, `provinsi`, `kota`, `kecamatan`, `dokter`, `perawat`, `bidan`, `farmasi`, `lainnya`, `total`) VALUES
(1, 'Jawa Timur', 'kota Malang', 'Kedung Kandang', 156, 401, 88, 53, 158, 856),
(2, 'Jawa Timur', 'kota Malang', 'Blimbing', 151, 237, 123, 31, 104, 646),
(3, 'Jawa Timur', 'kota Malang', 'Klojen', 750, 1827, 322, 260, 534, 3693),
(4, 'Jawa Timur', 'kota Malang', 'Sukun', 51, 352, 84, 34, 88, 609),
(5, 'Jawa Timur', 'kota Malang', 'Lowakwaru', 155, 211, 116, 51, 122, 655);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Admin Malang', 'admin@malang123.com', 'default.jpg', '$2y$10$alEp2q0gW4d6OX5Amb60xO.pqGaH.yrQZOSXOZhbRK6AmgMHJe4ZO', 1, 1, 1605418423);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 2),
(4, 1, 3),
(5, 2, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Data');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(129) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1),
(5, 3, 'Tenaga Medis', 'admin/tambah_medis', 'fas fa-user-md', 1),
(6, 3, 'Fasilitas Kesehatan', 'admin/tambah_fasilitas', 'fas fa-hospital', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(1, 'admin@malang.com', '32de1b50f137a3812676a1c048440a163018ce6c3f3ee47eb12d2ad100437b9a', 1605417409),
(2, 'admin@malang123.com', '7c1dd8926a8b5ceb8f699b07f186aec4524f426103cd93c7a7f4485cbe56fb76', 1605417784),
(3, 'admin@malang123.com', '378f724bb5f3de1e36c095f14b24d9dd37efde051f8e849e06fc56b765ba014f', 1605418423);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `fasilitas_kesehatan`
--
ALTER TABLE `fasilitas_kesehatan`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `medis`
--
ALTER TABLE `medis`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `fasilitas_kesehatan`
--
ALTER TABLE `fasilitas_kesehatan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT untuk tabel `medis`
--
ALTER TABLE `medis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
