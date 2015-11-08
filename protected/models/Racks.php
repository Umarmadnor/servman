<?php

/**
 * This is the model class for table "racks".
 *
 * The followings are the available columns in table 'racks':
 * @property integer $id
 * @property integer $rack_num
 * @property string $comments
 * @property double $server_temp
 * @property double $room_temp
 * @property string $name
 * @property string $status
 * @property string $datetime
 */
class Racks extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Racks the static model class
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
		return 'racks';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('server_temp, room_temp', 'required'),
			array('rack_num', 'numerical', 'integerOnly'=>true),
			array('server_temp, room_temp', 'numerical'),
			array('name', 'length', 'max'=>255),
			array('status', 'length', 'max'=>1),
			array('comments, datetime', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, rack_num, comments, server_temp, room_temp, name, status, datetime', 'safe', 'on'=>'search'),
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
			'rack_num' => 'Rack Num',
			'comments' => 'Comments',
			'server_temp' => 'Server Temp',
			'room_temp' => 'Room Temp',
			'name' => 'Name',
			'status' => 'Status',
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
		$criteria->compare('rack_num',$this->rack_num);
		$criteria->compare('comments',$this->comments,true);
		$criteria->compare('server_temp',$this->server_temp);
		$criteria->compare('room_temp',$this->room_temp);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('datetime',$this->datetime,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}