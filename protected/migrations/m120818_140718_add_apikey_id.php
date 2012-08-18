<?php

class m120818_140718_add_apikey_id extends CDbMigration
{
	public function up()
	{
		$this->addColumn('eveCharacter', 'apiKeyId', 'tinytext');
	}

	public function down()
	{
		$this->dropColumn('eveCharacter', 'apiKeyId');
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