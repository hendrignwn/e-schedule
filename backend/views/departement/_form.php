<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use \common\models\Departement;
use kartik\select2\Select2;
use kartik\color\ColorInput;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\Departement */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="departement-form">

    <?php $form = ActiveForm::begin(); ?>

	 <?php
		$faculties = ArrayHelper::map($faculties, 'id', 'name');
		$facultiesOptions = ['data'=>$faculties, 'pluginOptions'=>['allowClear'=>true], 'options'=>['prompt'=>'--Choose One--']];
	?>
    <?= $form->field($model, 'faculty_id')->widget(Select2::className(), $facultiesOptions); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'initial')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'color')->widget(ColorInput::classname(), ['options' => ['placeholder' => 'Select color ...']]) ?>

    <?php 
		$statusLabels = Departement::statusLabels();
		$statusOptions = ['data'=>$statusLabels, 'pluginOptions'=>['allowClear'=>true], 'options'=>['prompt'=>'--Choose One--']];
	?>
    <?= $form->field($model, 'status')->widget(Select2::className(), $statusOptions); ?>

	<?php if (!Yii::$app->request->isAjax){ ?>
	  	<div class="form-group">
	        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
	    </div>
	<?php } ?>

    <?php ActiveForm::end(); ?>
    
</div>
