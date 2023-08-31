<?= $this->extend('template/temp'); ?>
<?= $this->section("content"); ?>

<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="namaPasien">Nama Pasien</label>
                            <input type="text" id="namaPasien" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="form-group">
                            <label for="tempatLahir">Tempat Lahir</label>
                            <input type="text" id="tempatLahir" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="tanggalLahir">Tanggal Lahir</label>
                            <input type="date" id="tanggalLahir" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="form-group">
                            <label for="alamat">Alamat</label>
                            <textarea id="alamat" class="form-control" rows="2"></textarea>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                            <label for="telepon">Telepon</label>
                            <input type="text" id="telepon" class="form-control">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>