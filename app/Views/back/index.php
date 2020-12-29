<?= $this->extend('back/layouts') ?>

<?= $this->section('content') ?>

<!-- Content Header (Page header) -->
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Dashboard</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="admin">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">
      <div class="col-lg-2 col-6">
        <!-- small box -->
        <div class="small-box bg-primary">
          <div class="inner text-center">
            <h3><?= $tahun ?></h3>

            <p>Tahun</p>
          </div>
          <?php if (session("auth")[0]['level'] == "admin") : ?>
            <a href="<?= base_url('/admin/tahun') ?>" class="small-box-footer">Info Lebih Lanjut <i class="fas fa-arrow-circle-right"></i></a>
          <?php endif ?>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-2 col-6">
        <!-- small box -->
        <div class="small-box bg-success">
          <div class="inner text-center">
            <h3><?= $gelomang ?></h3>

            <p>Gelombang</p>
          </div>
          <?php if (session("auth")[0]['level'] == "admin") : ?>
            <a href="<?= base_url('/admin/gelombang') ?>" class="small-box-footer">Info Lebih Lanjut <i class="fas fa-arrow-circle-right"></i></a>
          <?php endif ?>
        </div>
      </div>
      <div class="col-lg-4 col-12">
        <!-- small box -->
        <div class="small-box bg-info">
          <div class="inner text-center">
            <h3><?= $siswa ?></h3>

            <p>Siswa</p>
          </div>
          <?php if (session("auth")[0]['level'] == "admin") : ?>
            <a href="<?= base_url('/admin/siswa') ?>" class="small-box-footer">Info Lebih Lanjut <i class="fas fa-arrow-circle-right"></i></a>
          <?php endif ?>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-2 col-6">
        <!-- small box -->
        <div class="small-box bg-warning">
          <div class="inner text-center">
            <h3><?= $jurusan ?></h3>

            <p>Jurusan</p>
          </div>
          <?php if (session("auth")[0]['level'] == "admin") : ?>
            <a href="<?= base_url('/admin/jurusan') ?>" class="small-box-footer">Info Lebih Lanjut <i class="fas fa-arrow-circle-right"></i></a>
          <?php endif ?>
        </div>
      </div>
      <!-- ./col -->
      <div class="col-lg-2 col-6">
        <!-- small box -->
        <div class="small-box bg-danger">
          <div class="inner text-center">
            <h3><?= $mata_pelajaran ?></h3>

            <p>Mata Pelajaran</p>
          </div>
          <?php if (session("auth")[0]['level'] == "admin") : ?>
            <a href="<?= base_url('/admin/mata-pelajaran') ?>" class="small-box-footer">Info Lebih Lanjut <i class="fas fa-arrow-circle-right"></i></a>
          <?php endif ?>
        </div>
      </div>
      <!-- ./col -->
    </div>
    <!-- /.row -->
    <!-- Main row -->
    <div class="row">
      <!-- Left col -->
      <section class="col-lg-7">

      </section>
      <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
</section>
<!-- /.content -->

<?= $this->endSection() ?>