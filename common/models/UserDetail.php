<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "user_detail".
 *
 * @property integer $id
 * @property integer $user_id
 * @property string $name
 * @property string $dob
 * @property string $address
 * @property string $created_at
 * @property integer $created_by
 * @property string $updated_at
 * @property integer $updated_by
 */
class UserDetail extends \common\components\MyActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_detail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['user_id', 'name', 'dob', 'address'], 'required'],
            [['user_id', 'created_by', 'updated_by'], 'integer'],
            [['dob', 'created_at', 'updated_at'], 'safe'],
            [['name'], 'string', 'max' => 70],
            [['address'], 'string', 'max' => 300],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'name' => 'Name',
            'dob' => 'Dob',
            'address' => 'Address',
            'created_at' => 'Created At',
            'created_by' => 'Created By',
            'updated_at' => 'Updated At',
            'updated_by' => 'Updated By',
        ];
    }

    /**
     * @inheritdoc
     * @return UserDetailQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UserDetailQuery(get_called_class());
    }
}
