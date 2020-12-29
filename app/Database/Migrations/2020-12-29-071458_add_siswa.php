<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddSiswa extends Migration
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
            'NIK'          => [
                'type'           => 'INT',
                'constraint'     => 12,
            ],
            'NIS'       => [
                'type'           => 'INT',
                'constraint'     => 12,
            ],
            'tahun_id'       => [
                'type'           => 'INT',
                'constraint'     => 12,
                'unsigned'       => true,
            ],
            'gelombang_id'       => [
                'type'           => 'INT',
                'constraint'     => 12,
                'unsigned'       => true,
            ],
            'jurusan_id'       => [
                'type'           => 'INT',
                'constraint'     => 12,
                'unsigned'       => true,
            ],
            'user_id'       => [
                'type'           => 'INT',
                'constraint'     => 12,
                'unsigned'       => true,
            ],
            'nama_lengkap'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'jenis_kelamin'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'agama'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'alamat'       => [
                'type'           => 'TEXT',
            ],
            'tempat_lahir'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'tanggal_lahir'       => [
                'type'           => 'DATE',
            ],
            'status'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'status_pembayaran'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'jumlah_pembayaran'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'no_pendaftaran'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'no_telepon'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'tinggal_dengan'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'anak_ke'       => [
                'type'           => 'INT',
                'constraint'     => 12,
            ],
            'jumlah_saudara'       => [
                'type'           => 'INT',
                'constraint'     => 12,
            ],
            'tanggal'       => [
                'type'           => 'DATETIME',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('siswa');
    }

    public function down()
    {
        $this->forge->dropTable('siswa');
    }
}
