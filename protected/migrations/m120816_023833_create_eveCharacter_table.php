<?php

class m120816_023833_create_eveCharacter_table extends CDbMigration
{
	public function up()
	{
		 $this->createTable('eveCharacter', array(
		            'id' => 'pk',
		            'characterId' => 'int NOT NULL',
		            'corporationId' => 'int',
		            'name' => 'tinytext',
		            'userId' => 'int',
		  ));	
		  $this->addForeignKey('userIdToEveCharacter', 'eveCharacter', 'userId', 'users', 'id', 'CASCADE', 'CASCADE');
	}

	public function down()
	{
		$this->dropTable('eveCharacter');	
 	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}