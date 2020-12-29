<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddGelombang extends Migration
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
            'tahun_id'          => [
                'type'           => 'INT',
                'constraint'     => 12,
                'unsigned'       => true,
            ],
            'nama'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
            'tanggal_buka' => [
                'type'           => 'DATE',
            ],
            'tanggal_tutup' => [
                'type'           => 'DATE',
            ],
            'kuota'       => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('gelombang');
    }

    public function down()
    {
        $this->forge->dropTable('tahun');
    }
}
