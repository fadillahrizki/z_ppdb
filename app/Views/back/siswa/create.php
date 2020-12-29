<?php
require_once 'functions.php';
$site = site();
?>

<?= $this->extend("back/layouts") ?>

<?= $this->section("content") ?>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Tambah Siswa Baru</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= base_url('admin'); ?>">Home</a></li>
                    <li class="breadcrumb-item active">Tambah Siswa Baru</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<section class="content">
    <form action="<?= base_url('/admin/siswa/') ?>" method="post" class="container-fluid">

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
                            <div class="col-6">
                                <input type="text" name="siswa[NIK]" class="form-control" placeholder="NIK">
                            </div>
                            <div class="col-6">
                                <input type="text" name="siswa[NIS]" class="form-control" placeholder="NIS">
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col">
                                <input type="text" name="siswa[nama_lengkap]" class="form-control" placeholder="Nama Lengkap">
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-6">
                                <select name="siswa[jenis_kelamin]" class="form-control">
                                    <option value="" disabled selected>- Pilih Jenis Kelamin -</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <select name="siswa[agama]" class="form-control">
                                    <option value="" disabled selected>- Pilih Agama -</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Buddha">Buddha</option>
                                    <option value="Konghucu">Konghucu</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-6">
                                <select name="siswa[tahun_id]" class="form-control">
                                    <option value="" disabled selected>- Pilih Tahun -</option>
                                    <?php foreach ($tahun as $t) : ?>
                                        <option value="<?= $t['id'] ?>"><?= $t['tahun'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div class="col-6">
                                <select name="siswa[gelombang_id]" class="form-control">
                                    <option value="" disabled selected>- Pilih Gelombang -</option>
                                    <?php foreach ($gelombang as $t) : ?>
                                        <option value="<?= $t['id'] ?>"><?= $t['nama'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-6">
                                <select name="siswa[jurusan_id]" class="form-control">
                                    <option value="" disabled selected>- Pilih Jurusan -</option>
                                    <?php foreach ($jurusan as $t) : ?>
                                        <option value="<?= $t['id'] ?>"><?= $t['nama'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div class="col-6">
                                <select name="siswa[status]" class="form-control">
                                    <option value="" disabled selected>- Pilih Status -</option>
                                    <option value="Lulus">Lulus</option>
                                    <option value="Tidak Lulus">Tidak Lulus</option>
                                </select>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-6">
                                <input type="text" name="siswa[tempat_lahir]" class="form-control" placeholder="Tempat Lahir">
                            </div>
                            <div class="col-6">
                                <input type="text" name="siswa[tanggal_lahir]" class="form-control" placeholder="Tanggal Lahir" onfocus="(this.type='date')">
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-6">
                                <input type="text" name="siswa[tinggal_dengan]" class="form-control" placeholder="Tinggal Dengan">
                            </div>
                            <div class="col-6">
                                <input type="text" name="siswa[no_telepon]" class="form-control" placeholder="Nomor Telepon">
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-6">
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text">Rp.</span></div>
                                    <input type="text" name="siswa[jumlah_pembayaran]" class="form-control" placeholder="Jumlah Pembayaran">
                                </div>
                            </div>
                            <div class="col-6">
                                <select name="siswa[status_pembayaran]" class="form-control">
                                    <option value="" disabled selected>- Pilih Status Pembayaran -</option>
                                    <option value="Lunas">Lunas</option>
                                    <option value="Belum Lunas">Belum Lunas</option>
                                </select>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-6">
                                <input type="text" name="siswa[anak_ke]" class="form-control" placeholder="Anak Ke">
                            </div>
                            <div class="col-6">
                                <input type="text" name="siswa[jumlah_saudara]" class="form-control" placeholder="Jumlah Saudara Kandung">
                            </div>
                        </div>

                        <br>

                        <textarea name="siswa[alamat]" rows="5" class="form-control" placeholder="Alamat Lengkap"></textarea>

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
                                    <div class="col-6">
                                        <input type="text" name="ayah[nama_lengkap]" class="form-control" placeholder="Nama Lengkap">
                                    </div>
                                    <div class="col-6">
                                        <select name="ayah[agama]" class="form-control">
                                            <option value="" disabled selected>- Pilih Agama -</option>
                                            <option value="Islam">Islam</option>
                                            <option value="Kristen">Kristen</option>
                                            <option value="Hindu">Hindu</option>
                                            <option value="Buddha">Buddha</option>
                                            <option value="Konghucu">Konghucu</option>
                                            <option value="Lainnya">Lainnya</option>
                                        </select>
                                    </div>
                                </div>

                                <br>

                                <div class="row">
                                    <div class="col-6">
                                        <select name="ayah[pendidikan_terakhir]" class="form-control">
                                            <option value="" disabled selected>- Pendidikan Terkahir -</option>
                                            <option value="SMA">SMA</option>
                                            <option value="Akademi">Akademi</option>
                                            <option value="Sarjana">Sarjana</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <select name="ayah[penghasilan]" class="form-control">
                                            <option value="" disabled selected>- Penghasilan per Bulan -</option>
                                            <option value="( kurang dari ) 500.000">( kurang dari ) 500.000</option>
                                            <option value="( lebih dari ) 500.000">( lebih dari ) 500.000</option>
                                            <option value="( lebih dari )1 juta">( lebih dari )1 juta</option>
                                        </select>
                                    </div>
                                </div>

                                <br>

                                <div class="row">
                                    <div class="col-6">
                                        <input type="text" name="ayah[pekerjaan]" class="form-control" placeholder="Pekerjaan">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" name="ayah[nama_instansi]" class="form-control" placeholder="Nama Instansi">
                                    </div>
                                </div>

                                <br>

                                <div class="row">
                                    <div class="col-6">
                                        <input type="text" name="ayah[jabatan]" class="form-control" placeholder="Jabatan">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" name="ayah[no_telepon_kantor]" class="form-control" placeholder="Telepon Kantor">
                                    </div>
                                </div>

                                <br>

                                <div class="row">
                                    <div class="col-6">
                                        <input type="text" name="ayah[no_telepon]" class="form-control" placeholder="Telepon Rumah / HP">
                                    </div>
                                    <div class="col-6">
                                        <input type="text" name="ayah[email]" class="form-control" placeholder="Email">
                                    </div>
                                </div>

                                <br>

                                <textarea name="ayah[alamat_kantor]" rows="5" class="form-control" placeholder="Alamat Kantor"></textarea>

                                <br>

                                <textarea name="ayah[alamat_rumah]" rows="5" class="form-control" placeholder="Alamat Rumah"></textarea>
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
                            <div class="col-6">
                                <input type="text" name="ibu[nama_lengkap]" class="form-control" placeholder="Nama Lengkap">
                            </div>
                            <div class="col-6">
                                <select name="ibu[agama]" class="form-control">
                                    <option value="" disabled selected>- Pilih Agama -</option>
                                    <option value="Islam">Islam</option>
                                    <option value="Kristen">Kristen</option>
                                    <option value="Hindu">Hindu</option>
                                    <option value="Buddha">Buddha</option>
                                    <option value="Konghucu">Konghucu</option>
                                    <option value="Lainnya">Lainnya</option>
                                </select>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-6">
                                <select name="ibu[pendidikan_terakhir]" class="form-control">
                                    <option value="" disabled selected>- Pendidikan Terkahir -</option>
                                    <option value="SMA">SMA</option>
                                    <option value="Akademi">Akademi</option>
                                    <option value="Sarjana">Sarjana</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <select name="ibu[penghasilan]" class="form-control">
                                    <option value="" disabled selected>- Penghasilan per Bulan -</option>
                                    <option value="( kurang dari ) 500.000">( kurang dari ) 500.000</option>
                                    <option value="( lebih dari ) 500.000">( lebih dari ) 500.000</option>
                                    <option value="( lebih dari )1 juta">( lebih dari )1 juta</option>
                                </select>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-6">
                                <input type="text" name="ibu[pekerjaan]" class="form-control" placeholder="Pekerjaan">
                            </div>
                            <div class="col-6">
                                <input type="text" name="ibu[nama_instansi]" class="form-control" placeholder="Nama Instansi">
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-6">
                                <input type="text" name="ibu[jabatan]" class="form-control" placeholder="Jabatan">
                            </div>
                            <div class="col-6">
                                <input type="text" name="ibu[no_telepon_kantor]" class="form-control" placeholder="Telepon Kantor">
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-6">
                                <input type="text" name="ibu[no_telepon]" class="form-control" placeholder="Telepon Rumah / HP">
                            </div>
                            <div class="col-6">
                                <input type="text" name="ibu[email]" class="form-control" placeholder="Email">
                            </div>
                        </div>

                        <br>

                        <textarea name="ibu[alamat_kantor]" rows="5" class="form-control" placeholder="Alamat Kantor"></textarea>

                        <br>

                        <textarea name="ibu[alamat_rumah]" rows="5" class="form-control" placeholder="Alamat Rumah"></textarea>
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
                            <div class="col-6">
                                <input type="text" name="asal_sekolah[nama]" class="form-control" placeholder="Nama Sekolah">
                            </div>
                            <div class="col-6">
                                <input type="text" name="asal_sekolah[no_telepon]" class="form-control" placeholder="Nomor Telepon Sekolah">
                            </div>
                        </div>

                        <br>

                        <textarea name="asal_sekolah[alamat]" rows="5" class="form-control" placeholder="Alamat Sekolah"></textarea>
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
                                <div>
                                    <button class="btn btn-info" onclick="tambahNilai()" type="button">Tambah Nilai</button>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <input type="text" name="siswa_nilai[0][nilai]" class="form-control" placeholder="Nilai">
                            </div>
                            <div class="col-6">
                                <select name="siswa_nilai[0][mata_pelajaran_id]" class="form-control">
                                    <option value="" disabled selected>- Mata Pelajaran -</option>
                                    <?php foreach ($mata_pelajaran as $t) : ?>
                                        <option value="<?= $t['id'] ?>"><?= $t['nama'] ?></option>
                                    <?php endforeach ?>
                                </select>
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
                                <div>
                                    <button class="btn btn-info" onclick="tambahPrestasiAkademik()" type="button">Tambah Prestasi</button>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <input type="text" name="prestasi_akademik[0][nama]" class="form-control" placeholder="Nama Kejuaraan / Prestasi">
                            </div>
                            <div class="col-2">
                                <input type="text" name="prestasi_akademik[0][juara]" class="form-control" placeholder="Juara">
                            </div>
                            <div class="col-3">
                                <input type="text" name="prestasi_akademik[0][tingkat]" class="form-control" placeholder="Tingkat">
                            </div>
                            <div class="col-3">
                                <input type="text" name="prestasi_akademik[0][penyelenggara]" class="form-control" placeholder="Penyelenggara">
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
                                <div>
                                    <button class="btn btn-info" onclick="tambahPrestasiNonAkademik()" type="button">Tambah Prestasi</button>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-4">
                                <input type="text" name="prestasi_non_akademik[0][nama]" class="form-control" placeholder="Nama Kejuaraan / Prestasi">
                            </div>
                            <div class="col-2">
                                <input type="text" name="prestasi_non_akademik[0][juara]" class="form-control" placeholder="Juara">
                            </div>
                            <div class="col-3">
                                <input type="text" name="prestasi_non_akademik[0][tingkat]" class="form-control" placeholder="Tingkat">
                            </div>
                            <div class="col-3">
                                <input type="text" name="prestasi_non_akademik[0][penyelenggara]" class="form-control" placeholder="Penyelenggara">
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- end of prestasi non akademik  -->

        <button class="btn btn-warning">Tambah</button>
        <a href="<?= base_url('admin/siswa/'); ?>" class="btn btn-info">Kembali</a>

        <br><br>

    </form>
</section>

<?= $this->endSection() ?>

<?= $this->section('scripts') ?>

<script>
    function tambahNilai() {

        var html = `<br> <div class="row">
                            <div class="col-6">
                                <input type="text" name="siswa_nilai[${$("input[name^=siswa_nilai]").get().length+1}][nilai]" class="form-control" placeholder="Nilai">
                            </div>
                            <div class="col-6">
                                <select name="siswa_nilai[${$("input[name^=siswa_nilai]").get().length+1}][mata_pelajaran_id]" class="form-control">
                                    <option value="" disabled selected>- Mata Pelajaran -</option>
                                    <?php foreach ($mata_pelajaran as $t) : ?>
                                        <option value="<?= $t['id'] ?>"><?= $t['nama'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                        
                        `

        $("#nilai").append(html)
    }

    function tambahPrestasiAkademik() {

        var html = `<br> <div class="row">
                            <div class="col-4">
                                <input type="text" name="prestasi_akademik[${$("input[name^=prestasi_akademik]").get().length+1}][nama]" class="form-control" placeholder="Nama Kejuaraan / Prestasi">
                            </div>
                            <div class="col-2">
                                <input type="text" name="prestasi_akademik[${$("input[name^=prestasi_akademik]").get().length+1}][juara]" class="form-control" placeholder="Juara">
                            </div>
                            <div class="col-3">
                                <input type="text" name="prestasi_akademik[${$("input[name^=prestasi_akademik]").get().length+1}][tingkat]" class="form-control" placeholder="Tingkat">
                            </div>
                            <div class="col-3">
                                <input type="text" name="prestasi_akademik[${$("input[name^=prestasi_akademik]").get().length+1}][penyelenggara]" class="form-control" placeholder="Penyelenggara">
                            </div>
                        </div>
                        `

        $("#prestasi_akademik").append(html)
    }

    function tambahPrestasiNonAkademik() {

        var html = `<br> <div class="row">
                            <div class="col-4">
                                <input type="text" name="prestasi_non_akademik[${$("input[name^=prestasi_non_akademik]").get().length+1}][nama]" class="form-control" placeholder="Nama Kejuaraan / Prestasi">
                            </div>
                            <div class="col-2">
                                <input type="text" name="prestasi_non_akademik[${$("input[name^=prestasi_non_akademik]").get().length+1}][juara]" class="form-control" placeholder="Juara">
                            </div>
                            <div class="col-3">
                                <input type="text" name="prestasi_non_akademik[${$("input[name^=prestasi_non_akademik]").get().length+1}][tingkat]" class="form-control" placeholder="Tingkat">
                            </div>
                            <div class="col-3">
                                <input type="text" name="prestasi_non_akademik[${$("input[name^=prestasi_non_akademik]").get().length+1}][penyelenggara]" class="form-control" placeholder="Penyelenggara">
                            </div>
                        </div>
                        `

        $("#prestasi_akademik").append(html)
    }
</script>

<?= $this->endSection() ?>