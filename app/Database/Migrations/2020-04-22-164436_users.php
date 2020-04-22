<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
{
	public function up()
	{
		$fields = [
			'id' => [
				'type' => 'INT',
				'constraint' => 3,
				'unsigned' => true,
				'auto_increment' => true
			],
			'username' => [
				'type' => 'VARCHAR',
				'constraint' => '30',
				'unique' => true,
			],
			'password' => [
				'type' => 'CHAR',
				'constraint' => 60
			]
		];
		$this->forge->addField($fields);
		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('users');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('users');
	}
}
