<?php

class eveCharacterTest extends WebTestCase
{
	public $fixtures=array(
		'eveCharacters'=>'eveCharacter',
	);

	public function testShow()
	{
		$this->open('?r=eveCharacter/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=eveCharacter/create');
	}

	public function testUpdate()
	{
		$this->open('?r=eveCharacter/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=eveCharacter/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=eveCharacter/index');
	}

	public function testAdmin()
	{
		$this->open('?r=eveCharacter/admin');
	}
}
