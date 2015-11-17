<?php

/**
 * This is the model class for table "{{user_profile}}".
 *
 * The followings are the available columns in table '{{user_profile}}':
 * @property integer $prof_id
 * @property integer $user_id
 * @property string $prof_firstname
 * @property string $prof_lastname
 * @property string $prof_tag
 * @property string $prof_address
 * @property string $prof_phone
 * @property string $prof_skype
 * @property string $prof_website
 * @property string $prof_about
 * @property string $prof_languages
 * @property string $prof_interests
 * @property double $prof_rating
 * @property string $prof_picture
 * @property string $prof_cover_photo
 * @property string $created_at
 * @property string $modified_at
 * @property integer $created_by
 * @property integer $modified_by
 *
 * The followings are the available model relations:
 * @property User $user
 */
class UserProfile extends CActiveRecord {

    /**
     * @return string the associated database table name
     */
    public function tableName() {
        return '{{user_profile}}';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules() {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('user_id, prof_firstname', 'required'),
            array('user_id, created_by, modified_by', 'numerical', 'integerOnly' => true),
            array('prof_rating', 'numerical'),
            array('prof_firstname, prof_lastname', 'length', 'max' => 50),
            array('prof_tag, prof_skype, prof_website, prof_languages', 'length', 'max' => 100),
            array('prof_phone', 'length', 'max' => 30),
            array('prof_picture, prof_cover_photo', 'length', 'max' => 500),
            array('prof_address, prof_about, prof_interests, created_at, modified_at', 'safe'),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('prof_id, user_id, prof_firstname, prof_lastname, prof_tag, prof_address, prof_phone, prof_skype, prof_website, prof_about, prof_languages, prof_interests, prof_rating, prof_picture, prof_cover_photo, created_at, modified_at, created_by, modified_by', 'safe', 'on' => 'search'),
        );
    }

    /**
     * @return array relational rules.
     */
    public function relations() {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
            'user' => array(self::BELONGS_TO, 'User', 'user_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels() {
        return array(
            'prof_id' => 'Prof',
            'user_id' => 'User',
            'prof_firstname' => 'Prof Firstname',
            'prof_lastname' => 'Prof Lastname',
            'prof_tag' => 'Prof Tag',
            'prof_address' => 'Prof Address',
            'prof_phone' => 'Prof Phone',
            'prof_skype' => 'Prof Skype',
            'prof_website' => 'Prof Website',
            'prof_about' => 'Prof About',
            'prof_languages' => 'Prof Languages',
            'prof_interests' => 'Prof Interests',
            'prof_rating' => 'Prof Rating',
            'prof_picture' => 'Prof Picture',
            'prof_cover_photo' => 'Prof Cover Photo',
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

        $criteria->compare('prof_id', $this->prof_id);
        $criteria->compare('user_id', $this->user_id);
        $criteria->compare('prof_firstname', $this->prof_firstname, true);
        $criteria->compare('prof_lastname', $this->prof_lastname, true);
        $criteria->compare('prof_tag', $this->prof_tag, true);
        $criteria->compare('prof_address', $this->prof_address, true);
        $criteria->compare('prof_phone', $this->prof_phone, true);
        $criteria->compare('prof_skype', $this->prof_skype, true);
        $criteria->compare('prof_website', $this->prof_website, true);
        $criteria->compare('prof_about', $this->prof_about, true);
        $criteria->compare('prof_languages', $this->prof_languages, true);
        $criteria->compare('prof_interests', $this->prof_interests, true);
        $criteria->compare('prof_rating', $this->prof_rating);
        $criteria->compare('prof_picture', $this->prof_picture, true);
        $criteria->compare('prof_cover_photo', $this->prof_cover_photo, true);
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
     * @return UserProfile the static model class
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

    public function beforeSave() {
        if ($this->isNewRecord)
            $this->created_at = new CDbExpression('NOW()');

        $this->modified_at = new CDbExpression('NOW()');
        return parent::beforeSave();
    }

}
