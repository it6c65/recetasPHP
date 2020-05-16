<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Ingredients extends Migration
{
	public function up()
	{
		$fields = [
			'id' => [
				'type' => 'INT',
				'unsigned' => true,
				'auto_increment' => true
			],
			'recipes_id' => [
				'type' => 'INT'
			],
			'name' => [
				'type' => 'VARCHAR',
				'constraint' => 255
			],
			'quantity' => [
				'type' => 'INT',
				'constraint' => 6
			]
		];
		$this->forge->addField($fields);
		$this->forge->addPrimaryKey('id');
		$this->forge->addForeignKey('recipes_id', 'recipes', 'id', 'CASCADE', 'CASCADE');
		$this->forge->createTable('ingredients');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('ingredients');
	}
}
