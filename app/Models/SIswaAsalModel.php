<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaAsalModel extends Model
{
    protected $table  = 'siswa_asal_sekolah';

    function getBySiswa($siswa_id)
    {
        return $this->db->table('siswa_asal_sekolah')->where('siswa_id', $siswa_id)->get()->getFirstRow();
    }
}
