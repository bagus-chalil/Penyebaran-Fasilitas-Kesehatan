<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Oxygen:400,700" rel="stylesheet">
    <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="stylesheet" href="css/leaflet.css">
    <link rel="stylesheet" href="css/qgis2web.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/leaflet-measure.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Oxygen:400,700" rel="stylesheet">

    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="fonts/fontawesome/css/font-awesome.min.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <style>
        html,
        body,
        #map {
            width: 100%;
            height: 100%;
            padding: 0;
            margin: 0;
        }
    </style>
    <style>
        html,
        body {
            background-color: #ffffff;
        }

        .ol-control button {
            background-color: #f8f8f8 !important;
            color: #000000 !important;
            border-radius: 0px !important;
        }

        .ol-zoom,
        .geolocate,
        .gcd-gl-control .ol-control {
            background-color: rgba(255, 255, 255, .4) !important;
            padding: 3px !important;
        }

        .ol-scale-line {
            background: none !important;
        }

        .ol-scale-line-inner {
            border: 2px solid #f8f8f8 !important;
            border-top: none !important;
            background: rgba(255, 255, 255, 0.5) !important;
            color: black !important;
        }
    </style>
    <style>
        .tooltip {
            position: relative;
            background: rgba(0, 0, 0, 0.5);
            border-radius: 4px;
            color: white;
            padding: 4px 8px;
            opacity: 0.7;
            white-space: nowrap;
        }

        .tooltip-measure {
            opacity: 1;
            font-weight: bold;
        }

        .tooltip-static {
            background-color: #ffcc33;
            color: black;
            border: 1px solid white;
        }

        .tooltip-measure:before,
        .tooltip-static:before {
            border-top: 6px solid rgba(0, 0, 0, 0.5);
            border-right: 6px solid transparent;
            border-left: 6px solid transparent;
            content: "";
            position: absolute;
            bottom: -6px;
            margin-left: -7px;
            left: 50%;
        }

        .tooltip-static:before {
            border-top-color: #ffcc33;
        }

        .measure-control {
            top: 65px;
            left: .5em;
        }

        .ol-touch .measure-control {
            top: 80px;
        }
    </style>
    <style>
        html,
        body,
        #map {
            width: 100%;
            height: 100%;
            padding: 0;
            margin: 0;
        }
    </style>
    <title></title>
</head>

