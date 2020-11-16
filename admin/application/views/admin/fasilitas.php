<!-- Tabel Jadwal-->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>Daftar Persebaran <?= $title; ?></h5>
            </div>

            <div class="card-body">
                <button class="btn btn-primary mb-4" data-toggle="modal" data-target="#ModalTambah">Tambah Data</button>
                <table class="table table-condensed table-hover" id="dataTable">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Kota</th>
                            <th>Kecamatan</th>
                            <th>Alamat</th>
                            <th>Fasilitas</th>
                            <th>Jenis</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($fasilitas as $fl) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $fl->nama ?></td>
                                <td><?= $fl->kota ?></td>
                                <td><?= $fl->kecamatan ?></td>
                                <td><?= $fl->alamat ?></td>
                                <td><?= $fl->fasilitas ?></td>
                                <td><?= $fl->jenis ?></td>
                                <td>
                                    <a class="btn btn-danger" href="<?= base_url('admin/hapus_fasilitas/' . $fl->id) ?>">Hapus</a>
                                    <a class="btn btn-success" href="<?= base_url('admin/edit_fasilitas/' . $fl->id) ?>">Edit</a>
                                </td>
                            </tr>
                        <?php endforeach ?>

                    </tbody>

                </table>

            </div>

            <div class="card-footer small text-muted">
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="ModalTambah" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Fasilitas Kesehatan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <form action="<?= base_url('admin/tambah_fasilitas_ok') ?>" method="post" required>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Longitude</label>
                                <input type="text" class="form-control" name="lng" required>
                            </div>
                            <div class="form-group">
                                <label>Latitude</label>
                                <input type="text" class="form-control" name="lat" required>
                            </div>
                            <div class="form-group">
                                <label>Nama Fasilitas</label>
                                <input type="text" class="form-control" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label>Alamat Fasilitas</label>
                                <input type="text" class="form-control" name="alamat" required>
                            </div>
                            <div class="form-group">
                                <label>kecamatan</label>
                                <select name="kecamatan" id="" class="form-control" required>
                                    <option>-- Pilih --</option>
                                    <?php foreach ($medis as $ms) : ?>
                                        <option value="<?= $ms->kecamatan ?>"><?= $ms->kecamatan ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Jenis Fasilitas</label>
                                <select name="fasilitas" id="" class="form-control" required>
                                    <option>-- Pilih --</option>
                                    <option>Puskesmas</option>
                                    <option>Rumah Sakit Umum</option>
                                    <option>Rumah Sakit Khusus</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Jenis Pelayanan</label>
                                <select name="jenis" id="" class="form-control" required>
                                    <option>-- Pilih --</option>
                                    <option>Rawat Inap</option>
                                    <option>Non Rawat Inap</option>
                                </select>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-success">Tambah Jadwal</button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>