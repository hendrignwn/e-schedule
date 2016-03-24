<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[UserDetail]].
 *
 * @see UserDetail
 */
class UserDetailQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * @inheritdoc
     * @return UserDetail[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return UserDetail|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
