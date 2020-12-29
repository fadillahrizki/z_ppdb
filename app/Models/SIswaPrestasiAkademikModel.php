<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaPrestasiAkademikModel extends Model
{
    protected $table  = 'siswa_prestasi_akademik';

    function getBySiswa($siswa_id)
    {
        return $this->db->table('siswa_prestasi_akademik')->where('siswa_id', $siswa_id)->get()->getFirstRow();
    }
}
