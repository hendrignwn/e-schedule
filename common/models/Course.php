<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "course".
 *
 * @property integer $id
 * @property integer $departement_id
 * @property integer $semester_id
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
class Course extends \common\components\MyActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'course';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['departement_id', 'semester_id', 'name', 'initial', 'description', 'color', 'status'], 'required'],
            [['departement_id', 'semester_id', 'status', 'created_by', 'updated_by'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['name'], 'string', 'max' => 70],
            [['initial'], 'string', 'max' => 30],
            [['description'], 'string', 'max' => 200],
            [['color'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'departement_id' => 'Departement ID',
            'semester_id' => 'Semester ID',
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
     * @return CourseQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CourseQuery(get_called_class());
    }
}
