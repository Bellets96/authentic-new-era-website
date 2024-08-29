<?php

/**
 * This is the model class for table "tbl_post".
 *
 * The followings are the available columns in table 'tbl_post':
 * @property integer $id
 * @property string $title
 * @property string $content
 * @property string $category
 * @property integer $status
 * @property integer $create_time
 * @property integer $update_time
 * @property integer $author_id
 *
 * The followings are the available model relations:
 * @property User $author
 */
class Post extends CActiveRecord
{
	const STATUS_DRAFT = 1;
	const STATUS_PUBLISHED = 2;
	const STATUS_ARCHIVED = 3;
	const CATEGORY_COMUNICAZIONI = 1;
	const CATEGORY_NOVITA = 2;
	const CATEGORY_EVENTI = 3;
	const CATEGORY_GUIDE = 4;
	const CATEGORY_PARTNER = 5;

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tbl_post';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, content, status, author_id', 'required', 'message'=>'non può essere nullo.'),
			array('status, category, create_time, update_time, author_id', 'numerical', 'integerOnly'=>true),
			array('title', 'length', 'max'=>128),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, title, content, status, category, create_time, update_time, author_id', 'safe', 'on'=>'search'),
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
            'status' => array(self::BELONGS_TO, 'Lookup', 'status'),
            'author' => array(self::BELONGS_TO, 'User', 'author_id'),
        );
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => 'Titolo',
			'content' => 'Contenuto',
			'category' => 'Categoria',
			'status' => 'Stato',
			'create_time' => 'Creato il',
			'update_time' => 'Aggiornato il',
			'author_id' => 'Autore',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('content',$this->content,true);
		$criteria->compare('category',$this->category);
		$criteria->compare('status',$this->status);
		$criteria->compare('create_time',$this->create_time);
		$criteria->compare('update_time',$this->update_time);
		$criteria->compare('author_id',$this->author_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Post the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	protected function beforeSave()
	{
		if (parent::beforeSave()) {
			if ($this->isNewRecord) {
				$this->create_time = time();
				$this->update_time = time();
			} else {
				$this->update_time = time();
			}
			return true;
		} else {
			return false;
		}
	}	
	public function getStatusName()
	{
		return $this->status ? $this->status : '(Nessuno Status)';
	}
	

}
