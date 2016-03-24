<?php

namespace common\components;

use Yii;
use \yii\db\ActiveRecord;
use \yii\behaviors\TimestampBehavior;
use yii\db\Expression;
use yii\behaviors\BlameableBehavior;
use common\models\User;
use yii\helpers\Html;

class MyActiveRecord extends ActiveRecord
{
	public function behaviors()
    {
		return [
            [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
                // if you're using datetime instead of UNIX timestamp:
                'value' => date('Y-m-d H:i:s'),
            ],
			'blameable' => [
				'class' => BlameableBehavior::className(),
				'createdByAttribute' => 'created_by',
				'updatedByAttribute' => 'updated_by',
			],
         ];
    }
	
	public function getCreatedBy() {
		return $this->hasOne(User::className(), ['id'=>'created_by']);
	}
	
	public function getUpdatedBy() {
		return $this->hasOne(User::className(), ['id'=>'updated_by']);
	}
	
	public static function statusLabels() {
		return [
			static::STATUS_ACTIVE => 'ACTIVE',
			static::STATUS_NON_ACTIVE => 'NON ACTIVE',
		];
	}
	
	public function statusLabel() {
		return $this->statusLabels()[$this->status];
	}

    public function getStatusWithStyle() {
		switch($this->status) {
			case static::STATUS_ACTIVE: return Html::label($this->statusLabel(), null, ['class'=>'label label-success']);
			case static::STATUS_NON_ACTIVE: return Html::label($this->statusLabel(), null, ['class'=>'label label-danger']);
		}
	}
	
	public function getColorWithStyle() {
		return Html::label($this->color, null, ['class'=>'label', 'style'=>'background-color:'.$this->color]);
	}
}