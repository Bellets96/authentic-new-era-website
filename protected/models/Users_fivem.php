<?php

/**
 * This is the model class for table "users".
 *
 * The followings are the available columns in table 'users':
 * @property string $identifier
 * @property string $accounts
 * @property string $group
 * @property string $inventory
 * @property string $job
 * @property integer $job_grade
 * @property string $loadout
 * @property string $metadata
 * @property string $position
 * @property string $firstname
 * @property string $lastname
 * @property string $dateofbirth
 * @property string $sex
 * @property integer $height
 * @property string $skin
 * @property string $status
 * @property integer $is_dead
 * @property integer $id
 * @property integer $disabled
 * @property string $created_at
 * @property string $last_seen
 * @property string $health_state
 * @property string $inside
 * @property integer $jail_time
 * @property string $xp
 * @property string $okokcrafts
 * @property string $statistics
 * @property integer $electrocourses
 * @property string $image
 * @property integer $dangerous
 * @property integer $wanted
 * @property string $iban
 * @property integer $pincode
 * @property string $cryptocurrency
 * @property integer $crypto_wallet
 * @property integer $phone_number
 * @property integer $hasvoted
 * @property integer $playtime
 */
class Users_fivem extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('identifier', 'required'),
			array('job_grade, height, is_dead, disabled, jail_time, electrocourses, dangerous, wanted, pincode, crypto_wallet, phone_number, hasvoted, playtime', 'numerical', 'integerOnly'=>true),
			array('identifier', 'length', 'max'=>46),
			array('group', 'length', 'max'=>50),
			array('job', 'length', 'max'=>20),
			array('firstname, lastname', 'length', 'max'=>16),
			array('dateofbirth', 'length', 'max'=>10),
			array('sex', 'length', 'max'=>1),
			array('health_state', 'length', 'max'=>8192),
			array('inside', 'length', 'max'=>100),
			array('image', 'length', 'max'=>250),
			array('iban', 'length', 'max'=>255),
			array('accounts, inventory, loadout, metadata, position, skin, status, created_at, last_seen, xp, okokcrafts, statistics, cryptocurrency', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('identifier, accounts, group, inventory, job, job_grade, loadout, metadata, position, firstname, lastname, dateofbirth, sex, height, skin, status, is_dead, id, disabled, created_at, last_seen, health_state, inside, jail_time, xp, okokcrafts, statistics, electrocourses, image, dangerous, wanted, iban, pincode, cryptocurrency, crypto_wallet, phone_number, hasvoted, playtime', 'safe', 'on'=>'search'),
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
			'identifier' => 'Identifier',
			'accounts' => 'Accounts',
			'group' => 'Group',
			'inventory' => 'Inventory',
			'job' => 'Job',
			'job_grade' => 'Job Grade',
			'loadout' => 'Loadout',
			'metadata' => 'Metadata',
			'position' => 'Position',
			'firstname' => 'Firstname',
			'lastname' => 'Lastname',
			'dateofbirth' => 'Dateofbirth',
			'sex' => 'Sex',
			'height' => 'Height',
			'skin' => 'Skin',
			'status' => 'Status',
			'is_dead' => 'Is Dead',
			'id' => 'ID',
			'disabled' => 'Disabled',
			'created_at' => 'Created At',
			'last_seen' => 'Last Seen',
			'health_state' => 'Health State',
			'inside' => 'Inside',
			'jail_time' => 'Jail Time',
			'xp' => 'Xp',
			'okokcrafts' => 'Okokcrafts',
			'statistics' => 'Statistics',
			'electrocourses' => 'Electrocourses',
			'image' => 'Image',
			'dangerous' => 'Dangerous',
			'wanted' => 'Wanted',
			'iban' => 'Iban',
			'pincode' => 'Pincode',
			'cryptocurrency' => 'Cryptocurrency',
			'crypto_wallet' => 'Crypto Wallet',
			'phone_number' => 'Phone Number',
			'hasvoted' => 'Hasvoted',
			'playtime' => 'Playtime',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('identifier',$this->identifier,true);
		$criteria->compare('accounts',$this->accounts,true);
		$criteria->compare('group',$this->group,true);
		$criteria->compare('inventory',$this->inventory,true);
		$criteria->compare('job',$this->job,true);
		$criteria->compare('job_grade',$this->job_grade);
		$criteria->compare('loadout',$this->loadout,true);
		$criteria->compare('metadata',$this->metadata,true);
		$criteria->compare('position',$this->position,true);
		$criteria->compare('firstname',$this->firstname,true);
		$criteria->compare('lastname',$this->lastname,true);
		$criteria->compare('dateofbirth',$this->dateofbirth,true);
		$criteria->compare('sex',$this->sex,true);
		$criteria->compare('height',$this->height);
		$criteria->compare('skin',$this->skin,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('is_dead',$this->is_dead);
		$criteria->compare('id',$this->id);
		$criteria->compare('disabled',$this->disabled);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('last_seen',$this->last_seen,true);
		$criteria->compare('health_state',$this->health_state,true);
		$criteria->compare('inside',$this->inside,true);
		$criteria->compare('jail_time',$this->jail_time);
		$criteria->compare('xp',$this->xp,true);
		$criteria->compare('okokcrafts',$this->okokcrafts,true);
		$criteria->compare('statistics',$this->statistics,true);
		$criteria->compare('electrocourses',$this->electrocourses);
		$criteria->compare('image',$this->image,true);
		$criteria->compare('dangerous',$this->dangerous);
		$criteria->compare('wanted',$this->wanted);
		$criteria->compare('iban',$this->iban,true);
		$criteria->compare('pincode',$this->pincode);
		$criteria->compare('cryptocurrency',$this->cryptocurrency,true);
		$criteria->compare('crypto_wallet',$this->crypto_wallet);
		$criteria->compare('phone_number',$this->phone_number);
		$criteria->compare('hasvoted',$this->hasvoted);
		$criteria->compare('playtime',$this->playtime);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * @return CDbConnection the database connection used for this class
	 */
	public function getDbConnection()
	{
		return Yii::app()->db_fivem;
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Users_fivem the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
