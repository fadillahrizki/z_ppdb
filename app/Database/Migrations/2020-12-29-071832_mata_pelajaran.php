<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class MataPelajaran extends Migration
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
			'nama'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
			'tahun'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255',
			],
		]);
		$this->forge->addKey('id', true);
		$this->forge->createTable('mata_pelajaran');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('mata_pelajaran');
	}
}
