<!-- Tabel Jadwal-->
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h5>Data Persebaran <?= $title; ?></h5>
            </div>

            <div class="card-body">
                <table class="table table-condensed table-hover" id="dataTable">
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
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        <?php foreach ($medis as $ms) : ?>
                            <tr>
                                <td><?= $no++; ?></td>
                                <td><?= $ms->provinsi ?></td>
                                <td><?= $ms->kota ?></td>
                                <td><?= $ms->kecamatan ?></td>
                                <td><?= $ms->dokter ?></td>
                                <td><?= $ms->perawat ?></td>
                                <td><?= $ms->bidan ?></td>
                                <td><?= $ms->farmasi ?></td>
                                <td><?= $ms->lainnya ?></td>
                                <td><?= $ms->dokter + $ms->perawat + $ms->bidan + $ms->farmasi + $ms->lainnya ?></td>
                                <td>
                                    <a class="btn btn-danger" href="<?= base_url('admin/hapus_medis/' . $ms->id) ?>">Hapus</a>
                                    <a class="btn btn-success" href="<?= base_url('admin/edit_medis/' . $ms->id) ?>">Edit</a>
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
                <h5 class="modal-title" id="exampleModalLabel">Tambah Tenaga Medis</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <form action="<?= base_url('admin/tambah_medis_ok') ?>" method="post" required>
                        <div class="card-body">
                            <div class="form-group">
                                <label>Kecamatan</label>
                                <input type="text" class="form-control" name="kecamatan" required>
                            </div>
                            <div class="form-group">
                                <label>Dokter</label>
                                <input type="number" class="form-control" name="dokter" required>
                            </div>
                            <div class="form-group">
                                <label>Perawat</label>
                                <input type="number" class="form-control" name="perawat" required>
                            </div>
                            <div class="form-group">
                                <label>Bidan</label>
                                <input type="number" class="form-control" name="bidan" required>
                            </div>
                            <div class="form-group">
                                <label>Farmasi</label>
                                <input type="number" class="form-control" name="farmasi" required>
                            </div>
                            <div class="form-group">
                                <label>Lainnya</label>
                                <input type="number" class="form-control" name="lainnya" required>
                            </div>
                            <div class="form-group">
                                <label>Total</label>
                                <input type="number" class="form-control" name="total" required>
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