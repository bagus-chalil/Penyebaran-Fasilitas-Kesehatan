<?php
include "../koneksi.php";
$sql = "select * from fasilitas_kesehatan where lng>0";
$hasil = mysqli_query($conn, $sql);
?>

var json_PersebaranFasilitasKesehatan_2 = {
"type": "FeatureCollection",
"name": "PersebaranFasilitasKesehatan_2",
"crs": { "type": "name", "properties": { "name": "urn:ogc:def:crs:OGC:1.3:CRS84" } },
"features": [
<?php
while ($data = mysqli_fetch_array($hasil)) {
    $lng = $data['lng'];
    $lat = $data['lat'];
    $nama = $data['nama'];
    $alamat = $data['alamat'];
    $kecamatan = $data['kecamatan'];
    $kota = $data['kota'];
    $fasilitas = $data['fasilitas'];
    $jenis = $data['jenis'];

?>
    { "type": "Feature", "properties": { "X": <?php echo $lng; ?>, "Y": <?php echo $lat; ?>, "Nama Tempat": "<?php echo $nama; ?>",
    "Alamat": "<?php echo $alamat; ?>", "Kecamatan": "<?php echo $kecamatan; ?>", "Kota": "<?php echo $kota; ?>",
    "Jenis Pelayanan": "<?php echo $fasilitas; ?>", "Jenis Puskesmas": "<?php echo $jenis; ?>" }, "geometry":
    {
    "type": "Point", "coordinates": [ <?php echo $lng; ?>, <?php echo $lat; ?> ] } },
<?php } ?>
]
}