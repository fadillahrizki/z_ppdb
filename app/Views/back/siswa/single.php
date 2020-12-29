<?= $this->extend('back/layouts') ?>

<?= $this->section('content') ?>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Detail Siswa : <?= $data['nama_lengkap'] ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= base_url('admin'); ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url('admin/siswa/'); ?>">Manajemen Siswa</a></li>
                    <li class="breadcrumb-item active">Detail Siswa</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<section class="content">
    <div class="container-fluid">

        <!-- Identitas -->

        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-body">

                        <div class="row pb-3">
                            <div class="col">
                                <h4>IDENTITAS SISWA</h4>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <table class="table table-bordered">
                                    <tr>
                                        <td>Nomor Pendaftaran</td>
                                        <th><?= $data['no_pendaftaran'] ?></th>
                                    </tr>
                                    <tr>
                                        <td>NIK</td>
                                        <th><?= $data['NIK'] ?></th>
                                    </tr>
                                    <tr>
                                        <td>NIS</td>
                                        <th><?= $data['NIS'] ?></th>
                                    </tr>
                                    <tr>
                                        <td>Nama Lengkap</td>
                                        <th><?= $data['nama_lengkap'] ?></th>
                                    </tr>
                                    <tr>
                                        <td>Jenis Kelamin</td>
                                        <th><?= $data['jenis_kelamin'] ?></th>
                                    </tr>
                                    <tr>
                                        <td>Agama</td>
                                        <th><?= $data['agama'] ?></th>
                                    </tr>
                                    <tr>
                                        <td>Tempat Lahir</td>
                                        <th><?= $data['tempat_lahir'] ?></th>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Lahir</td>
                                        <th><?= $data['tanggal_lahir'] ?></th>
                                    </tr>
                                    <tr>
                                        <td>Tahun</td>
                                        <th><?= $tahun['tahun'] ?></th>
                                    </tr>
                                    <tr>
                                        <td>Gelombang</td>
                                        <th><?= $gelombang['nama'] ?></th>
                                    </tr>
                                    <tr>
                                        <td>Jurusan</td>
                                        <th><?= $jurusan['nama'] ?></th>
                                    </tr>
                                    <tr>
                                        <td>Status</td>
                                        <th><?= $data['status'] ?></th>
                                    </tr>
                                    <tr>
                                        <td>Status Pembayaran</td>
                                        <th><?= $data['status_pembayaran'] ?></th>
                                    </tr>
                                    <tr>
                                        <td>Jumlah Pembayaran</td>
                                        <th><?= $data['jumlah_pembayaran'] ?></th>
                                    </tr>
                                    <tr>
                                        <td>Nomor Telepeon</td>
                                        <th><?= $data['no_telepon'] ?></th>
                                    </tr>
                                    <tr>
                                        <td>Tinggal Dengan</td>
                                        <th><?= $data['tinggal_dengan'] ?></th>
                                    </tr>
                                    <tr>
                                        <td>Anak Ke</td>
                                        <th><?= $data['anak_ke'] ?></th>
                                    </tr>
                                    <tr>
                                        <td>Jumlah Saudara Kandung</td>
                                        <th><?= $data['jumlah_saudara'] ?></th>
                                    </tr>
                                    <tr>
                                        <td>Tanggal Pembuatan</td>
                                        <th><?= $data['tanggal'] ?></th>
                                    </tr>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- end of identitas -->

                <!-- Ayah kandung -->

                <div class="row">
                    <div class="col-12">

                        <div class="card">
                            <div class="card-body">

                                <div class="row pb-3">
                                    <div class="col">
                                        <h4>KETERANGAN TENTANG AYAH KANDUNG</h4>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <table class="table table-bordered">
                                            <tr>
                                                <td>Nama Lengkap</td>
                                                <th><?= $ayah['nama_lengkap'] ?></th>
                                            </tr>
                                            <tr>
                                                <td>Agama</td>
                                                <th><?= $ayah['agama'] ?></th>
                                            </tr>
                                            <tr>
                                                <td>Pendidikan Terakhir</td>
                                                <th><?= $ayah['pendidikan_terakhir'] ?></th>
                                            </tr>
                                            <tr>
                                                <td>Pekerjaan</td>
                                                <th><?= $ayah['pekerjaan'] ?></th>
                                            </tr>
                                            <tr>
                                                <td>Nama Instansi</td>
                                                <th><?= $ayah['nama_instansi'] ?></th>
                                            </tr>
                                            <tr>
                                                <td>Jabatan</td>
                                                <th><?= $ayah['jabatan'] ?></th>
                                            </tr>
                                            <tr>
                                                <td>Penghasilan</td>
                                                <th><?= $ayah['penghasilan'] ?></th>
                                            </tr>
                                            <tr>
                                                <td>Nomor Telepon</td>
                                                <th><?= $ayah['no_telepon'] ?></th>
                                            </tr>
                                            <tr>
                                                <td>Email</td>
                                                <th><?= $ayah['email'] ?></th>
                                            </tr>
                                            <tr>
                                                <td>Alamat Rumah</td>
                                                <th><?= $ayah['alamat_rumah'] ?></th>
                                            </tr>
                                            <tr>
                                                <td>Nomor Telepon Kantor</td>
                                                <th><?= $ayah['no_telepon_kantor'] ?></th>
                                            </tr>
                                            <tr>
                                                <td>Alamat Kantor</td>
                                                <th><?= $ayah['alamat_kantor'] ?></th>
                                            </tr>
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- end of Ayah kandung  -->

        <!-- ibu kandung -->

        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-body">

                        <div class="row pb-3">
                            <div class="col">
                                <h4>KETERANGAN TENTANG IBU KANDUNG</h4>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <table class="table table-bordered">
                                    <tr>
                                        <td>Nama Lengkap</td>
                                        <th><?= $ibu['nama_lengkap'] ?></th>
                                    </tr>
                                    <tr>
                                        <td>Agama</td>
                                        <th><?= $ibu['agama'] ?></th>
                                    </tr>
                                    <tr>
                                        <td>Pendidikan Terakhir</td>
                                        <th><?= $ibu['pendidikan_terakhir'] ?></th>
                                    </tr>
                                    <tr>
                                        <td>Pekerjaan</td>
                                        <th><?= $ibu['pekerjaan'] ?></th>
                                    </tr>
                                    <tr>
                                        <td>Nama Instansi</td>
                                        <th><?= $ibu['nama_instansi'] ?></th>
                                    </tr>
                                    <tr>
                                        <td>Jabatan</td>
                                        <th><?= $ibu['jabatan'] ?></th>
                                    </tr>
                                    <tr>
                                        <td>Penghasilan</td>
                                        <th><?= $ibu['penghasilan'] ?></th>
                                    </tr>
                                    <tr>
                                        <td>Nomor Telepon</td>
                                        <th><?= $ibu['no_telepon'] ?></th>
                                    </tr>
                                    <tr>
                                        <td>Email</td>
                                        <th><?= $ibu['email'] ?></th>
                                    </tr>
                                    <tr>
                                        <td>Alamat Rumah</td>
                                        <th><?= $ibu['alamat_rumah'] ?></th>
                                    </tr>
                                    <tr>
                                        <td>Nomor Telepon Kantor</td>
                                        <th><?= $ibu['no_telepon_kantor'] ?></th>
                                    </tr>
                                    <tr>
                                        <td>Alamat Kantor</td>
                                        <th><?= $ibu['alamat_kantor'] ?></th>
                                    </tr>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- end of ibu kandung  -->

        <!-- asal sekolah -->

        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-body">

                        <div class="row pb-3">
                            <div class="col">
                                <h4>ASAL SEKOLAH</h4>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <table class="table table-bordered">
                                    <tr>
                                        <td>Nama Sekolah</td>
                                        <th><?= $asal_sekolah['nama'] ?></th>
                                    </tr>
                                    <tr>
                                        <td>Nomor Telepon</td>
                                        <th><?= $asal_sekolah['no_telepon'] ?></th>
                                    </tr>
                                    <tr>
                                        <td>Alamat</td>
                                        <th><?= $asal_sekolah['alamat'] ?></th>
                                    </tr>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- end of asal sekolah  -->

        <!-- nilai -->

        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-body" id="nilai">

                        <div class="row pb-3">
                            <div class="col d-flex justify-content-between">
                                <h4>NILAI</h4>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <table class="table table-bordered datatable table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Mata Pelajaran</th>
                                            <th>Nilai</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1;
                                        foreach ($nilai as $n) : ?>
                                            <tr>
                                                <th><?= $i ?></th>
                                                <td><?= $n['nama'] ?></td>
                                                <td><?= $n['nilai'] ?></td>
                                            </tr>
                                        <?php $i++;
                                        endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- end of nilai  -->
        <!-- prestasi akademik -->

        <div class="row">
            <div class="col-12">

                <div class="card">
                    <div class="card-body" id="prestasi_akademik">

                        <div class="row pb-3">
                            <div class="col d-flex justify-content-between">
                                <h4>PRESTASI AKADEMIK</h4>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <table class="table table-bordered datatable table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama</th>
                                            <th>Juara</th>
                                            <th>Tingkat</th>
                                            <th>Penyelenggara</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1;
                                        foreach ($prestasi_akademik as $n) : ?>
                                            <tr>
                                                <th><?= $i ?></th>
                                                <td><?= $n['nama'] ?></td>
                                                <td><?= $n['juara'] ?></td>
                                                <td><?= $n['tingkat'] ?></td>
                                                <td><?= $n['penyelenggara'] ?></td>
                                            </tr>
                                        <?php $i++;
                                        endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- end of prestasi akademik  -->

        <!-- prestasi non akademik -->

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body" id="prestasi_non_akademik">

                        <div class="row pb-3">
                            <div class="col d-flex justify-content-between">
                                <h4>PRESTASI NON AKADEMIK</h4>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <table class="table table-bordered datatable table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nama</th>
                                            <th>Juara</th>
                                            <th>Tingkat</th>
                                            <th>Penyelenggara</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $i = 1;
                                        foreach ($prestasi_non_akademik as $n) : ?>
                                            <tr>
                                                <th><?= $i ?></th>
                                                <td><?= $n['nama'] ?></td>
                                                <td><?= $n['juara'] ?></td>
                                                <td><?= $n['tingkat'] ?></td>
                                                <td><?= $n['penyelenggara'] ?></td>
                                            </tr>
                                        <?php $i++;
                                        endforeach ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- end of prestasi non akademik  -->

        <a href="<?= base_url('admin/siswa/edit/' . $data['id']); ?>" class="btn btn-warning">Edit</a>
        <a href="<?= base_url('admin/siswa/'); ?>" class="btn btn-info">Kembali</a>

        <br><br>

    </div>
</section>

<?= $this->endSection() ?>


<?= $this->section('scripts') ?>

<script>
    $(function() {
        $(".datatable").DataTable({
            "responsive": true,
            "autoWidth": false,
        });
    });
</script>

<?= $this->endSection() ?>