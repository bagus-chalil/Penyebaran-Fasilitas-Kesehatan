<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800">Halaman <?= $title; ?></h1>
  <div class="row">

    <!-- Earnings (Monthly) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Terdapat</div>
              <?php
              $total = 0;
              foreach ($medis as $row) {
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
              <div class="h6 mb-0 font-weight-bold text-gray-800"><?php echo $dokter1 + $perawat1 + $bidan1 + $farmasi1 + $lainnya1; ?> Tenaga Medis</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-user-md fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Annual) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Terdapat</div>
              <?php
              $data = array();
              foreach ($medis1 as $row) {
                $data[] = $row;
              }
              $puskesmas = count($data);
              ?>
              <div class="h6 mb-0 font-weight-bold text-gray-800"><?php echo $puskesmas; ?> Puskesmas</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-clinic-medical fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Earnings (Annual) Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-success text-uppercase mb-1">Terdapat</div>
              <?php
              $data = array();
              foreach ($medis2 as $row) {
                $data[] = $row;
              }
              $rsu = count($data);
              ?>
              <div class="h6 mb-0 font-weight-bold text-gray-800"><?php echo $rsu; ?> Rumah Sakit Umum</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-hospital fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Pending Requests Card Example -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
          <div class="row no-gutters align-items-center">
            <div class="col mr-2">
              <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">Terdapat</div>
              <?php
              $data = array();
              foreach ($medis3 as $row) {
                $data[] = $row;
              }
              $rsk = count($data);
              ?>
              <div class="h6 mb-0 font-weight-bold text-gray-800"><?php echo $rsk; ?> Rumah Sakit Khusus</div>
            </div>
            <div class="col-auto">
              <i class="fas fa-hospital-alt fa-2x text-gray-300"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="row">

  </div>
  <div class="col-lg-12">
    <!-- Default Card Example -->
    <div class="card mb-4">
      <div class="card-header">
        Selamat Datang <?= $user['name']; ?>
      </div>
      <div class="card-body">
        Halaman Back-end dari Website kota Malang ini,Saya Buat dengan menggunakan bantuan dari framework Codeigniter yang
        telah terdapat beberapa fitur yang nantinya akan berguna untuk membuat website pemerintah kota Malang agar dapat
        menampilkan data secara dinamis dengan menggunakan website back-end ini,yang telah terdapat fitur CRUD guna membantu apabila suatu saat
        data yang di tampilkan pada website utama terdapat penambahan atau pengubahan data sehingga tidak mengganggu tampilan dari website utama
        pemerintah kota Malang.Silahkan Pantau Website <a href="<?= base_url('../malang') ?>">Disini</a>
      </div>
    </div>
  </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->