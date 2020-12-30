<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaModel extends Model
{
    protected $table  = 'siswa';

    public function getTahun($id)
    {
        return $this->db->table('tahun')->where('id', $id)->get()->getRowArray();
    }

    public function getGelombang($id)
    {
        return $this->db->table('gelombang')->where('id', $id)->get()->getRowArray();
    }

    public function getJurusan($id)
    {
        return $this->db->table('jurusan')->where('id', $id)->get()->getRowArray();
    }

    public function getAyah($id)
    {
        return $this->db->table('siswa_ayah')->where('siswa_id', $id)->get()->getRowArray();
    }

    public function getIbu($id)
    {
        return $this->db->table('siswa_ibu')->where('siswa_id', $id)->get()->getRowArray();
    }

    public function getAsalSekolah($id)
    {
        return $this->db->table('siswa_asal_sekolah')->where('siswa_id', $id)->get()->getRowArray();
    }

    public function getNilai($id)
    {
        return $this->db->table('siswa_nilai')->where('siswa_id', $id)->join('mata_pelajaran', 'mata_pelajaran.id=siswa_nilai.mata_pelajaran_id')->get()->getResultArray();
    }

    public function getKelulusan()
    {
        $query = "select siswa.id,siswa.nama_lengkap,siswa.NIS,siswa.status,siswa.NIK,floor(avg(siswa_nilai.nilai)) as avg from siswa join siswa_nilai on siswa_nilai.siswa_id=siswa.id group by siswa.NIS";
        return $this->db->query($query)->getResultArray();
    }

    public function getPrestasiAkademik($id)
    {
        return $this->db->table('siswa_prestasi_akademik')->where('siswa_id', $id)->get()->getResultArray();
    }

    public function getPrestasiNonAkademik($id)
    {
        return $this->db->table('siswa_prestasi_non_akademik')->where('siswa_id', $id)->get()->getResultArray();
    }
}
