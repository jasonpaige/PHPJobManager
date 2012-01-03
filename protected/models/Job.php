<?php
require_once __DIR__ . "/../extensions/cron/cron.phar";

/**
 * This is the model class for table "job".
 *
 * The followings are the available columns in table 'job':
 * @property string $id
 * @property integer $user_id
 * @property string $name
 * @property string $command
 * @property string $cron
 * @property string $created
 * @property string $termination_date
 *
 * The followings are the available model relations:
 * @property User $user
 */
class Job extends CActiveRecord
{
    /**
     * Returns the static model of the specified AR class.
     * @return Job the static model class
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
        return 'job';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('user_id, name, command, cron, created', 'required'),
            array('user_id', 'numerical', 'integerOnly'=>true),
            array('name, cron', 'length', 'max'=>100),
            array('termination_date', 'safe'),
            // The following rule is used by search().
            // Please remove those attributes that should not be searched.
            array('id, user_id, name, command, cron, created, termination_date', 'safe', 'on'=>'search'),
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
            'user' => array(self::BELONGS_TO, 'User', 'user_id'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'user_id' => 'User',
            'name' => 'Name',
            'command' => 'Command',
            'cron' => 'Cron',
            'created' => 'Created',
            'termination_date' => 'Termination Date',
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

        $criteria->compare('id',$this->id,true);
        $criteria->compare('user_id',$this->user_id);
        $criteria->compare('name',$this->name,true);
        $criteria->compare('command',$this->command,true);
        $criteria->compare('cron',$this->cron,true);
        $criteria->compare('created',$this->created,true);
        $criteria->compare('termination_date',$this->termination_date,true);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }
    
    /**
     * Gets the next run date of this job
     * @return DateTime | false
     */
    public function getNextRunDate() {
        try {
            $cron = Cron\CronExpression::factory($this->cron);
            return $cron->getNextRunDate();
        } catch (InvalidArgumentException $ex) {
            return false;
        }
    }
    
    /**
     * Gets the next run date of this job as a string in a format
     * @param string $format
     * @return string
     */
    public function getNextRunDateString($format) {
        $nextRunDate = $this->getNextRunDate();        
        return $nextRunDate ? $nextRunDate->format($format) : "Unknown";
    }
}