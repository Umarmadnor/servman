<?php

/**
 * This is the model class for table "racks_log".
 *
 * The followings are the available columns in table 'racks_log':
 * @property integer $id
 * @property integer $userid
 * @property integer $racksid
 * @property string $datetime
 */
class RacksLog extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return RacksLog the static model class
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
		return 'racks_log';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('userid, racksid', 'numerical', 'integerOnly'=>true),
			array('datetime', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, userid, racksid, datetime', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'userid' => 'Userid',
			'racksid' => 'Racksid',
			'datetime' => 'Datetime',
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
		$criteria->compare('userid',$this->userid);
		$criteria->compare('racksid',$this->racksid);
		$criteria->compare('datetime',$this->datetime,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}