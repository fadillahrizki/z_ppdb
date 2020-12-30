<?= $this->extend('back/layouts') ?>

<?= $this->section('content') ?>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Manajemen Kelulusan</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= base_url('admin') ?>">Home</a></li>
                    <li class="breadcrumb-item active">Manajemen Kelulusan</li>
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
            </div>
        </div>

        <br>

        <div class="row">
            <div class="col">
                <form class="card" method="post" action="<?= base_url('admin/kelulusan') ?>">
                    <div class="card-body">

                        <button class="btn btn-info mb-3">Luluskan yang terpilih</button>

                        <table id="table" class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th style="width:30px">
                                        <input type="checkbox" onchange="selectAll(this)">
                                    </th>
                                    <th>Nama</th>
                                    <th>NIS</th>
                                    <th>NIK</th>
                                    <th>Nilai Rata-rata</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($data as $d) :

                                    switch ($d['status']) {
                                        case 'Lulus':
                                            $status = 'badge-success';
                                            break;

                                        case 'Tidak Lulus':
                                            $status = 'badge-danger';
                                            break;
                                        default:
                                            $status = 'badge-secondary';
                                            break;
                                    }

                                ?>
                                    <tr>
                                        <td style="width:30px">
                                            <input type="checkbox" name="status[]" <?= $d['status'] == 'Lulus' ? 'checked' : '' ?> value="<?= $d['id'] ?>">
                                        </td>
                                        <td><?= $d['nama_lengkap'] ?></td>
                                        <td><?= $d['NIS'] ?></td>
                                        <td><?= $d['NIK'] ?></td>
                                        <td><?= $d['avg'] ?></td>
                                        <td>
                                            <span class="badge <?= $status ?>"><?= $d['status'] ?></span>
                                        </td>
                                    </tr>
                                <?php endforeach ?>
                            </tbody>
                        </table>

                        <button class="btn btn-info my-3">Luluskan yang terpilih</button>
                    </div>
                    <!-- /.card-body -->
                </form>
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

    function selectAll(e) {

        $("input[name^=status").get().map(el => {
            el.checked = e.checked
        })

    }
</script>

<?= $this->endSection() ?>