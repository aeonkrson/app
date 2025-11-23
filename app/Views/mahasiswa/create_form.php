<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1><?= $title ?></h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                        <li class="breadcrumb-item"><a href="<?= base_url('mahasiswa') ?>">View Mahasiswa</a></li>
                        <li class="breadcrumb-item active">Add New</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-8">
                    <div class="card card-primary">
                        <div class="card-header" style="background-color: navy">
                            <h3 class="card-title">Register Mahasiswa Form</h3>
                        </div>
                        <form action="<?= base_url() ?>/mahasiswa/saveRegMahasiswa" method="post">
                            <?= csrf_field()?>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="npm">NPM</label>
                                    <input type="text" class="form-control" name="npm" id="npm" placeholder="Enter NPM" required>
                                </div>
                                <div class="form-group">
                                    <label for="nama">Nama</label>
                                    <input type="text" class="form-control" name="nama" id="nama" placeholder="Enter Nama" required>
                                </div>
                                <div class="form-group">
                                    <label for="jurusan">Jurusan</label>
                                    <input type="text" class="form-control" name="jurusan" id="jurusan" placeholder="Enter Jurusan" required>
                                </div>
                                <div class="form-group">
                                    <label for="ukm">UKM</label>
                                    <input type="text" class="form-control" name="ukm" id="ukm" placeholder="Enter UKM">
                                </div>
                            </div>
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" style="background-color: green">Save</button>
                                <a href="<?= base_url('mahasiswa') ?>" class="btn btn-secondary" style="background-color: red">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>