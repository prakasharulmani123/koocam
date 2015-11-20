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
 * @property string $gig_avail_visual
 * @property string $status
 * @property string $created_at
 * @property string $modified_at
 * @property integer $created_by
 * @property integer $modified_by
 *
 * The followings are the available model relations:
 * @property GigCategory $cat
 * @property User $tutor
 * @property GigComments[] $gigComments
 * @property GigExtra[] $gigExtras
 */
class Gig extends RActiveRecord {

    public $is_extra;
    public $extra_price;
    public $extra_desc;
    public $is_age;

    const MIN_DURATION = '00:05';
    const MAX_DURATION = '02:00';
    const ALLOW_FILE_TYPES = 'jpg, gif, png';

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{gig}}';
    }

    public function scopes() {
        $alias = $this->getTableAlias(false, false);
        return array(
            'active' => array('condition' => "$alias.status = '1'"),
            'inactive' => array('condition' => "$alias.status = '0'"),
            'deleted' => array('condition' => "$alias.status = '2'"),
        );
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('gig_title, cat_id, gig_tag, gig_description, gig_duration, gig_price', 'required', 'on' => 'create'),
            array('tutor_id, cat_id, created_by, modified_by', 'numerical', 'integerOnly' => true),
            array('gig_title', 'length', 'max' => 100),
            array('gig_media', 'length', 'max' => 500),
            array('gig_tag', 'length', 'max' => 255),
            array('gig_price, extra_price', 'length', 'max' => 10),
            array('gig_price, extra_price', 'numerical', 'integerOnly' => false),
            array('gig_avail_visual, status', 'length', 'max' => 1),
            array('gig_title', 'unique'),
            array('gig_media', 'file', 'types' => self::ALLOW_FILE_TYPES),
            array('gig_media', 'mediaValidate'),
            array('gig_duration', 'durationValidate'),
            array('extra_price, extra_desc', 'extraValidate'),
            array(
                'gig_duration',
                'match', 'pattern' => '/(2[0-3]|[01][0-9]):([0-5][0-9])/',
                'message' => 'Invalid Format ',
            ),
            array('gig_description, gig_duration, created_at, modified_at, is_extra, extra_price, extra_desc', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('gig_id, tutor_id, gig_title, cat_id, gig_media, gig_tag, gig_description, gig_duration, gig_price, gig_avail_visual, status, created_at, modified_at, created_by, modified_by', 'safe', 'on' => 'search'),
        );
    }

    /**
     * 
     * @param type $attribute
     * @param type $params
     */
    public function durationValidate($attribute, $params) {
        if (strtotime($this->gig_duration) < strtotime(self::MIN_DURATION)) {
            $this->addError($attribute, "Duration should be minimum " . self::MIN_DURATION);
        } else if (strtotime($this->gig_duration) > strtotime(self::MAX_DURATION)) {
            $this->addError($attribute, "Duration should not exceed " . self::MAX_DURATION);
        }
    }

    /**
     * 
     * @param type $attribute
     * @param type $params
     */
    public function extraValidate($attribute, $params) {
        if ($this->is_extra == 'Y') {
            if ($this->$attribute == '')
                $this->addError($attribute, "{$this->getAttributeLabel($attribute)} can not be blank.");
        }
    }

    /**
     * 
     * @param type $attribute
     * @param type $params
     */
    public function mediaValidate($attribute, $params) {
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'cat' => array(self::BELONGS_TO, 'GigCategory', 'cat_id'),
            'gigComments' => array(self::HAS_MANY, 'GigComments', 'gig_id'),
            'gigExtras' => array(self::HAS_MANY, 'GigExtra', 'gig_id'),
            'tutor' => array(self::BELONGS_TO, 'User', 'tutor_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'gig_id' => 'Gig',
            'tutor_id' => 'User Id',
            'gig_title' => 'Title',
            'cat_id' => 'Category',
            'gig_media' => 'Media',
            'gig_tag' => 'Tag',
            'gig_description' => 'Description',
            'gig_duration' => 'Time (hh:mm)',
            'gig_price' => 'Price',
            'gig_avail_visual' => 'Will be available on visual chat',
            'is_extra' => 'Extras',
            'extra_price' => 'Extra Price',
            'extra_desc' => 'Extra Description',
            'is_age' => 'I am atleast 16years Old',
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
    public function search() {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria = new CDbCriteria;

        $criteria->compare('gig_id', $this->gig_id);
        $criteria->compare('tutor_id', $this->tutor_id);
        $criteria->compare('gig_title', $this->gig_title, true);
        $criteria->compare('cat_id', $this->cat_id);
        $criteria->compare('gig_media', $this->gig_media, true);
        $criteria->compare('gig_tag', $this->gig_tag, true);
        $criteria->compare('gig_description', $this->gig_description, true);
        $criteria->compare('gig_duration', $this->gig_duration, true);
        $criteria->compare('gig_price', $this->gig_price, true);
        $criteria->compare('gig_avail_visual', $this->gig_avail_visual, true);
        $criteria->compare('status', $this->status, true);
        $criteria->compare('created_at', $this->created_at, true);
        $criteria->compare('modified_at', $this->modified_at, true);
        $criteria->compare('created_by', $this->created_by);
        $criteria->compare('modified_by', $this->modified_by);

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
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
    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function dataProvider() {
        return new CActiveDataProvider($this, array(
            'pagination' => array(
                'pageSize' => PAGE_SIZE,
            )
        ));
    }

    public function getTotalminutes() {
        $time = explode(":", $this->gig_duration);
        return intval($time[0]) * 60 + intval($time[1]);
    }

    public static function topInstructors() {
        return Gig::model()->active()->findAll(array('limit' => 10));
    }

}
