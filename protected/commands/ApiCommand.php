<?php
class ApiCommand extends CConsoleCommand
{
	public $pheal = null;

	protected function _connect($apiId, $apiKey) {
		 spl_autoload_register("Pheal::classload");
		 PhealConfig::getInstance()->cache = new PhealFileCache();
		 $this->pheal = new Pheal($apiId, $apiKey);
	}
	
	protected function _getCharacterNameForKey() {
		 $result = $this->pheal->Characters();
		 foreach($result->characters as $character) {
			 return $character->name;
		 }
	}
	
	protected function _getCharacterId($characterName) {
		$this->pheal->scope = "eve";
		$result = $this->pheal->CharacterID(array("names" => $characterName));
		return $result->characters[0]->characterID;
	}
	
	protected function _getCharactersCorporationId($characterId) {
		$this->pheal->scope = "eve";
		$result = $this->pheal->CharacterInfo(array("characterID" => $characterId));
		return $result->characters[0]->corporationID;		
	}

	public function actionSetupNamesAndIds() {
		$charactersToSet = eveCharacter::model()->findAll('characterId IS NULL OR name IS NULL');
		if(count($charactersToSet) > 0) {
			foreach($charactersToSet as $character) {
				$this->_connect($character->apiKeyId, $character->apiKey);
				$name = $this->_getCharacterNameForKey();
				$characterId = $this->_getCharacterId($name);
				$corporationId = $this->_getCharactersCorporationId($characterId);
				$character->characterId = $characterId;
				$character->name = $name;
				$character->corporationId = $corporationId;
				$character->save();
			}
			return 0; 
		} else {
			return 0; // success - no characters to update
		}
	}
}
