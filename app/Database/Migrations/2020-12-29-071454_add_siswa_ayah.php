<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddSiswaAyah extends Migration
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
            'nama_lengkap'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'agama'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'pendidikan_terakhir'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'pekerjaan'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'nama_instansi'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'jabatan'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'penghasilan'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'alamat_kantor'       => [
                'type'           => 'TEXT',
            ],
            'alamat_rumah'       => [
                'type'           => 'TEXT',
            ],
            'no_telepon'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'no_telepon_kantor'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'email'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('siswa_ayah');
    }

    public function down()
    {
        $this->forge->dropTable('siswa_ayah');
    }
}
