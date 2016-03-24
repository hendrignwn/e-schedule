<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Forgot Password';
?>
<?php $form = ActiveForm::begin(['id' => 'login-form', 'class'=>'form-validate']); ?>

<?= $form->field($model, 'username')->textInput(['autofocus' => true]) ?>

<?= $form->field($model, 'password')->passwordInput() ?>

<div class="submit">
	<div class="remember">
		<input type="checkbox" name="LoginForm[rememberMe]" class='icheck-me' data-skin="square" data-color="blue" id="loginform-rememberme">
		<label for="loginform-rememberme">Remember Me</label>
	</div>
	<?= Html::submitButton('Sign me in', ['class' => 'btn btn-primary', 'name' => 'login-button', 'style'=>'float:right;']) ?>
</div>

<?php ActiveForm::end(); ?>
<div class="forget">
	<a href="#">
		<span>Forgot password?</span>
	</a>
</div>