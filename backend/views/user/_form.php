<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\select2\Select2;
use common\models\User;

/* @var $this yii\web\View */
/* @var $model common\models\User */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="user-form">

    <?php $form = ActiveForm::begin(); ?>

	<?= $form->field($model, 'email')->textInput(['type'=>'email']) ?>
    <?= $form->field($model, 'username')->textInput() ?>
    <?= $form->field($model, 'password_hash')->textInput() ?>
	
	<?php 
		$statusLabels = User::statusLabels();
		$statusOptions = ['data'=>$statusLabels, 'pluginOptions'=>['allowClear'=>true], 'options'=>['prompt'=>'--Choose One--']];
	?>
    <?= $form->field($model, 'status')->widget(Select2::className(), $statusOptions); ?>
    

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
