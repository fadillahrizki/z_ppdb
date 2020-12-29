<?= $this->extend('back/layouts') ?>

<?= $this->section('content') ?>

<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0 text-dark">Edit Siswa : <?= $data['nama_lengkap'] ?></h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?= base_url('admin'); ?>">Home</a></li>
                    <li class="breadcrumb-item"><a href="<?= base_url('admin/siswa/'); ?>">Manajemen Siswa</a></li>
                    <li class="breadcrumb-item active">Edit Siswa</li>
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
                                <label for="">NIK</label>
                                <input type="text" name="siswa[NIK]" class="form-control" placeholder="NIK" value="<?= $data['NIK'] ?>">
                            </div>
                            <div class="col-6">
                                <label for="">NIS</label>
                                <input type="text" name="siswa[NIS]" class="form-control" placeholder="NIS" value="<?= $data['NIS'] ?>">
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col">
                                <label for="">Nama Lengkap</label>
                                <input type="text" name="siswa[nama_lengkap]" class="form-control" placeholder="Nama Lengkap" value="<?= $data['nama_lengkap'] ?>">
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-6">
                                <label for="">Jenis Kelamin</label>
                                <select name="siswa[jenis_kelamin]" class="form-control">
                                    <option value="" disabled selected>- Pilih Jenis Kelamin -</option>
                                    <option value="Laki-laki" <?= $data['jenis_kelamin'] == 'Laki-laki' ? 'selected' : '' ?>>Laki-laki</option>
                                    <option value="Perempuan" <?= $data['jenis_kelamin'] == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label for="">Agama</label>
                                <select name="siswa[agama]" class="form-control">
                                    <option value="" disabled selected>- Pilih Agama -</option>
                                    <option value="Islam" <?= $data['agama'] == 'Islam' ? 'selected' : '' ?>>Islam</option>
                                    <option value="Kristen" <?= $data['agama'] == 'Kristen' ? 'selected' : '' ?>>Kristen</option>
                                    <option value="Hindu" <?= $data['agama'] == 'Hindu' ? 'selected' : '' ?>>Hindu</option>
                                    <option value="Buddha" <?= $data['agama'] == 'Buddha' ? 'selected' : '' ?>>Buddha</option>
                                    <option value="Konghucu" <?= $data['agama'] == 'Konghucu' ? 'selected' : '' ?>>Konghucu</option>
                                    <option value="Lainnya" <?= $data['agama'] == 'Lainnya' ? 'selected' : '' ?>>Lainnya</option>
                                </select>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-6">
                                <label for="">Tahun</label>
                                <select name="siswa[tahun_id]" class="form-control">
                                    <option value="" disabled selected>- Pilih Tahun -</option>
                                    <?php foreach ($tahun as $t) : ?>
                                        <option value="<?= $t['id'] ?>" <?= $data['tahun_id'] == $t['id'] ? 'selected' : '' ?>><?= $t['tahun'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div class="col-6">
                                <label for="">Gelombang</label>
                                <select name="siswa[gelombang_id]" class="form-control">
                                    <option value="" disabled selected>- Pilih Gelombang -</option>
                                    <?php foreach ($gelombang as $t) : ?>
                                        <option value="<?= $t['id'] ?>" <?= $data['gelombang_id'] == $t['id'] ? 'selected' : '' ?>><?= $t['nama'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-6">
                                <label for="">Jurusan</label>
                                <select name="siswa[jurusan_id]" class="form-control">
                                    <option value="" disabled selected>- Pilih Jurusan -</option>
                                    <?php foreach ($jurusan as $t) : ?>
                                        <option value="<?= $t['id'] ?>" <?= $data['jurusan_id'] == $t['id'] ? 'selected' : '' ?>><?= $t['nama'] ?></option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                            <div class="col-6">
                                <label for="">Alamat LEngkap</label>
                                <textarea name="siswa[alamat]" rows="5" class="form-control" placeholder="Alamat Lengkap"><?= $data['alamat'] ?></textarea>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-6">
                                <label for="">Tempat Lahir</label>
                                <input type="text" name="siswa[tempat_lahir]" class="form-control" placeholder="Tempat Lahir" value="<?= $data['tempat_lahir'] ?>">
                            </div>
                            <div class="col-6">
                                <label for="">Tanggal Lahir</label>
                                <input type="text" name="siswa[tanggal_lahir]" class="form-control" placeholder="Tanggal Lahir" value="<?= $data['tanggal_lahir'] ?>" onfocus="(this.type='date')">
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-6">
                                <label for="">Tinggal Dengan</label>
                                <input type="text" name="siswa[tinggal_dengan]" class="form-control" placeholder="Tinggal Dengan" value="<?= $data['tinggal_dengan'] ?>">
                            </div>
                            <div class="col-6">
                                <label for="">No Telepon</label>
                                <input type="text" name="siswa[no_telepon]" class="form-control" placeholder="Nomor Telepon" value="<?= $data['no_telepon'] ?>">
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-6">
                                <label for="">Jumlah Pembayaran</label>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span class="input-group-text">Rp.</span></div>
                                    <input type="text" name="siswa[jumlah_pembayaran]" class="form-control" placeholder="Jumlah Pembayaran" value="<?= $data['jumlah_pembayaran'] ?>">
                                </div>
                            </div>
                            <div class="col-6">
                                <label for="">Status Pembayaran</label>
                                <select name="siswa[status_pembayaran]" class="form-control">
                                    <option value="" disabled selected>- Pilih Status Pembayaran -</option>
                                    <option value="Lunas" <?= $data['status_pembayaran'] == 'Lunas' ? 'selected' : '' ?>>Lunas</option>
                                    <option value="Belum Lunas" <?= $data['status_pembayaran'] == 'Belum Lunas' ? 'selected' : '' ?>>Belum Lunas</option>
                                </select>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-6">
                                <label for="">Anak Ke</label>
                                <input type="text" name="siswa[anak_ke]" class="form-control" placeholder="Anak Ke" value="<?= $data['anak_ke'] ?>">
                            </div>
                            <div class="col-6">
                                <label for="">Jumlah Saudara</label>
                                <input type="text" name="siswa[jumlah_saudara]" class="form-control" placeholder="Jumlah Saudara Kandung" value="<?= $data['jumlah_saudara'] ?>">
                            </div>
                        </div>

                        <br>

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
                                        <label for="">Nama Lengkap</label>
                                        <input type="text" name="ayah[nama_lengkap]" class="form-control" placeholder="Nama Lengkap" value="<?= $ayah['nama_lengkap'] ?>">
                                    </div>
                                    <div class="col-6">
                                        <label for="">Agama</label>
                                        <select name="ayah[agama]" class="form-control">
                                            <option value="" disabled selected>- Pilih Agama -</option>
                                            <option value="Islam" <?= $ayah['agama'] == 'Islam' ? 'selected' : '' ?>>Islam</option>
                                            <option value="Kristen" <?= $ayah['agama'] == 'Kristen' ? 'selected' : '' ?>>Kristen</option>
                                            <option value="Hindu" <?= $ayah['agama'] == 'Hindu' ? 'selected' : '' ?>>Hindu</option>
                                            <option value="Buddha" <?= $ayah['agama'] == 'Buddha' ? 'selected' : '' ?>>Buddha</option>
                                            <option value="Konghucu" <?= $ayah['agama'] == 'Konghucu' ? 'selected' : '' ?>>Konghucu</option>
                                            <option value="Lainnya" <?= $ayah['agama'] == 'Lainnya' ? 'selected' : '' ?>>Lainnya</option>
                                        </select>
                                    </div>
                                </div>

                                <br>

                                <div class="row">
                                    <div class="col-6">
                                        <label for="">Pendidikan Terakhir</label>
                                        <select name="ayah[pendidikan_terakhir]" class="form-control">
                                            <option value="" disabled selected>- Pendidikan Terkahir -</option>
                                            <option value="SMA" <?= $ayah['pendidikan_terakhir'] == 'SMA' ? 'selected' : '' ?>>SMA</option>
                                            <option value="Akadmei" <?= $ayah['pendidikan_terakhir'] == 'Akademi' ? 'selected' : '' ?>>Akademi</option>
                                            <option value="Sarjana" <?= $ayah['pendidikan_terakhir'] == 'Sarjana' ? 'selected' : '' ?>>Sarjana</option>
                                        </select>
                                    </div>
                                    <div class="col-6">
                                        <label for="">Penghasilan</label>
                                        <select name="ayah[penghasilan]" class="form-control">
                                            <option value="" disabled selected>- Penghasilan per Bulan -</option>
                                            <option value="( kurang dari ) 500.000" <?= $ayah['penghasilan'] == '( kurang dari ) 500.000' ? 'selected' : '' ?>>( kurang dari ) 500.000</option>
                                            <option value="( lebih dari ) 500.000" <?= $ayah['penghasilan'] == '( lebih dari ) 500.000' ? 'selected' : '' ?>>( lebih dari ) 500.000</option>
                                            <option value="( lebih dari )1 juta" <?= $ayah['penghasilan'] == '( lebih dari )1 juta' ? 'selected' : '' ?>>( lebih dari )1 juta</option>
                                        </select>
                                    </div>
                                </div>

                                <br>

                                <div class="row">
                                    <div class="col-6">
                                        <label for="">Pekerjaan</label>
                                        <input type="text" name="ayah[pekerjaan]" class="form-control" placeholder="Pekerjaan" value="<?= $ayah['pekerjaan'] ?>">
                                    </div>
                                    <div class="col-6">
                                        <label for="">Nama Instansi</label>
                                        <input type="text" name="ayah[nama_instansi]" class="form-control" placeholder="Nama Instansi" value="<?= $ayah['nama_instansi'] ?>">
                                    </div>
                                </div>

                                <br>

                                <div class="row">
                                    <div class="col-6">
                                        <label for="">Jabatan</label>
                                        <input type="text" name="ayah[jabatan]" class="form-control" placeholder="Jabatan" value="<?= $ayah['jabatan'] ?>">
                                    </div>
                                    <div class="col-6">
                                        <label for="">No Telepon Kantor</label>
                                        <input type="text" name="ayah[no_telepon_kantor]" class="form-control" placeholder="Telepon Kantor" value="<?= $ayah['no_telepon_kantor'] ?>">
                                    </div>
                                </div>

                                <br>

                                <div class="row">
                                    <div class="col-6">
                                        <label for="">No Telepon</label>
                                        <input type="text" name="ayah[no_telepon]" class="form-control" placeholder="Telepon Rumah / HP" value="<?= $ayah['no_telepon'] ?>">
                                    </div>
                                    <div class="col-6">
                                        <label for="">Email</label>
                                        <input type="text" name="ayah[email]" class="form-control" placeholder="Email" value="<?= $ayah['email'] ?>">
                                    </div>
                                </div>

                                <br>
                                <label for="">Alamat Kantor</label>
                                <textarea name="ayah[alamat_kantor]" rows="5" class="form-control" placeholder="Alamat Kantor"><?= $ayah['alamat_kantor'] ?></textarea>

                                <br>
                                <label for="">Alamat Rumah</label>
                                <textarea name="ayah[alamat_rumah]" rows="5" class="form-control" placeholder="Alamat Rumah"><?= $ayah['alamat_rumah'] ?></textarea>
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
                                <label for="">Nama Lengkap</label>
                                <input type="text" name="ibu[nama_lengkap]" class="form-control" placeholder="Nama Lengkap" value="<?= $ibu['nama_lengkap'] ?>">
                            </div>
                            <div class="col-6">
                                <label for="">Agama</label>
                                <select name="ibu[agama]" class="form-control">
                                    <option value="" disabled selected>- Pilih Agama -</option>
                                    <option value="Islam" <?= $ibu['agama'] == 'Islam' ? 'selected' : '' ?>>Islam</option>
                                    <option value="Kristen" <?= $ibu['agama'] == 'Kristen' ? 'selected' : '' ?>>Kristen</option>
                                    <option value="Hindu" <?= $ibu['agama'] == 'Hindu' ? 'selected' : '' ?>>Hindu</option>
                                    <option value="Buddha" <?= $ibu['agama'] == 'Buddha' ? 'selected' : '' ?>>Buddha</option>
                                    <option value="Konghucu" <?= $ibu['agama'] == 'Konghucu' ? 'selected' : '' ?>>Konghucu</option>
                                    <option value="Lainnya" <?= $ibu['agama'] == 'Lainnya' ? 'selected' : '' ?>>Lainnya</option>
                                </select>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-6">
                                <label for="">Pendidikan Terakhir</label>
                                <select name="ibu[pendidikan_terakhir]" class="form-control">
                                    <option value="" disabled selected>- Pendidikan Terkahir -</option>
                                    <option value="SMA" <?= $ibu['pendidikan_terakhir'] == 'SMA' ? 'selected' : '' ?>>SMA</option>
                                    <option value="Akadmei" <?= $ibu['pendidikan_terakhir'] == 'Akademi' ? 'selected' : '' ?>>Akademi</option>
                                    <option value="Sarjana" <?= $ibu['pendidikan_terakhir'] == 'Sarjana' ? 'selected' : '' ?>>Sarjana</option>
                                </select>
                            </div>
                            <div class="col-6">
                                <label for="">Penghasilan</label>
                                <select name="ibu[penghasilan]" class="form-control">
                                    <option value="" disabled selected>- Penghasilan per Bulan -</option>
                                    <option value="( kurang dari ) 500.000" <?= $ibu['penghasilan'] == '( kurang dari ) 500.000' ? 'selected' : '' ?>>( kurang dari ) 500.000</option>
                                    <option value="( lebih dari ) 500.000" <?= $ibu['penghasilan'] == '( lebih dari ) 500.000' ? 'selected' : '' ?>>( lebih dari ) 500.000</option>
                                    <option value="( lebih dari )1 juta" <?= $ibu['penghasilan'] == '( lebih dari )1 juta' ? 'selected' : '' ?>>( lebih dari )1 juta</option>
                                </select>
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-6">
                                <label for="">Pekerjaan</label>
                                <input type="text" name="ibu[pekerjaan]" class="form-control" placeholder="Pekerjaan" value="<?= $ibu['pekerjaan'] ?>">
                            </div>
                            <div class="col-6">
                                <label for="">Nama Instansi</label>
                                <input type="text" name="ibu[nama_instansi]" class="form-control" placeholder="Nama Instansi" value="<?= $ibu['nama_instansi'] ?>">
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-6">
                                <label for="">Jabatan</label>
                                <input type="text" name="ibu[jabatan]" class="form-control" placeholder="Jabatan" value="<?= $ibu['jabatan'] ?>">
                            </div>
                            <div class="col-6">
                                <label for="">No Telepon Kantor</label>
                                <input type="text" name="ibu[no_telepon_kantor]" class="form-control" placeholder="Telepon Kantor" value="<?= $ibu['no_telepon_kantor'] ?>">
                            </div>
                        </div>

                        <br>

                        <div class="row">
                            <div class="col-6">
                                <label for="">No Telepon</label>
                                <input type="text" name="ibu[no_telepon]" class="form-control" placeholder="Telepon Rumah / HP" value="<?= $ibu['no_telepon'] ?>">
                            </div>
                            <div class="col-6">
                                <label for="">Email</label>
                                <input type="text" name="ibu[email]" class="form-control" placeholder="Email" value="<?= $ibu['email'] ?>">
                            </div>
                        </div>

                        <br>

                        <label for="">Alamat Kantor</label>
                        <textarea name="ibu[alamat_kantor]" rows="5" class="form-control" placeholder="Alamat Kantor"><?= $ibu['alamat_kantor'] ?></textarea>

                        <br>
                        <label for="">Alamat Rumah</label>
                        <textarea name="ibu[alamat_rumah]" rows="5" class="form-control" placeholder="Alamat Rumah"><?= $ibu['alamat_rumah'] ?></textarea>
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
                                <label for="">Nama Sekolah</label>
                                <input type="text" name="asal_sekolah[nama]" class="form-control" placeholder="Nama Sekolah" value="<?= $asal_sekolah['nama'] ?>">
                            </div>
                            <div class="col-6">
                                <label for="">No Telepon Sekolah</label>
                                <input type="text" name="asal_sekolah[no_telepon]" class="form-control" placeholder="Nomor Telepon Sekolah" value="<?= $asal_sekolah['no_telepon'] ?>">
                            </div>
                        </div>

                        <br>
                        <label for="">Alamat</label>
                        <textarea name="asal_sekolah[alamat]" rows="5" class="form-control" placeholder="Alamat Sekolah"><?= $asal_sekolah['alamat'] ?></textarea>
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

                        <?php $i = 0;
                        foreach ($nilai as $n) : ?>

                            <?= $i > 0 ? '<br>' : '' ?>

                            <div class="row">
                                <div class="col-6">
                                    <label for="">Nilai</label>
                                    <input type="text" name="siswa_nilai[<?= $i ?>][nilai]" class="form-control" placeholder="Nilai" value="<?= $n['nilai'] ?>">
                                </div>
                                <div class=" col-6">
                                    <label for="">Mata Pelajaran</label>
                                    <select name="siswa_nilai[<?= $i ?>][mata_pelajaran_id]" class="form-control">
                                        <option value="" disabled selected>- Mata Pelajaran -</option>
                                        <?php foreach ($mata_pelajaran as $t) : ?>
                                            <option value="<?= $t['id'] ?>" <?= $n['mata_pelajaran_id'] == $t['id'] ? 'selected' : '' ?>><?= $t['nama'] ?></option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>

                            <br>

                        <?php $i++;
                        endforeach ?>

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

                        <?php $i = 0;
                        foreach ($prestasi_akademik as $n) : ?>

                            <?= $i > 0 ? '<br>' : '' ?>

                            <div class="row">
                                <div class="col-4">
                                    <label for="">Nama Kejuaraan / Prestasi</label>
                                    <input type="text" name="prestasi_akademik[<?= $i ?>][nama]" class="form-control" placeholder="Nama Kejuaraan / Prestasi" value="<?= $n['nama'] ?>">
                                </div>
                                <div class="col-2">
                                    <label for="">Juara</label>
                                    <input type="text" name="prestasi_akademik[<?= $i ?>][juara]" class="form-control" placeholder="Juara" value="<?= $n['juara'] ?>">
                                </div>
                                <div class="col-3">
                                    <label for="">Tingkat</label>
                                    <input type="text" name="prestasi_akademik[<?= $i ?>][tingkat]" class="form-control" placeholder="Tingkat" value="<?= $n['tingkat'] ?>">
                                </div>
                                <div class="col-3">
                                    <label for="">Penyelenggara</label>
                                    <input type="text" name="prestasi_akademik[<?= $i ?>][penyelenggara]" class="form-control" placeholder="Penyelenggara" value="<?= $n['penyelenggara'] ?>">
                                </div>
                            </div>

                        <?php $i++;
                        endforeach ?>

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

                        <?php $i = 0;
                        foreach ($prestasi_non_akademik as $n) : ?>

                            <?= $i > 0 ? '<br>' : '' ?>

                            <div class="row">
                                <div class="col-4">
                                    <label for="">Nama Kejuaraan / Prestasi</label>
                                    <input type="text" name="prestasi_non_akademik[<?= $i ?>][nama]" class="form-control" placeholder="Nama Kejuaraan / Prestasi" value="<?= $n['nama'] ?>">
                                </div>
                                <div class="col-2">
                                    <label for="">Juara</label>
                                    <input type="text" name="prestasi_non_akademik[<?= $i ?>][juara]" class="form-control" placeholder="Juara" value="<?= $n['juara'] ?>">
                                </div>
                                <div class="col-3">
                                    <label for="">Tingkat</label>
                                    <input type="text" name="prestasi_non_akademik[<?= $i ?>][tingkat]" class="form-control" placeholder="Tingkat" value="<?= $n['tingkat'] ?>">
                                </div>
                                <div class="col-3">
                                    <label for="">Penyelenggara</label>
                                    <input type="text" name="prestasi_non_akademik[<?= $i ?>][penyelenggara]" class="form-control" placeholder="Penyelenggara" value="<?= $n['penyelenggara'] ?>">
                                </div>
                            </div>



                        <?php $i++;
                        endforeach ?>

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
                            <div class="col-lg-6">
                            <label for="">Nilai</label>
                                <input type="text" name="siswa_nilai[${$("input[name^=siswa_nilai]").get().length+1}][nilai]" class="form-control" placeholder="Nilai">
                            </div>
                            <div class="col-lg-6">
                            <label for="">Mata Pelajaran</label>
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
                            <label for="">Nama Kejuaraan / Prestasi</label>
                                <input type="text" name="prestasi_akademik[${$("input[name^=prestasi_akademik]").get().length+1}][nama]" class="form-control" placeholder="Nama Kejuaraan / Prestasi">
                            </div>
                            <div class="col-2">
                            <label for="">Juara</label>
                                <input type="text" name="prestasi_akademik[${$("input[name^=prestasi_akademik]").get().length+1}][juara]" class="form-control" placeholder="Juara">
                            </div>
                            <div class="col-3">
                            <label for="">Tingkat</label>
                                <input type="text" name="prestasi_akademik[${$("input[name^=prestasi_akademik]").get().length+1}][tingkat]" class="form-control" placeholder="Tingkat">
                            </div>
                            <div class="col-3">
                            <label for="">Penyelenggara</label>
                                <input type="text" name="prestasi_akademik[${$("input[name^=prestasi_akademik]").get().length+1}][penyelenggara]" class="form-control" placeholder="Penyelenggara">
                            </div>
                        </div>
                        `

        $("#prestasi_akademik").append(html)
    }

    function tambahPrestasiNonAkademik() {

        var html = `<br> <div class="row">
                            <div class="col-4">
                            <label for="">Nama Kejuaraan / Prestasi</label>
                                <input type="text" name="prestasi_akademik[${$("input[name^=prestasi_non_akademik]").get().length+1}][nama]" class="form-control" placeholder="Nama Kejuaraan / Prestasi">
                            </div>
                            <div class="col-2">
                            <label for="">Juara</label>
                                <input type="text" name="prestasi_akademik[${$("input[name^=prestasi_non_akademik]").get().length+1}][juara]" class="form-control" placeholder="Juara">
                            </div>
                            <div class="col-3">
                            <label for="">Tingkat</label>
                                <input type="text" name="prestasi_akademik[${$("input[name^=prestasi_non_akademik]").get().length+1}][tingkat]" class="form-control" placeholder="Tingkat">
                            </div>
                            <div class="col-3">
                            <label for="">Penyelenggara</label>
                                <input type="text" name="prestasi_akademik[${$("input[name^=prestasi_non_akademik]").get().length+1}][penyelenggara]" class="form-control" placeholder="Penyelenggara">
                            </div>
                        </div>
                        `

        $("#prestasi_akademik").append(html)
    }
</script>

<?= $this->endSection() ?>