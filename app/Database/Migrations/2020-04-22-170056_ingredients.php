<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Ingredients extends Migration
{
	public function up()
	{
		$fields = [
			'id' => [
				'type' => 'TINYINT',
				'unsigned' => true,
				'auto_increment' => true
			],
			'quantity' => [
				'type' => 'INT'
			],
			'times' => [
				'type' => 'INT',
				'constraint' => 2,
			],
			'available' => [
				'type' => 'BOOL'
			],
			'description' => [
				'type' => 'VARCHAR',
				'constraint' => 255
			]
		];
		$this->forge->addField($fields);
		$this->forge->addPrimaryKey('id');
		$this->forge->createTable('ingredients');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('ingredients');
	}
}