<body>

    <header role="banner">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand " href="index.php">Kota Malang</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarsExample05">
                    <ul class="navbar-nav pl-md-5 ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="../">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="profil.php">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php">Tenaga Medis</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="../petafasilitas">Fasilitas Kesehatan</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- END header -->

    <div class="top-shadow"></div>

    <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url('images/medis.jpg');">
            <div class="container">
                <div class="row slider-text align-items-center justify-content-center">
                    <div class="col-lg-7 text-center col-sm-12 element-animate">
                        <h1 class="mb-4"><span>Selamat Datang</span></h1>
                        <p class="mb-5 w-75">Halaman Persebaran Tenaga Medis</p>
                        <a href="#data1" type="button" class="btn btn-primary btn">Lihat Data Tabel</a>
                        <a href="#map" type="button" class="btn btn-success btn">Lihat Peta</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image: url('images/medis2.jpg');">
            <div class="container">
                <div class="row slider-text align-items-center justify-content-center">
                    <div class="col-lg-7 text-center col-sm-12 element-animate">
                        <h1><span>Selamat Datang</span></h1>
                        <p class="mb-5 w-75">Halaman Persebaran Tenaga Medis</p>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- END slider -->
    </div><br><br>
    <h1 id="peta" style="text-align: center;">Peta Persebaran Jumlah Tenaga Medis tahun 2018</h3>
        <br><br>
        <div id="map">
        </div>
        <script src="js/qgis2web_expressions.js"></script>
        <script src="js/leaflet.js"></script>
        <script src="js/leaflet.rotatedMarker.js"></script>
        <script src="js/leaflet.pattern.js"></script>
        <script src="js/leaflet-hash.js"></script>
        <script src="js/Autolinker.min.js"></script>
        <script src="js/rbush.min.js"></script>
        <script src="js/labelgun.min.js"></script>
        <script src="js/labels.js"></script>
        <script src="js/leaflet-measure.js"></script>
        <script src="data/KecamatanMalang_0.php"></script>

        <script>
            var map = L.map('map', {
                zoomControl: true,
                maxZoom: 28,
                minZoom: 1
            }).fitBounds([
                [-7.988667166463422, 112.62309106511997],
                [-7.843085864182573, 112.9335089120675]
            ]);
            var hash = new L.Hash(map);
            map.attributionControl.setPrefix('<a href="https://github.com/tomchadwin/qgis2web" target="_blank">qgis2web</a> &middot; <a href="https://leafletjs.com" title="A JS library for interactive maps">Leaflet</a> &middot; <a href="https://qgis.org">QGIS</a>');
            var autolinker = new Autolinker({
                truncate: {
                    length: 30,
                    location: 'smart'
                }
            });
            var measureControl = new L.Control.Measure({
                position: 'topleft',
                primaryLengthUnit: 'meters',
                secondaryLengthUnit: 'kilometers',
                primaryAreaUnit: 'sqmeters',
                secondaryAreaUnit: 'hectares'
            });
            measureControl.addTo(map);
            document.getElementsByClassName('leaflet-control-measure-toggle')[0]
                .innerHTML = '';
            document.getElementsByClassName('leaflet-control-measure-toggle')[0]
                .className += ' fas fa-ruler';
            var bounds_group = new L.featureGroup([]);

            function setBounds() {}

            function pop_KecamatanMalang_0(feature, layer) {
                var popupContent = '<table>\
                    <tr>\
                        <th scope="row">Wilayah</th>\
                        <td>' + (feature.properties['Wilayah'] !== null ? autolinker.link(feature.properties['Wilayah'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Provinsi</th>\
                        <td>' + (feature.properties['Provinsi'] !== null ? autolinker.link(feature.properties['Provinsi'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Kecamatan</th>\
                        <td>' + (feature.properties['Kecamatan'] !== null ? autolinker.link(feature.properties['Kecamatan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Dokter</th>\
                        <td>' + (feature.properties['Dokter'] !== null ? autolinker.link(feature.properties['Dokter'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Perawat</th>\
                        <td>' + (feature.properties['Perawat'] !== null ? autolinker.link(feature.properties['Perawat'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Bidan</th>\
                        <td>' + (feature.properties['Bidan'] !== null ? autolinker.link(feature.properties['Bidan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Farmasi</th>\
                        <td>' + (feature.properties['Farmasi'] !== null ? autolinker.link(feature.properties['Farmasi'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Lainnya</th>\
                        <td>' + (feature.properties['Lainnya'] !== null ? autolinker.link(feature.properties['Lainnya'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Total</th>\
                        <td>' + (feature.properties['Total'] !== null ? autolinker.link(feature.properties['Total'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
                layer.bindPopup(popupContent, {
                    maxHeight: 400
                });
            }

            function style_KecamatanMalang_0_0(feature) {
                if (feature.properties['Total'] >= 609.000000 && feature.properties['Total'] <= 638.600000) {
                    return {
                        pane: 'pane_KecamatanMalang_0',
                        opacity: 1,
                        color: 'rgba(35,35,35,1.0)',
                        dashArray: '',
                        lineCap: 'butt',
                        lineJoin: 'miter',
                        weight: 1.0,
                        fill: true,
                        fillOpacity: 1,
                        fillColor: 'rgba(247,251,255,1.0)',
                        interactive: true,
                    }
                }
                if (feature.properties['Total'] >= 638.600000 && feature.properties['Total'] <= 651.400000) {
                    return {
                        pane: 'pane_KecamatanMalang_0',
                        opacity: 1,
                        color: 'rgba(35,35,35,1.0)',
                        dashArray: '',
                        lineCap: 'butt',
                        lineJoin: 'miter',
                        weight: 1.0,
                        fill: true,
                        fillOpacity: 1,
                        fillColor: 'rgba(76,165,247,1.0)',
                        interactive: true,
                    }
                }
                if (feature.properties['Total'] >= 651.400000 && feature.properties['Total'] <= 735.400000) {
                    return {
                        pane: 'pane_KecamatanMalang_0',
                        opacity: 1,
                        color: 'rgba(35,35,35,1.0)',
                        dashArray: '',
                        lineCap: 'butt',
                        lineJoin: 'miter',
                        weight: 1.0,
                        fill: true,
                        fillOpacity: 1,
                        fillColor: 'rgba(83,153,235,1.0)',
                        interactive: true,
                    }
                }
                if (feature.properties['Total'] >= 735.400000 && feature.properties['Total'] <= 1423.400000) {
                    return {
                        pane: 'pane_KecamatanMalang_0',
                        opacity: 1,
                        color: 'rgba(35,35,35,1.0)',
                        dashArray: '',
                        lineCap: 'butt',
                        lineJoin: 'miter',
                        weight: 1.0,
                        fill: true,
                        fillOpacity: 1,
                        fillColor: 'rgba(29,61,180,1.0)',
                        interactive: true,
                    }
                }
                if (feature.properties['Total'] >= 1423.400000 && feature.properties['Total'] <= 3693.000000) {
                    return {
                        pane: 'pane_KecamatanMalang_0',
                        opacity: 1,
                        color: 'rgba(35,35,35,1.0)',
                        dashArray: '',
                        lineCap: 'butt',
                        lineJoin: 'miter',
                        weight: 1.0,
                        fill: true,
                        fillOpacity: 1,
                        fillColor: 'rgba(8,48,107,1.0)',
                        interactive: true,
                    }
                }
            }
            map.createPane('pane_KecamatanMalang_0');
            map.getPane('pane_KecamatanMalang_0').style.zIndex = 400;
            map.getPane('pane_KecamatanMalang_0').style['mix-blend-mode'] = 'normal';
            var layer_KecamatanMalang_0 = new L.geoJson(json_KecamatanMalang_0, {
                attribution: '',
                interactive: true,
                dataVar: 'json_KecamatanMalang_0',
                layerName: 'layer_KecamatanMalang_0',
                pane: 'pane_KecamatanMalang_0',
                onEachFeature: pop_KecamatanMalang_0,
                style: style_KecamatanMalang_0_0,
            });
            bounds_group.addLayer(layer_KecamatanMalang_0);
            map.addLayer(layer_KecamatanMalang_0);
            var baseMaps = {};
            L.control.layers(baseMaps, {
                'Kecamatan Malang<br /><table><tr><td style="text-align: center;"><img src="legend/KecamatanMalang_0_6096390.png" /></td><td>609 - 639</td></tr><tr><td style="text-align: center;"><img src="legend/KecamatanMalang_0_6396511.png" /></td><td>639 - 651</td></tr><tr><td style="text-align: center;"><img src="legend/KecamatanMalang_0_6517352.png" /></td><td>651 - 735</td></tr><tr><td style="text-align: center;"><img src="legend/KecamatanMalang_0_73514233.png" /></td><td>735 - 1423</td></tr><tr><td style="text-align: center;"><img src="legend/KecamatanMalang_0_142336934.png" /></td><td>1423 - 3693</td></tr></table>': layer_KecamatanMalang_0,
            }, {
                collapsed: false
            }).addTo(map);
            setBounds();
        </script>
        <!-- END Map -->
        <section class="section bg-light">
            <div class="container" id="data1">
                <div class="row">
                    <div class="col-md-6 col-lg-12 element-animate ">
                        <div class="media block-6 d-block text-center">
                            <div class="media-body">
                                <h3 style="font-size: 35px;">Tabel Data Persebaran Tenaga Medis</h3><br>
                                <p style="font-size: 22px;">Berikut adalah data terkait persebaran tenaga medis yang ada di kota Malang.Data tersebut
                                    telah meliputi persebaran jumlah <b>dokter</b> , <b>perawat</b>, <b>bidan</b> , <b>farmasi</b> , <b>tenaga medis lainnya</b>
                                    berdasarkan lima kecamatan yang ada di kota Malang</p>
                                <div><br>
                                    <table class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Provinsi</th>
                                                <th>Kota</th>
                                                <th>Kecamatan</th>
                                                <th>Dokter</th>
                                                <th>Perawat</th>
                                                <th>Bidan</th>
                                                <th>Farmasi</th>
                                                <th>Lainnya</th>
                                                <th>Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            include 'koneksi.php';
                                            $no = 1;
                                            $data = mysqli_query($conn, "select * from medis");
                                            while ($d = mysqli_fetch_array($data)) {
                                            ?>
                                                <tr>
                                                    <td style="text-align: center;"><?php echo $no++; ?></td>
                                                    <td style="text-align: center;"><?php echo $d['provinsi']; ?></td>
                                                    <td style="text-align: center;"><?php echo $d['kota']; ?></td>
                                                    <td style="text-align: center;"><?php echo $d['kecamatan']; ?></td>
                                                    <td style="text-align: center;"><?php echo $d['dokter']; ?></td>
                                                    <td style="text-align: center;"><?php echo $d['perawat']; ?></td>
                                                    <td style="text-align: center;"><?php echo $d['bidan']; ?></td>
                                                    <td style="text-align: center;"><?php echo $d['farmasi']; ?></td>
                                                    <td style="text-align: center;"><?php echo $d['lainnya']; ?></td>
                                                    <td style="text-align: center;"><?php echo $d['dokter'] + $d['perawat'] + $d['farmasi'] + $d['bidan'] + $d['lainnya'] ?></td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- END section -->
        <footer class="site-footer bg-light" role="contentinfo">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-4 mb-5">
                        <h3>About Us</h3>
                        <p class="mb-5">Kota Malang adalah sebuah kota yang terletak di Provinsi Jawa Timur, Indonesia, kota terbesar kedua di Jawa Timur setelah Surabaya, dan kota terbesar ke-12 di Indonesia. Kota ini didirikan pada masa Kerajaan Kanjuruhan dan terletak di dataran tinggi seluas 145,28 km² yang terletak di tengah-tengah Kabupaten Malang.</p>
                        <ul class="list-unstyled footer-link d-flex footer-social">
                            <li><a href="#" class="p-2"><span class="fa fa-twitter"></span></a></li>
                            <li><a href="#" class="p-2"><span class="fa fa-facebook"></span></a></li>
                            <li><a href="#" class="p-2"><span class="fa fa-linkedin"></span></a></li>
                            <li><a href="#" class="p-2"><span class="fa fa-instagram"></span></a></li>
                        </ul>

                    </div>
                    <div class="col-md-5 mb-5 pl-md-5">
                        <h3>Contact Info</h3>
                        <ul class="list-unstyled footer-link">
                            <li class="d-block">
                                <span class="d-block">Address:</span>
                                <span>Jl. Tugu No.1, Kiduldalem, Klojen, Kota Malang</span></li>
                            <li class="d-block"><span class="d-block">Telephone:</span><span>(0341) 350782</span></li>
                            <li class="d-block"><span class="d-block">Email:</span><span>bpbd@malangkota.go.id</span></li>
                        </ul>
                    </div>
                    <div class="col-md-3 mb-5">
                        <h3>Quick Links</h3>
                        <ul class="list-unstyled footer-link">
                            <li><a href="../">Halaman Utama</a></li>
                            <li><a href="profil.php">Profil</a></li>
                            <li><a href="../petafasilitas">Persebaran Fasilitas Kesehatan</a></li>
                            <li><a href="#"></a></li>
                            <li><a href="#"></a></li>
                        </ul>
                    </div>
                    <div class="col-md-3">

                    </div>
                </div>
                <div class="row">
                    <div class="col-12 text-md-center text-left">
                        <p>
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | Mohammad Bagus Chalil A
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- END footer -->
        <!-- loader -->
        <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
                <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
                <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214" /></svg></div>

        <script src="js/jquery-3.2.1.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.waypoints.min.js"></script>
        <script src="js/jquery.fancybox.min.js"></script>
        <script src="js/main.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="js/main.js"></script>
</body>

</html>