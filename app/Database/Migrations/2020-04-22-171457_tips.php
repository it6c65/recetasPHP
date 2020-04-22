<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tips extends Migration
{
	public function up()
	{
		$fields = [
			'id' => [
				'type' => 'TINYINT',
				'auto_increment' => true
			],
			'recipes_id' => [
				'type' => 'INT'
			],
			'tmp_name' => [
				'type' => 'VARCHAR',
				'constraint' => 40
			],
			'extras' => [
				'type' => 'TEXT'
			]
		];
		$this->forge->addField($fields);
		$this->forge->addPrimaryKey('id');
		$this->forge->addForeignKey('recipes_id', 'recipes', 'id', 'CASCADE', 'CASCADE');
		$this->forge->createTable('tips');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		//
	}
}
