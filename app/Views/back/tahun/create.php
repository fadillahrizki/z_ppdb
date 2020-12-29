<?= $this->extend('back/layouts') ?>

<?= $this->section('content') ?>


<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Tambah Tahun</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= base_url('admin'); ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url('admin/tahun/'); ?>">Manajemen Tahun</a></li>
                    <li class="breadcrumb-item active">Tambah Tahun</li>
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
                <form action="<?= base_url('admin/tahun/'); ?>" method="post">
                    <div class="form-group">
                        <label for="">Tahun</label>
                        <input type="text" class="form-control" name="tahun">
                    </div>
                    <div class="form-group">
                        <label for="">Status</label>
                        <input type="text" class="form-control" name="status">
                    </div>
                    <button class="btn btn-warning">Tambah</button>
                    <a href="<?= base_url('admin/tahun/'); ?>" class="btn btn-info">Kembali</a>
                </form>
            </div>
        </div>
    </div>
</section>

<?= $this->endSection() ?>