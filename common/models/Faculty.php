<?php

namespace common\models;

use Yii;
use common\models\Departement;
use yii\helpers\Html;

/**
 * This is the model class for table "faculty".
 *
 * @property integer $id
 * @property string $name
 * @property string $initial
 * @property string $description
 * @property integer $status
 * @property string $created_at
 * @property integer $created_by
 * @property string $updated_at
 * @property integer $updated_by
 */
class Faculty extends \common\components\MyActiveRecord
{
	const STATUS_ACTIVE = 10;
	const STATUS_NON_ACTIVE = 0;
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'faculty';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'initial', 'description', 'status'], 'required'],
            [['status', 'created_by', 'updated_by'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['name'], 'string', 'max' => 70],
            [['initial'], 'string', 'max' => 20],
            [['description'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'initial' => 'Initial',
            'description' => 'Description',
            'status' => 'Status',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
        ];
    }

    /**
     * @inheritdoc
     * @return FacultyQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new FacultyQuery(get_called_class());
    }
	
	public function getDepartements() {
		return $this->hasMany(Departement::className(), ['faculty_id'=>'id']);
	}
	
}
