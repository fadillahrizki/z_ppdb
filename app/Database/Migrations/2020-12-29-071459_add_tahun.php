<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddTahun extends Migration
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
            'tahun'       => [
                'type'           => 'INT',
                'constraint'     => 12,
            ],
            'status' => [
                'type'           => 'VARCHAR',
                'constraint'     => '255',
            ],
        ]);
        $this->forge->addKey('id', true);
        $this->forge->createTable('tahun');
    }

    public function down()
    {
        $this->forge->dropTable('tahun');
    }
}
