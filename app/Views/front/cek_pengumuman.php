<?php
require_once 'functions.php';
$site = site();
?>

<?= $this->extend('front/layouts') ?>

<?= $this->section('content') ?>

<br><br><br><br><br><br>

<section class="container">
    <div class="title-container">
        <h1 class="upcoming-section-title text-center">Cek Pengumuman</h1>
    </div>
    <div class="row py-5">
        <div class="col-6 m-auto">
            <form action="<?= base_url('cek-pengumuman') ?>" method="post" class="card card-body">
                <input type="text" class="form-control" name="search" placeholder="Masukkan NIS / Nama">
                <br>
                <button class="btn btn-warning btn-block">CEK PENGUMUMAN</button>
            </form>
        </div>
    </div>

    <?php if (isset($results)) : ?>

        <div class="row text-center">
            <div class="col">
                <h4><?= !empty($results) ? 'Data ditemukan!' : 'Data tidak ditemukan!' ?></h4>
            </div>
        </div>

        <?php if (!empty($results)) :

            foreach ($results as $res) :

        ?>
                <br>

                <div class="row">
                    <div class="col-6 m-auto">
                        <div class="card card-body pb-2">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <h4><?= $res['nama_lengkap'] ?></h4>
                                    <h6>NIS : <?= $res['NIS'] ?></h6>
                                </div>
                                <div>
                                    <span class="btn <?= $res['status'] == 'Lulus' ? 'btn-success' : 'btn-danger' ?> text-uppercase" style="cursor:default !important;"><?= $res['status'] ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

        <?php endforeach;
        endif ?>

    <?php endif ?>

</section>


<?= $this->endSection() ?>