<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaAyahModel extends Model
{
    protected $table  = 'siswa_ayah';

    function getBySiswa($siswa_id)
    {
        return $this->db->table('siswa_ayah')->where('siswa_id', $siswa_id)->get()->getFirstRow();
    }
}
