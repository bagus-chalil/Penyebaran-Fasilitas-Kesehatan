<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="stylesheet" href="css/leaflet.css">
    <link rel="stylesheet" href="css/qgis2web.css">
    <link rel="stylesheet" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" href="css/leaflet-measure.css">
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
                            <a class="nav-link" href="../petamedis/profil.php">Profile</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="../petamedis">Tenaga Medis</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php">Fasilitas Kesehatan</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- END header -->

    <div class="top-shadow"></div>

    <section class="home-slider owl-carousel">
        <div class="slider-item" style="background-image: url('images/rs1.jpg');">
            <div class="container">
                <div class="row slider-text align-items-center justify-content-center">
                    <div class="col-lg-7 text-center col-sm-12 element-animate">
                        <h1 class="mb-4"><span>Selamat Datang</span></h1>
                        <p class="mb-5 w-75">Halaman Persebaran Fasilitas Kesehatan</p>
                        <a href="#data1" type="button" class="btn btn-primary btn">Lihat Data Tabel</a>
                        <a href="#map" type="button" class="btn btn-success btn">Lihat Peta</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item" style="background-image: url('images/rs2.jpg');">
            <div class="container">
                <div class="row slider-text align-items-center justify-content-center">
                    <div class="col-lg-7 text-center col-sm-12 element-animate">
                        <h1><span>Selamat Datang</span></h1>
                        <p class="mb-5 w-75">Halaman Persebaran Fasilitas Kesehatan</p>
                    </div>
                </div>
            </div>

        </div>

    </section>
    <!-- END slider -->
    <div id="map">
    </div>
    <script src="js/qgis2web_expressions.js"></script>
    <script src="js/leaflet.js"></script>
    <script src="js/multi-style-layer.js"></script>
    <script src="js/leaflet-svg-shape-markers.min.js"></script>
    <script src="js/leaflet.rotatedMarker.js"></script>
    <script src="js/leaflet.pattern.js"></script>
    <script src="js/leaflet-hash.js"></script>
    <script src="js/Autolinker.min.js"></script>
    <script src="js/rbush.min.js"></script>
    <script src="js/labelgun.min.js"></script>
    <script src="js/labels.js"></script>
    <script src="js/leaflet-measure.js"></script>
    <script src="data/Kecamatan_0.js"></script>
    <script src="data/Jalan_1.js"></script>
    <script src="data/PersebaranFasilitasKesehatan_2.php"></script>
    <script>
        var map = L.map('map', {
            zoomControl: true,
            maxZoom: 28,
            minZoom: 1
        }).fitBounds([
            [-8.058657883795739, 112.51040128466303],
            [-7.903545478035685, 112.84114196548205]
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

        function pop_Kecamatan_0(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <th scope="row">Provinsi</th>\
                        <td>' + (feature.properties['Provinsi'] !== null ? autolinker.link(feature.properties['Provinsi'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Kecamatan</th>\
                        <td>' + (feature.properties['Kecamatan'] !== null ? autolinker.link(feature.properties['Kecamatan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Wilayah</th>\
                        <td>' + (feature.properties['Wilayah'] !== null ? autolinker.link(feature.properties['Wilayah'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {
                maxHeight: 400
            });
        }

        function style_Kecamatan_0_0(feature) {
            switch (String(feature.properties['Kecamatan'])) {
                case 'Blimbing':
                    return {
                        pane: 'pane_Kecamatan_0',
                            opacity: 1,
                            color: 'rgba(38,89,128,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(247,251,255,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Kedung Kandang':
                    return {
                        pane: 'pane_Kecamatan_0',
                            opacity: 1,
                            color: 'rgba(38,89,128,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(200,221,240,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Klojen':
                    return {
                        pane: 'pane_Kecamatan_0',
                            opacity: 1,
                            color: 'rgba(38,89,128,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(115,179,216,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Lowakwaru':
                    return {
                        pane: 'pane_Kecamatan_0',
                            opacity: 1,
                            color: 'rgba(38,89,128,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(40,121,185,1.0)',
                            interactive: true,
                    }
                    break;
                case 'Sukun':
                    return {
                        pane: 'pane_Kecamatan_0',
                            opacity: 1,
                            color: 'rgba(38,89,128,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(8,48,107,1.0)',
                            interactive: true,
                    }
                    break;
            }
        }
        map.createPane('pane_Kecamatan_0');
        map.getPane('pane_Kecamatan_0').style.zIndex = 400;
        map.getPane('pane_Kecamatan_0').style['mix-blend-mode'] = 'normal';
        var layer_Kecamatan_0 = new L.geoJson(json_Kecamatan_0, {
            attribution: '',
            interactive: true,
            dataVar: 'json_Kecamatan_0',
            layerName: 'layer_Kecamatan_0',
            pane: 'pane_Kecamatan_0',
            onEachFeature: pop_Kecamatan_0,
            style: style_Kecamatan_0_0,
        });
        bounds_group.addLayer(layer_Kecamatan_0);
        map.addLayer(layer_Kecamatan_0);

        function pop_Jalan_1(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['NAMRJL'] !== null ? autolinker.link(feature.properties['NAMRJL'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['KONRJL'] !== null ? autolinker.link(feature.properties['KONRJL'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['MATRJL'] !== null ? autolinker.link(feature.properties['MATRJL'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['FGSRJL'] !== null ? autolinker.link(feature.properties['FGSRJL'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['UTKRJL'] !== null ? autolinker.link(feature.properties['UTKRJL'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['TOLRJL'] !== null ? autolinker.link(feature.properties['TOLRJL'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['WLYRJL'] !== null ? autolinker.link(feature.properties['WLYRJL'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['AUTRJL'] !== null ? autolinker.link(feature.properties['AUTRJL'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['KLSRJL'] !== null ? autolinker.link(feature.properties['KLSRJL'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['SPCRJL'] !== null ? autolinker.link(feature.properties['SPCRJL'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['JPARJL'] !== null ? autolinker.link(feature.properties['JPARJL'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['ARHRJL'] !== null ? autolinker.link(feature.properties['ARHRJL'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['STARJL'] !== null ? autolinker.link(feature.properties['STARJL'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['KLLRJL'] !== null ? autolinker.link(feature.properties['KLLRJL'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['MEDRJL'] !== null ? autolinker.link(feature.properties['MEDRJL'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['LOCRJL'] !== null ? autolinker.link(feature.properties['LOCRJL'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['JARRJL'] !== null ? autolinker.link(feature.properties['JARRJL'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['FCODE'] !== null ? autolinker.link(feature.properties['FCODE'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['REMARK'] !== null ? autolinker.link(feature.properties['REMARK'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['SRS_ID'] !== null ? autolinker.link(feature.properties['SRS_ID'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['LCODE'] !== null ? autolinker.link(feature.properties['LCODE'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['METADATA'] !== null ? autolinker.link(feature.properties['METADATA'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['SHAPE_Leng'] !== null ? autolinker.link(feature.properties['SHAPE_Leng'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {
                maxHeight: 400
            });
        }

        function style_Jalan_1_0() {
            return {
                pane: 'pane_Jalan_1',
                opacity: 1,
                color: 'rgba(45,145,93,1.0)',
                dashArray: '',
                lineCap: 'square',
                lineJoin: 'bevel',
                weight: 1.0,
                fillOpacity: 0,
                interactive: true,
            }
        }
        map.createPane('pane_Jalan_1');
        map.getPane('pane_Jalan_1').style.zIndex = 401;
        map.getPane('pane_Jalan_1').style['mix-blend-mode'] = 'normal';
        var layer_Jalan_1 = new L.geoJson(json_Jalan_1, {
            attribution: '',
            interactive: true,
            dataVar: 'json_Jalan_1',
            layerName: 'layer_Jalan_1',
            pane: 'pane_Jalan_1',
            onEachFeature: pop_Jalan_1,
            style: style_Jalan_1_0,
        });
        bounds_group.addLayer(layer_Jalan_1);
        map.addLayer(layer_Jalan_1);

        function pop_PersebaranFasilitasKesehatan_2(feature, layer) {
            var popupContent = '<table>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['X'] !== null ? autolinker.link(feature.properties['X'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <td colspan="2">' + (feature.properties['Y'] !== null ? autolinker.link(feature.properties['Y'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Nama Tempat</th>\
                        <td>' + (feature.properties['Nama Tempat'] !== null ? autolinker.link(feature.properties['Nama Tempat'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Alamat</th>\
                        <td>' + (feature.properties['Alamat'] !== null ? autolinker.link(feature.properties['Alamat'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Kecamatan</th>\
                        <td>' + (feature.properties['Kecamatan'] !== null ? autolinker.link(feature.properties['Kecamatan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Kota</th>\
                        <td>' + (feature.properties['Kota'] !== null ? autolinker.link(feature.properties['Kota'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Jenis Pelayanan</th>\
                        <td>' + (feature.properties['Jenis Pelayanan'] !== null ? autolinker.link(feature.properties['Jenis Pelayanan'].toLocaleString()) : '') + '</td>\
                    </tr>\
                    <tr>\
                        <th scope="row">Jenis Puskesmas</th>\
                        <td>' + (feature.properties['Jenis Puskesmas'] !== null ? autolinker.link(feature.properties['Jenis Puskesmas'].toLocaleString()) : '') + '</td>\
                    </tr>\
                </table>';
            layer.bindPopup(popupContent, {
                maxHeight: 400
            });
        }

        function style_PersebaranFasilitasKesehatan_2_0(feature) {
            switch (String(feature.properties['Jenis Pelayanan'])) {
                case 'Puskesmas':
                    return {
                        pane: 'pane_PersebaranFasilitasKesehatan_2',
                            radius: 6.4,
                            opacity: 1,
                            color: 'rgba(0,0,0,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(70,168,200,1.0)',
                            interactive: true,
                    }
                    break;
                case 'rumah sakit khusus':
                    return {
                        pane: 'pane_PersebaranFasilitasKesehatan_2',
                            radius: 6.4,
                            opacity: 1,
                            color: 'rgba(0,0,0,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(117,25,230,1.0)',
                            interactive: true,
                    }
                    break;
                case 'rumah sakit umum':
                    return {
                        pane: 'pane_PersebaranFasilitasKesehatan_2',
                            radius: 10.4,
                            opacity: 1,
                            color: 'rgba(227,26,28,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 2.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(255,255,255,1.0)',
                            interactive: true,
                    }
                    break;
            }
        }

        function style_PersebaranFasilitasKesehatan_2_1(feature) {
            switch (String(feature.properties['Jenis Pelayanan'])) {
                case 'Puskesmas':
                    return {
                        pane: 'pane_PersebaranFasilitasKesehatan_2',
                            radius: 1.4,
                            opacity: 1,
                            color: 'rgba(0,0,0,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 2.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(70,168,200,1.0)',
                            interactive: true,
                    }
                    break;
                case 'rumah sakit khusus':
                    return {
                        pane: 'pane_PersebaranFasilitasKesehatan_2',
                            radius: 1.4,
                            opacity: 1,
                            color: 'rgba(0,0,0,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 2.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(117,25,230,1.0)',
                            interactive: true,
                    }
                    break;
                case 'rumah sakit umum':
                    return {
                        pane: 'pane_PersebaranFasilitasKesehatan_2',
                            radius: 6.0,
                            opacity: 1,
                            color: 'rgba(227,26,28,1.0)',
                            dashArray: '',
                            lineCap: 'butt',
                            lineJoin: 'miter',
                            weight: 1.0,
                            fill: true,
                            fillOpacity: 1,
                            fillColor: 'rgba(227,26,28,1.0)',
                            interactive: true,
                    }
                    break;
            }
        }
        map.createPane('pane_PersebaranFasilitasKesehatan_2');
        map.getPane('pane_PersebaranFasilitasKesehatan_2').style.zIndex = 402;
        map.getPane('pane_PersebaranFasilitasKesehatan_2').style['mix-blend-mode'] = 'normal';
        var layer_PersebaranFasilitasKesehatan_2 = new L.geoJson.multiStyle(json_PersebaranFasilitasKesehatan_2, {
            attribution: '',
            interactive: true,
            dataVar: 'json_PersebaranFasilitasKesehatan_2',
            layerName: 'layer_PersebaranFasilitasKesehatan_2',
            pane: 'pane_PersebaranFasilitasKesehatan_2',
            onEachFeature: pop_PersebaranFasilitasKesehatan_2,
            pointToLayers: [function(feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.shapeMarker(latlng, style_PersebaranFasilitasKesehatan_2_0(feature));
            }, function(feature, latlng) {
                var context = {
                    feature: feature,
                    variables: {}
                };
                return L.shapeMarker(latlng, style_PersebaranFasilitasKesehatan_2_1(feature));
            }, ]
        });
        bounds_group.addLayer(layer_PersebaranFasilitasKesehatan_2);
        map.addLayer(layer_PersebaranFasilitasKesehatan_2);
        var baseMaps = {};
        L.control.layers(baseMaps, {
            'Persebaran Fasilitas Kesehatan<br /><table><tr><td style="text-align: center;"><img src="legend/PersebaranFasilitasKesehatan_2_Puskesmas0.png" /></td><td>Puskesmas</td></tr><tr><td style="text-align: center;"><img src="legend/PersebaranFasilitasKesehatan_2_rumahsakitkhusus1.png" /></td><td>rumah sakit khusus</td></tr><tr><td style="text-align: center;"><img src="legend/PersebaranFasilitasKesehatan_2_rumahsakitumum2.png" /></td><td>rumah sakit umum</td></tr></table>': layer_PersebaranFasilitasKesehatan_2,
            '<img src="legend/Jalan_1.png" /> Jalan': layer_Jalan_1,
            'Kecamatan<br /><table><tr><td style="text-align: center;"><img src="legend/Kecamatan_0_Blimbing0.png" /></td><td>Blimbing</td></tr><tr><td style="text-align: center;"><img src="legend/Kecamatan_0_KedungKandang1.png" /></td><td>Kedung Kandang</td></tr><tr><td style="text-align: center;"><img src="legend/Kecamatan_0_Klojen2.png" /></td><td>Klojen</td></tr><tr><td style="text-align: center;"><img src="legend/Kecamatan_0_Lowakwaru3.png" /></td><td>Lowakwaru</td></tr><tr><td style="text-align: center;"><img src="legend/Kecamatan_0_Sukun4.png" /></td><td>Sukun</td></tr></table>': layer_Kecamatan_0,
        }, {
            collapsed: false
        }).addTo(map);
        setBounds();
    </script>
    <section class="section bg-light">
        <div class="container" id="data1">
            <div class="row">
                <div class="col-md-6 col-lg-12 element-animate ">
                    <div class="media block-6 d-block text-center">
                        <div class="media-body">
                            <h3 style="font-size: 35px;">Tabel Data Persebaran Fasilitas Kesehatan</h3><br>
                            <p style="font-size: 22px;">Berikut adalah data terkait persebaran fasilitas kesehatan yang ada di kota Malang.Data tersebut
                                telah meliputi persebaran jumlah <b>Puskesmas</b> , <b>Rumah Sakit umum</b> dan <b>Rumah Sakit khusus</b>.
                                Berdasarkan kepada lima kecamatan yang ada di kota Malang</p>
                            <div><br>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama</th>
                                            <th>Kota</th>
                                            <th>Kecamatan</th>
                                            <th>Alamat</th>
                                            <th>Fasilitas</th>
                                            <th>Jenis</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        include 'koneksi.php';
                                        $no = 1;
                                        $data = mysqli_query($conn, "select * from fasilitas_kesehatan");
                                        while ($d = mysqli_fetch_array($data)) {
                                        ?>
                                            <tr>
                                                <td style="text-align: center;"><?php echo $no++; ?></td>
                                                <td style="text-align: center;"><?php echo $d['nama']; ?></td>
                                                <td style="text-align: center;"><?php echo $d['kota']; ?></td>
                                                <td style="text-align: center;"><?php echo $d['kecamatan']; ?></td>
                                                <td style="text-align: center;"><?php echo $d['alamat']; ?></td>
                                                <td style="text-align: center;"><?php echo $d['fasilitas']; ?></td>
                                                <td style="text-align: center;"><?php echo $d['jenis']; ?></td>
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
                        <li><a href="../petamedis/profil.php">Profil</a></li>
                        <li><a href="../petamedis">Persebaran Tenaga Medis</a></li>
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