<?= $this->extend('back/layouts') ?>

<?= $this->section('content') ?>


<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Tambah Gelombang</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= base_url('admin'); ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url('admin/gelombang/'); ?>">Manajemen Gelombang</a></li>
                    <li class="breadcrumb-item active">Tambah Gelombang</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <form action="<?= base_url('admin/gelombang/'); ?>" method="post">
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" name="nama">
                    </div>
                    <div class="form-group">
                        <label for="">Tahun</label>
                        <select name="tahun_id" class="form-control">
                            <option value="" selected disabled>- Pilih Tahun -</option>
                            <?php foreach ($tahun as $t) : ?>
                                <option value="<?= $t['id'] ?>"><?= $t['tahun'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Buka</label>
                        <input type="date" class="form-control" name="tanggal_buka">
                    </div>
                    <div class="form-group">
                        <label for="">Tanggal Tutup</label>
                        <input type="date" class="form-control" name="tanggal_tutup">
                    </div>
                    <div class="form-group">
                        <label for="">Kuota</label>
                        <input type="text" class="form-control" name="kuota">
                    </div>
                    <button class="btn btn-warning">Tambah</button>
                    <a href="<?= base_url('admin/gelombang/'); ?>" class="btn btn-info">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>