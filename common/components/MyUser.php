<?php

namespace common\components;
use Yii;

class MyUser extends \yii\web\User {
	public function init() {
		parent::init();
	}
	
	public function getName() {
		if($this->getIdentity()->userDetail){
			return ucfirst($this->getIdentity()->userDetail->name);
		}
		return ucfirst($this->getIdentity()->username);
	}
}