<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Recipes extends Migration
{
	public function up()
	{
		$fields = [
			'id' => [
				'type' => 'INT',
				'auto_increment' => true
			],
			'users_id' => [
				'type' => 'INT',
				'constraint' => 3,
				'unsigned' => true
			],
			'recname' => [
				'type' => 'VARCHAR',
				'constraint' => 40
			],
			'estimated' => [
				'type' => 'TINYINT',
				'constraint' => 2
			],
			'estimated_type' => [
				'type' => 'VARCHAR',
				'constraint' => 10
			],
			'preparation' => [
				'type' => 'TEXT'
			],
			'creation' => [
				'type' => 'DATE'
			]
		];
		$this->forge->addField($fields);
		$this->forge->addPrimaryKey('id');
		$this->forge->addForeignKey('users_id', 'users', 'id', 'CASCADE', 'CASCADE');
		$this->forge->createTable('recipes');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('recipes');
	}
}
