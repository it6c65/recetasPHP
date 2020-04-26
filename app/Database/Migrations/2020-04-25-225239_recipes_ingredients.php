<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class RecipesIngredients extends Migration
{
	public function up()
	{
		$fields = [
			'recipes_id' => [
				'type' => 'INT',
			],
			'ingredients_id' => [
				'type' => 'TINYINT',
				'unsigned' => true,
			],
			'quantity' => [
				'type' => 'INT'
			],
		];
		$this->forge->addField($fields);
		$this->forge->addPrimaryKey('id');
		$this->forge->addForeignKey('ingredients_id', 'ingredients', 'id', 'CASCADE', 'CASCADE');
		$this->forge->addForeignKey('recipes_id', 'recipes', 'id', 'CASCADE', 'CASCADE');
		$this->forge->createTable('recipes_ingredients');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('recipes_ingredients');
	}
}
