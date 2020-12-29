<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaPrestasiNonAkademikModel extends Model
{
    protected $table  = 'siswa_prestasi_non_akademik';

    function getBySiswa($siswa_id)
    {
        return $this->db->table('siswa_prestasi_non_akademik')->where('siswa_id', $siswa_id)->get()->getFirstRow();
    }
}
