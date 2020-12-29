<?= $this->extend('back/layouts') ?>

<?= $this->section('content') ?>


<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Edit Mata Pelajaran : <?= $data['nama'] ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= base_url('admin'); ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url('admin/mata-pelajaran/'); ?>">Manajemen Mata Pelajaran</a></li>
                    <li class="breadcrumb-item active">Edit Mata Pelajaran</li>
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
                <form action="<?= base_url('admin/mata-pelajaran/update/'); ?>" method="post">
                    <input type="hidden" name="id" value="<?= $data['id'] ?>">
                    <div class="form-group">
                        <label for="">Nama</label>
                        <input type="text" class="form-control" name="nama" value="<?= $data['nama'] ?>">
                    </div>
                    <div class="form-group">
                        <label for="">Tahun</label>
                        <input type="text" class="form-control" name="tahun" value="<?= $data['tahun'] ?>">
                    </div>
                    <button class="btn btn-warning">Edit</button>
                    <a href="<?= base_url('admin/mata-pelajaran/'); ?>" class="btn btn-info">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>