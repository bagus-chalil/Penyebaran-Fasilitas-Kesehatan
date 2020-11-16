<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Pemkot Malang</title>

	<!-- Favicons (created with http://realfavicongenerator.net/)-->
	<link rel="apple-touch-icon" sizes="57x57" href="img/favicons/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="img/favicons/apple-touch-icon-60x60.png">
	<link rel="icon" type="image/png" href="img/favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="img/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="img/favicons/manifest.json">
	<link rel="shortcut icon" href="img/favicons/favicon.ico">
	<meta name="msapplication-TileColor" content="#00a8ff">
	<meta name="msapplication-config" content="img/favicons/browserconfig.xml">
	<meta name="theme-color" content="#ffffff">
	<!-- Normalize -->
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<!-- Bootstrap -->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<!-- Owl -->
	<link rel="stylesheet" type="text/css" href="css/owl.css">
	<!-- Animate.css -->
	<link rel="stylesheet" type="text/css" href="css/animate.css">
	<!-- Font Awesome -->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.1.0/css/font-awesome.min.css">
	<!-- Elegant Icons -->
	<link rel="stylesheet" type="text/css" href="fonts/eleganticons/et-icons.css">
	<!-- Main style -->
	<link rel="stylesheet" type="text/css" href="css/styles.css">

</head>

<body>
	<div class="preloader">
		<img src="img/loader.gif" alt="Preloader image">
	</div>
	<nav class="navbar">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><img src="img/logo kota malang.png" data-active-url="img/logo kota malang.png" style="width: 66px;height: 70;" alt=""></a>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right main-nav">
					<li><a href="#profile">Profil Instansi</a></li>
					<li><a href="#informasi">Informasi atau Statistik</a></li>
					<li><a href="#data">Data Persebaran</a></li>
					<li><a href="#sumber">Sumber Terkait</a></li>
					<li><a href="../admin" class="btn btn-blue">Sign Up</a></li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
	<header id="intro">
		<div class="container">
			<div class="table">
				<div class="header-text">
					<div class="row">
						<div class="col-md-12 text-center">
							<h3 class="light white">Selamat Datang</h3>
							<h1 class="white typed">Website Pemerintah kota Malang</h1>
							<span class="typed-cursor">|</span>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<section id="informasi" class="section section-padded">
		<div class="container">
			<div class="row text-center title">
				<h2>Informasi dan Statistik</h2>
				<h4 class="light muted">Berikut adalah beberapa informasi dan statistik terkait dengan kota Malang</h4>
			</div>
			<div class="row informasi">
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="img/icons/2.png" alt="" class="icon">
						</div>
						<h4 class="heading">Kecamatan</h4>
						<?php
						include "koneksi.php";
						$sql = "select kecamatan from medis";
						$query = mysqli_query($conn, $sql);
						$data = array();
						while (($row = mysqli_fetch_array($query)) != null) {
							$data[] = $row;
						}
						$count = count($data);
						?>
						<p class="description">Kota Malang merupakan salah satu kota/kabupaten di Provinsi Jawa Timur yang memiliki <?php echo $count ?> Kecamatan</p>
					</div>
					<div class="service">
						<div class="icon-holder">
							<img src="img/icons/3.png" alt="" class="icon">
						</div>
						<h4 class="heading">Luas Wilayah</h4>
						<p class="description">Kota Malang memiliki luas wilayah 110.06 km<sup>2</sup> dan berbatasan langsung dengan kota Batu dan kabupaten Malang</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="img/icons/1.png" alt="" class="icon">
						</div>
						<h4 class="heading">Tenaga Medis</h4>
						<?php
						include "koneksi.php";
						$sql = "select dokter,perawat,bidan,farmasi,lainnya from medis";
						$query = mysqli_query($conn, $sql);
						while ($row = mysqli_fetch_object($query)) {
							//dokter
							$dokter = $row->dokter;
							$dokter_ar[] = $dokter;
							//perawat
							$perawat = $row->perawat;
							$perawat_ar[] = $perawat;
							//bidan
							$bidan = $row->bidan;
							$bidan_ar[] = $bidan;
							//farmasi
							$farmasi = $row->farmasi;
							$farmasi_ar[] = $farmasi;
							//lainnya
							$lainnya = $row->lainnya;
							$lainnya_ar[] = $lainnya;
						}
						$dokter1 = array_sum($dokter_ar);
						$perawat1 = array_sum($perawat_ar);
						$bidan1 = array_sum($bidan_ar);
						$farmasi1 = array_sum($farmasi_ar);
						$lainnya1 = array_sum($lainnya_ar);
						?>
						<p class="description">Dinas Kesehatan kota Malang setidaknya memiliki <?php echo $dokter1 ?> dokter, <?php echo $perawat1 ?> perawat,
							<?php echo $bidan1 ?> bidan, <?php echo $farmasi1 ?> farmasi dan <?php echo $lainnya1 ?> lainnya <br><a href="petamedis">Detail</a></p>
					</div>
					<div class="service">
						<div class="icon-holder">
							<img src="img/icons/heart-blue.png" alt="" class="icon">
						</div>
						<h4 class="heading">Jumlah Penduduk</h4>
						<p class="description">Sebagai salah satu kota wisata yang ada di Jawa Timur kota Malang memiliki 866.118 jiwa yang menempati peringkat ke-12 di Indonesia</p>
					</div>
				</div>
				<div class="col-md-4">
					<div class="service">
						<div class="icon-holder">
							<img src="img/icons/6.png" alt="" class="icon">
						</div>
						<h4 class="heading">Puskesmas</h4>
						<?php
						include "koneksi.php";
						$sql = "select nama,fasilitas from fasilitas_kesehatan WHERE fasilitas='Puskesmas'";
						$query = mysqli_query($conn, $sql);
						$data = array();
						while (($row = mysqli_fetch_array($query)) != null) {
							$data[] = $row;
						}
						$puskesmas = count($data);
						?>
						<p class="description">Kota Malang memiliki setidaknya ada <?php echo $puskesmas ?> Puskesmas <br><br><a href="petafasilitas">Detail</a></p>
					</div>
					<div class="service">
						<div class="icon-holder">
							<img src="img/icons/5.png" alt="" class="icon">
						</div>
						<h4 class="heading">Rumah Sakit</h4>
						<?php
						include "koneksi.php";
						$sql = "select nama,fasilitas from fasilitas_kesehatan WHERE fasilitas='rumah sakit umum'";
						$query = mysqli_query($conn, $sql);
						$data = array();
						while (($row = mysqli_fetch_array($query)) != null) {
							$data[] = $row;
						}
						$umum = count($data);
						?>
						<?php
						include "koneksi.php";
						$sql = "select nama,fasilitas from fasilitas_kesehatan WHERE fasilitas='rumah sakit khusus'";
						$query = mysqli_query($conn, $sql);
						$data = array();
						while (($row = mysqli_fetch_array($query)) != null) {
							$data[] = $row;
						}
						$khusus = count($data);
						?>
						<p class="description">Terdapat juga <?php echo $umum ?> Rumah Sakit umum dan <?php echo $khusus ?> Rumah Sakit khusus yang tersebar
							di <?php echo $count ?> Kecamatan
							<br><br><a href="petafasilitas">Detail</a></p>
					</div>
				</div>
			</div>
		</div>
		<div class="cut cut-bottom"></div>
	</section>

	<section id="data" class="section gray-bg">
		<div class="container">
			<div class="row title text-center">
				<h2 class="margin-top">Data Persebaran</h2>
				<h4 class="light muted">Tenaga Medis dan Fasilitas Kesehatan kota Malang</h4>
			</div>
			<div class="row">
				<div class="col-md-6">
					<div class="team text-center">
						<div class="cover" style="background:url('img/peta/2.jpg'); background-size:cover;">
							<div class="overlay text-center"><br><br>
								<h3><a href="petamedis" class="white">Lihat Peta</a></h3>
							</div>
						</div>

						<div class="title">
							<h4>Peta Persebaran</h4>
							<h5 class="title informasi">Tenaga Medis</h5>
						</div>
						<a href="petamedis" class="btn btn-blue-fill ripple">Selengkapnya</a>
					</div>
				</div>
				<div class="col-md-6">
					<div class="team text-center">
						<div class="cover" style="background:url('img/peta/1.jpg'); background-size:cover;">
							<div class="overlay text-center"><br><br>
								<h3><a href="petafasilitas" class="white">Lihat Peta</a></h3>
							</div>
						</div>

						<div class="title">
							<h4>Peta Persebaran</h4>
							<h5 class="title informasi">Fasilitas Kesehatan</h5>
						</div>
						<a id="profile" href="petafasilitas" class="btn btn-blue-fill ripple">Selengkapnya</a>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="section element-animate">
		<div class="container">
			<div class="row align-items-center mb-5">

				<div class="col-md-12 pr-md-3 mb-3">
					<div class="block-41">
						<h2 class="block-41-heading mb-5 text-center">Profil kota Malang</h2>
						<div class="block-41-text">
							<p style="font-size: 18px;">
								Kota Malang seperti kota-kota lain di Indonesia pada umumnya baru tumbuh dan berkembang setelah hadirnya pemerintah kolonial Belanda.
								Fasilitas umum direncanakan sedemikian rupa agar memenuhi kebutuhan keluarga Belanda.
								Kesan diskriminatif itu masih berbekas hingga sekarang. Misalnya Ijen Boulevard kawasan sekitarnya. hanya dinikmati oleh keluarga-keluarga Belanda dan bangsa Eropa lainnya,
								sementara penduduk pribumi harus puas bertempat tinggal di pinggiran kota dengan fasilitas yang kurang memadai.
							</p><br>
							<a href="petamedis/profil.php" style="margin-left: 42%;" class="btn btn-blue-fill ripple">Selengkapnya</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<section class="section section-padded blue-bg" id="sumber">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					<div class="owl-twitter owl-carousel">
						<div class="item text-center">
							<img src="img/logo kota malang.png" style="width: 66px;height: 70;margin-top: 10%;" alt=""><br><br>
							<h4 class="white light">Pemerintah Kota Malang</h4>
							<h4><a href="https://malangkota.go.id/" class="light-white light">https://malangkota.go.id/</a></h4>
						</div>
						<div class="item text-center">
							<img src="img/bps.jpg" style="width: 90px;height: 75px;margin-top: 10%;" alt=""><br><br><br>
							<h4 class="white light">Badan Pusat Statistik</h4>
							<h4><a href="https://bps.go.id/" class="light-white light">https://bps.go.id/</a></h4>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-6 text-center-mobile">
					<h3 class="white">Terima Kasih atas Kunjungannya !</h3>
					<h5 class="light regular light-white">Beri masukan maupun saran pada sosisal media kami</h5>
					<a href="../admin" class="btn btn-blue ripple trial-button">Login</a>
				</div>
				<div class="col-sm-6 text-center-mobile">
					<h3 class="white">Pelayanan Publik <span class="open-blink"></span></h3>
					<div class="row opening-hours">
						<div class="col-sm-12 text-center-mobile">
							<h5 class="light-white light">Senin-Sabtu</h5>
							<h3 class="regular white">09.00 - 16:00 WIB</h3>
						</div>
						<div class="col-sm-12 text-center-mobile">
							<h5 class="light-white light">Telephone</h5>
							<h3 class="regular white">(0341) 350782</h3>
						</div>
						<div class="col-sm-12 text-center-mobile">
							<h5 class="light-white light">Alamat</h5>
							<h3 class="regular white">Jl. Tugu No.1, Kiduldalem, Klojen, Kota Malang</h3>
						</div>
					</div>
				</div>
			</div>
			<div class="row bottom-footer text-center-mobile">
				<div class="col-sm-8">
					<p>
						Copyright &copy;
						<script>
							document.write(new Date().getFullYear());
						</script> All rights reserved | Mohammad Bagus Chalil A
					</p>
				</div>
				<div class="col-sm-4 text-right text-center-mobile">
					<ul class="social-footer">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- Holder for mobile navigation -->
	<div class="mobile-nav">
		<ul>
		</ul>
		<a href="#" class="close-link"><i class="arrow_up"></i></a>
	</div>
	<!-- Scripts -->
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/typewriter.js"></script>
	<script src="js/jquery.onepagenav.js"></script>
	<script src="js/main.js"></script>
</body>

</html>