<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <div class="row">

        <div class="col-md-7">
            <div class="card">
                <div class="card-header">Form Edit Data Persebaran Tenaga Medis</div>
                <div class="card-body">
                    <form action="<?= base_url('admin/ubah_medis') ?>" method="post" required>
                        <input type="hidden" name="id" value="<?= $data_medis->id ?>">
                        <div class="form-group">
                            <label>Kecamatan</label>
                            <input type="text" value="<?= $data_medis->kecamatan ?>" style="width: 65%;" class="form-control" name="kecamatan" placeholder="Kecamatan" required>
                        </div>
                        <div class="form-group">
                            <label>Dokter</label>
                            <input type="number" value="<?= $data_medis->dokter ?>" style="width: 65%;" class="form-control" name="dokter" placeholder="Dokter" required>
                        </div>
                        <div class="form-group">
                            <label>Perawat</label>
                            <input type="number" value="<?= $data_medis->perawat ?>" style="width: 65%;" class="form-control" name="perawat" placeholder="Perawat" required>
                        </div>
                        <div class="form-group">
                            <label>Bidan</label>
                            <input type="number" value="<?= $data_medis->bidan ?>" style="width: 65%;" class="form-control" name="bidan" placeholder="Bidan" required>
                        </div>
                        <div class="form-group">
                            <label>Farmasi</label>
                            <input type="number" value="<?= $data_medis->farmasi ?>" style="width: 65%;" class="form-control" name="farmasi" placeholder="Farmasi" required>
                        </div>
                        <div class="form-group">
                            <label>Lainnya</label>
                            <input type="number" value="<?= $data_medis->lainnya ?>" style="width: 65%;" class="form-control" name="lainnya" placeholder="Lainnya" required>
                        </div>
                        <div class="form-group">
                            <label>Total</label>
                            <input type="number" value="<?= $data_medis->total ?>" style="width: 65%;" class="form-control" name="lainnya" placeholder="Lainnya" required>
                        </div>
                        <button type="submit" class="btn btn-block btn-primary">Edit Data</button>

                    </form>
                </div>
            </div>
        </div>


    </div>

    <br>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->