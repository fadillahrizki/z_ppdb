<?= $this->extend('back/layouts') ?>

<?= $this->section('content') ?>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Manajemen Mata Pelajaran</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/admin/">Home</a></li>
                    <li class="breadcrumb-item active">Manajemen Mata Pelajaran</li>
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

                <?php if (session()->getFlashdata('success')) : ?>

                    <div class="alert alert-success" role="alert">
                        <?= session()->getFlashdata('success') ?>
                    </div>

                <?php endif ?>

                <a href="<?= base_url('admin/mata-pelajaran/create') ?>" class="btn btn-info">Tambah Mata Pelajaran</a>
            </div>
        </div>

        <br>

        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <table id="table" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                    <th>Tahun</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1;
                                foreach ($data as $d) : ?>
                                    <tr>
                                        <th scope="row"><?= $i ?></th>
                                        <td><?= $d['nama'] ?></td>
                                        <td><?= $d['tahun'] ?></td>
                                        <td>
                                            <a href="<?= base_url('admin/mata-pelajaran/edit/' . $d['id']) ?>" class="badge badge-warning">Edit</a>
                                            <a href="<?= base_url('admin/mata-pelajaran/delete/' . $d['id']) ?>" class="badge badge-danger">Hapus</a>
                                        </td>
                                    </tr>
                                <?php $i++;
                                endforeach ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>

    </div>
</section>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>

<script>
    $(function() {
        $("#table").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
    });
</script>

<?= $this->endSection() ?>