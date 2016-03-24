<?php

namespace common\models;

use Yii;
use \yii\bootstrap\Html;

/**
 * This is the model class for table "category".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $color
 * @property integer $status
 * @property string $created_at
 * @property integer $created_by
 * @property string $updated_at
 * @property integer $updated_by
 */
class Category extends \common\components\MyActiveRecord
{
	const STATUS_ACTIVE = 10;
	const STATUS_NON_ACTIVE = 0;
	
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'category';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'description', 'color', 'status'], 'required'],
            [['status', 'created_by', 'updated_by'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
			['status', 'default', 'value' => self::STATUS_ACTIVE],
			['status', 'in', 'range' => [self::STATUS_ACTIVE, self::STATUS_NON_ACTIVE]],
            [['name'], 'string', 'max' => 70],
            [['description'], 'string', 'max' => 300],
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
            'name' => 'Name',
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
     * @return CategoryQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CategoryQuery(get_called_class());
    }
	
	public static function statusLabels() {
		return [
			self::STATUS_ACTIVE => 'ACTIVE',
			self::STATUS_NON_ACTIVE => 'NON ACTIVE',
		];
	}
	
	public function statusLabel() {
		return $this->statusLabels()[$this->status];
	}

    public function getStatusWithStyle() {
		switch($this->status) {
			case self::STATUS_ACTIVE: return Html::label($this->statusLabel(), null, ['class'=>'label label-success']);
			case self::STATUS_ACTIVE: return Html::label($this->statusLabel(), null, ['class'=>'label label-danger']);
		}
	}
	
	public function getColorWithStyle() {
		return Html::label($this->color, null, ['class'=>'label', 'style'=>'background-color:'.$this->color]);
	}
}
