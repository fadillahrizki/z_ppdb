<?php

namespace App\Models;

use CodeIgniter\Model;

class SiswaNilaiModel extends Model
{
    protected $table  = 'siswa_nilai';

    function getBySiswa($siswa_id)
    {
        return $this->db->table('siswa_nilai')->where('siswa_id', $siswa_id)->get()->getFirstRow();
    }
}
