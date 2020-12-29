<?php

namespace App\Models;

use CodeIgniter\Model;

class GelombangModel extends Model
{
    protected $table  = 'gelombang';

    public function getData()
    {
        return $this->db->table('gelombang')->join('tahun', 'tahun.id = gelombang.tahun_id')->get()->getResultArray();
    }
}
