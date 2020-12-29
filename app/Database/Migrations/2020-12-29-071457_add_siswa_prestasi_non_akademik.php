<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddSiswaAkademik extends Migration
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
            'juara'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'tingkat'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'penyelenggara'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('siswa_prestasi_non_akademik');
    }

    public function down()
    {
        $this->forge->dropTable('siswa_prestasi_non_akademik');
    }
}
