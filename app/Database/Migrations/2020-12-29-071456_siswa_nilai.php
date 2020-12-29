<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SiswaNilai extends Migration
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
			'siswa_id'          => [
				'type'           => 'INT',
				'constraint'     => 12,
				'unsigned'       => true,
			],
			'mata_pelajaran_id'       => [
				'type'           => 'INT',
				'constraint'     => 12,
				'unsigned'       => true,
			],
			'nilai'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('siswa_nilai');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('siswa_nilai');
	}
}
