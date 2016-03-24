<?php

namespace common\models;

use Yii;
use common\models\Faculty;

/**
 * This is the model class for table "departement".
 *
 * @property integer $id
 * @property integer $faculty_id
 * @property string $name
 * @property string $initial
 * @property string $description
 * @property string $color
 * @property integer $status
 * @property string $created_at
 * @property integer $created_by
 * @property string $updated_at
 * @property integer $updated_by
 */
class Departement extends \common\components\MyActiveRecord
{
	const STATUS_ACTIVE = 10;
	const STATUS_NON_ACTIVE = 0;
	
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'departement';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['faculty_id', 'name', 'initial', 'description', 'color', 'status'], 'required'],
            [['faculty_id', 'status', 'created_by', 'updated_by'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['name'], 'string', 'max' => 70],
            [['initial'], 'string', 'max' => 20],
            [['description'], 'string', 'max' => 500],
            [['color'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'faculty_id' => 'Faculty',
            'name' => 'Name',
            'initial' => 'Initial',
            'description' => 'Description',
            'color' => 'Color',
            'status' => 'Status',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
        ];
    }

    /**
     * @inheritdoc
     * @return DepartementQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new DepartementQuery(get_called_class());
    }
	
	public function getFaculty() {
		return $this->hasOne(Faculty::className(), ['id'=>'faculty_id']);
	}
}
