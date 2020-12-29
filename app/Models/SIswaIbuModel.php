<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaIbuModel extends Model
{
    protected $table  = 'siswa_ibu';

    function getBySiswa($siswa_id)
    {
        return $this->db->table('siswa_ibu')->where('siswa_id', $siswa_id)->get()->getFirstRow();
    }
}
