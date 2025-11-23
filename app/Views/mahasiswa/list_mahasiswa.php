<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Data Mahasiswa</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                        <li class="breadcrumb-item active">View Mahasiswa</li>
                    </ol>
                </div>
            </div>
        </div></section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Data Mahasiswa</h3>
                            </div>
                        <div class="card-body">
                            <?php if (session()->getFlashData('success')) : ?>
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <?= session()->getFlashData('success') ?>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php endif; ?>

                            <table id="myTableMahasiswa" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>NPM</th>
                                        <th>Nama</th>
                                        <th>Jurusan</th>
                                        <th>UKM</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($mahasiswa as $mhs) : ?>
                                        <tr>
                                            <td><?= $i++ ?></td>
                                            <td><?= $mhs->npm ?></td>
                                            <td><?= $mhs->nama ?></td>
                                            <td><?= $mhs->jurusan ?></td>
                                            <td><?= $mhs->ukm ?></td>
                                            <td style="text-align: center">
                                                <a href="#" class="btn btn-sm btn-primary" data-toggle="modal" data-target="#ModalEditMahasiswa" id="idMahasiswa" vid="<?= $mhs->id ?>">
                                                    <i class="fas fa-edit"></i>
                                                </a>
                                                <a href="<?= base_url('/mahasiswa/deleteMahasiswa/' . $mhs->id); ?>" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus')">
                                                    <i class="fas fa-trash-alt"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
            </div>
        </div>
    </section>
    </div>
<div class="modal fade" id="ModalEditMahasiswa" tabindex="-1" role="dialog" aria-labelledby="Modal Edit Mahasiswa">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Update Data Mahasiswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="<?= base_url() ?>/mahasiswa/UpdateRegMahasiswa" method="post">
                    <input type="hidden" name="IdMahasiswa" id="IdMahasiswa">

                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">NPM</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="npm" id="IdNpm" placeholder="NPM" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="nama" id="IdNama" placeholder="Nama" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">Jurusan</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="jurusan" id="IdJurusan" placeholder="Jurusan" required>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-3 col-form-label">UKM</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="ukm" id="IdUkm" placeholder="UKM">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save Changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>