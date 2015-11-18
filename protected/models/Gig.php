<?php

/**
 * This is the model class for table "{{gig}}".
 *
 * The followings are the available columns in table '{{gig}}':
 * @property integer $gig_id
 * @property integer $tutor_id
 * @property string $gig_title
 * @property integer $cat_id
 * @property string $gig_media
 * @property string $gig_tag
 * @property string $gig_description
 * @property string $gig_duration
 * @property string $gig_price
 * @property string $status
 * @property string $created_at
 * @property string $modified_at
 * @property integer $created_by
 * @property integer $modified_by
 *
 * The followings are the available model relations:
 * @property GigCategory $cat
 * @property GigComments[] $gigComments
 * @property GigExtra[] $gigExtras
 */
class Gig extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{gig}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tutor_id, gig_title', 'required'),
			array('tutor_id, cat_id, created_by, modified_by', 'numerical', 'integerOnly'=>true),
			array('gig_title', 'length', 'max'=>100),
			array('gig_media', 'length', 'max'=>500),
			array('gig_tag', 'length', 'max'=>255),
			array('gig_price', 'length', 'max'=>10),
			array('status', 'length', 'max'=>1),
			array('gig_description, gig_duration, created_at, modified_at', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('gig_id, tutor_id, gig_title, cat_id, gig_media, gig_tag, gig_description, gig_duration, gig_price, status, created_at, modified_at, created_by, modified_by', 'safe', 'on'=>'search'),
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
			'cat' => array(self::BELONGS_TO, 'GigCategory', 'cat_id'),
			'gigComments' => array(self::HAS_MANY, 'GigComments', 'gig_id'),
			'gigExtras' => array(self::HAS_MANY, 'GigExtra', 'gig_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'gig_id' => 'Gig',
			'tutor_id' => 'User Id',
			'gig_title' => 'Gig Title',
			'cat_id' => 'Cat',
			'gig_media' => 'Gig Media',
			'gig_tag' => 'Gig Tag',
			'gig_description' => 'Gig Description',
			'gig_duration' => 'Gig Duration',
			'gig_price' => 'Gig Price',
			'status' => 'Status',
			'created_at' => 'Created At',
			'modified_at' => 'Modified At',
			'created_by' => 'Created By',
			'modified_by' => 'Modified By',
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

		$criteria->compare('gig_id',$this->gig_id);
		$criteria->compare('tutor_id',$this->tutor_id);
		$criteria->compare('gig_title',$this->gig_title,true);
		$criteria->compare('cat_id',$this->cat_id);
		$criteria->compare('gig_media',$this->gig_media,true);
		$criteria->compare('gig_tag',$this->gig_tag,true);
		$criteria->compare('gig_description',$this->gig_description,true);
		$criteria->compare('gig_duration',$this->gig_duration,true);
		$criteria->compare('gig_price',$this->gig_price,true);
		$criteria->compare('status',$this->status,true);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('modified_at',$this->modified_at,true);
		$criteria->compare('created_by',$this->created_by);
		$criteria->compare('modified_by',$this->modified_by);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
                        'pagination' => array(
                            'pageSize' => PAGE_SIZE,
                        )
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Gig the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
        
        public function dataProvider() {
            return new CActiveDataProvider($this, array(
                'pagination' => array(
                    'pageSize' => PAGE_SIZE,
                )
            ));
        }
}
