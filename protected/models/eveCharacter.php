<?php

/**
 * This is the model class for table "eveCharacter".
 *
 * The followings are the available columns in table 'eveCharacter':
 * @property integer $id
 * @property integer $characterId
 * @property integer $corporationId
 * @property string $name
 * @property integer $userId
 * @property string $apiKey
 * @property string $apiKeyId
 */
class eveCharacter extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return eveCharacter the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'eveCharacter';
	}

	public function defaultScope()
    {
	    if (Yii::app() instanceof CWebApplication)
	    {
	    	if(isset(Yii::app()->user->id)) 
			    $userId=Yii::app()->user->id;
			else
				$userId = null;
	        return array(
	            'condition'=>"userId='".$userId."'",
	        );
	    } else
		    return array();
    }

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('characterId, corporationId, userId', 'numerical', 'integerOnly'=>true),
			array('name, apiKey, apiKeyId', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, characterId, corporationId, name, userId, apiKey, apiKeyId', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'user' => array(self::BELONGS_TO, 'Users', 'userId'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Id',
			'characterId' => 'Character',
			'corporationId' => 'Corporation',
			'name' => 'Name',
			'userId' => 'User',
			'apiKey' => 'API Verification Code',
			'apiKeyId' => 'API ID',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);

		$criteria->compare('characterId',$this->characterId);

		$criteria->compare('corporationId',$this->corporationId);

		$criteria->compare('name',$this->name,true);

		$criteria->compare('userId',$this->userId);

		$criteria->compare('apiKey',$this->apiKey,true);

		$criteria->compare('apiKeyId',$this->apiKeyId,true);

		return new CActiveDataProvider('eveCharacter', array(
			'criteria'=>$criteria,
		));
	}
}