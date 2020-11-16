<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>


    <div class="row">

        <div class="col-md-7">
            <div class="card">
                <div class="card-header">Form Edit Data Persebaran Tenaga Medis</div>
                <div class="card-body">
                    <form action="<?= base_url('admin/ubah_fasilitas') ?>" method="post" required>
                        <input type="hidden" name="id" value="<?= $data_fasilitas->id ?>">
                        <div class="form-group">
                            <label>Longitude</label>
                            <input type="text" value="<?= $data_fasilitas->lng ?>" style="width: 65%;" class="form-control" name="long" placeholder="Longitude" required>
                        </div>
                        <div class="form-group">
                            <label>Latitude</label>
                            <input type="text" value="<?= $data_fasilitas->lat ?>" style="width: 65%;" class="form-control" name="lat" placeholder="Latitude" required>
                        </div>
                        <div class="form-group">
                            <label>Nama Fasilitas</label>
                            <input type="text" value="<?= $data_fasilitas->nama ?>" style="width: 65%;" class="form-control" name="nama" placeholder="nama" required>
                        </div>
                        <div class="form-group">
                            <label>Alamat Fasilitas</label>
                            <input type="text" value="<?= $data_fasilitas->alamat ?>" style="width: 65%;" class="form-control" name="alamat" placeholder="alamat" required>
                        </div>
                        <div class="form-group">
                            <label>Kecamatan</label>
                            <select name="kecamatan" id="" class="form-control" style="width: 40%" required>
                                <optgroup label="TERPILIH">
                                    <option value="<?= $data_fasilitas->kecamatan ?>"><?= $data_fasilitas->kecamatan ?></option>
                                </optgroup>
                                <optgroup label="PILIHAN">
                                    <?php foreach ($medis as $ms) : ?>
                                        <option value="<?= $ms->kecamatan ?>"><?= $ms->kecamatan ?></option>
                                    <?php endforeach ?>
                                </optgroup>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Jenis Fasilitas</label>
                            <select name="fasilitas" id="" class="form-control" style="width: 40%" required>
                                <optgroup label="TERPILIH">
                                    <option value="<?= $data_fasilitas->fasilitas ?>"><?= $data_fasilitas->fasilitas ?></option>
                                </optgroup>
                                <optgroup label="PILIHAN">
                                    <option>Puskesmas</option>
                                    <option>rumah sakit umum</option>
                                    <option>rumah sakit khusus</option>
                                </optgroup>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Jenis Pelayanan</label>
                            <select name="jenis" id="" class="form-control" style="width: 40%" required>
                                <optgroup label="TERPILIH">
                                    <option value="<?= $data_fasilitas->jenis ?>"><?= $data_fasilitas->jenis ?></option>
                                </optgroup>
                                <optgroup label="PILIHAN">
                                    <option>Rawat Inap</option>
                                    <option>Non Rawat inap</option>
                                </optgroup>
                            </select>
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