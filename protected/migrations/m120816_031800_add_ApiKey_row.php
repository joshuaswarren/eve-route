<?php

class m120816_031800_add_ApiKey_row extends CDbMigration
{
	public function up()
	{
		$this->addColumn('eveCharacter', 'apiKey', 'text');
	}

	public function down()
	{
		$this->dropColumn('eveCharacter', 'apiKey');
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