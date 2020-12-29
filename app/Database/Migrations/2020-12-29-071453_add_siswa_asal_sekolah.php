<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddSiswaAsalSekolah extends Migration
{

    public function up()
    {
        $this->forge->addField([
            'id'          => [
                'type'           => 'INT',
                'constraint'     => 12,
                'unsigned'       => true,
                'auto_increment' => true,
            ],
            'siswa_id'       => [
                'type'           => 'INT',
                'constraint'     => 12,
                'unsigned'       => true,
            ],
            'nama'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'alamat'       => [
                'type'           => 'TEXT',
            ],
            'no_telepon'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('siswa_asal_sekolah');
    }

    public function down()
    {
        $this->forge->dropTable('siswa_asal_sekolah');
    }
}
